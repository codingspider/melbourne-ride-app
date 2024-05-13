<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fare;
use App\Models\User;
use App\Models\Service;
use App\Models\Customer;
use App\Models\TaxiBooking;
use App\Traits\BookingTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\DriverTransportDetails;
use Illuminate\Support\Facades\Validator;

class TaxiHailingController extends Controller
{
    use BookingTrait;
    public function __construct()
    {
        $this->middleware('permission:taxi-booking-list,taxi-booking-create,taxi-booking-edit,taxi-booking-delete');
    }

    public function index(Request $request)
    {
        $customer_id = 0;
        $service_id = 0;
        $status = null;
        $bookings = TaxiBooking::orderBy("created_at", "desc");

        if (isset($request->status)) {
            $status = $request->status;
            $bookings = $bookings->where("status", $request->status);
        }
        if (isset($request->customer_id)) {
            $customer_id = $request->customer_id;
            $bookings = $bookings->where("user_id", $customer_id);
        }
        if (isset($request->service_id)) {
            $service_id = $request->service_id;
            $bookings = $bookings->where("service_id", $request->service_id);
        }

        $bookings = $bookings->with(['service', 'user', 'payment'])->paginate(15);
        $services = Service::whereStatus(1)->get();
        $customers = User::where('email', '!=', 'guestuser@gmail.com')->get();

        return view("admin.taxi.index", compact("bookings", "services", "customers", "customer_id", "service_id", "status"));
    }

    public function create()
    {
        try {
            $services = Service::with('fare')->whereStatus(1)->get();
            $customers = Customer::whereStatus(1)->get();
            return view('admin.taxi.create', compact('services', 'customers'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'start_location' => 'required',
            'end_location' => 'required',
            'service_id' => 'required',
            'driver_id' => 'required',
            'pickup_time' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'payment_method' => 'required',
            'total_km' => 'required',
            'final_total' => 'required',
        ]);


        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Begin a database transaction
        DB::beginTransaction();

        try {
            $booking = $this->bookingStoreUtil($request);
            // send confirmation mail if auto approve active
            if ($booking && gs()->mail_status == "Active") {
                $customer = Customer::where('id', $request->customer_id)->first();
                Mail::to($customer->email)->send(new BookingConfirmationMail($booking));
            }

            // Commit the transaction
            DB::commit();

            // Redirect with success message
            $user = User::find(auth()->user()->id);
            if ($user->user_type == 0) {
                return redirect()->route('taxi-booking.index')->withSuccess('Booking created successfully.');
            } else {
                return redirect()->route('booking-list')->withSuccess('Booking created successfully.');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $booking = TaxiBooking::findOrFail($id);
        $services = Service::with('fare')->whereStatus(1)->get();
        $transport = DriverTransportDetails::where('driver_id', $booking->driver_id)->first();
        $customers = Customer::whereStatus(1)->select('id', 'name', 'phone', 'user_id')->get();

        return view('admin.taxi.edit', compact('booking', 'services', 'customers', 'transport'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'start_location' => 'required',
            'end_location' => 'required',
            'service_id' => 'required',
            'driver_id' => 'required',
            'pickup_time' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'payment_method' => 'required',
            'total_km' => 'required',
            'final_total' => 'required',
        ]);


        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Begin a database transaction
        DB::beginTransaction();

        try {
            $booking = $this->bookingUpdateUtil($request, $id);
            // send confirmation mail if auto approve active
            if ($booking && gs()->mail_status == "Active") {
                $customer = Customer::where('id', $request->customer_id)->first();
                Mail::to($customer->email)->send(new BookingConfirmationMail($booking));
            }

            // Commit the transaction
            DB::commit();

            // Redirect with success message
            $user = User::find(auth()->user()->id);
            if ($user->user_type == 0) {
                return redirect()->route('taxi-booking.index')->withSuccess('Booking updated successfully.');
            } else {
                return redirect()->route('booking-list')->withSuccess('Booking updated successfully.');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $booking = TaxiBooking::findOrFail($id);
        $booking->delete();

        return redirect()->route('taxi-booking.index')->withSuccess('Booking deleted successfully.');
    }

}

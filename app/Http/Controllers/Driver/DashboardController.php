<?php

namespace App\Http\Controllers\Driver;

use App\Models\User;
use App\Models\Driver;
use App\Models\TaxiBooking;
use App\Traits\DriverTrait;
use App\Models\DriverReview;
use Illuminate\Http\Request;
use App\Models\TransportType;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\DriverTransportDetails;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    use DriverTrait;

    public function index(){
        return view('driver.dashboard.index');
    }

    public function driverBookingList(){
        try {
            $user = User::with('driver')->where('id', auth()->user()->id)->first();
            if($user->driver){
                $bookings = TaxiBooking::with('customer', 'driver', 'driver_review', 'payment', 'customer_review')->where('driver_id', $user->driver->id)->get();
            }else{
                $bookings = [];
            }
            return view('driver.dashboard.booking_list', compact('bookings'));
        }catch(\Exception $e){
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
    
    public function driverCompletedTrip(){
        try {
            $user = User::with('driver')->where('id', auth()->user()->id)->first();
            if($user->driver){
                $bookings = TaxiBooking::with('customer', 'driver', 'driver_review', 'payment')->where('status', 2)->where('driver_id', $user->driver->id)->get();
            }else{
                $bookings = [];
            }
            return view('driver.dashboard.booking_list', compact('bookings'));
        }catch(\Exception $e){
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
    
    public function driverPendingTrip(){
        try {
            $user = User::with('driver')->where('id', auth()->user()->id)->first();
            if($user->driver){
                $bookings = TaxiBooking::with('customer', 'driver', 'driver_review', 'payment')->where('status', 0)->where('driver_id', $user->driver->id)->get();
            }else{
                $bookings = [];
            }
            return view('driver.dashboard.booking_list', compact('bookings'));
        }catch(\Exception $e){
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
    
    public function driverCancelTrip(){
        try {
            $user = User::with('driver')->where('id', auth()->user()->id)->first();
            if($user->driver){
                $bookings = TaxiBooking::with('customer', 'driver', 'driver_review', 'payment')->where('status', 3)->where('driver_id', $user->driver->id)->get();
            }else{
                $bookings = [];
            }
            return view('driver.dashboard.booking_list', compact('bookings'));
        }catch(\Exception $e){
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
    
    public function vehicleInformation(){
        try {
            $user = User::with('driver')->where('id', auth()->user()->id)->first();
            $types = TransportType::all();
            $vehicle = DriverTransportDetails::where('driver_id', $user->driver->id)->first();
            return view('driver.dashboard.vehicle', compact('vehicle', 'types', 'user'));
        }catch(\Exception $e){
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
    
    public function updateVehicleInformation(Request $request){
        try {
            $inputs = $request->except('car_photos');
            if($request->car_photos){
                $car_photos = $this->carPhotoUpload($request);
                $inputs['car_photos'] = json_encode($car_photos);
            }

            $user = User::with('driver')->where('id', auth()->user()->id)->first();
            $inputs['driver_id'] = $user->driver->id;
            $data = DriverTransportDetails::updateOrCreate(
                ['driver_id' => $user->driver->id],
                $inputs
            );

            return redirect()->back()->withSuccess('Information successfully.');
        }catch(\Exception $e){
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function giveCustomerReview($id){
        $booking = TaxiBooking::find($id);
        return view('driver.dashboard.review', compact('booking'));
    }

    public function storeReview(Request $request){
        $validator = Validator::make($request->all(), [
            'rating' => [
                'required',
                'numeric',
                Rule::in([1, 2, 3, 4, 5]),
            ],
            'comment' => 'required',
            'customer_id' => 'required',
            'driver_id' => 'required',
            'service_id' => 'required',
            'booking_id' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        DB::beginTransaction();
        try {
            $inputs = $request->all();
            $review = DriverReview::create($inputs);
            DB::commit();
            return redirect()->route('driver-booking-list')->withSuccess('Rating Submitted successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }

    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Driver;
use App\Models\Service;
use App\Models\Customer;
use App\Models\DriverReview;
use Illuminate\Http\Request;
use App\Models\CustomerReview;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function customerReview(Request $request)
    {
        $service_id = 0;
        $customer_id = 0;
        $driver_id = 0;
        $reviews = CustomerReview::orderBy("created_at","desc");

        if(isset($request->service_id)) {
            $service_id = $request->service_id;
            $reviews = $reviews->where("service_id", $request->service_id);
        }
        if(isset($request->customer_id)) {
            $customer_id = $request->customer_id;
            $reviews = $reviews->where("customer_id", $request->customer_id);
        }
        if(isset($request->driver_id)) {
            $driver_id = $request->driver_id;
            $reviews = $reviews->where("driver_id", $request->driver_id);
        }

        $reviews = $reviews->with(['booking', 'service', 'driver', 'customer'])->get();
        $services = Service::whereStatus(1)->get();
        $customers = Customer::whereStatus(1)->select('id', 'name', 'phone')->get();

        // dd($reviews);


        return view("admin.review.customer-review", compact('reviews', 'services', 'customers','driver_id','customer_id','service_id'));
    }

    public function deleteCustomerReview($id)
    {
        $review = CustomerReview::find($id);
        $review->delete();

        return redirect()->route('customer-review.index')->withSuccess('Review created successfully.');
    }

    public function driverReview(Request $request)
    {
        $service_id = 0;
        $driver_id = 0;
        $reviews = DriverReview::orderBy("created_at","desc");

        if(isset($request->service_id)) {
            $service_id = $request->service_id;
            $reviews = $reviews->where("service_id", $request->service_id);
        }

        if(isset($request->driver_id)) {
            $driver_id = $request->driver_id;
            $reviews = $reviews->where("driver_id", $request->driver_id);
        }

        $reviews = $reviews->with(['booking', 'service', 'driver', 'customer'])->get();
        $services = Service::whereStatus(1)->get();
        $drivers = Driver::whereStatus(1)->select('id', 'name', 'phone')->get();


        return view("admin.review.driver-review", compact('reviews', 'services', 'drivers','driver_id','service_id'));
    }

    public function deleteDriverReview($id)
    {
        $review = DriverReview::find($id);
        $review->delete();

        return redirect()->route('customer-review.index')->withSuccess('Review created successfully.');
    }
}
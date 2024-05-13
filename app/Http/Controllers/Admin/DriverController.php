<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Driver;
use App\Models\Service;
use App\Traits\UserTrait;
use App\Traits\DriverTrait;
use Illuminate\Http\Request;
use App\Models\TransportType;
use App\Traits\UserProfileTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\DriverTransportDetails;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{
    use DriverTrait;
    use UserTrait;
    use UserProfileTrait;
    
    public function index()
    {
        try {
            $items = Driver::with(['user', 'service'])->get();
            $types = TransportType::all();
            return view('admin.driver.index', compact('items', 'types'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function create()
    {
        $types = TransportType::all();
        $services = Service::whereStatus(1)->get();
        return view('admin.driver.create', compact('types', 'services'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'service_id' => 'required',
            'status' => 'required',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|same:confirm-password',
        ]);
        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }
        DB::beginTransaction();
        try {
            $user = $this->userProfileDataStore($request, 1, 1, 1);
            $driver = $this->driverProfileUpdateOrStore($user, $request);
            DB::commit();
            
            return redirect()->route('driver-list')->withSuccess('Driver created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $types = TransportType::all();
        $item = Driver::with('user')->where('id', $id)->first();
        $services = Service::whereStatus(1)->get();
        return view('admin.driver.edit', compact('item', 'types', 'services'));
    }

    public function update(Request $request)
    {
        $userId = $request->id;
        $user = User::find($userId);
        $driver = Driver::where('user_id', $userId)->first();

        DB::beginTransaction();
        try {
            $this->userProfileDataUpdate($user, $request);
            $this->driverProfileUpdate($driver, $request);
            $this->userProfilePictureStore($user, $request);
            DB::commit();
            
            return redirect()->route('driver-list')->withSuccess('Driver created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $item = Driver::find($id);
            $item->delete();
            return redirect()->route('driver-list')->withSuccess('Driver deleted successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function driverAssign(){
        $types = TransportType::all();
        $drivers = Driver::whereStatus(1)->get();
        return view('admin.driver.assign', compact('types', 'drivers'));
    }

    public function assignDriverToTransport(Request $request){

        $validator = Validator::make($request->all(), [
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'name' => 'required',
            'register_no' => 'required',
            'engine_no' => 'required',
            'chasis_no' => 'required',
            'model_no' => 'required',
            'seat_capacity' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }
        DB::beginTransaction();
        try {
            $car_photos = $this->carPhotoUpload($request);
            $inputs = $request->all();
            $inputs['car_photos'] = json_encode($car_photos);
            $data = DriverTransportDetails::create($inputs);
            DB::commit();
            
            return redirect()->route('driver-list')->withSuccess('Driver assigned successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function driverStatus($id){
        $driver = Driver::find($id);
        return view('admin.driver.status_change', compact('driver'));
    }
    
    public function driverDetails($id){
        try {
            $driver = Driver::with(['driver_transport_detail'])->where('id',$id)->first();
            return view('admin.driver.detail', compact('driver'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function driverStatusStore(Request $request){
        $id = $request->id;
        $driver = Driver::find($id);
        $driver->status = $request->status;
        $driver->save();

        if($request->status == 1){
            $user = User::find($driver->user_id);
            $user->approved = $request->status;
            $user->save();
        }
        
        return redirect()->route('driver-list')->withSuccess('Driver status changed successfully.');
    }
}
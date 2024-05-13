<?php

namespace App\Http\Controllers;

use App\Models\Fleet;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VehicleController extends Controller
{
    public function index()
    {
        try {
            $items = Vehicle::all();
            return view('admin.vehicle.index', compact('items'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
    
    public function getVehicles(Request $request)
    {
        try {
            $items = Fleet::where('service_id', $request->input('inputValue'))->get();
            return view('admin.vehicle.vehicles', compact('items'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function create()
    {
        return view('admin.vehicle.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'passanger' => 'required',
            'luggage' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }

        try {
            $inputs = $request->except('_token');
            if ($request->hasFile('photos')) {
                $image = $request->file('photos');
                $photos= fileUploader($image, getFilePath('carphotos'), getFileSize('carphotos'));
                $inputs['photos'] = $photos;
            }
            Vehicle::create($inputs);
            return redirect()->route('vehicles.index')->withSuccess('Vehicles created successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $item = Vehicle::find($id);
        return view('admin.vehicle.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        try {
            $item = Vehicle::find($id);
            $inputs = $request->all();
            if ($request->hasFile('photos')) {
                $image = $request->file('photos');
                $photos = fileUploader($image, getFilePath('carphotos'), getFileSize('carphotos'), $item->photos);
                $inputs['photos'] = $photos;
            }

            $item->update($inputs);
            return redirect()->route('vehicles.index')->withSuccess('Vehicles updated successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $item = Vehicle::find($id);
            $item->delete();
            return redirect()->route('vehicles.index')->withSuccess('Vehicles deleted successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
}

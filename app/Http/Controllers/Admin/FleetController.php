<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fleet;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FleetController extends Controller
{
    public function index()
    {
        try {
            $items = Fleet::with('service')->get();
            return view('admin.fleets.index', compact('items'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function create()
    {
        $services = Service::whereStatus(1)->get();
        return view('admin.fleets.create', compact('services'));
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
            $inputs = $request->all();
            if ($request->hasFile('photos')) {
                $images = $request->file('photos');
                $photos = [];
                foreach ($images as $image) {
                    $photos[] = fileUploader($image, getFilePath('carphotos'), getFileSize('carphotos'));
                }
                $inputs['photos'] = json_encode($photos);
            }
            Fleet::create($inputs);
            return redirect()->route('fleets.index')->withSuccess('Fleets created successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $item = Fleet::find($id);
        $services = Service::whereStatus(1)->get();
        return view('admin.fleets.edit', compact('item', 'services'));
    }

    public function update(Request $request, $id)
    {
        try {
            $item = Fleet::find($id);
            $inputs = $request->all();
            if ($request->hasFile('photos')) {
                $images = $request->file('photos');
                $photos = [];
                foreach ($images as $image) {
                    $photos[] = fileUploader($image, getFilePath('carphotos'), getFileSize('carphotos'), $item->photos);
                }
                $inputs['photos'] = json_encode($photos);
            }

            $item->update($inputs);
            return redirect()->route('fleets.index')->withSuccess('Fleets updated successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $item = Fleet::find($id);
            $item->delete();
            return redirect()->route('fleets.index')->withSuccess('Fleets deleted successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
}

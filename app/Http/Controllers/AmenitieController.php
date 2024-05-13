<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Amenitie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AmenitieController extends Controller
{
    public function index()
    {
        try {
            $items = Amenitie::whereStatus(1)->get();
            return view('admin.amenitie.index', compact('items'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function create()
    {
        $types = Service::all();
        return view('admin.amenitie.create', compact('types'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'status' => 'required',
            'cost' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }
        DB::beginTransaction();
        try {
            $inputs = $request->except('photo');

            if ($request->hasFile('photo')) {
                $old = null;
                $photo = fileUploader($request->photo, getFilePath('amenite'), getFileSize('amenite'), $old);
                $inputs['photo'] = $photo;
            }

            $amenitie = Amenitie::create($inputs);
            DB::commit();
            
            return redirect()->route('amenitie-list')->withSuccess('Amenitie created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $item = Amenitie::where('id', $id)->first();
        return view('admin.amenitie.edit', compact('item'));
    }

    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'status' => 'required',
            'cost' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }
        DB::beginTransaction();
        try {
            $inputs = $request->except('id', '_token', 'photo');
            $amenitie = Amenitie::where('id', $request->id)->first();
            if ($request->hasFile('photo')) {
                $old = $amenitie->photo;
                $photo = fileUploader($request->photo, getFilePath('amenite'), getFileSize('amenite'), $old);
                $amenitie->photo = $photo;
            }

            $amenitie->update($inputs);

            DB::commit();
            
            return redirect()->route('amenitie-list')->withSuccess('Amenitie created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $item = Amenitie::find($id);
            $item->delete();
            return redirect()->route('amenitie-list')->withSuccess('Amenitie deleted successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    public function index()
    {
        try {
            $items = Slider::all();
            return view('admin.slider.index', compact('items'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);
        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $inputs = $request->all();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $photos = fileUploader($image, getFilePath('slider'), getFileSize('slider'));
                $inputs['image'] = $photos;
            }
            Slider::create($inputs);
            return redirect()->route('sliders.index')->withSuccess('Slider created successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $item = Slider::find($id);
        return view('admin.slider.edit', compact('item'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);
        try {
            $item = Slider::find($request->id);
            $inputs = $request->except('image', '_token', '_method');

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $photos = fileUploader($image, getFilePath('slider'), getFileSize('slider'), $item->image);
                $inputs['image'] = $photos;
            }            
            $item->update($inputs);
            return redirect()->route('sliders.index')->withSuccess('Slider updated successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $item = Slider::find($id);
            $item->delete();
            return redirect()->route('sliders.index')->withSuccess('Slider deleted successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
}

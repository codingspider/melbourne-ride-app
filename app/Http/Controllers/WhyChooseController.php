<?php

namespace App\Http\Controllers;

use App\Models\WhyChoose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WhyChooseController extends Controller
{
    public function index()
    {
        try {
            $items = WhyChoose::all();
            return view('admin.whychoose.index', compact('items'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function create()
    {
        return view('admin.whychoose.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'photos' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }

        try {
            $inputs = $request->except('_token');
            if ($request->hasFile('photos')) {
                $image = $request->file('photos');
                $photos= fileUploader($image, getFilePath('whychoose'), getFileSize('whychoose'));
                $inputs['photos'] = $photos;
            }
            WhyChoose::create($inputs);
            return redirect()->route('whychoose.index')->withSuccess('Why choose us created successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $item = WhyChoose::find($id);
        return view('admin.whychoose.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        try {
            $item = WhyChoose::find($id);
            $inputs = $request->all();
            if ($request->hasFile('photos')) {
                $image = $request->file('photos');
                $photos = fileUploader($image, getFilePath('whychoose'), getFileSize('whychoose'), $item->photos);
                $inputs['photos'] = $photos;
            }

            $item->update($inputs);
            return redirect()->route('whychoose.index')->withSuccess('Why choose us updated successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $item = WhyChoose::find($id);
            $item->delete();
            return redirect()->route('whychoose.index')->withSuccess('Why choose us deleted successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
}

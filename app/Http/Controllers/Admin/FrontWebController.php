<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FrontWebController extends Controller
{
    public function index()
    {
        $items = Page::all();
        return view('admin.front.page_list', compact('items'));
    }

    public function create()
    {
        return view('admin.front.create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        DB::beginTransaction();
        try {
            $inputs = $request->all();
            if ($request->hasFile('section_1_image')) {
                $image_1 = $request->file('section_1_image');
                $section_1_image = fileUploader($image_1, getFilePath('pagebanner'), getFileSize('pagebanner'));
                $inputs['section_1_image'] = $section_1_image;
            }
            if ($request->hasFile('section_3_image')) {
                $image_2 = $request->file('section_3_image');
                $section_3_image = fileUploader($image_2, getFilePath('page'), getFileSize('page'));
                $inputs['section_3_image'] = $section_3_image;
            }
            if ($request->hasFile('section_4_image')) {
                $image_3 = $request->file('section_4_image');
                $section_4_image = fileUploader($image_3, getFilePath('page'), getFileSize('page'));
                $inputs['section_4_image'] = $section_4_image;
            }
            if ($request->hasFile('section_5_image')) {
                $image_4 = $request->file('section_5_image');
                $section_5_image = fileUploader($image_4, getFilePath('page'), getFileSize('page'));
                $inputs['section_5_image'] = $section_5_image;
            }
            if ($request->hasFile('section_7_image')) {
                $image_5 = $request->file('section_7_image');
                $section_7_image = fileUploader($image_5, getFilePath('pagebanner'), getFileSize('pagebanner'));
                $inputs['section_7_image'] = $section_7_image;
            }

            $post = Page::create($inputs);
            DB::commit();
            return redirect()->route('pages.index')->withSuccess('Page created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $page = Page::findOrFail($id);

        return view('admin.front.page_show', compact('page'));
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        DB::beginTransaction();
        try {
            $post = Page::find($id);
            $inputs = $request->all();
            if ($request->hasFile('section_1_image')) {
                $old = $post->section_1_image;
                $image_1 = $request->file('section_1_image');
                $section_1_image = fileUploader($image_1, getFilePath('pagebanner'), getFileSize('pagebanner'), $old);
                $inputs['section_1_image'] = $section_1_image;
            }
            if ($request->hasFile('section_3_image')) {
                $old = $post->section_3_image;
                $image_2 = $request->file('section_3_image');
                $section_3_image = fileUploader($image_2, getFilePath('page'), getFileSize('page'), $old);
                $inputs['section_3_image'] = $section_3_image;
            }
            if ($request->hasFile('section_4_image')) {
                $old = $post->section_4_image;
                $image_3 = $request->file('section_4_image');
                $section_4_image = fileUploader($image_3, getFilePath('page'), getFileSize('page'), $old);
                $inputs['section_4_image'] = $section_4_image;
            }
            if ($request->hasFile('section_5_image')) {
                $old = $post->section_5_image;
                $image_4 = $request->file('section_5_image');
                $section_5_image = fileUploader($image_4, getFilePath('page'), getFileSize('page'), $old);
                $inputs['section_5_image'] = $section_5_image;
            }
            if ($request->hasFile('section_7_image')) {
                $old = $post->section_7_image;
                $image_5 = $request->file('section_7_image');
                $section_7_image = fileUploader($image_5, getFilePath('pagebanner'), getFileSize('pagebanner'), $old);
                $inputs['section_7_image'] = $section_7_image;
            }
            $post->update($inputs);
            DB::commit();
            return redirect()->route('pages.index')->withSuccess('Page updated successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $item = Page::find($id);

        return view('admin.front.edit', compact('item'));
    }

    public function destroy($id)
    {
        $item = Page::find($id);
        $item->delete();
        return redirect()->route('pages.index')->withSuccess('Page deleted successfully.');
    }

    public function search(Request $request)
    {
        $searchItem = $request->search;

        $items = Page::where(function ($query) use ($searchItem) {
            $query->where('title', 'like', '%' . $searchItem . '%')
                ->orWhere('slug', 'like', '%' . $searchItem . '%');
        })->get();

        return view('admin.front.page_list', compact('items'));
    }
}

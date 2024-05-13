<?php

namespace App\Http\Controllers\Admin;

use App\Models\StaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class StaticPageController extends Controller
{
    public function index(){
        $posts = StaticPage::all();
        return view('admin.static.index', compact('posts'));
    }

    public function create(){
        return view('admin.static.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'page' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }
        DB::beginTransaction();
        try {
            $inputs = $request->all();
            $post = StaticPage::create($inputs);
            DB::commit();
            return redirect()->route('static-page.index')->withSuccess('Page created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }

    }

    public function destroy($id){
        $post = StaticPage::find($id);
        $post->delete();
        return redirect()->route('static-page.index')->withSuccess('Post deleted successfully.');
    }

    public function edit($id){
        $post = StaticPage::where('id', $id)->first();
        return view('admin.static.edit', compact('post'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'page' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }
        DB::beginTransaction();
        try {
            $inputs = $request->all();
            $post = StaticPage::find($id);
            $post->update($inputs);
            DB::commit();
            return redirect()->route('static-page.index')->withSuccess('Page created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
}

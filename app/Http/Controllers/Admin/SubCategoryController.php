<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    public function index()
    {
        try {
            $items = SubCategory::with('category')->get();
            return view('admin.subcategory.index', compact('items'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function create()
    {
        $categories = Category::whereStatus(1)->get();
        return view('admin.subcategory.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'status' => 'required',
            'category_id' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }
        DB::beginTransaction();
        try {
            $category = SubCategory::create($request->all());
            DB::commit();
            
            return redirect()->route('subcategory-list')->withSuccess('Sub Category created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $categories = Category::whereStatus(1)->get();
        $item = SubCategory::find($id);
        return view('admin.subcategory.edit', compact('item', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'status' => 'required',
            'category_id' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }
        DB::beginTransaction();
        try {
            $data = SubCategory::find($id);
            $data->name             = $request->name;
            $data->status           = $request->status;
            $data->category_id      = $request->category_id;
            $data->save();
            DB::commit();
            
            return redirect()->route('subcategory-list')->withSuccess('Sub Category updated successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $item = SubCategory::find($id);
            $item->delete();
            return redirect()->route('subcategory-list')->withSuccess('Sub Category deleted successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function fetchSubcategory(Request $request){
        $data['subcategories'] = SubCategory::where("category_id", $request->category_id) ->get(["name", "id"]);
        return response()->json($data);
    }
}

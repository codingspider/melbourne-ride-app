<?php

namespace App\Http\Controllers\Admin;

use App\Models\ServiceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceTypeController extends Controller
{
    public function index()
    {
        try {
            $items = ServiceType::all();
            return view('admin.service_type.index', compact('items'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function create()
    {
        return view('admin.service_type.create');
    }

    public function store(Request $request)
    {
        try {
            ServiceType::create($request->all());
            return redirect()->route('service-type-list')->withSuccess('Service type created successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $item = ServiceType::find($id);
        return view('admin.service_type.edit', compact('item'));
    }

    public function update(Request $request)
    {
        try {
            $item = ServiceType::find($request->id);
            $item->update($request->all());
            return redirect()->route('service-type-list')->withSuccess('Service type updated successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

}

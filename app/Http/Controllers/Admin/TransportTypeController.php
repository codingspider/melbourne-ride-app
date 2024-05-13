<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TransportType;
use App\Http\Controllers\Controller;

class TransportTypeController extends Controller
{
    public function index()
    {
        try {
            $items = TransportType::all();
            return view('admin.fleet_type.index', compact('items'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function create()
    {
        return view('admin.fleet_type.create');
    }

    public function store(Request $request)
    {
        try {
            TransportType::create($request->all());
            return redirect()->route('transport-type-list')->withSuccess('Transport type created successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $item = TransportType::find($id);
        return view('admin.fleet_type.edit', compact('item'));
    }

    public function update(Request $request)
    {
        try {
            $item = TransportType::find($request->id);
            $item->update($request->all());
            return redirect()->route('transport-type-list')->withSuccess('Transport type updated successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $item = TransportType::find($id);
            $item->delete();
            return redirect()->route('transport-type-list')->withSuccess('Transport type deleted successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
}

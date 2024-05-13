<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subrub;
use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        try {
            $items = Service::all();
            return view('admin.service.index', compact('items'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function create()
    {
        $types = ServiceType::whereStatus(1)->get();
        return view('admin.service.create', compact('types'));
    }

    public function store(Request $request)
    {
        try {
            Service::create($request->all());
            return redirect()->route('service-list')->withSuccess('Service created successfully.');
        } catch (\Exception $e) {
            dd($e);
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $item = Service::find($id);
        $subrubs = Subrub::all();
        return view('admin.service.edit', compact('item', 'subrubs'));
    }

    public function update(Request $request)
    {
        try {
            $item = Service::find($request->id);
            $item->update($request->all());
            return redirect()->route('service-list')->withSuccess('Service updated successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $item = Service::find($id);
            $item->delete();
            return redirect()->route('service-list')->withSuccess('Service deleted successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
}

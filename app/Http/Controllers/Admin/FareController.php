<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fare;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FareController extends Controller
{
    public function index()
    {
        try {
            $items = Fare::with(['service'])->get();
            return view('admin.fare.index', compact('items'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function create()
    {
        $services = Service::whereStatus(1)->get();
        return view('admin.fare.create', compact('services'));
    }

    public function store(Request $request)
    {
        try {
            $inputs = $request->all();
            Fare::updateOrCreate(
                ['service_id' => $request->service_id],
                $inputs
            );

            return redirect()->route('fare-list')->withSuccess('Fare created successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $item = Fare::find($id);
        $services = Service::whereStatus(1)->get();
        return view('admin.fare.edit', compact('item', 'services'));
    }

    public function update(Request $request)
    {
        try {
            $item = Fare::find($request->id);
            $item->update($request->all());
            return redirect()->route('fare-list')->withSuccess('Fare updated successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $item = Fare::find($id);
            $item->delete();
            return redirect()->route('fare-list')->withSuccess('Fare deleted successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
}

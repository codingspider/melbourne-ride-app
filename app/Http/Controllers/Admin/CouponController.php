<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CouponController extends Controller
{
    public function index()
    {
        try {
            $items = Coupon::all();
            return view('admin.coupon.index', compact('items'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function create()
    {
        return view('admin.coupon.create');
    }

    public function store(Request $request)
    {
        try {
            Coupon::create($request->all());
            return redirect()->route('coupon-list')->withSuccess('Coupon created successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $item = Coupon::find($id);
        return view('admin.coupon.edit', compact('item'));
    }

    public function update(Request $request)
    {
        try {
            $item = Coupon::find($request->id);
            $item->update($request->all());
            return redirect()->route('coupon-list')->withSuccess('Coupon updated successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $item = Coupon::find($id);
            $item->delete();
            return redirect()->route('coupon-list')->withSuccess('Coupon deleted successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
}

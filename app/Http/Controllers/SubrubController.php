<?php

namespace App\Http\Controllers;

use App\Models\Subrub;
use Illuminate\Http\Request;

class SubrubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Subrub::all();
        return view('admin.subrub.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.subrub.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $item = Subrub::create($request->all());
            return redirect()->route('subrubs.index')->withSuccess('Subrub created successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Subrub::find($id);
        return view('admin.subrub.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $item = Subrub::find($id);
            $item->update($request->all());
            return redirect()->route('subrubs.index')->withSuccess('Subrub updated successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $item = Subrub::find($id);
            $item->delete();
            return redirect()->route('subrubs.index')->withSuccess('Subrub deleted successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\GetQoute;
use App\Http\Requests\StoreGetQouteRequest;
use App\Http\Requests\UpdateGetQouteRequest;

class GetQouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getQoutes = GetQoute::latest()->get();

        return view('theme.home.get_qoute_list', compact('getQoutes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('theme.home.get_qoute');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGetQouteRequest $request)
    {
        GetQoute::create($request->validated());
        return redirect()->back()->withSuccess('your qoute send success');
    }

    /**
     * Display the specified resource.
     */
    public function show(GetQoute $getQoute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GetQoute $getQoute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGetQouteRequest $request, GetQoute $getQoute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GetQoute $getQoute)
    {
        //
    }
}

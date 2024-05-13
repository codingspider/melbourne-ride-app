<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Models\Feature;
use App\Models\Package;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::latest()->get();

        return view('admin.package.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pages = Page::all();
        $feature = Feature::where('status', 1)->select('id', 'title')->get();
        return view('admin.package.create', compact('feature', 'pages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePackageRequest $request)
    {
        $data = $request->except('features_id');
        $data['features_id'] = json_encode($request->features_id);

        Package::create($data);

        return redirect()->route('packages.index')->withSuccess('package created success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        $package->load('feature');

        return view('admin.package.show', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        $pages = Page::all();
        $feature = Feature::where('status', 1)->select('id', 'title')->get();

        return view('admin.package.edit', compact('package', 'feature', 'pages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePackageRequest $request, Package $package)
    {
        $data = $request->except('features_id');
        $data['features_id'] = json_encode($request->features_id);

        $package->update($data);

        return redirect()->route('packages.index')->withSuccess('package updated success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package->delete();

        return redirect()->back()->withWarning('package deleted success');
    }
}

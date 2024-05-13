<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use App\Models\Menu;
use App\Models\Page;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Faq::with('menu')->latest()->get();

        return view('admin.faq.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = Menu::latest()->get();

        return view('admin.faq.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqRequest $request)
    {
        Faq::create($request->validated());

        return redirect()->route('faq.index')->withSuccess('faq created success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        $faq->load('page');

        return view('admin.faq.show', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        $menus = Menu::latest()->get();

        return view('admin.faq.edit', compact('menus', 'faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $faq->update($request->validated());

        return redirect()->route('faq.index')->withSuccess('faq updated success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->rback()->withWarning('faq deleted success');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Menu;
use App\Models\Page;
use F9Web\Meta\Meta;
use App\Models\Package;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $menu = Menu::where('url', $slug)->firstOrFail();

        $packages = Package::where('page_id',$page->id)->get();
        $faqs = Faq::where('menu_id', $menu->id)->where('status', 1)->get();

        Meta::set('title', $page->meta_title)
            ->set('description', $page->meta_description)
            ->set('keywords', $page->meta_keywords)
            ->noIndex();

        return view('home.pages.show', compact('page', 'packages', 'faqs'));
    }
}

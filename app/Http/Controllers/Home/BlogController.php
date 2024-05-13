<?php

namespace App\Http\Controllers\Home;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        $latests = Post::whereStatus(1)->latest()->paginate(5);
        $sliders = Post::whereStatus(1)->paginate(5);
        $categories = Category::whereStatus(1)->get();
        $posts = Post::whereStatus(1)->get();
        return view('home.blog.index', compact('latests', 'sliders', 'categories', 'posts'));
    }

    public function show($id, $slug){
        $blog = Post::find($id);
        $posts = Post::whereStatus(1)->get();
        return view('home.blog.details', compact('blog', 'posts'));
    }
}
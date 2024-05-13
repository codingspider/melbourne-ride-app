<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use App\Traits\PostTrait;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    use PostTrait;
    
    public function index(){
        $posts = Post::with('category')->get();
        return view('admin.post.index', compact('posts'));
    }

    public function create(){
        $categories = Category::whereStatus(1)->get();
        $sub_categories = SubCategory::whereStatus(1)->get();
        $tags = Tag::whereStatus(1)->get();
        return view('admin.post.create', compact('categories', 'sub_categories', 'tags'));
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'thumb_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'title' => 'required',
            'slug' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }
        DB::beginTransaction();
        try {
            $inputs = $request->all();
            // image upload trait 
            $gallery_images = json_encode($this->galleryImageUpload($request));
            $thumb_images = $this->thumbImageUpload($request);
            $banner_images = $this->bannerImageUpload($request);

            $inputs['gallery_images'] = $gallery_images;
            $inputs['thumb_image'] = $thumb_images;
            $inputs['banner_image'] = $banner_images;
            $inputs['user_id'] = Auth::user()->id;
            $inputs['is_featured'] = 1;

            $post = Post::create($inputs);
            $post->tags()->attach($request->tag_id);
            DB::commit();
            return redirect()->route('post-list')->withSuccess('Post created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }

    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post-list')->withSuccess('Post deleted successfully.');
    }

    public function edit($id){
        $categories = Category::whereStatus(1)->get();
        $sub_categories = SubCategory::whereStatus(1)->get();
        $tags = Tag::whereStatus(1)->get();
        $post = Post::with('tags')->where('id', $id)->first();

        return view('admin.post.edit', compact('categories', 'sub_categories', 'tags', 'post'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'title' => 'required',
            'slug' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }
        DB::beginTransaction();
        try {
            $inputs = $request->all();
            $post = Post::find($id);
            // image upload trait 
            if($request->hasFile('gallery_images')){
                $gallery_images = $this->galleryImageUpload($request, json_decode($post->gallery_images));
                $inputs['gallery_images'] = $gallery_images;
            }
            if($request->hasFile('thumb_image')){
                $thumb_images = $this->thumbImageUpload($request, $post->thumb_image);
                $inputs['thumb_image'] = $thumb_images;
            }
            if($request->hasFile('banner_image')){
                $banner_images = $this->bannerImageUpload($request, $post->banner_image);
                $inputs['banner_image'] = $banner_images;
            }

            $post->update($inputs);
            $post->tags()->attach($request->tag_id);
            DB::commit();
            return redirect()->route('post-list')->withSuccess('Post created successfully.');
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
}

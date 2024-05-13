<?php

namespace App\Http\Controllers\Admin;

use HTMLPurifier;
use App\Models\Frontend;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class FrontWebSectionController extends Controller
{
    public function index(){
        $items = [];
        return view('admin.front_section.index', compact('items'));
    }

    public function frontendSections($key)
    {
        $section = @getPageSections()->$key;
        if (!$section) {
            return abort(404);
        }
        $content = Frontend::where('data_keys', $key)->orderBy('id','desc')->first();

        return view('admin.front_section.index', compact('section', 'content', 'key'));
    }

    public function frontendContent(Request $request, $key)
    {
        $purifier = new HTMLPurifier();
        $valInputs = $request->except('_token', 'image_input', 'key', 'status', 'type', 'id');
        foreach ($valInputs as $keyName => $input) {
            if (gettype($input) == 'array') {
                $inputContentValue[$keyName] = $input;
                continue;
            }
            $inputContentValue[$keyName] = $purifier->purify($input);
        }
        $type = $request->type;
        if (!$type) {
            abort(404);
        }

        if ($request->id) {
            $content = Frontend::findOrFail($request->id);
        } else {
            $content = Frontend::where('data_keys', $key)->first();
            if (!$content || $request->type == 'element') {
                $content = new Frontend();
                $content->data_keys = $key;
                $content->save();
            }
        }

        $content->data_values = $inputContentValue;
        $content->save();
        return back()->withSuccess('Content updated successfully');
    }

    public function editorFileUpload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('media'), $fileName);
            $url = asset('media/' . $fileName);
            return response()->json(['url' => $url]);
        }

    }

    
}
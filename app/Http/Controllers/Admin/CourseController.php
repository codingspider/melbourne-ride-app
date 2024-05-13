<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Validation\Rule;
use Validator;
use Illuminate\Support\Str;



class CourseController extends Controller
{
    public function index(){
        return view('admin.course.create');
    }

    public function courseList(){
        $course = Course::latest()->get();
        return view('admin.course.index',compact('course'));
    }

    public function editCourse($id){
        $course = Course::find($id);
        return view('admin.course.edit',compact('course'));
    }

    public function saveCourse(Request $request){
        // Validation rules
        $rules = [
            'crs_name' => [
                'required',
                Rule::unique('courses', 'crs_name'),
            ],
            'crs_code' => 'required',
            'crs_fee' => 'required',
//            'crs_image' => 'required',
            'status' => 'required',
        ];

        // Validation messages (customize these as needed)
        $messages = [
            'crs_name.required' => 'Course is required.',
            'crs_name.unique' => 'The course is already available.',
            'crs_code.required' => 'Course Code is required.',
            'crs_fee.required' => 'Course Fee is required.',
//            'crs_image.required' => 'Course Image is required.',
            'status.required' => 'Status is required.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $course = new Course();
        $course->crs_name = $request->crs_name;
        $course->slug = Str::slug($request->crs_name, '-');
        $course->crs_code = $request->crs_code;
        $course->crs_fee = $request->crs_fee;
        $course->crs_description = $request->crs_description;
        $course->status = $request->status;
        // $course->crs_image = $this->saveImage($request);
        if ($request->file('crs_image')) {
            $course->crs_image = $this->saveImage($request);
        }
        $course->save();
        return redirect()->route('course.list')->with('success','Course Created Successfully');
    }

    public $image, $imageName, $imageUrl, $directory;
    public function saveImage($request)
    {
        $this->image = $request->file('crs_image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'uploads/course/';
        $this->imageUrl = $this->directory . $this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }

    public function destroy($id)
    {
        try {
            $course = Course::find($id);
            if (!$course) {
                return back()->withError('Course not found.');
            }
         ///   $imagePath = public_path($course->crs_image);
            if (file_exists($course->crs_image)) {
                unlink($course->crs_image);
            }
            $course->delete();
            return redirect()->back()->withSuccess('Course deleted successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }


    public function updateCourse(Request $request, $id)
    {

        // Validation rules
        $rules = [
            'crs_name' => [
                'required',
                Rule::unique('courses', 'crs_name')->ignore($id),
            ],
            'crs_code' => 'required',
            'crs_fee' => 'required',
            'status' => 'required',
        ];

        // Validation messages (customize these as needed)
        $messages = [
            'crs_name.required' => 'Course is required.',
            'crs_name.unique' => 'The course is already available.',
            'crs_code.required' => 'Course Code is required.',
            'crs_fee.required' => 'Course Fee is required.',
            'status.required' => 'Status is required.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // If validation passes, update the student
        $course = Course::find($id);
        $course->crs_name = $request->crs_name;
        $course->slug = Str::slug($request->crs_name, '-');
        $course->crs_code = $request->crs_code;
        $course->crs_fee = $request->crs_fee;
        $course->crs_description = $request->crs_description;
        $course->status = $request->status;


        if ($request->file('crs_image')) {
            if (file_exists($course->crs_image)) {
                unlink($course->crs_image);
            }
            $course->crs_image = $this->saveImage($request);
        }

        $course->save();



        return redirect()->route('course.list')->with('success', 'Update Successfully');
    }
}

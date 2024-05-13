<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Question;
use App\Models\Examination;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function index(){
        $courses = Course::latest()->where('status', 1)->get();
        // Retrieve the exams associated with the retrieved courses
        $exams = Examination::whereIn('course_id', $courses->pluck('id'))->get();

        return view('admin.question.create',compact('courses', 'exams'));
    }

    public function questionList(){
        $questions = Question::latest()->get();

      //  return $questions;
        return view('admin.question.index',compact('questions'));
    }
    public function store(Request $request)
    {
        // return $request->all();

        $request->validate([
            'title' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            // 'option_c' => 'required|string',
            // 'option_d' => 'required|string',
            'correct_answer' => 'required|string'
        ]);

        if ($request->hasFile('attachment')) {
            $document = $request->file('attachment');

            $extension = $document->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $document->move('uploads/', $fileName);

            $filePath = 'uploads/' . $fileName;

            $request['image'] = $filePath;
        }

        if (isset($request->is_multiple)) {
            $request['is_multiple'] = true;
        }

        Question::create($request->except('attachment'));
        return redirect()->back()->with('success', 'Question created successfully.');
    }

    public function destroy($id)
    {
        try {
            $question = Question::find($id);
            if (!$question) {
                return back()->withError('Question not found.');
            }
            if (file_exists($question->image)) {
                unlink($question->image);
            }
            $question->delete();
            return redirect()->back()->withSuccess('Question deleted successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
    public function editQuestion($id){
        $question = Question::find($id);
        $courses = Course::latest()->where('status',1)->get();
        return view('admin.question.edit',compact('question','courses'));
    }
    public function update(Request $request, Question $question)
    {
        $request->validate([
            'title' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_answer' => 'required|string'
        ]);
        try {
            // If validation passes, update the student
            $question = Question::find($request->id);
            $question->course_id    = $request->course_id;
            $question->exam_id      = $request->exam_id;
            $question->title        = $request->title;
            $question->option_a     = $request->option_a;
            $question->option_b     = $request->option_b;
            $question->option_c     = $request->option_c;
            $question->option_d     = $request->option_d;
            $question->correct_answer  = $request->correct_answer;
            if ($request->hasFile('attachment')) {
                //Delete previous image
                if (isset($question->image)) {
                    $imagePath = public_path($question->image);
                    if(File::exists($imagePath)){
                        unlink($imagePath);
                    }
                }

                $document = $request->file('attachment');
                $extension = $document->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $document->move('uploads/', $fileName);
                $filePath = 'uploads/' . $fileName;
                $request['image'] = $filePath;
            }
                if (isset($request->is_multiple)) {
                    $request['is_multiple'] = true;
                }

            $question->save();
            return redirect()->back()->with('success', 'Question updated successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id){
        $question = Question::find($id);
        $courses = Course::latest()->where('status', 1)->get();
        $exams = Examination::whereIn('course_id', $courses->pluck('id'))->get();
        return view('admin.question.edit', compact('question', 'courses', 'exams'));
    }



}

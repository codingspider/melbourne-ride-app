<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Examination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ExaminationController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->where('status',1)->get();
        return view('admin.examinations.create', compact('courses'));
    }

    public function examinationList()
    {
        $examinations = Examination::latest()->get();
        return view('admin.examinations.index', compact('examinations'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'duration' => 'required|integer',
            'total_mark' => 'required|integer',
            'pass_mark' => 'required|integer',
            'negative_mark' => 'boolean',
            'status' => 'required|integer',
            'negative_mark_value' => 'nullable',
        ]);
        try {
            Examination::create($request->all());
            return redirect()->back()->with('success', 'Examination created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('examination.list')->with('error','Something went wrong');
        }
    }

    public function editExamination($id){
        $exam = Examination::find($id);
        $courses = Course::latest()->where('status',1)->get();
        return view('admin.examinations.edit', compact('exam', 'courses'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string',
            'duration' => 'required|integer',
            'total_mark' => 'required|integer',
            'negative_mark' => 'boolean',
            'status' => 'required|integer',
            'negative_mark_value' => 'nullable',
        ]);
        try {
            $inputs = $request->except('_token', '_method');
            Examination::where('id', $id)->update($inputs);
            return redirect()->back()->with('success', 'Examination updated successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('examination.list')->with('error','Something went wrong');
        }

    }

    public function destroy($id){
        try {
            $exam = Examination::find($id);
            $exam->delete();
            return redirect()->back()->with('success', 'Examination deleted successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('examination.list')->with('error','Something went wrong');
        }

    }

}

<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use App\Models\Course;
use App\Models\Driver;
use App\Models\Question;
use App\Models\Examination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\DriverTrainingResult;

class DriverTrainingController extends Controller
{
    public function index(){
        try{
            if(auth()->user()->user_type != 1){
                return back()->withError('Course only for driver !');
            }
            $courses = Course::latest()->where('status',1)->get();
            return view('home.driver_training.index',compact('courses'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function getExam($course_id){
        try{
            if(auth()->user()->user_type != 1){
                return back()->withError('Course only for driver !');
            }
            $exams = Examination::where('course_id', $course_id)->get();
            return view('home.driver_training.exam',compact('exams', 'course_id'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function getExamQuestions($course_id, $exam_id){
        try{
            if(auth()->user()->user_type != 1){
                return back()->withError('Course only for driver !');
            }

            $course = Course::where('id', $course_id)->first();
            $exam = Examination::where('id', $exam_id)->first();
            $questions = Question::where('course_id', $course_id)->where('exam_id', $exam_id)->get();
            return view('home.driver_training.exam_questions', compact('course', 'questions', 'exam'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function storeExamResult(Request $request)
    {
        try{
            if(auth()->user()->user_type != 1){
                return back()->withError('Course only for driver !');
            }

            $exam = Examination::find($request->exam_id);
            $course = Course::find($request->course_id);
            $driver = Driver::latest()->first();

            $modelInstance = DriverTrainingResult::where('course_id', $request->course_id)->where('exam_id', $request->exam_id)->where('driver_id', $driver->id)->where('status', 0)->first();

            if ($modelInstance) {
                return redirect()->route('home')->withError('You already given this exam');
            } 

            $questions = $request->question;
            $obtain_mark = 0;
            $fine_mark = 0;
            $number_of_question = count($questions);
            $mark_per_question = $exam->total_mark / $number_of_question;

            foreach ($questions as $questionId => $selectedAnswers) {
                $question = Question::find($questionId);

                if (!$question) {
                    // Handle the case where the question is not found
                    continue;
                }

                $correctAnswers = explode(',', $question->correct_answer);
                // Check if the selected answers match the correct answers
                if (count($selectedAnswers) == count($correctAnswers)
                    && empty(array_diff($selectedAnswers['answer'], $correctAnswers))
                ) {
                    $obtain_mark += $mark_per_question;
                } else {
                    $fine_mark += $exam->negative_mark_value;
                }
            }

            if($obtain_mark < $exam->pass_mark){
                $status = 1;
            }else{
                $status = 0;
            }

            DriverTrainingResult::create([
                'course_id' => $course->id,
                'exam_id'   => $exam->id,
                'driver_id' => $driver->id,
                'total_mark'=> $exam->total_mark,
                'obtain_mark'=>$obtain_mark,
                'fine_mark'  => $fine_mark,
                'status'    => $status
            ]);
            DB::commit();
            return redirect()->route('home')->withSuccess('Exam Submitted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('home')->withError('An error occurred: ' . $e->getMessage());
        }
    }
}

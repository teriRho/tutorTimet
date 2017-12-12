<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Test;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $history = Test::where('user_id',Auth::user()->id)->get();
        return view('dashboard')->with('history',$history);
    }

    public function attempt($attempt_type)
    {

        return view('attempt')->with('attempt_type',$attempt_type);
    }

    public function takeTest(Request $request)
    {

        $test = new Test();
        $test->difficulties_id = $request->difficulty_level;

        if($request->number_of_questions){
         $questions = Question::where('difficulty_id',$request->difficulty_level)
             ->where('type_id',$request->test_type)
             ->take($request->number_of_questions)
             ->get()
             ->groupBy('article_id')
         ;
            $test->number_of_questions =$request->number_of_questions;
        }

        else{

            $test->number_of_questions =Question::count();

            $questions = Question::where('difficulty_id',$request->difficulty_level)
                ->get()
                ->groupBy('article_id');
        }
        if($request->kind == 'Practice'){
        $test->is_practice = true;
        }
        $test->user_id = Auth::user()->id;
        $test->save();

        return view('test')->with('questions',$questions)->with('test',$test);
        
    }


    public function submitTest($id,Request $request)
    {
        $test = Test::find($id);

        $correctAnswers = Answer::whereIn('id',array_values($request->all()))->where('is_correct',1)->count();

        $score =  $test->number_of_questions / $correctAnswers;

        $test->score = $score;
        $test->save();

        return redirect('/');

    }

}

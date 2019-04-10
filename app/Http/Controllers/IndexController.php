<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Question;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
    	return view('base');
    }

    public function contacts(){
    	return view('contacts');
    }

    public function questions(){

        $questions = Question::where('display','show')->get();

    	return view('questions',compact('questions'));
    }

    public function gallery(){
    	return view('gallery');
    }

    public function sendQuestion(Request $request){ 

    	$question = new Question;
    	$question->question = $request ->question;
    	$question->date = Carbon::parse($date) ->format('d.m.Y H:m');
    	$question->display =  "hide";

    	$question ->save();

        return redirect('questions');
    }
}

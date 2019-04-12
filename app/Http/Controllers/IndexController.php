<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Question;
use App\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

    	$settings = Setting::where('id','1')->first();

    	return view('welcome',compact('settings'));
    }


    public function services(){
        $settings = Setting::where('id','1')->first();

        return view('services',compact('settings'));
    }

    public function contacts(){

    	$settings = Setting::where('id','1')->first();

    	return view('contacts',compact('settings'));
    }

    public function questions(){
    	$settings = Setting::where('id','1')->first();

        $questions = Question::where('display','show')->get();

    	return view('questions',compact('questions', 'settings'));
    }

    public function gallery(){
        $settings = Setting::where('id','1')->first();

    	return view('gallery',compact('settings'));
    }

    public function sendQuestion(Request $request){ 

    	$question = new Question;
    	$question->question = $request ->question;
    	$date = Carbon::now();
    	$question->date = Carbon::parse($date) ->format('d.m.Y H:m');
    	$question->display =  "hide";
    	$question ->comment = $request ->comment;
    
    	$question ->save();

        return redirect('questions');
    }



}

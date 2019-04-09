<?php

namespace App\Http\Controllers;

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

    public function sendQuestion(){ 
        /**
        1. create new object
        2. set properties question
        3. set properties date
            a) get now date
            b) format with Carbon. 09.04.2019 17:53
            c) $date = .. 
                dd($date);
        **/


       // new task create and save object as result - showing in database new entry
       // required date and question 
       // how to create date and format - check Carbon PHP.

        return redirect('questions');
    }
}

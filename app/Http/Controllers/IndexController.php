<?php

namespace App\Http\Controllers;

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
    	return view('questions');
    }

    public function gallery(){
    	return view('gallery');
    }
}

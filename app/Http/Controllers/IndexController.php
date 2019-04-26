<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Question;
use App\Setting;
use App\Services;
use App\ServiceName;
use App\Information;
use App\Order;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    protected $settings;

    public function __construct()
    {
        $this->settings = Setting::where('id','1')->first();
    }

    public function index(){
    	$settings = $this->settings;
        $info = Information::where('display','show')->get();
        $namePage = 'welcome';

    	return view('welcome',compact('settings','info','namePage'));
    }

    public function aboutus(){

        $settings = $this->settings;
        $aboutus = Information::where('display','show')->get();
        $namePage = 'aboutus';

        return view('aboutus' , compact('settings', 'aboutus', 'namePage'));
    }


    public function services($id = null){
        
        $settings = $this->settings;

        $services = Services::where('display','show')->get();
        $servicesName = ServiceName::where('display','show')->get();
        $namePage = 'services';

        return view('services',compact('settings','services','servicesName','namePage'));
    }

    public function contacts(){

    	$settings = $this->settings;
        $namePage = 'contacts';

    	return view('contacts',compact('settings','namePage'));
    }

    public function questions(){
    	$settings = $this->settings;

        $questions = Question::where('display','show')->get();
        $namePage = 'questions';

    	return view('questions',compact('questions', 'settings','namePage'));
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

    public function sendOrder(Request $request){
        // $order = new Order;
        // $order->phone = $request ->phone;
        // $order->
            
    }


}

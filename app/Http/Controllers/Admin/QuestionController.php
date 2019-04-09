<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Question;
use App\Http\Requests\CreateQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use Illuminate\Http\Request;



class QuestionController extends Controller {

	/**
	 * Display a listing of question
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $question = Question::all();

		return view('admin.question.index', compact('question'));
	}

	/**
	 * Show the form for creating a new question
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
        $display = Question::$display;

	    return view('admin.question.create', compact("display"));
	}

	/**
	 * Store a newly created question in storage.
	 *
     * @param CreateQuestionRequest|Request $request
	 */
	public function store(CreateQuestionRequest $request)
	{
	    
		Question::create($request->all());

		return redirect()->route(config('quickadmin.route').'.question.index');
	}

	/**
	 * Show the form for editing the specified question.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$question = Question::find($id);
	    
	    
        $display = Question::$display;

		return view('admin.question.edit', compact('question', "display"));
	}

	/**
	 * Update the specified question in storage.
     * @param UpdateQuestionRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateQuestionRequest $request)
	{
		$question = Question::findOrFail($id);

        

		$question->update($request->all());

		return redirect()->route(config('quickadmin.route').'.question.index');
	}

	/**
	 * Remove the specified question from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Question::destroy($id);

		return redirect()->route(config('quickadmin.route').'.question.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Question::destroy($toDelete);
        } else {
            Question::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.question.index');
    }

}

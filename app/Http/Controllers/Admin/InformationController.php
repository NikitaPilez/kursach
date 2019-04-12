<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Information;
use App\Http\Requests\CreateInformationRequest;
use App\Http\Requests\UpdateInformationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class InformationController extends Controller {

	/**
	 * Display a listing of information
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $information = Information::all();

		return view('admin.information.index', compact('information'));
	}

	/**
	 * Show the form for creating a new information
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
        $display = Information::$display;

	    return view('admin.information.create', compact("display"));
	}

	/**
	 * Store a newly created information in storage.
	 *
     * @param CreateInformationRequest|Request $request
	 */
	public function store(CreateInformationRequest $request)
	{
	    $request = $this->saveFiles($request);
		Information::create($request->all());

		return redirect()->route(config('quickadmin.route').'.information.index');
	}

	/**
	 * Show the form for editing the specified information.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$information = Information::find($id);
	    
	    
        $display = Information::$display;

		return view('admin.information.edit', compact('information', "display"));
	}

	/**
	 * Update the specified information in storage.
     * @param UpdateInformationRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateInformationRequest $request)
	{
		$information = Information::findOrFail($id);

        $request = $this->saveFiles($request);

		$information->update($request->all());

		return redirect()->route(config('quickadmin.route').'.information.index');
	}

	/**
	 * Remove the specified information from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Information::destroy($id);

		return redirect()->route(config('quickadmin.route').'.information.index');
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
            Information::destroy($toDelete);
        } else {
            Information::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.information.index');
    }

}

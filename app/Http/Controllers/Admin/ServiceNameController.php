<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\ServiceName;
use App\Http\Requests\CreateServiceNameRequest;
use App\Http\Requests\UpdateServiceNameRequest;
use Illuminate\Http\Request;

use App\Services;


class ServiceNameController extends Controller {

	/**
	 * Display a listing of servicename
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $servicename = ServiceName::with("services")->get();

		return view('admin.servicename.index', compact('servicename'));
	}

	/**
	 * Show the form for creating a new servicename
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $services = Services::pluck("id", "id")->prepend('Please select', 0);

	    
        $display = ServiceName::$display;

	    return view('admin.servicename.create', compact("services", "display"));
	}

	/**
	 * Store a newly created servicename in storage.
	 *
     * @param CreateServiceNameRequest|Request $request
	 */
	public function store(CreateServiceNameRequest $request)
	{
	    
		ServiceName::create($request->all());

		return redirect()->route(config('quickadmin.route').'.servicename.index');
	}

	/**
	 * Show the form for editing the specified servicename.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$servicename = ServiceName::find($id);
	    $services = Services::pluck("id", "id")->prepend('Please select', 0);

	    
        $display = ServiceName::$display;

		return view('admin.servicename.edit', compact('servicename', "services", "display"));
	}

	/**
	 * Update the specified servicename in storage.
     * @param UpdateServiceNameRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateServiceNameRequest $request)
	{
		$servicename = ServiceName::findOrFail($id);

        

		$servicename->update($request->all());

		return redirect()->route(config('quickadmin.route').'.servicename.index');
	}

	/**
	 * Remove the specified servicename from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		ServiceName::destroy($id);

		return redirect()->route(config('quickadmin.route').'.servicename.index');
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
            ServiceName::destroy($toDelete);
        } else {
            ServiceName::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.servicename.index');
    }

}

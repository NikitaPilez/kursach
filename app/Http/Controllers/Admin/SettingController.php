<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Setting;
use App\Http\Requests\CreateSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Http\Request;



class SettingController extends Controller {

	/**
	 * Display a listing of setting
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $setting = Setting::all();

		return view('admin.setting.index', compact('setting'));
	}

	/**
	 * Show the form for creating a new setting
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.setting.create');
	}

	/**
	 * Store a newly created setting in storage.
	 *
     * @param CreateSettingRequest|Request $request
	 */
	public function store(CreateSettingRequest $request)
	{
	    
		Setting::create($request->all());

		return redirect()->route(config('quickadmin.route').'.setting.index');
	}

	/**
	 * Show the form for editing the specified setting.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$setting = Setting::find($id);
	    
	    
		return view('admin.setting.edit', compact('setting'));
	}

	/**
	 * Update the specified setting in storage.
     * @param UpdateSettingRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateSettingRequest $request)
	{
		$setting = Setting::findOrFail($id);

        

		$setting->update($request->all());

		return redirect()->route(config('quickadmin.route').'.setting.index');
	}

	/**
	 * Remove the specified setting from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Setting::destroy($id);

		return redirect()->route(config('quickadmin.route').'.setting.index');
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
            Setting::destroy($toDelete);
        } else {
            Setting::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.setting.index');
    }

}

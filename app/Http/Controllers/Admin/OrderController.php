<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Order;
use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;

use App\Services;
use App\User;


class OrderController extends Controller {

	/**
	 * Display a listing of order
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $order = Order::with("services")->with("user")->get();

		return view('admin.order.index', compact('order'));
	}

	/**
	 * Show the form for creating a new order
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $services = Services::pluck("id", "id")->prepend('Please select', 0);
$user = User::pluck("id", "id")->prepend('Please select', 0);

	    
        $display = Order::$display;
        $status = Order::$status;

	    return view('admin.order.create', compact("services", "user", "display", "status"));
	}

	/**
	 * Store a newly created order in storage.
	 *
     * @param CreateOrderRequest|Request $request
	 */
	public function store(CreateOrderRequest $request)
	{
	    
		Order::create($request->all());

		return redirect()->route(config('quickadmin.route').'.order.index');
	}

	/**
	 * Show the form for editing the specified order.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$order = Order::find($id);
	    $services = Services::pluck("id", "id")->prepend('Please select', 0);
$user = User::pluck("id", "id")->prepend('Please select', 0);

	    
        $display = Order::$display;
        $status = Order::$status;

		return view('admin.order.edit', compact('order', "services", "user", "display", "status"));
	}

	/**
	 * Update the specified order in storage.
     * @param UpdateOrderRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateOrderRequest $request)
	{
		$order = Order::findOrFail($id);

        

		$order->update($request->all());

		return redirect()->route(config('quickadmin.route').'.order.index');
	}

	/**
	 * Remove the specified order from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Order::destroy($id);

		return redirect()->route(config('quickadmin.route').'.order.index');
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
            Order::destroy($toDelete);
        } else {
            Order::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.order.index');
    }

}

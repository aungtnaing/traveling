<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Orders;
use DB;

// use Intervention\Image\ImageManager;
// use Intervention\Image\ImageManagerStatic as Image;
// use File;

class OrderlistsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{


		$orderlists = Orders::All();
    		
         return view("dashboard.orders.orderlistspannel")
            ->with("orderlists", $orderlists);

           
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
			$order = Orders::find($id);

		return view('dashboard.orders.orderstatus')->with('order',$order);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//

			// echo $request->input("status");

			// die();
			$order = Orders::find($id);
			if($request->input("status")==="check")
			{
				$order->active = 1;
			}
			else if($request->input("status")==="uncheck")
			{

				$order->active = 0;
			}
			else if($request->input("status")==="checked")
			{

				$order->active = 1;
					$order->save();
				return redirect()->route("dashboard.index");
			}
			else
			{
				return redirect()->route("dashboard.index");
			}


			$order->save();

			
			return redirect()->route("orderlists.index");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}



}

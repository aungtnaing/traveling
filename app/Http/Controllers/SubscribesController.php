<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Subscribes;
use DB;

// use Intervention\Image\ImageManager;
// use Intervention\Image\ImageManagerStatic as Image;
// use File;

class SubscribesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{


		$subscribes = Subscribes::All();
    		
         return view("dashboard.subscribes.subscribespannel")
            ->with("subscribes", $subscribes);

           
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
		$subscribe = Subscribes::find($id);
		return view('dashboard.subscribes.subscribeedit')->with('subscribe',$subscribe);
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

		$this->validate($request,[
			'name' => 'required',
			'price' => 'required',
		
			]);


			$subscribe = Subscribes::find($id);
			$subscribe->name = $request->input("name");
			$subscribe->price = $request->input("price");
			$subscribe->description = $request->input("description");

			$subscribe->save();

			
			return redirect()->route("subscribes.index");
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

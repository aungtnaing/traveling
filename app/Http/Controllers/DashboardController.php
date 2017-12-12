<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;
use DB;
use Input;	
use App\Posts;
use App\Orders;
use App\Ads;
use App\Pictures;

// use Intervention\Image\ImageManager;
// use Intervention\Image\ImageManagerStatic as Image;
// use File;

class DashboardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
		$user = User::find($request->user()->id);

			$latestposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->orderBy('id','DESC')
			->take(10)
			->get();

			$orderlists = Orders::where('active','!=', 1)
						->orderBy('id','DESC')
						->get();


		$adlists = Ads::where('newad', 1)
						->where('active', '!=', 1)
						->orderBy('id','DESC')
						->get();

				$newpiclists = Pictures::where('newpic', 1)
						->orderBy('id','DESC')
						->get();

				

		return view('dashboard.home')
				->with('latestposts', $latestposts)
				->with('user',$user)
				->with('orderlists', $orderlists)
				->with('adlists', $adlists)
				->with('newpiclists', $newpiclists);	
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
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		//
		
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

	public function rrmdir($dir) {
	  if (is_dir($dir)) {
	    $objects = scandir($dir);
	    foreach ($objects as $object) {
	      if ($object != "." && $object != "..") {
	        if (filetype($dir."/".$object) == "dir") 
	           rrmdir($dir."/".$object); 
	        else unlink   ($dir."/".$object);
	      }
	    }
	    reset($objects);
	    rmdir($dir);
	  }
	 }

}

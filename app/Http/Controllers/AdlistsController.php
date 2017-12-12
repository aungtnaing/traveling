<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Category;
use App\Ads;
use DB;
use Input;
use File;
// use Intervention\Image\ImageManager;
// use Intervention\Image\ImageManagerStatic as Image;
// use File;

class AdlistsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{


		$advertises = Ads::All();
    		
         return view("dashboard.admanager.adspannel")
            ->with('advertises', $advertises);

           
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

		$this->validate($request,[
			'photourl1' => 'required',
			'adname' => 'required',
			
					'phoneno' => 'required|max:255',
					'address' => 'required|max:500',
					
			]);


		$ad = new Ads();

		$imagePath = public_path() . '/images/ads/';
		$lastid = DB::table('ads')->select('id')->orderBy('id', 'DESC')->first();


		if($lastid!=null)
		{
			$lastid = $lastid->id + 1;
		}
		else
		{
			$lastid = 1;	
		}
		$directory = $lastid;
		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
	
		$photourl1 = "";
		
		
		if(Input::file('photourl1')!="")
		{


			if(Input::file('photourl1')->isValid())
				{


				$name =  time()  . '-ad' . '.' . $input['photourl1']->getClientOriginalExtension();


				File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
				
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to 

				//given path
				$photourl1 = "/images/ads/" . $directory . '/photos/' .  $name;

				


			}

		}



				$ad->userid = $request->user()->id;
					$ad->photourl1 = $photourl1;
						$ad->urllink = $request->input("urllink");

						

				$ad->adid = $request->input("adid");
				$ad->adname = $request->input("adname");
				$ad->email = $request->input("email");
				$ad->phoneno = $request->input("phoneno");
				$ad->address = $request->input("address");
				$ad->city = $request->input("city");
				$ad->description = $request->input("description");
				$ad->active = 0;
		
			

		$ad->save();
		$categorys = Category::All();
			// echo "erwror";
			// 		die();
		return view('pages.acknoledgeform')->with('categorys', $categorys);
		
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
			$ad = Ads::find($id);

		return view('dashboard.admanager.adedit')->with('ad',$ad);
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


		$ad = Ads::find($id);

			$imagePath = public_path() . '/images/ads/';
		$directory = $id;

		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
		
		$photourl1 = $ad->photourl1;
	
		
		if(Input::file('photourl1')!="")
		{
	
			if(Input::file('photourl1')->isValid())
			{

				
				if($photourl1!="")
				{
					if(file_exists(public_path().$photourl1))
					{
						
				
						unlink(public_path() . $photourl1);
					}
				}



				$name =  time()  . '-ad' . '.' . $input['photourl1']->getClientOriginalExtension();
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/ads/" . $directory . '/photos/' .  $name;
			
			}

		}



		$ad->urllink = $request->input("urllink");
		// $ad->startdate = $request->input("startdate");
		// $ad->enddate = $request->input("enddate");
	
	
		
		$ad->active = 0;
		if (Input::get('active') === ""){$ad->active = 1;}

		$ad->newad = 0;
		if (Input::get('newad') === ""){$ad->newad = 1;}

		
	
		$ad->photourl1 = $photourl1;
		
		
		
		$ad->save();
		
		return redirect()->route("advertises.index");
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

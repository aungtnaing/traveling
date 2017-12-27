<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;
use App\Category;
use App\Whatnews;


use File;
use Input;


class WhatnewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{

				// $categorys = Category::orderBy('id', 'desc')->get();
				
				// return view('pages.joinus')
				// 	->with('categorys', $categorys);


		$whatnewslists = Whatnews::All();
    		
         return view("dashboard.whatnews.whatnewslist")
            ->with("whatnewslists", $whatnewslists);
				
	
		
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	
	public function store(Request $request)
	{
		

		// echo "hello";
		// die();

		$this->validate($request,[
			'businessname' => 'required|max:255',
			'businessemail' => 'required|max:255',
			'businessphone' => 'required|max:255',
			'name' => 'required|max:255',
			'email' => 'required|max:255',
			'phone' => 'required|max:255',
			
			]);


		$whatnew = new Whatnews();

		$imagePath = public_path() . '/images/whatnews/';
		$lastid = DB::table('whatnews')->select('id')->orderBy('id', 'DESC')->first();
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
				$name =  time()  . '-cover' . '.' . $input['photourl1']->getClientOriginalExtension();
				File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
				
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/whatnews/" . $directory . '/photos/' .  $name;

			


			}

		}



		// die();


		$whatnew->businessname = $request->input("businessname");
		$whatnew->businessemail = $request->input("businessemail");
		$whatnew->businessphone = $request->input("businessphone");
	
		$whatnew->address = $request->input("address");
		$whatnew->postalcode = $request->input("postalcode");
				$whatnew->region = $request->input("region");

		$whatnew->city = $request->input("city");
		$whatnew->township = $request->input("township");
		$whatnew->websiteurl = $request->input("websiteurl");
		$whatnew->category = $request->input("category");
		$whatnew->photourl1 = $photourl1;

		$whatnew->name = $request->input("name");
		$whatnew->email = $request->input("email");
		$whatnew->phone = $request->input("phone");
		$whatnew->message = $request->input("message");
		$whatnew->active = 0;
		
		$whatnew->save();
		
		
		

		return redirect('/');
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
			
		$whatnew = Whatnews::find($id);
	
		return view('dashboard.whatnews.whatnewsedit')->with('whatnew', $whatnew);
	
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
		$this->validate($request,[
		'businessname' => 'required|max:255',
			'businessemail' => 'required|max:255',
			'businessphone' => 'required|max:255',
			'name' => 'required|max:255',
			'email' => 'required|max:255',
			'phone' => 'required|max:255',
			]);


		$whatnew = Whatnews::find($id);

			$imagePath = public_path() . '/images/whatnews/';
		$directory = $id;

		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
		
		$photourl1 = $whatnew->photourl1;
	
		
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



				$name =  time()  . '-cover' . '.' . $input['photourl1']->getClientOriginalExtension();
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/whatnews/" . $directory . '/photos/' .  $name;
			
			}

		}

	
$whatnew->businessname = $request->input("businessname");
		$whatnew->businessemail = $request->input("businessemail");
		$whatnew->businessphone = $request->input("businessphone");
	
		$whatnew->address = $request->input("address");
		$whatnew->postalcode = $request->input("postalcode");
				$whatnew->region = $request->input("region");

		$whatnew->city = $request->input("city");
		$whatnew->township = $request->input("township");
		$whatnew->websiteurl = $request->input("websiteurl");
		$whatnew->category = $request->input("category");
		$whatnew->photourl1 = $photourl1;

		$whatnew->name = $request->input("name");
		$whatnew->email = $request->input("email");
		$whatnew->phone = $request->input("phone");
		$whatnew->message = $request->input("message");
$whatnew->active = 0;
		if (Input::get('active') === ""){$whatnew->active = 1;}

	
		
		
		$whatnew->save();
		
		
		
	
		
		return redirect()->route("whatnew.index");
	
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
		// echo "string";
		// die();
		$whatnew = Whatnews::find($id);
		
		if($whatnew->photourl1!="")
		{
			if(file_exists(public_path() .$whatnew->photourl1))
			{
				unlink(public_path() . $whatnew->photourl1);
			}
		}


		Whatnews::destroy($id);

		return redirect()->route("whatnew.index");
	}



}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;

use App\Authors;
use Input;
use File;

class AuthorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$authors = Authors::All();

		return view("dashboard.authors.authorspannel")
		->with("authors", $authors);
	}

	
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		
		
		return view("dashboard.authors.authorcreate");
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		

		$this->validate($request,[

			'name' => 'required',

			]);


		$author = new Authors();

		$imagePath = public_path() . '/images/authors/';
		$lastid = DB::table('authors')->select('id')->orderBy('id', 'DESC')->first();
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


		
		if(Input::file('photourl')!="")
		{
			if(Input::file('photourl')->isValid())
			{
				$name =  time()  . '-photo' . '.' . $input['photourl']->getClientOriginalExtension();
				File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
				
				Input::file('photourl')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/authors/" . $directory . '/photos/' .  $name;




			}

		}


		$author->name = $request->input("name");
		$author->email = $request->input("email");
		$author->phone = $request->input("phone");
		
		$author->bio = $request->input("bio");
		
		$author->photourl = $photourl1;

		
		
		$author->save();
		
		return redirect()->route("authors.index");
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
		
		$author = Authors::find($id);

		return view('dashboard.authors.authoredit')->with('author', $author);
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

			'name' => 'required',
			
			]);


		$author = Authors::find($id);

		$imagePath = public_path() . '/images/authors/';
		$directory = $id;

		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
		
		$photourl1 = $author->photourl;
		
		
		if(Input::file('photourl')!="")
		{

			if(Input::file('photourl')->isValid())
			{

				
				if($photourl1!="")
				{
					if(file_exists(public_path().$photourl1))
					{
						

						unlink(public_path() . $photourl1);
					}
				}



				$name =  time()  . '-photo' . '.' . $input['photourl1']->getClientOriginalExtension();
				Input::file('photourl')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/authors/" . $directory . '/photos/' .  $name;

			}

		}


		

		$author->name = $request->input("name");
		$author->email = $request->input("email");
		$author->phone = $request->input("phone");
		
		$author->bio = $request->input("bio");
		
		$author->photourl = $photourl1;

		
		
		$author->save();
		
		

		
		return redirect()->route("authors.index");
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

		$author = Authors::find($id);
		
		if($author->photourl!="")
		{
			if(file_exists(public_path() .$author->photourl))
			{
				unlink(public_path() . $author->photourl);
			}
		}

		



		
		Authors::destroy($id);

		return redirect()->route("authors.index");
	}
	

	
	


}

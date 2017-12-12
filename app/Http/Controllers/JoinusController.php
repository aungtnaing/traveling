<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;
use App\Category;
use App\Joinus;


use File;
use Input;


class JoinusController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{

				$categorys = Category::orderBy('id', 'desc')->get();
				
				return view('pages.joinus')
					->with('categorys', $categorys);
				
		
		
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
			'fname' => 'required|max:255',
			'lname' => 'required|max:255',
			'email' => 'required|max:255',
			
			]);


		$joinus = new Joinus();

		$imagePath = public_path() . '/images/joinus/';
		$lastid = DB::table('joinus')->select('id')->orderBy('id', 'DESC')->first();
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
		$destinationPath = $imagePath . $directory . '/cv';
	
		$cvf[0] =  "";
		$cvf[1] =  "";
		
		$cvf[2] =  "";
		$cvf[3] =  "";
		$cvf[4] =  "";
		
	
		
		if(Input::file('cv')!="")
		{
			 $num_files = count($_FILES['cv']['tmp_name']);
			 File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);

			 for($i = 0; $i < $num_files; $i++)
			 {


			 	 $tmpFilePath = $_FILES['cv']['tmp_name'][$i];

				  //Make sure we have a filepath
				  if ($tmpFilePath != ""){
				    //Setup our new file path
				    $cvf[$i] = "./images/joinus/" . $directory . '/cv/'  . $_FILES['cv']['name'][$i];

				
						    if(move_uploaded_file($tmpFilePath,  $cvf[$i])) {

						      //Handle other code here

						    }
			
					}

			}
		}


		// die();


		$joinus->fname = $request->input("fname");
		$joinus->lname = $request->input("lname");
		$joinus->email = $request->input("email");
	
		$joinus->age = $request->input("age");
		$joinus->city = $request->input("city");
		$joinus->position = $request->input("age");
		$joinus->salary = $request->input("salary");
		$joinus->startdate = $request->input("startdate");
		$joinus->experience = $request->input("experience");
		$joinus->application = $request->input("application");
	
		$joinus->userid = $request->user()->id;

		$joinus->cv1 = $cvf[0];
		$joinus->cv2 = $cvf[1];

		$joinus->cv3 = $cvf[2];
		$joinus->cv4 = $cvf[3];

		$joinus->cv5 = $cvf[4];
		

		
		
		$joinus->save();
		
		
		$categorys = Category::orderBy('id', 'desc')->get();

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
		Joinus::destroy($id);

		return redirect()->route("joinus.index");
	}



}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;
use App\Category;
use App\Pictures;

use Mail;

use File;
use Input;
use App\Issues;


class PictureuploadsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$pictures = Pictures::All();

		return view("dashboard.pictures.picturesquespannel")
		->with('pictures', $pictures);
		
		
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
		
		$this->validate($request,[
			'photourl1' => 'required',
			'name' => 'required',
			
			'email' => 'required|max:255',
			'phone' => 'required|max:255',
			'subject' => 'required|max:255',
			'message' => 'required|max:1000',		
			]);


		$picture = new Pictures();

		$imagePath = public_path() . '/images/pictures/';
		$lastid = DB::table('pictures')->select('id')->orderBy('id', 'DESC')->first();


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


				$name =  time()  . '-photo' . '.' . $input['photourl1']->getClientOriginalExtension();


				File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
				
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to 

				//given path
				$photourl1 = "/images/pictures/" . $directory . '/photos/' .  $name;

				


			}

		}



		$picture->photourl1 = $photourl1;


		$picture->userid = $request->user()->id;	


		$picture->name = $request->input("name");
		$picture->email = $request->input("email");
		$picture->phone = $request->input("phone");
		$picture->subject = $request->input("subject");
		$picture->message = $request->input("message");
		$picture->issueid = DB::table('issues')->select('id')->orderBy('id', 'DESC')->first();

		$picture->newpic = 1;
		


		$picture->save();
		$categorys = Category::All();

		$data = array(
			'name' => $request->input("name"),
			'email' => $request->input("email"),
			'messagecontent' => $request->input("message"),
			);


		Mail::send('emails.layoutmail', $data, function ($message) use ($data){



			$message->from('picturesquenoreply@gmail.com', $data['email']);

			$message->to('aungtnaing82@gmail.com')->subject('Thanks you for your submitting.')
			->replyTo($data['email']);

		});


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
		$picture = Pictures::find($id);

		return view('dashboard.pictures.pictureedit')->with('picture',$picture);

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
		$picture = Pictures::find($id);


		

		$picture->newpic = 0;
		if (Input::get('newpic') === ""){$picture->newpic = 1;}

		

		
		
		$picture->save();
		
		return redirect()->route("picturesques.index");

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
		Pictures::destroy($id);

		return redirect()->route("picturesques.index");
	}



}

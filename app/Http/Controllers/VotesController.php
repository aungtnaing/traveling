<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Redirect;


use DB;


use App\Votes;
use App\Category;


use Auth;
use Input;
use Session;
use URL;

class VotesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
	

		
		$votes = Votes::All();
		

		return view("dashboard.votes.votespannel")
		->with("votes", $votes);

	
		
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
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		

		$voted = Votes::where('postid', $request->input('postid'))
         				->where('userid', $request->user()->id)
         				->get();

         				if(count($voted)>0)
         				{
$categorys = Category::orderBy('id', 'desc')->get();

			    	return view('pages.alreadyvoted')->with('categorys', $categorys);

    	}
    	else
    	{
    		$this->validate($request,[
			
			'name' => 'required|max:255',
			'email' => 'required|max:255',
			
			]);


		$vote = new Votes();

		
		$vote->name = $request->input('name');
		$vote->email = $request->input('email');

		$vote->userid = $request->user()->id;
		$vote->postid = $request->input('postid');
		$vote->save();
		
		$categorys = Category::orderBy('id', 'desc')->get();

		
    	return view('pages.acknoledgeform')->with('categorys', $categorys);

    	}
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
	
		
		Votes::destroy($id);

		return redirect()->route("votes.index");

		
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	
	
	


}

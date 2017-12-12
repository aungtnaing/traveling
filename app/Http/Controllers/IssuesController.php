<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;

use App\Issues;
use Input;
use File;

class IssuesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$issues = Issues::All();

		return view("dashboard.issues.issuespannel")
		->with("issues", $issues);
	}

	
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		
		
		return view("dashboard.issues.issuecreate");
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


		$issue = new Issues();

	

		$issue->name = $request->input("name");
	
		if (Input::get('active') === '1'){$issue->active = 1;}

		$issue->save();
		
		return redirect()->route("issues.index");
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
		
		$issue = Issues::find($id);

		return view('dashboard.issues.issueedit')->with('issue', $issue);
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


		$issue = Issues::find($id);

		

		$issue->name = $request->input("name");
	
		
		$issue->active = 0;
		if (Input::get('active') === ""){$issue->active = 1;}

		
		
		$issue->save();
		
		

		
		return redirect()->route("issues.index");
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

	
		
		Issues::destroy($id);

		return redirect()->route("issues.index");
	}
	

	
	


}

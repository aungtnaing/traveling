<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Redirect;


use DB;


use App\Comments;

use Auth;
use Input;
use Session;
use URL;

class CommentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		// return Redirect::back()->withErrors(['msg', 'The Message']);
		 // echo $_SERVER['HTTP_REFERER'];
			
			// echo Session::get('backUrl');

		   // return Session::get('backUrl'); ? Session::get('backUrl') : $this->redirectTo;

        // return redirect()->back();
		// echo "<br>";

	

		return Redirect::to(Session::get('backUrl'))->withInput();

	
		
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
		

		$this->validate($request,[
			
			'comment' => 'required|max:1000',
			
			]);


		$comment = new Comments();

		
		$comment->comment = $request->input('comment');
		$comment->userid = $request->user()->id;
		$comment->postid = $request->input('postid');
		$comment->save();
		
		if($request->input('ltype')=="en")
		{
			return redirect()->action('PostsController@postdetails', ['postid' => $request->input('postid')]);
		}
		else 
		{
			return redirect()->action('PostsController@postdetailsmyanmar', ['postid' => $request->input('postid')]);
		}
		// elseif($request->input('ltype')=="envideo")
		// {
		// 	return redirect()->action('PostsController@postdetailsvideo', ['postid' => $request->input('postid')]);
		// }
		// else
		// {
		// 	return redirect()->action('PostsController@postdetailsvideomyanmar', ['postid' => $request->input('postid')]);
		// }
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

		
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	
	
	


}

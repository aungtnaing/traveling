<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;

use App\Posts;
use App\Category;
use App\Replycomments;

use File;
use Input;
use Auth;

class ReplycommentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
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
		
		// echo $request->input('replycomment');
		// die();
		$this->validate($request,[
			
			'replycomment' => 'required|max:1000',
			
			]);


		$replycomment = new Replycomments();

		
		$replycomment->comment = $request->input('replycomment');
		$replycomment->userid = $request->user()->id;
		$replycomment->commentid = $request->input('commentid');
		$replycomment->save();
		
		// if($request->input('ltype')=="en")
		// {
		// 	return redirect()->action('PostsController@postdetails', ['postid' => $request->input('postid')]);
		// }
		// else
		// {
		// 	return redirect()->action('PostsController@postdetailsmyanmar', ['postid' => $request->input('postid')]);
		// }

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
		// return redirect()->action('PostsController@postdetails', ['postid' => $request->input('postid')]);
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

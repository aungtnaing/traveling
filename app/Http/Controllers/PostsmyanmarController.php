<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;

use App\Posts;
use App\Category;
use App\Authors;

use File;
use Input;

class PostsmyanmarController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
		// $posts = Posts::All();
		
		// return view("dashboard.posts.postspannel")
		// ->with("posts", $posts);
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$categorys = Category::orderBy('id', 'desc')->get();
				$authors = Authors::orderBy('id', 'desc')->get();

		return view("dashboard.posts.postmyanmarcreate")->with('categorys',$categorys)
														->with('authors', $authors);

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function projectdetail($projectid)
	{
		
		$project = Projects::find($projectid);
		$categorys = Category::orderBy('id', 'desc')->get();
		return view("pages.projectdetail")->with('project',$project)->with('categorys',$categorys);

	}

	public function projectdetailmyanmar($projectid)
	{
		
		$project = Projects::find($projectid);
		$categorys = Category::orderBy('id', 'desc')->get();
		return view("pages.projectdetailmyanmar")->with('project',$project)->with('categorys',$categorys);

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		

		$this->validate($request,[
			'photourl1' => 'required',
			'photourl2' => 'required',
			'name' => 'required|max:255',
			'description' => 'required|max:50000',
			
			]);


		$post = new Posts();

		$imagePath = public_path() . '/images/posts/';
		$lastid = DB::table('posts')->select('id')->orderBy('id', 'DESC')->first();
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
		$photourl2 = "";
	
		
		if(Input::file('photourl1')!="")
		{
			if(Input::file('photourl1')->isValid())
			{
				$name =  time()  . '-mainslide' . '.' . $input['photourl1']->getClientOriginalExtension();
				File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
				
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/posts/" . $directory . '/photos/' .  $name;

				if(Input::file('photourl2')!="")
				{
					if(Input::file('photourl2')->isValid())
					{
						$name =  time() . '-detail1' . '.' . $input['photourl2']->getClientOriginalExtension();
						Input::file('photourl2')->move($destinationPath, $name); // uploading file to given path
						$photourl2 = "/images/posts/" . $directory . '/photos/' .  $name;
					}
				}
			}

		}


		$post->mname = $request->input("name");
                						$post->zname = $request->input("zname");
		 $post->mgroupname = $request->input("mgroupname");


		$post->msubtitle = $request->input("subtitle");
		$post->caption1 = $request->input("caption1");
	
		$post->mdescription = $request->input("description");

						$post->zdescription = $request->input("zdescription");

		$post->categoryid = $request->input("category");
								$post->authorid = $request->input("author");

		if (Input::get('active') === '1'){$post->active = 1;}
		if (Input::get('mainslide') === '1'){$post->mainslide = 1;}
		if (Input::get('popular') === '1'){$post->popular = 1;}
		$post->userid = $request->user()->id;

		$post->photourl1 = $photourl1;
		$post->photourl2 = $photourl2;
			$post->youtubelink = $request->input("youtubelink");
		
		$post->save();
		return redirect()->route("posts.index");
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
		
		$post = Posts::find($id);
		$categorys = Category::orderBy('id', 'desc')->get();
						$authors = Authors::orderBy('id', 'desc')->get();

		return view('dashboard.posts.posteditmyanmar')->with('post', $post)
													->with('categorys',$categorys)
													->with('authors', $authors);
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
		
			'name' => 'required|max:255',
			'description' => 'required|max:50000',
			
			]);


		$post = Posts::find($id);

		$imagePath = public_path() . '/images/posts/';
		$directory = $id;

		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
		
		$photourl1 = $post->photourl1;
		$photourl2 = $post->photourl2;
	
		
		if(Input::file('photourl1')!="")
		{
			
			// echo "has";
			// die();
			if(Input::file('photourl1')->isValid())
			{

				
				if($photourl1!="")
				{
					if(file_exists(public_path().$photourl1))
					{
						
				
						unlink(public_path() . $photourl1);
					}
				}



				$name =  time()  . '-mainslide' . '.' . $input['photourl1']->getClientOriginalExtension();
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/posts/" . $directory . '/photos/' .  $name;
			
			}

		}

				if(Input::file('photourl2')!="")
				{
					if(Input::file('photourl2')->isValid())
					{

						if($photourl2!="")
						{
							if(file_exists(public_path() .$photourl2))
							{
								unlink(public_path() . $photourl2);
							}
						}
						$name =  time() . '-detail1' . '.' . $input['photourl2']->getClientOriginalExtension();
						Input::file('photourl2')->move($destinationPath, $name); // uploading file to given path
						$photourl2 = "/images/posts/" . $directory . '/photos/' .  $name;
					}
				}

		

		$post->mname = $request->input("name");
		$post->mgroupname = $request->input("mgroupname");
		$post->authorid = $request->input("author");

		$post->zname = $request->input("zname");

		$post->msubtitle = $request->input("subtitle");
		$post->caption1 = $request->input("caption1");
	
		$post->mdescription = $request->input("description");

                				$post->zdescription = $request->input("zdescription");

		
		$post->categoryid = $request->input("category");
		$post->created_at = $request->input("created_at");


		$post->active = 0;
		if (Input::get('active') === ""){$post->active = 1;}

		$post->mainslide = 0;
		if (Input::get('mainslide') === ""){$post->mainslide = 1;}

		$post->popular = 0;
		if (Input::get('popular') === ""){$post->popular = 1;}

		$post->userid = $request->user()->id;

		$post->photourl1 = $photourl1;
		$post->photourl2 = $photourl2;
		
			$post->youtubelink = $request->input("youtubelink");
		$post->save();
				return redirect()->route("posts.index");
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

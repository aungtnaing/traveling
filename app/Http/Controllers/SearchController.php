<?php namespace App\Http\Controllers;


use App\Posts;
use App\Category;

use View;
use Config;
use Illuminate\Http\Request;





class SearchController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
	}



	public function searching(Request $request)
	{
		$postlists = Posts::Where('name', $request->input("info"))
							->orWhere('name', 'like', '%' . $request->input("info") . '%')
							->orderBy('id','DESC')			
							->paginate(4);


		
		if(count($postlists) > 0)
		{

		

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', $postlists[0]->category->id)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
						$categorys = Category::All();

			return view('pages.search')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);

		}

		$categorys = Category::Where('name', $request->input("info"))
							->orWhere('name', 'like', '%' . $request->input("info") . '%')->get();


		if(count($categorys) > 0)
		{

			
			$postlists = Posts::where('active',1)
			->where('categoryid', $categorys[0]->id)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', $categorys[0]->id)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			$categorys = Category::All();


			return view('pages.search')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);

		}
		

		
					$categorys = Category::All();

		$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 1)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();

		return view('pages.search')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);

	}

	

	

}



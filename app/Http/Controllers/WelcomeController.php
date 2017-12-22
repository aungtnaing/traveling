<?php namespace App\Http\Controllers;


use App\Category;
use App\Posts;

use View;
use Config;

use App\Ads;

class WelcomeController extends Controller {

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
		
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	

		$mainslides = Posts::where('active',1)
			->where('mainslide', 1)
			->where('name','!=','')
			->orderBy('id','DESC')
			->get();


		$trvelsectorposts = Posts::where('active',1)
			->where('categoryid', 1)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();


		$videoposts = Posts::where('active',1)
			->where('categoryid', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();

			$specialfeatures = Posts::where('active',1)
			->where('categoryid', 15)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(8)
			->get();

				$reviews = Posts::where('active',1)
			->where('categoryid', 8)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$latestblogs = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();


		$categorys = Category::All();

		
		$ad1s = Ads::where('adid', 'ad1')
				->where('active', 1)
				->get();


		$ad2s = Ads::where('adid', 'ad2')
				->where('active', 1)
				->get();
		

		return view('pages.home')
		->with('travelsectorposts', $trvelsectorposts)
		->with('videoposts', $videoposts)
		->with('specialfeatures', $specialfeatures)
		->with('reviews', $reviews)
		->with('latestblogs', $latestblogs)
		->with('categorys', $categorys)
		->with('mainslides', $mainslides)
		->with('ad1s', $ad1s)
		->with('ad2s', $ad2s);
		 	
	}

	public function myanmarindex()
	{

		
		$categorys = Category::orderBy('id', 'desc')->get();

		return view('pages.homemyanmar')
			->with('categorys', $categorys);
		 	
	}

	

}



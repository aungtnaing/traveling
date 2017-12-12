<?php namespace App\Http\Controllers;


use App\Posts;
use App\Category;

use View;
use Config;
use Illuminate\Http\Request;





class LanguageController extends Controller {

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



	public function changemn()
	{
	
		$a = $_SERVER['HTTP_REFERER'];
		
		// $page = "pages.homemyanmar";
		// 
		if (strpos($a, 'about') !== false)
		{
			
			 return redirect('aboutusmyanmar');
		}
		if (strpos($a, 'advertisewithus') !== false)
		{
			 return redirect('advertisewithusmyanmar');
		}
		if (strpos($a, 'contactus') !== false)
		{
			 return redirect('contactusmyanmar');
		}

		if (strpos($a, 'privacypolicy') !== false)
		{
		
			 return redirect('privacypolicymyanmar');
		}
		if (strpos($a, 'termscondation') !== false)
		{
			 return redirect('termscondationmyanmar');
		}
		if (strpos($a, 'postlists') !== false)
		{
				$var = explode("/", $a);
			 
			$catid = $var[sizeof($var)-1];

			 // return redirect('postlistsmyanmar', $catid);
			// return redirect('postlistsmyanmar', ['categoryid' => $catid]);
			 // return redirect()->action(
				//     'postlistsmyanmar', ['categoryid' => $catid]
				// );
			 return redirect()->route('postlistsmyanmar', ['categoryid' => $catid]);
			// return route('postlistsmyanmar', ['categoryid' => $catid]);
			// return redirect()->route('postlistsmyanmar', $catid);
			// return redirect()->route('postlistsmyanmar')->with('categoryid', $catid);

		}
			if (strpos($a, 'storelocator') !== false)
		{
			
			 return redirect('storelocatormyanmar');
		}
		if (strpos($a, 'magazine') !== false)
		{
			 return redirect('mn/magazine');
		}
		if (strpos($a, 'booking') !== false)
		{
			 return redirect('booking');
		}



		if (strpos($a, 'postdetails') !== false)
		{
			$var = explode("/", $a);
			 
			$postid = $var[sizeof($var)-1];

			return redirect()->action(
				    'PostsController@postdetailsmyanmar', ['postid' => $postid]
				);
		
		}

		if (strpos($a, 'joinus') !== false)
		{
			
			 return redirect('joinus');
		}
		if (strpos($a, 'bookstore') !== false)
		{
			 return redirect('bookstoremyanmar');	
		}
		if (strpos($a, 'checkouts') !== false)
		{
			 return redirect('checkoutsmyanmar');
		}

		if (strpos($a, 'subscribecheckouts') !== false)
		{
			$var = explode("/", $a);
			 
			$bookid = $var[sizeof($var)-1];

			return redirect()->action(
				    'CheckoutmyanmarController@subscribemyanmarindex', ['bookid' => $bookid]
				);
		
		}



		$mainslides = Posts::where('active',1)
			->where('mainslide', 1)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->get();


		$trvelsectorposts = Posts::where('active',1)
			->where('categoryid', 1)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();

	$videoposts = Posts::where('active',1)
			->where('categoryid', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();


		$specialfeatures = Posts::where('active',1)
			->where('categoryid', 12)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(8)
			->get();


				$reviews = Posts::where('active',1)
			->where('categoryid', 8)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

	$latestblogs = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
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


              $thetalks = Posts::where('active',1)
			->where('categoryid', 14)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(2)
			->get();


		

		return view('pages.homemyanmar')
		->with('travelsectorposts', $trvelsectorposts)
		->with('videoposts', $videoposts)
		->with('specialfeatures', $specialfeatures)
		->with('reviews', $reviews)
		->with('latestblogs', $latestblogs)
		->with('categorys', $categorys)
		->with('mainslides', $mainslides)
		->with('ad1s', $ad1s)
		->with('ad2s', $ad2s)
                ->with('thetalks', $thetalks);
		
		 	
	}

	public function changeen()
	{
		
		$a = $_SERVER['HTTP_REFERER'];
		
		// $page = "pages.homemyanmar";
		// 
if (strpos($a, 'magazine') !== false)
		{
			 return redirect('magazine');
		}
		if (strpos($a, 'aboutusmyanmar') !== false)
		{
			
			 return redirect('aboutus');
		}
		if (strpos($a, 'advertisewithusmyanmar') !== false)
		{
			 return redirect('advertisewithus');
		}
		if (strpos($a, 'contactusmyanmar') !== false)
		{
			 return redirect('contactus');
		}

		if (strpos($a, 'privacypolicymyanmar') !== false)
		{
		
			 return redirect('privacypolicy');
		}
		if (strpos($a, 'termscondationmyanmar') !== false)
		{
			 return redirect('termscondation');
		}
		if (strpos($a, 'postlistsmyanmar') !== false)
		{
				$var = explode("/", $a);
			 
			$catid = $var[sizeof($var)-1];

			 // return redirect('postlistsmyanmar', $catid);
			// return redirect('postlistsmyanmar', ['categoryid' => $catid]);
			 // return redirect()->action(
				//     'postlistsmyanmar', ['categoryid' => $catid]
				// );
			 return redirect()->route('postlists', ['categoryid' => $catid]);
			// return route('postlistsmyanmar', ['categoryid' => $catid]);
			// return redirect()->route('postlistsmyanmar', $catid);
			// return redirect()->route('postlistsmyanmar')->with('categoryid', $catid);

		}
			if (strpos($a, 'storelocatormyanmar') !== false)
		{
			
			 return redirect('storelocator');
		}
		if (strpos($a, 'mn/magazine') !== false)
		{
			 return redirect('magazine');
		}
		if (strpos($a, 'booking') !== false)
		{
			 return redirect('booking');
		}



		if (strpos($a, 'postdetailsmyanmar') !== false)
		{
			$var = explode("/", $a);
			 
			$postid = $var[sizeof($var)-1];

			return redirect()->action(
				    'PostsController@postdetails', ['postid' => $postid]
				);
		
		}

		if (strpos($a, 'joinus') !== false)
		{
			
			 return redirect('joinus');
		}
		if (strpos($a, 'bookstoremyanmar') !== false)
		{
			 return redirect('bookstore');
		}
		if (strpos($a, 'checkoutsmyanmar') !== false)
		{
			 return redirect('checkouts');
		}

		if (strpos($a, 'subscribemyanmarcheckouts') !== false)
		{
			$var = explode("/", $a);
			 
			$bookid = $var[sizeof($var)-1];

			return redirect()->action(
				    'CheckoutController@subscribeindex', ['bookid' => $bookid]
				);
		
		}


		
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
			->where('categoryid', 12)
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

 $thetalks = Posts::where('active',1)
			->where('categoryid', 14)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(2)
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
		->with('ad2s', $ad2s)
                ->with('thetalks', $thetalks);
		 	
	}

	public function homemyanmar()
	{
		
	$mainslides = Posts::where('active',1)
			->where('mainslide', 1)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->get();


		$trvelsectorposts = Posts::where('active',1)
			->where('categoryid', 1)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();

	$videoposts = Posts::where('active',1)
			->where('categoryid', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();


		$specialfeatures = Posts::where('active',1)
			->where('categoryid', 3)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();


				$reviews = Posts::where('active',1)
			->where('categoryid', 4)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

	$latestblogs = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();

$thetalks = Posts::where('active',1)
			->where('categoryid', 14)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(2)
			->get();
	
		$categorys = Category::All();



		$ad1s = Ads::where('adid', 'ad1')
				->where('active', 1)
				->get();


		$ad2s = Ads::where('adid', 'ad2')
				->where('active', 1)
				->get();
		

		return view('pages.homemyanmar')
		->with('travelsectorposts', $trvelsectorposts)
		->with('videoposts', $videoposts)
		->with('specialfeatures', $specialfeatures)
		->with('reviews', $reviews)
		->with('latestblogs', $latestblogs)
		->with('categorys', $categorys)
		->with('mainslides', $mainslides)
		->with('ad1s', $ad1s)
		->with('ad2s', $ad2s)
                ->with('thetalks', $thetalks);
		
		 	
	}

	

}



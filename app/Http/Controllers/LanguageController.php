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
		

		if (strpos($a, 'magazine') !== false)
		{
			return redirect('mn/magazine');
		}

		if (strpos($a, 'postdetails') !== false)
		{
			$var = explode("/", $a);

			$postid = $var[sizeof($var)-1];

			return redirect()->action(
				'PostsController@postdetailsmyanmar', ['postid' => $postid]
				);

		}


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


		if (strpos($a, 'postdetailsmyanmar') !== false)
		{
			$var = explode("/", $a);
			 
			$postid = $var[sizeof($var)-1];

			return redirect()->action(
				    'PostsController@postdetails', ['postid' => $postid]
				);
		
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

		

	}

	public function homemyanmar()
	{
		

		

	}

	

}



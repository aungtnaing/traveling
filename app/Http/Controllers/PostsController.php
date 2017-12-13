<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;

use App\Posts;
use App\Category;
use App\Authors;
use App\Issues;

use File;
use Input;
use Auth;

class PostsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
		if(Auth::user()->roleid==1 || Auth::user()->roleid==2 || Auth::user()->roleid==3)

		{
			$posts = Posts::All();
		}
		else
		{
			$posts = Posts::where('userid', Auth::user()->id)->get();
		}

		return view("dashboard.posts.postspannel")
		->with("posts", $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function postdetails($postid)
	{
		
		$postdetail = Posts::find($postid);
		$categorys = Category::orderBy('id', 'desc')->get();
		$strfbody = "";
		$strsbody = "";
		$strlbody = "";

		
		if(strlen($postdetail->description)>650)
		{

			$strfbody = $this->strCutting($postdetail->description, ".", 650);
			

			if(strlen($postdetail->description)>1000)
			{
				$strsbody = $this->strCutting(substr($postdetail->description, strlen($strfbody) , strlen($postdetail->description)), ".", 500);
				
				$strlbody = substr($postdetail->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail->description));

			}				
		}
		else
		{

			$strfbody = $postdetail->description;
		}

		$popularposts = Posts::where('active',1)
		->where('popular',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();

		$recentposts = Posts::where('active',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();


		return view("pages.postdetails")
		->with('postdetail',$postdetail)
		->with('categorys',$categorys)
		->with('fbody', $strfbody)
		->with('sbody', $strsbody)
		->with('lbody', $strlbody)
		->with('popularposts', $popularposts)
		->with('recentposts', $recentposts);


	}

/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
public function thetalks($postname)
{

	
	$postdetail = Posts::where('name','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	
	
	if(strlen($postdetail[0]->description)>650)
	{


		$strfbody = $this->strCutting($postdetail[0]->description, ".", 650);
		

		if(strlen($postdetail[0]->description)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->description, strlen($strfbody) , strlen($postdetail[0]->description)), ".", 500);
			
			$strlbody = substr($postdetail[0]->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->description));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->description;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('name','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('name','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetails")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function travelsectorupdate($postname)
	{

		
		$postdetail = Posts::where('name','=',$postname)
		->get();
		$categorys = Category::orderBy('id', 'desc')->get();
		$strfbody = "";
		$strsbody = "";
		$strlbody = "";

		
		
		if(strlen($postdetail[0]->description)>650)
		{


			$strfbody = $this->strCutting($postdetail[0]->description, ".", 650);
			

			if(strlen($postdetail[0]->description)>1000)
			{
				$strsbody = $this->strCutting(substr($postdetail[0]->description, strlen($strfbody) , strlen($postdetail[0]->description)), ".", 500);
				
				$strlbody = substr($postdetail[0]->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->description));

			}				
		}
		else
		{

			$strfbody = $postdetail[0]->description;
		}

		$popularposts = Posts::where('active',1)
		->where('popular',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();

		$recentposts = Posts::where('active',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();


		return view("pages.postdetails")
		->with('postdetail',$postdetail[0])
		->with('categorys',$categorys)
		->with('fbody', $strfbody)
		->with('sbody', $strsbody)
		->with('lbody', $strlbody)
		->with('popularposts', $popularposts)
		->with('recentposts', $recentposts);

	}

	public function infocus($postname)
	{

		
		$postdetail = Posts::where('name','=',$postname)
		->get();
		$categorys = Category::orderBy('id', 'desc')->get();
		$strfbody = "";
		$strsbody = "";
		$strlbody = "";

		
		
		if(strlen($postdetail[0]->description)>650)
		{

			$strfbody = $this->strCutting($postdetail[0]->description, ".", 650);
			

			if(strlen($postdetail[0]->description)>1000)
			{
				$strsbody = $this->strCutting(substr($postdetail[0]->description, strlen($strfbody) , strlen($postdetail[0]->description)), ".", 500);
				
				$strlbody = substr($postdetail[0]->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->description));

			}				
		}
		else
		{

			$strfbody = $postdetail[0]->description;
		}

		$popularposts = Posts::where('active',1)
		->where('popular',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();

		$recentposts = Posts::where('active',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();


		return view("pages.postdetails")
		->with('postdetail',$postdetail[0])
		->with('categorys',$categorys)
		->with('fbody', $strfbody)
		->with('sbody', $strsbody)
		->with('lbody', $strlbody)
		->with('popularposts', $popularposts)
		->with('recentposts', $recentposts);

	}


	public function latestblog($postname)
	{

		
		$postdetail = Posts::where('name','=',$postname)
		->get();
		$categorys = Category::orderBy('id', 'desc')->get();
		$strfbody = "";
		$strsbody = "";
		$strlbody = "";

		
		
		if(strlen($postdetail[0]->description)>650)
		{

			$strfbody = $this->strCutting($postdetail[0]->description, ".", 650);
			

			if(strlen($postdetail[0]->description)>1000)
			{
				$strsbody = $this->strCutting(substr($postdetail[0]->description, strlen($strfbody) , strlen($postdetail[0]->description)), ".", 500);
				
				$strlbody = substr($postdetail[0]->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->description));

			}				
		}
		else
		{

			$strfbody = $postdetail[0]->description;
		}

		$popularposts = Posts::where('active',1)
		->where('popular',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();

		$recentposts = Posts::where('active',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();


		return view("pages.postdetails")
		->with('postdetail',$postdetail[0])
		->with('categorys',$categorys)
		->with('fbody', $strfbody)
		->with('sbody', $strsbody)
		->with('lbody', $strlbody)
		->with('popularposts', $popularposts)
		->with('recentposts', $recentposts);

	}

	public function standout($postname)
	{

		
		$postdetail = Posts::where('name','=',$postname)
		->get();
		$categorys = Category::orderBy('id', 'desc')->get();
		$strfbody = "";
		$strsbody = "";
		$strlbody = "";

		
		
		if(strlen($postdetail[0]->description)>650)
		{

			$strfbody = $this->strCutting($postdetail[0]->description, ".", 650);
			

			if(strlen($postdetail[0]->description)>1000)
			{
				$strsbody = $this->strCutting(substr($postdetail[0]->description, strlen($strfbody) , strlen($postdetail[0]->description)), ".", 500);
				
				$strlbody = substr($postdetail[0]->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->description));

			}				
		}
		else
		{

			$strfbody = $postdetail[0]->description;
		}

		$popularposts = Posts::where('active',1)
		->where('popular',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();

		$recentposts = Posts::where('active',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();


		return view("pages.postdetails")
		->with('postdetail',$postdetail[0])
		->with('categorys',$categorys)
		->with('fbody', $strfbody)
		->with('sbody', $strsbody)
		->with('lbody', $strlbody)
		->with('popularposts', $popularposts)
		->with('recentposts', $recentposts);

	}
	public function picturesquefun($postname)
	{

		
		$postdetail = Posts::where('name','=',$postname)
		->get();

		$groupposts = Posts::where('active',1)
		->where('categoryid','=', 6)
		->where('name','!=', $postdetail[0]->name)
		->where('groupname', $postdetail[0]->groupname)
		->orderBy('id','DESC')
		->get();

		// if($postdetail[0]->groupname === 'null')
		// {

		// 	$exposures = Posts::where('active',1)
		// 	->where('categoryid','=', 6)
		// 	->where('name','!=', $postdetail[0]->name)
		// 	->orderBy('id','DESC')
		// 	->take(4)
		// 	->get();

		// }
		// else
		// {
		// 	$exposures = Posts::where('active',1)
		// 	->where('categoryid','=', 6)
		// 	->where('groupname','!=', $postdetail[0]->groupname)			
		// 	->orderBy('id','DESC')
		// 	->take(4)
		// 	->get();

		// }



		$exposures = DB::table('posts')->where('active',1)
	->where('categoryid','=', 6)
	->where('groupname','!=', $postdetail[0]->groupname)->distinct()->get(['groupname']);

		$count = count($exposures);
		$exposure1 = "";
		$exposure2 = "";
		$exposure3 = "";
		$exposure4 = "";

		$i = $count - 1;
		if($i > 0)
		{
			$exposure1 = Posts::where('active',1)
	->where('categoryid','=', 6)
	->where('groupname','=', $exposures[$i]->groupname)			
	->orderBy('id','DESC')
	->take(1)
	->get();
		}

		$i = $count - 2;
		if($i >= 0)
		{
			$exposure2 = Posts::where('active',1)
	->where('categoryid','=', 6)
	->where('groupname','=', $exposures[$i]->groupname)			
	->orderBy('id','DESC')
	->take(1)
	->get();
		}

			$i = $count - 3;
		if($i >= 0)
		{
			$exposure3 = Posts::where('active',1)
	->where('categoryid','=', 6)
	->where('groupname','=', $exposures[$i]->groupname)			
	->orderBy('id','DESC')
	->take(1)
	->get();
		}


	$i = $count - 4;
		if($i >= 0)
		{
			$exposure4 = Posts::where('active',1)
	->where('categoryid','=', 6)
	->where('groupname','=', $exposures[$i]->groupname)			
	->orderBy('id','DESC')
	->take(1)
	->get();
		}




		$categorys = Category::orderBy('id', 'desc')->get();

		$strfbody = "";
		$strsbody = "";
		$strlbody = "";

		
		
		if(strlen($postdetail[0]->description)>650)
		{

			$strfbody = $this->strCutting($postdetail[0]->description, ".", 650);
			

			if(strlen($postdetail[0]->description)>1000)
			{
				$strsbody = $this->strCutting(substr($postdetail[0]->description, strlen($strfbody) , strlen($postdetail[0]->description)), ".", 500);
				
				$strlbody = substr($postdetail[0]->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->description));

			}				
		}
		else
		{

			$strfbody = $postdetail[0]->description;
		}

		

		$popularposts = Posts::where('active',1)
		->where('popular',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();

		$recentposts = Posts::where('active',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();


		return view("pages.picturesquedetail")
		->with('postdetail',$postdetail[0])
		->with('categorys',$categorys)
		->with('fbody', $strfbody)
		->with('sbody', $strsbody)
		->with('lbody', $strlbody)
		->with('popularposts', $popularposts)
		->with('recentposts', $recentposts)
		->with('groupposts', $groupposts)
		->with('exposures', $exposures)
		->with('exposure1', $exposure1[0])
	->with('exposure2', $exposure2[0])
	->with('exposure3', $exposure3[0])
	->with('exposure4', $exposure4[0]);
	}


	public function picturesquefundetail($postname)
	{

		
		$postdetail = Posts::where('name','=',$postname)
		->get();
		$categorys = Category::orderBy('id', 'desc')->get();
		$strfbody = "";
		$strsbody = "";
		$strlbody = "";

		
		if(strlen($postdetail[0]->description)>650)
		{

			$strfbody = $this->strCutting($postdetail[0]->description, ".", 650);
			

			if(strlen($postdetail[0]->description)>1000)
			{
				$strsbody = $this->strCutting(substr($postdetail[0]->description, strlen($strfbody) , strlen($postdetail[0]->description)), ".", 500);
				
				$strlbody = substr($postdetail[0]->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->description));

			}				
		}
		else
		{

			$strfbody = $postdetail[0]->description;
		}

		$popularposts = Posts::where('active',1)
		->where('popular',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();

		$recentposts = Posts::where('active',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();
					$issue = Issues::orderBy('id','desc')->first();


		return view("pages.picturesquelastdetail")
		->with('postdetail',$postdetail[0])
		->with('categorys',$categorys)
		->with('fbody', $strfbody)
		->with('sbody', $strsbody)
		->with('lbody', $strlbody)
		->with('popularposts', $popularposts)
		->with('recentposts', $recentposts)
		->with('issue', $issue);

	}	



	public function snapshots($postname)
	{

		
		$postdetail = Posts::where('name','=',$postname)
		->get();
		$categorys = Category::orderBy('id', 'desc')->get();
		$strfbody = "";
		$strsbody = "";
		$strlbody = "";

		
		
		if(strlen($postdetail[0]->description)>650)
		{

			$strfbody = $this->strCutting($postdetail[0]->description, ".", 650);
			

			if(strlen($postdetail[0]->description)>1000)
			{
				$strsbody = $this->strCutting(substr($postdetail[0]->description, strlen($strfbody) , strlen($postdetail[0]->description)), ".", 500);
				
				$strlbody = substr($postdetail[0]->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->description));

			}				
		}
		else
		{

			$strfbody = $postdetail[0]->description;
		}

		$popularposts = Posts::where('active',1)
		->where('popular',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();

		$recentposts = Posts::where('active',1)
		->where('categoryid','!=', 2)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(4)
		->get();


		return view("pages.postdetails")
		->with('postdetail',$postdetail[0])
		->with('categorys',$categorys)
		->with('fbody', $strfbody)
		->with('sbody', $strsbody)
		->with('lbody', $strlbody)
		->with('popularposts', $popularposts)
		->with('recentposts', $recentposts);

	}

/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
public function exposure($postname)
{

	
	$postdetail = Posts::where('name','=',$postname)
	->get();

	$groupposts = Posts::where('active',1)
	->where('categoryid','=', 5)
	->where('name','!=', $postdetail[0]->name)
	->where('groupname', $postdetail[0]->groupname)
	->orderBy('id','DESC')
	->get();

	


		$exposures = DB::table('posts')->where('active',1)
	->where('categoryid','=', 5)
	->where('groupname','!=', $postdetail[0]->groupname)->distinct()->get(['groupname']);

		$count = count($exposures);
		$exposure1 = "";
		$exposure2 = "";
		$exposure3 = "";
		$exposure4 = "";

		$i = $count - 1;
		if($i > 0)
		{
			$exposure1 = Posts::where('active',1)
	->where('categoryid','=', 5)
	->where('groupname','=', $exposures[$i]->groupname)			
	->orderBy('id','DESC')
	->take(1)
	->get();
		}

		$i = $count - 2;
		if($i >= 0)
		{
			$exposure2 = Posts::where('active',1)
	->where('categoryid','=', 5)
	->where('groupname','=', $exposures[$i]->groupname)			
	->orderBy('id','DESC')
	->take(1)
	->get();
		}

			$i = $count - 3;
		if($i >= 0)
		{
			$exposure3 = Posts::where('active',1)
	->where('categoryid','=', 5)
	->where('groupname','=', $exposures[$i]->groupname)			
	->orderBy('id','DESC')
	->take(1)
	->get();
		}


	$i = $count - 4;
		if($i >= 0)
		{
			$exposure4 = Posts::where('active',1)
	->where('categoryid','=', 5)
	->where('groupname','=', $exposures[$i]->groupname)			
	->orderBy('id','DESC')
	->take(1)
	->get();
		}





	$categorys = Category::orderBy('id', 'desc')->get();

	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	
	
	if(strlen($postdetail[0]->description)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->description, ".", 650);
		

		if(strlen($postdetail[0]->description)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->description, strlen($strfbody) , strlen($postdetail[0]->description)), ".", 500);
			
			$strlbody = substr($postdetail[0]->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->description));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->description;
	}

	

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('name','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('name','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.exposuredetails")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts)
	->with('groupposts', $groupposts)
	->with('exposures', $exposures)
	->with('exposure1', $exposure1[0])
	->with('exposure2', $exposure2[0])
	->with('exposure3', $exposure3[0])
	->with('exposure4', $exposure4[0]);
	

}

public function exposuredetail($postname)
{

	
	$postdetail = Posts::where('name','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	
	if(strlen($postdetail[0]->description)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->description, ".", 650);
		

		if(strlen($postdetail[0]->description)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->description, strlen($strfbody) , strlen($postdetail[0]->description)), ".", 500);
			
			$strlbody = substr($postdetail[0]->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->description));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->description;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('name','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('name','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.exposurelastdetail")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}	

public function deperature($postname)
{

	
	$postdetail = Posts::where('name','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	
	
	if(strlen($postdetail[0]->description)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->description, ".", 650);
		

		if(strlen($postdetail[0]->description)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->description, strlen($strfbody) , strlen($postdetail[0]->description)), ".", 500);
			
			$strlbody = substr($postdetail[0]->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->description));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->description;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('name','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('name','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetails")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}


public function checkin($postname)
{

	
	$postdetail = Posts::where('name','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	
	
	if(strlen($postdetail[0]->description)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->description, ".", 650);
		

		if(strlen($postdetail[0]->description)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->description, strlen($strfbody) , strlen($postdetail[0]->description)), ".", 500);
			
			$strlbody = substr($postdetail[0]->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->description));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->description;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('name','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('name','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetails")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}
public function underground($postname)
{

	
	$postdetail = Posts::where('name','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	
	
	if(strlen($postdetail[0]->description)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->description, ".", 650);
		

		if(strlen($postdetail[0]->description)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->description, strlen($strfbody) , strlen($postdetail[0]->description)), ".", 500);
			
			$strlbody = substr($postdetail[0]->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->description));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->description;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('name','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('name','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetails")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}

public function arrival($postname)
{

	
	$postdetail = Posts::where('name','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	
	
	if(strlen($postdetail[0]->description)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->description, ".", 650);
		

		if(strlen($postdetail[0]->description)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->description, strlen($strfbody) , strlen($postdetail[0]->description)), ".", 500);
			
			$strlbody = substr($postdetail[0]->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->description));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->description;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('name','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('name','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetails")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}

/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

public function postdetailsmyanmar($postid)
{
	
	$postdetail = Posts::find($postid);
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	$strzbody = "";

	if(strlen($postdetail->zdescription)>650)
	{

		$strzbody = $this->strCutting($postdetail->zdescription, "။", 650);
		
		
	}
	else
	{

		$strzbody = $postdetail->zdescription;
	}

	
	if(strlen($postdetail->mdescription)>650)
	{

		$strfbody = $this->strCutting($postdetail->mdescription, "။", 650);
		

		if(strlen($postdetail->mdescription)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail->mdescription, strlen($strfbody) , strlen($postdetail->mdescription)), "။", 500);
			
			$strlbody = substr($postdetail->mdescription, strlen($strfbody) + strlen($strsbody) , strlen($postdetail->mdescription));

		}				
	}
	else
	{

		$strfbody = $postdetail->mdescription;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetailsmyanmar")
	->with('postdetail',$postdetail)
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('zbody', $strzbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}


public function thetalksmn($postname)
{
	
	
	$postdetail = Posts::where('mname','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	$strzbody = "";

	if(strlen($postdetail[0]->zdescription)>650)
	{

		$strzbody = $this->strCutting($postdetail[0]->zdescription, "။", 650);
		
		
	}
	else
	{

		$strzbody = $postdetail[0]->zdescription;
	}

	
	if(strlen($postdetail[0]->mdescription)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->mdescription, "။", 650);
		

		if(strlen($postdetail[0]->mdescription)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->mdescription, strlen($strfbody) , strlen($postdetail[0]->mdescription)), "။", 500);
			
			$strlbody = substr($postdetail[0]->mdescription, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->mdescription));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->mdescription;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetailsmyanmar")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('zbody', $strzbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}	


public function deperaturemn($postname)
{
	
	
	$postdetail = Posts::where('mname','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	$strzbody = "";

	if(strlen($postdetail[0]->zdescription)>650)
	{

		$strzbody = $this->strCutting($postdetail[0]->zdescription, "။", 650);
		
		
	}
	else
	{

		$strzbody = $postdetail[0]->zdescription;
	}

	
	if(strlen($postdetail[0]->mdescription)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->mdescription, "။", 650);
		

		if(strlen($postdetail[0]->mdescription)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->mdescription, strlen($strfbody) , strlen($postdetail[0]->mdescription)), "။", 500);
			
			$strlbody = substr($postdetail[0]->mdescription, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->mdescription));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->mdescription;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetailsmyanmar")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('zbody', $strzbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}	


public function standoutmn($postname)
{
	
	
	$postdetail = Posts::where('mname','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	$strzbody = "";

	if(strlen($postdetail[0]->zdescription)>650)
	{

		$strzbody = $this->strCutting($postdetail[0]->zdescription, "။", 650);
		
		
	}
	else
	{

		$strzbody = $postdetail[0]->zdescription;
	}

	
	if(strlen($postdetail[0]->mdescription)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->mdescription, "။", 650);
		

		if(strlen($postdetail[0]->mdescription)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->mdescription, strlen($strfbody) , strlen($postdetail[0]->mdescription)), "။", 500);
			
			$strlbody = substr($postdetail[0]->mdescription, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->mdescription));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->mdescription;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetailsmyanmar")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('zbody', $strzbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}	

public function infocusmn($postname)
{
	
	
	$postdetail = Posts::where('mname','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	$strzbody = "";

	if(strlen($postdetail[0]->zdescription)>650)
	{

		$strzbody = $this->strCutting($postdetail[0]->zdescription, "။", 650);
		
		
	}
	else
	{

		$strzbody = $postdetail[0]->zdescription;
	}

	
	if(strlen($postdetail[0]->mdescription)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->mdescription, "။", 650);
		

		if(strlen($postdetail[0]->mdescription)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->mdescription, strlen($strfbody) , strlen($postdetail[0]->mdescription)), "။", 500);
			
			$strlbody = substr($postdetail[0]->mdescription, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->mdescription));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->mdescription;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetailsmyanmar")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('zbody', $strzbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}		


public function arrivalmn($postname)
{
	
	
	$postdetail = Posts::where('mname','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	$strzbody = "";

	if(strlen($postdetail[0]->zdescription)>650)
	{

		$strzbody = $this->strCutting($postdetail[0]->zdescription, "။", 650);
		
		
	}
	else
	{

		$strzbody = $postdetail[0]->zdescription;
	}

	
	if(strlen($postdetail[0]->mdescription)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->mdescription, "။", 650);
		

		if(strlen($postdetail[0]->mdescription)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->mdescription, strlen($strfbody) , strlen($postdetail[0]->mdescription)), "။", 500);
			
			$strlbody = substr($postdetail[0]->mdescription, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->mdescription));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->mdescription;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetailsmyanmar")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('zbody', $strzbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}

public function undergroundmn($postname)
{
	
	
	$postdetail = Posts::where('mname','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	$strzbody = "";

	if(strlen($postdetail[0]->zdescription)>650)
	{

		$strzbody = $this->strCutting($postdetail[0]->zdescription, "။", 650);
		
		
	}
	else
	{

		$strzbody = $postdetail[0]->zdescription;
	}

	
	if(strlen($postdetail[0]->mdescription)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->mdescription, "။", 650);
		

		if(strlen($postdetail[0]->mdescription)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->mdescription, strlen($strfbody) , strlen($postdetail[0]->mdescription)), "။", 500);
			
			$strlbody = substr($postdetail[0]->mdescription, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->mdescription));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->mdescription;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetailsmyanmar")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('zbody', $strzbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}			

public function checkinmn($postname)
{
	
	
	$postdetail = Posts::where('mname','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	$strzbody = "";

	if(strlen($postdetail[0]->zdescription)>650)
	{

		$strzbody = $this->strCutting($postdetail[0]->zdescription, "။", 650);
		
		
	}
	else
	{

		$strzbody = $postdetail[0]->zdescription;
	}

	
	if(strlen($postdetail[0]->mdescription)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->mdescription, "။", 650);
		

		if(strlen($postdetail[0]->mdescription)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->mdescription, strlen($strfbody) , strlen($postdetail[0]->mdescription)), "။", 500);
			
			$strlbody = substr($postdetail[0]->mdescription, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->mdescription));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->mdescription;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetailsmyanmar")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('zbody', $strzbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}
public function exposuremn($postname)
{
	
	
	$postdetail = Posts::where('mname','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	$strzbody = "";

	if(strlen($postdetail[0]->zdescription)>650)
	{

		$strzbody = $this->strCutting($postdetail[0]->zdescription, "။", 650);
		
		
	}
	else
	{

		$strzbody = $postdetail[0]->zdescription;
	}

	
	if(strlen($postdetail[0]->mdescription)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->mdescription, "။", 650);
		

		if(strlen($postdetail[0]->mdescription)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->mdescription, strlen($strfbody) , strlen($postdetail[0]->mdescription)), "။", 500);
			
			$strlbody = substr($postdetail[0]->mdescription, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->mdescription));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->mdescription;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetailsmyanmar")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('zbody', $strzbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}		

public function travelsectorupdatemn($postname)
{
	
	
	$postdetail = Posts::where('mname','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	$strzbody = "";

	if(strlen($postdetail[0]->zdescription)>650)
	{

		$strzbody = $this->strCutting($postdetail[0]->zdescription, "။", 650);
		
		
	}
	else
	{

		$strzbody = $postdetail[0]->zdescription;
	}

	
	if(strlen($postdetail[0]->mdescription)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->mdescription, "။", 650);
		

		if(strlen($postdetail[0]->mdescription)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->mdescription, strlen($strfbody) , strlen($postdetail[0]->mdescription)), "။", 500);
			
			$strlbody = substr($postdetail[0]->mdescription, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->mdescription));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->mdescription;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetailsmyanmar")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('zbody', $strzbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

}
public function snapshotsmn($postname)
{
	
	
	$postdetail = Posts::where('mname','=',$postname)
	->get();
	$categorys = Category::orderBy('id', 'desc')->get();
	$strfbody = "";
	$strsbody = "";
	$strlbody = "";

	$strzbody = "";

	if(strlen($postdetail[0]->zdescription)>650)
	{

		$strzbody = $this->strCutting($postdetail[0]->zdescription, "။", 650);
		
		
	}
	else
	{

		$strzbody = $postdetail[0]->zdescription;
	}

	
	if(strlen($postdetail[0]->mdescription)>650)
	{

		$strfbody = $this->strCutting($postdetail[0]->mdescription, "။", 650);
		

		if(strlen($postdetail[0]->mdescription)>1000)
		{
			$strsbody = $this->strCutting(substr($postdetail[0]->mdescription, strlen($strfbody) , strlen($postdetail[0]->mdescription)), "။", 500);
			
			$strlbody = substr($postdetail[0]->mdescription, strlen($strfbody) + strlen($strsbody) , strlen($postdetail[0]->mdescription));

		}				
	}
	else
	{

		$strfbody = $postdetail[0]->mdescription;
	}

	$popularposts = Posts::where('active',1)
	->where('popular',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();

	$recentposts = Posts::where('active',1)
	->where('categoryid','!=', 2)
	->where('mname','!=','')
	->orderBy('id','DESC')
	->take(4)
	->get();


	return view("pages.postdetailsmyanmar")
	->with('postdetail',$postdetail[0])
	->with('categorys',$categorys)
	->with('fbody', $strfbody)
	->with('sbody', $strsbody)
	->with('lbody', $strlbody)
	->with('zbody', $strzbody)
	->with('popularposts', $popularposts)
	->with('recentposts', $recentposts);

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

		return view("dashboard.posts.postcreate")->with('categorys', $categorys)
		                                         ->with('authors', $authors);

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


		$post->name = $request->input("name");
		$post->groupname = $request->input("groupname");

		$post->subtitle = $request->input("subtitle");
		$post->caption1 = $request->input("caption1");
		
		$post->description = $request->input("description");
		
		$post->categoryid = $request->input("category");
		$post->authorid = $request->input("author");

		if (Input::get('active') === '1'){$post->active = 1;}
		if (Input::get('mainslide') === '1'){$post->mainslide = 1;}
		if (Input::get('popular') === '1'){$post->popular = 1;}
		if (Input::get('issue') === '1'){$post->lastissue = 1;}

		$post->userid = $request->user()->id;

		$post->photourl1 = $photourl1;
		$post->photourl2 = $photourl2;
		$post->youtubelink = $request->input("youtubelink");
		
		
		$post->save();

		$rssfile = "/rss-feed.xml";

		

		if($rssfile!="")
		{
			if(file_exists(public_path().$rssfile))
			{
				unlink(public_path() . $rssfile);
			}
		}



		$rssfilename =  "rss-feed.xml";





		$rssfeed = '<?xml version="1.0" encoding="UTF-8"?>';
		$rssfeed .= '<rss version="2.0">';
		$rssfeed .= '<channel>';
		$rssfeed .= '<title>my magical myanmar</title>';
		$rssfeed .= '<link>http://mymagicalmyanmar.com/</link>';
		$rssfeed .= '<description>My Magical Myanmar - Myanmar’s leading Travel Magazine in Hotels, Airlines, Tourism and Travel Trade News</description>';
		$rssfeed .= '<language>en-us</language>';
		$rssfeed .= '<copyright><![CDATA[  Copyrights © 2017 All Rights Reserved by Logistics Media Services Company Limited. ]]></copyright>';
		$rssfeed .= '<image>';
		$rssfeed .= '<url>http://mymagicalmyanmar.com/images/logo1.png</url>';
		$rssfeed .= '<title>my magical myanmar</title>';
		$rssfeed .= '<link>http://mymagicalmyanmar.com/</link>';
		$rssfeed .= '</image>';



		$recentposts = Posts::where('active',1)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(10)
		->get();

		foreach ($recentposts as $recentpost) {
			

			$rssfeed .= "\n";
			$rssfeed .= '<item>';
			$rssfeed .= "\n";

			$rssfeed .= '<title>' . $recentpost->name . '</title>';

			$rssfeed .= '<link>' . 'http://www.mymagicalmyanmar.com/' . strtolower(str_replace(' ', '', $recentpost->category->name)) . '/' . $recentpost->name . '</link>';

			$rssfeed .= '<pubDate>' . $recentpost->created_at . '</pubDate>';

			$rssfeed .= '<author>' . $recentpost->user->name . '</author>';
			$rssfeed .= '<category>' . $recentpost->category->name . '</category>';


			if(strlen($recentpost->description)>500)
			{

				$strfbody = strip_tags($this->strCutting($recentpost->description, ".", 500));
				$strfbody = preg_replace("/\s|&nbsp;/"," ",$strfbody);



			}
			else
			{
				$strfbody = strip_tags($recentpost->description);

				$strfbody = preg_replace("/\s|&nbsp;/",' ',$strfbody);

			}




			$rssfeed .= '<description>' . '&lt;a href=&quot;&quot;&gt;&lt;img typeof=&quot;foaf:Image&quot; src=&quot;http://www.mymagicalmyanmar.com' . $recentpost->photourl2 . '?itok=vBabesV8&quot; width=&quot;309&quot; height=&quot;166&quot; alt=&quot;&quot; /&gt;&lt;/a&gt;&lt;p&gt;' . $strfbody . '&lt;/p&gt;' . '</description>';


			$rssfeed .= "\n";
			$rssfeed .= '</item>';

			
		}

		$rssfeed .= '</channel>';
		$rssfeed .= '</rss>';
		
		

		

		$myfile = fopen($rssfilename, "w");


		fwrite($myfile, $rssfeed);

		fclose($myfile);

		
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

		                                        

		return view('dashboard.posts.postedit')->with('post', $post)->with('categorys',$categorys)
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

				

				$post->name = $request->input("name");
				$post->groupname = $request->input("groupname");
		// $post->authorname = $request->input("authorname");

				$post->subtitle = $request->input("subtitle");
				$post->caption1 = $request->input("caption1");
				
				$post->description = $request->input("description");
				
				$post->categoryid = $request->input("category");
						$post->authorid = $request->input("author");

				$post->created_at = $request->input("created_at");

				$post->active = 0;
				if (Input::get('active') === ""){$post->active = 1;}

				$post->mainslide = 0;
				if (Input::get('mainslide') === ""){$post->mainslide = 1;}

				$post->popular = 0;
				if (Input::get('popular') === ""){$post->popular = 1;}

				$post->lastissue = 0;
				if (Input::get('issue') === ""){$post->lastissue = 1;}

		//$post->userid = $request->user()->id;
				$post->youtubelink = $request->input("youtubelink");
				$post->photourl1 = $photourl1;
				$post->photourl2 = $photourl2;
				
				
				$post->save();

				$rssfile = "/rss-feed.xml";

				

				if($rssfile!="")
				{
					if(file_exists(public_path().$rssfile))
					{
						unlink(public_path() . $rssfile);
					}
				}



				$rssfilename =  "rss-feed.xml";





				$rssfeed = '<?xml version="1.0" encoding="UTF-8"?>';
				$rssfeed .= '<rss version="2.0">';
				$rssfeed .= '<channel>';
				$rssfeed .= '<title>my magical myanmar</title>';
				$rssfeed .= '<link>http://mymagicalmyanmar.com/</link>';
				$rssfeed .= '<description>My Magical Myanmar - Myanmar’s leading Travel Magazine in Hotels, Airlines, Tourism and Travel Trade News</description>';
				$rssfeed .= '<language>en-us</language>';
				$rssfeed .= '<copyright><![CDATA[  Copyrights © 2017 All Rights Reserved by Logistics Media Services Company Limited. ]]></copyright>';
				$rssfeed .= '<image>';
				$rssfeed .= '<url>http://mymagicalmyanmar.com/images/logo1.png</url>';
				$rssfeed .= '<title>my magical myanmar</title>';
				$rssfeed .= '<link>http://mymagicalmyanmar.com/</link>';
				$rssfeed .= '</image>';



				$recentposts = Posts::where('active',1)
				->where('name','!=','')
				->orderBy('id','DESC')
				->take(10)
				->get();

				foreach ($recentposts as $recentpost) {
					

					$rssfeed .= "\n";
					$rssfeed .= '<item>';
					$rssfeed .= "\n";

					$rssfeed .= '<title>' . $recentpost->name . '</title>';

					$rssfeed .= '<link>' . 'http://www.mymagicalmyanmar.com/' . strtolower(str_replace(' ', '', $recentpost->category->name)) . '/' . $recentpost->name . '</link>';

					$rssfeed .= '<pubDate>' . $recentpost->created_at . '</pubDate>';

					$rssfeed .= '<author>' . $recentpost->user->name . '</author>';
					$rssfeed .= '<category>' . $recentpost->category->name . '</category>';


					if(strlen($recentpost->description)>500)
					{

						$strfbody = strip_tags($this->strCutting($recentpost->description, ".", 500));
						$strfbody = preg_replace("/\s|&nbsp;/",' ',$strfbody);



					}
					else
					{
						$strfbody = strip_tags($recentpost->description);

						$strfbody = preg_replace("/\s|&nbsp;/",' ',$strfbody);

					}





					$rssfeed .= '<description>' . '&lt;a href=&quot;&quot;&gt;&lt;img typeof=&quot;foaf:Image&quot; src=&quot;http://www.mymagicalmyanmar.com' . $recentpost->photourl2 . '?itok=vBabesV8&quot; width=&quot;309&quot; height=&quot;166&quot; alt=&quot;&quot; /&gt;&lt;/a&gt;&lt;p&gt;' . $strfbody . '&lt;/p&gt;' . '</description>';


					$rssfeed .= "\n";
					$rssfeed .= '</item>';

					
				}

				$rssfeed .= '</channel>';
				$rssfeed .= '</rss>';
				
				

				

				$myfile = fopen($rssfilename, "w");


				fwrite($myfile, $rssfeed);

				fclose($myfile);

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




		$post = Posts::find($id);
		
		if($post->photourl1!="")
		{
			if(file_exists(public_path() .$post->photourl1))
			{
				unlink(public_path() . $post->photourl1);
			}
		}

		
		
		if($post->photourl2!="")
		{
			if(file_exists(public_path() .$post->photourl2))
			{
				unlink(public_path() . $post->photourl2);
			}
		}
		

		
		
		Posts::destroy($id);

		$rssfile = "/rss-feed.xml";

		

		if($rssfile!="")
		{
			if(file_exists(public_path().$rssfile))
			{
				unlink(public_path() . $rssfile);
			}
		}



		$rssfilename =  "rss-feed.xml";





		$rssfeed = '<?xml version="1.0" encoding="UTF-8"?>';
		$rssfeed .= '<rss version="2.0">';
		$rssfeed .= '<channel>';
		$rssfeed .= '<title>my magical myanmar</title>';
		$rssfeed .= '<link>http://mymagicalmyanmar.com/</link>';
		$rssfeed .= '<description>My Magical Myanmar - Myanmar’s leading Travel Magazine in Hotels, Airlines, Tourism and Travel Trade News</description>';
		$rssfeed .= '<language>en-us</language>';
		$rssfeed .= '<copyright><![CDATA[  Copyrights © 2017 All Rights Reserved by Logistics Media Services Company Limited. ]]></copyright>';
		$rssfeed .= '<image>';
		$rssfeed .= '<url>http://mymagicalmyanmar.com/images/logo1.png</url>';
		$rssfeed .= '<title>my magical myanmar</title>';
		$rssfeed .= '<link>http://mymagicalmyanmar.com/</link>';
		$rssfeed .= '</image>';



		$recentposts = Posts::where('active',1)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(10)
		->get();

		foreach ($recentposts as $recentpost) {
			

			$rssfeed .= "\n";
			$rssfeed .= '<item>';
			$rssfeed .= "\n";

			$rssfeed .= '<title>' . $recentpost->name . '</title>';

			$rssfeed .= '<link>' . 'http://www.mymagicalmyanmar.com/' . strtolower(str_replace(' ', '', $recentpost->category->name)) . '/' . $recentpost->name . '</link>';

			$rssfeed .= '<pubDate>' . $recentpost->created_at . '</pubDate>';

			$rssfeed .= '<author>' . $recentpost->user->name . '</author>';
			$rssfeed .= '<category>' . $recentpost->category->name . '</category>';


			if(strlen($recentpost->description)>500)
			{

				$strfbody = strip_tags($this->strCutting($recentpost->description, ".", 500));
				$strfbody = preg_replace("/\s|&nbsp;/",' ',$strfbody);



			}
			else
			{
				$strfbody = strip_tags($recentpost->description);

				$strfbody = preg_replace("/\s|&nbsp;/",' ',$strfbody);

			}





			$rssfeed .= '<description>' . '&lt;a href=&quot;&quot;&gt;&lt;img typeof=&quot;foaf:Image&quot; src=&quot;http://www.mymagicalmyanmar.com' . $recentpost->photourl2 . '?itok=vBabesV8&quot; width=&quot;309&quot; height=&quot;166&quot; alt=&quot;&quot; /&gt;&lt;/a&gt;&lt;p&gt;' . $strfbody . '&lt;/p&gt;' . '</description>';


			$rssfeed .= "\n";
			$rssfeed .= '</item>';

			
		}

		$rssfeed .= '</channel>';
		$rssfeed .= '</rss>';
		
		

		

		$myfile = fopen($rssfilename, "w");


		fwrite($myfile, $rssfeed);

		fclose($myfile);
		return redirect()->route("posts.index");
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function strCutting($mainstr, $char, $charcount)
	{
		//

		
		$pos = -1;
		$oldpos = 0;
		$strdata = "";
		while (($pos = strpos($mainstr, $char, $pos+1)) !== false)
		{
			

			$strdata = substr($mainstr, 0, $pos + 1);

			

			$totalcount = strlen($strdata);
			if($totalcount >= $charcount)
			{
				// echo $strdata;
				break;
			}

		}
		
		// die();

		return $strdata;


	}

	
	


}

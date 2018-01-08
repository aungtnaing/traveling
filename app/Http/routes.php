	<?php

		/*
		|--------------------------------------------------------------------------
		| Application Routes
		|--------------------------------------------------------------------------
		|
		| Here is where you can register all of the routes for an application.
		| It's a breeze. Simply tell Laravel the URIs it should respond to
		| and give it the controller to call when that URI is requested.
		|
		*/

		use App\User;
		use App\Category;
		use App\Posts;
		use App\Books;
		use App\Orderstemp;
		use App\Authors;
		use App\Issues;
		use App\Whatnews;
		

		Route::get('/', 'WelcomeController@index');
		Route::get('home', 'HomeController@index');
		
		Route::get('mn', 'LanguageController@changemn');
		Route::get('en', 'LanguageController@changeen');

		

		Route::get('/tweet/{postid}', function($postid)
		{


			$post = Posts::find($postid);
			

			// $postname = str_replace(' ', '%', $post->name);
			// $catname = strtolower(str_replace(' ', '', $post->category->name));
		

			// $desc = "http://www.mymagicalmyanmar.com/" . $catname . "/" . $postname;

			// $desc = $post->name;
			// $desc = "<a href=mymagicalmyanmar.com/postdetails/". $post->id . "></a>";
			$desc = $post->name . "    ";
			$desc.= "mymagicalmyanmar.com/postdetails/". $post->id;

			$uploaded_media = Twitter::uploadMedia(['media' => File::get(public_path($post->photourl2))]);
			Twitter::postTweet(['status' => $desc, 'media_ids' => $uploaded_media->media_id_string]);

			return back()->withInput();


		});

		Route::get('/tweetmn/{postid}', function($postid)
		{




			$post = Posts::find($postid);

			$desc = $post->mname . "    ";
			$desc.= "mymagicalmyanmar.com/postdetails/". $post->id;
			$uploaded_media = Twitter::uploadMedia(['media' => File::get(public_path($post->photourl2))]);
			Twitter::postTweet(['status' => $desc, 'media_ids' => $uploaded_media->media_id_string]);

			return back()->withInput();


		});
		
		Route::get('/login/{provider?}',[
			'uses' => 'FacebookController@getSocialAuth',
			'as'   => 'auth.getSocialAuth'
			]);

		Route::get('/login/callback/{provider?}',[
			'uses' => 'FacebookController@getSocialAuthCallback',
			'as'   => 'auth.getSocialAuthCallback'
			]);	

		Route::get('homemyanmar', 'LanguageController@homemyanmar');

		Route::get('freelisting', function() {

			$categorys = Category::All();
			
			return view('pages.whatnews')
			->with('categorys', $categorys);
			
			
		});

		// 	Route::get('test', function() {

			
		// 	return view('pages.test');
			
			
		// });

		Route::get('travelbiz', function() {

			$categorys = Category::All();
			

			$whatnews = Whatnews::where('active', 1)
			->orderBy('id','DESC')
			->paginate(1);

			$whatnewslist = Whatnews::where('active', 0)
			->orderBy('id','DESC')
			->paginate(10);

			return view('pages.travelbiz')
			->with('categorys', $categorys)
			->with('whatnews', $whatnews)
			->with('whatnewslists', $whatnewslist)
			->with('categorys', $categorys);
			
			
		});

		Route::resource('whatnew','WhatnewsController');

		Route::get('aboutus', function() {

			$categorys = Category::All();
			
			return view('pages.about')
			->with('categorys', $categorys);
			
			
		});

		Route::get('aboutusmyanmar', function() {

			$categorys = Category::All();
			
			return view('pages.aboutmyanmar')
			->with('categorys', $categorys);
			
			
		});


		Route::get('advertisewithus', function() {

			$categorys = Category::All();
			
			return view('pages.advertisewithus')
			->with('categorys', $categorys);
			
			
		});

		Route::get('advertisewithusmyanmar', function() {

			$categorys = Category::All();
			
			return view('pages.advertisewithusmyanmar')
			->with('categorys', $categorys);
			
			
		});

		Route::get('privacypolicy', function() {

			$categorys = Category::All();
			
			return view('pages.privacypolicy')
			->with('categorys', $categorys);
			
			
		});

		Route::get('privacypolicymyanmar', function() {
			$categorys = Category::All();
			
			return view('pages.privacypolicymyanmar')
			->with('categorys', $categorys);
			
			
		});

		Route::get('termscondation', function() {

			$categorys = Category::All();
			
			return view('pages.termscondation')
			->with('categorys', $categorys);
			
			
		});

		Route::get('termscondationmyanmar', function() {

			$categorys = Category::All();
			
			return view('pages.termscondationmyanmar')
			->with('categorys', $categorys);
			
			
		});

		Route::get('storelocator', function() {

			$categorys = Category::All();
			
			return view('pages.storelocator')
			->with('categorys', $categorys);
			
			
		});

		Route::get('storelocatormyanmar', function() {

			$categorys = Category::All();
			
			return view('pages.storelocatormyanmar')
			->with('categorys', $categorys);
			
			
		});


		

		Route::get('contactus', function() {

			$categorys = Category::All();
			
			return view('pages.contactus')
			->with('categorys', $categorys);
			
			
		});

		Route::get('contactusmyanmar', function() {

			$categorys = Category::All();
			
			return view('pages.contactusmyanmar')
			->with('categorys', $categorys);
			
			
		});



		Route::get('contactusmyanmar', function() {

			$categorys = Category::All();
			
			return view('pages.contactusmyanmar')
			->with('categorys', $categorys);
			
			
		});

		Route::get('authorprofile/{userid}', function($userid) {

			$categorys = Category::All();

			$user = Authors::find($userid);
			
			return view('pages.authorprofile')
			->with('user', $user)
			->with('categorys', $categorys);
			
			
		});

		Route::get('postlists/{categoryid}', ['as' => 'postlists', function ($categoryid) {
			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', $categoryid)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlists')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
			
		}]);

		Route::get('postlistsbyauthor/{authorid}', ['as' => 'postlistsbyauthor', function ($authorid) {
			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('authorid', $authorid)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlists')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
			
		}]);
		Route::get('postlistsmmbyauthor/{authorid}', ['as' => 'postlistsbyauthor', function ($authorid) {
			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('authorid', $authorid)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlistsmyanmar')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
			
		}]);

		
		Route::get('picturesqueslist/{categoryid}', ['as' => 'picturesqueslist', function ($categoryid) {
			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', $categoryid)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.picturesqueslist')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
			
		}]);

		Route::get('magazine', function() {

			$categorys = Category::All();

			$issue = Issues::orderBy('id','desc')->first();

			$travelsectorposts = Posts::where('active',1)
			->where('categoryid', 1)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(5)
			->get();


			$exposures = Posts::where('active',1)
			->where('categoryid', 5)
			->where('name','!=','')
			->orderBy('id','DESC')
			->get();

			// $exposures = DB::table('posts')
   //                  ->groupBy('groupname')
   //                  ->get();
			

			$picturesques = Posts::where('active',1)
			->where('categoryid', 6)
			->where('name','!=','')
			->where('lastissue','=',0)
			->orderBy('id','DESC')
			->take(14)
			->get();


			$arrivals = Posts::where('active',1)
			->where('categoryid', 7)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$infocus = Posts::where('active',1)
			->where('categoryid', 8)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$deperatures = Posts::where('active',1)
			->where('categoryid', 9)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$snapshops = Posts::where('active',1)
			->where('categoryid', 10)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$checkins = Posts::where('active',1)
			->where('categoryid', 11)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$standouts = Posts::where('active',1)
			->where('categoryid', 15)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$undergrounds = Posts::where('active',1)
			->where('categoryid', 13)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

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


			$book = Books::find(Books::max('id'));


			$thetalks = Posts::where('active',1)
			->where('categoryid', 14)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(2)
			->get();

			
			return view('pages.magazines')
			->with('categorys', $categorys)
			->with('travelsectorposts', $travelsectorposts)
			->with('exposures', $exposures)
			->with('picturesques', $picturesques)
			->with('arrivals', $arrivals)
			->with('infocus', $infocus)
			->with('deperatures', $deperatures)
			->with('snapshops', $snapshops)
			->with('checkins', $checkins)
			->with('standouts', $standouts)
			->with('undergrounds', $undergrounds)
			->with('popularposts', $popularposts)
			->with('recentposts', $recentposts)
			->with('book', $book)
			->with('thetalks', $thetalks)
			->with('issue', $issue);
			
			
			
		});

		
		Route::get('postlistsmyanmar/{categoryid}', ['as' => 'postlistsmyanmar', function ($categoryid) {
			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', $categoryid)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlistsmyanmar')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		}]);

		

		Route::get('mn/travelsectorupdates', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 1)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlistsmyanmar')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});


		Route::get('travelsectorupdates', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 1)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlists')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});

		Route::get('mn/exposure', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 5)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlistsmyanmar')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});


		Route::get('exposure', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 5)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlists')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});


		Route::get('snapshots', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 10)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlists')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});

		Route::get('departures', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 9)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlists')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});
		Route::get('mn/departures', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 9)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlistsmyanmar')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});


		Route::get('checkin', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 11)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlists')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});
		Route::get('mn/checkin', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 11)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlistsmyanmar')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});

		Route::get('underground', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 13)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlists')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});
		Route::get('mn/underground', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 13)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlistsmyanmar')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});


		Route::get('standout', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 12)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlists')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});

		Route::get('mn/standout', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 12)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlistsmyanmar')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});


		Route::get('arrivals', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 7)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlists')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});

		Route::get('mn/arrivals', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 7)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlistsmyanmar')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});

		Route::get('infocus', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 8)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlists')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});

		Route::get('mn/infocus', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 8)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlistsmyanmar')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});

		Route::get('mn/snapshots', function() {

			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', 10)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlistsmyanmar')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		});

		Route::get('picturesque', function() {

			$categorys = Category::All();

			$lastpicturesques = Posts::where('active',1)
			->where('categoryid', 6)
			->where('name','!=','')
			->where('lastissue','=',1)
			->orderBy('id','DESC')
			->paginate(6);

			$postlists = Posts::where('active',1)
			->where('categoryid', 6)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(6);

			// $recentposts = Posts::where('active',1)
			// ->where('categoryid','!=', 2)
			// ->where('name','!=','')
			// ->orderBy('id','DESC')
			// ->take(4)
			// ->get();
			$issue = Issues::orderBy('id','desc')->first();

			return view('pages.picturesqueslist')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('lastpicturesquelists', $lastpicturesques)
			->with('issue', $issue);
			
			
		});



		Route::get('mn/magazine', function() {

			$categorys = Category::All();

			
			$travelsectorposts = Posts::where('active',1)
			->where('categoryid', 1)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(5)
			->get();

			$exposures = Posts::where('active',1)
			->where('categoryid', 5)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();

			$picturesques = Posts::where('active',1)
			->where('categoryid', 6)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(14)
			->get();


			$arrivals = Posts::where('active',1)
			->where('categoryid', 7)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$infocus = Posts::where('active',1)
			->where('categoryid', 8)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$deperatures = Posts::where('active',1)
			->where('categoryid', 9)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$snapshops = Posts::where('active',1)
			->where('categoryid', 10)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$checkins = Posts::where('active',1)
			->where('categoryid', 11)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$standouts = Posts::where('active',1)
			->where('categoryid', 15)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$undergrounds = Posts::where('active',1)
			->where('categoryid', 13)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

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


			$book = Books::find(Books::max('id'));
			$thetalks = Posts::where('active',1)
			->where('categoryid', 14)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(2)
			->get();

			
			return view('pages.magazinesmyanmar')
			->with('categorys', $categorys)
			->with('travelsectorposts', $travelsectorposts)
			->with('exposures', $exposures)
			->with('picturesques', $picturesques)
			->with('arrivals', $arrivals)
			->with('infocus', $infocus)
			->with('deperatures', $deperatures)
			->with('snapshops', $snapshops)
			->with('checkins', $checkins)
			->with('standouts', $standouts)
			->with('undergrounds', $undergrounds)
			->with('popularposts', $popularposts)
			->with('recentposts', $recentposts)
			->with('book', $book)
			->with('thetalks', $thetalks);
			;
			
			
		});

		Route::get('magazinemyanmar', function() {

			$categorys = Category::All();

			
			$travelsectorposts = Posts::where('active',1)
			->where('categoryid', 1)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(5)
			->get();

			$exposures = Posts::where('active',1)
			->where('categoryid', 5)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();

			$picturesques = Posts::where('active',1)
			->where('categoryid', 6)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(14)
			->get();


			$arrivals = Posts::where('active',1)
			->where('categoryid', 7)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$infocus = Posts::where('active',1)
			->where('categoryid', 8)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$deperatures = Posts::where('active',1)
			->where('categoryid', 9)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$snapshops = Posts::where('active',1)
			->where('categoryid', 10)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$checkins = Posts::where('active',1)
			->where('categoryid', 11)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$standouts = Posts::where('active',1)
			->where('categoryid', 15)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$undergrounds = Posts::where('active',1)
			->where('categoryid', 13)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

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


			$book = Books::find(Books::max('id'));

			
			return view('pages.magazinesmyanmar')
			->with('categorys', $categorys)
			->with('travelsectorposts', $travelsectorposts)
			->with('exposures', $exposures)
			->with('picturesques', $picturesques)
			->with('arrivals', $arrivals)
			->with('infocus', $infocus)
			->with('deperatures', $deperatures)
			->with('snapshops', $snapshops)
			->with('checkins', $checkins)
			->with('standouts', $standouts)
			->with('undergrounds', $undergrounds)
			->with('popularposts', $popularposts)
			->with('recentposts', $recentposts)
			->with('book', $book);
			;
			
			
		});

		Route::get('booking', function() {

			$categorys = Category::All();
			
			return view('pages.booking')
			->with('categorys', $categorys);
			
			
		});


		Route::get('thetalk/{postname}', [
			'uses' => 'PostsController@thetalks'
			]);

		Route::get('mn/thetalks/{postname}', [
			'uses' => 'PostsController@thetalksmn'
			]);

		Route::get('underground/{postname}', [
			'uses' => 'PostsController@underground'
			]);
		Route::get('mn/underground/{postname}', [
			'uses' => 'PostsController@undergroundmn'
			]);


		Route::get('arrivals/{postname}', [
			'uses' => 'PostsController@arrival'
			]);
		Route::get('mn/arrivals/{postname}', [
			'uses' => 'PostsController@arrivalmn'
			]);

		
		Route::get('departures/{postname}', [
			'uses' => 'PostsController@deperature'
			]);
		Route::get('mn/deperature/{postname}', [
			'uses' => 'PostsController@deperaturemn'
			]);

		
		Route::get('checkin/{postname}', [
			'uses' => 'PostsController@checkin'
			]);
		Route::get('mn/checkin/{postname}', [
			'uses' => 'PostsController@checkinmn'
			]);

		Route::get('picturesque/{postname}', [
			'uses' => 'PostsController@picturesquefun'
			]);

		Route::get('picturesques/{postname}', [
			'uses' => 'PostsController@picturesquefundetail'
			]);

		Route::get('snapshots/{postname}', [
			'uses' => 'PostsController@snapshots'
			]);
		Route::get('mn/snapshots/{postname}', [
			'uses' => 'PostsController@mnsnapshots'
			]);

		Route::get('postdetails/{postid}', [
			'uses' => 'PostsController@postdetails'
			]);

		Route::get('travelsectorupdates/{postname}', [
			'uses' => 'PostsController@travelsectorupdate'
			]);


		Route::get('exposure/{postname}', [
			'uses' => 'PostsController@exposure'
			]);
		Route::get('exposures/{postname}', [
			'uses' => 'PostsController@exposuredetail'
			]);

		Route::get('mn/exposure/{postname}', [
			'uses' => 'PostsController@exposuremn'
			]);


		Route::get('mn/travelsectorupdate/{postname}', [
			'uses' => 'PostsController@travelsectorupdatemn'
			]);

		Route::get('standout/{postname}', [
			'uses' => 'PostsController@standout'
			]);


		Route::get('mn/standout/{postname}', [
			'uses' => 'PostsController@standoutmn'
			]);


		Route::get('latestblog/{postname}', [
			'uses' => 'PostsController@latestblog'
			]);

		Route::get('infocus/{postname}', [
			'uses' => 'PostsController@infocus'
			]);

		Route::get('mn/infocus/{postname}', [
			'uses' => 'PostsController@infocusmn'
			]);


		Route::get('postdetailsmyanmar/{postid}', [
			'uses' => 'PostsController@postdetailsmyanmar'
			]);

	// Route::get('picpostdetails/{postid}', [
	// 	'uses' => 'PostsController@picpostdetails'
	// 	]);

	// Route::get('picpostdetailsmyanmar/{postid}', [
	// 	'uses' => 'PostsController@picpostdetailsmyanmar'
	// 	]);

		
		
		Route::resource('profiles','ProfilesController');

		Route::controllers([
			'auth' => 'Auth\AuthController',
			'password' => 'Auth\PasswordController',
			]);

		
		Route::resource('joinus','JoinusController');


		
		Route::group(['middleware' => 'auth'],function()
		{

			Route::resource('votes','VotesController');

			Route::resource('authors','AuthorController');

			Route::resource('issues','IssuesController');

			Route::get('adcheckout/{adid}', function($adid) {

				
				$categorys = Category::All();
				return view('pages.adcheckout')
				->with('categorys', $categorys)
				->with('adid', $adid);
				
				
			});

			Route::get('pictureupload', function() {

				$categorys = Category::All();
				
				return view('pages.pictureupload')
				->with('categorys', $categorys);
				
				
			});

			Route::resource('picturesques','PictureuploadsController');
			
			Route::get('maketest/{id}', [
				'uses' => 'CheckoutController@maketest'
				]);

			Route::get('bookstore', function() {

				$categorys = Category::All();
				

				$books = Books::orderBy('volnumber', 'DESC')
				->get();
				$affed = Orderstemp::where('userid', Auth::user()->id)->delete();
				
				$bookcols = Books::distinct()->get(['volnumber']);

				$orderbooks = Orderstemp::where('userid', Auth::user()->id)
				->get();
				
				return view('pages.bookstore')
				->with('categorys', $categorys)
				->with('books', $books)
				->with('bookcols', $bookcols)
				->with('orderbooks', $orderbooks);
				
				
			});

			
			Route::get('bookbuy', function() {

				$categorys = Category::All();
				

				$books = Books::orderBy('volnumber', 'DESC')
				->get();
			// $affed = Orderstemp::where('userid', Auth::user()->id)->delete();
				
				$bookcols = Books::distinct()->get(['volnumber']);

				$orderbooks = Orderstemp::where('userid', Auth::user()->id)
				->get();
				
				return view('pages.bookstore')
				->with('categorys', $categorys)
				->with('books', $books)
				->with('bookcols', $bookcols)
				->with('orderbooks', $orderbooks);
				
				
			});


			Route::get('bookstoremyanmar', function() {

				$categorys = Category::All();
				

				$books = Books::orderBy('volnumber', 'DESC')
				->get();
				$affed = Orderstemp::where('userid', Auth::user()->id)->delete();
				
				$bookcols = Books::distinct()->get(['volnumber']);

				$orderbooks = Orderstemp::where('userid', Auth::user()->id)
				->get();
				
				return view('pages.bookstoremyanmar')
				->with('categorys', $categorys)
				->with('books', $books)
				->with('bookcols', $bookcols)
				->with('orderbooks', $orderbooks);
				
				
			});




			Route::post('makeorder', [
				'uses' => 'CheckoutController@makeorder'
				]);

			Route::resource('checkouts','CheckoutController');
			Route::resource('checkoutsmyanmar','CheckoutmyanmarController');
			
			Route::get('subscribecheckouts/{bookid}', [
				'uses' => 'CheckoutController@subscribeindex'
				]);

			Route::get('subscribemyanmarcheckouts/{bookid}', [
				'uses' => 'CheckoutmyanmarController@subscribemyanmarindex'
				]);


			Route::resource('comments','CommentsController');
			Route::resource('replycomments','ReplycommentsController');
			
			Route::group(['middleware' => 'rolewaredashboard'],function()
			{
				Route::resource('dashboard','DashboardController');

			});	
			Route::group(['middleware' => 'roleware6'],function()
			{
				Route::resource('advertises','AdlistsController');
			});		

			Route::group(['middleware' => 'roleware5'],function()
			{
				Route::resource('orderlists','OrderlistsController');
			});		

			Route::group(['middleware' => 'roleware3_4'],function()
			{
				
				
				Route::resource('posts','PostsController');
				Route::resource('postsmyanmar','PostsmyanmarController');

				Route::group(['middleware' => 'roleware2'],function()
				{
					

					Route::resource('subscribes','SubscribesController');

					Route::resource('books','BooksController');

					Route::get('dashboarduserprofile', [
						'uses' => 'ProfilesController@dashboarduserindex'
						]);

					

					Route::group(['middleware' => 'roleware'],function()
					{
						
						Route::resource('categorys','CategoryController');
						Route::resource('userspannel','UserspannelController');
						
					});

				});
				
			});



			
		});

	
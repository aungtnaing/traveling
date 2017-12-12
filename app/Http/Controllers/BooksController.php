<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;

use App\Books;
use Input;
use File;

class BooksController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$books = Books::All();

		return view("dashboard.books.bookpannel")
		->with("books", $books);
	}

	
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		
		
		return view("dashboard.books.bookcreate");
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
			'pdfsample' => 'required',
			'volnumber' => 'required',
			'issuenumber' => 'required',
			'description' => 'max:1000',
			'mdescription' => 'max:1000',
			]);


		$book = new Books();

		$imagePath = public_path() . '/images/books/';
		$lastid = DB::table('books')->select('id')->orderBy('id', 'DESC')->first();
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
		$pdfsample = "";
	
		
		if(Input::file('photourl1')!="")
		{
			if(Input::file('photourl1')->isValid())
			{
				$name =  time()  . '-cover' . '.' . $input['photourl1']->getClientOriginalExtension();
				File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
				
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/books/" . $directory . '/photos/' .  $name;

				if(Input::file('pdfsample')!="")
				{
					if(Input::file('pdfsample')->isValid())
					{
						$name =  time() . '-pdfsample' . '.' . $input['pdfsample']->getClientOriginalExtension();
						Input::file('pdfsample')->move($destinationPath, $name); // uploading file to given path
						$pdfsample = "/images/books/" . $directory . '/photos/' .  $name;
					}
				}


			}

		}


		$book->bookname = $request->input("bookname");
		$book->volnumber = $request->input("volnumber");
		$book->issuenumber = $request->input("issuenumber");
		
		$book->discount = $request->input("discount");
		$book->oprice = $request->input("oprice");
	
		$book->price = $request->input("price");
	
		$book->rate = $request->input("rate");
		$book->description = $request->input("description");
		$book->mdescription = $request->input("mdescription");
		
	
		if (Input::get('active') === '1'){$book->active = 1;}
		
	
		$book->photourl1 = $photourl1;
		$book->pdfsample = $pdfsample;
		
		
		$book->save();
		
		return redirect()->route("books.index");
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
		
		$book = Books::find($id);
	
		return view('dashboard.books.bookedit')->with('book', $book);
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
		
			'volnumber' => 'required',
			'issuenumber' => 'required',
			'description' => 'max:1000',
			'mdescription' => 'max:1000',
			]);


		$book = Books::find($id);

			$imagePath = public_path() . '/images/books/';
		$directory = $id;

		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
		
		$photourl1 = $book->photourl1;
		$pdfsample = $book->pdfsample;
		
		if(Input::file('photourl1')!="")
		{
	
			if(Input::file('photourl1')->isValid())
			{

				
				if($photourl1!="")
				{
					if(file_exists(public_path().$photourl1))
					{
						
				
						unlink(public_path() . $photourl1);
					}
				}



				$name =  time()  . '-cover' . '.' . $input['photourl1']->getClientOriginalExtension();
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/books/" . $directory . '/photos/' .  $name;
			
			}

		}

		if(Input::file('pdfsample')!="")
				{
					
					if(Input::file('pdfsample')->isValid())
					{
					
						if($pdfsample!="")
						{
							if(file_exists(public_path() .$pdfsample))
							{
								unlink(public_path() . $pdfsample);
							}
						}
						$name =  time() . '-pdfsample' . '.' . $input['pdfsample']->getClientOriginalExtension();
						Input::file('pdfsample')->move($destinationPath, $name); // uploading file to given path
						$pdfsample = "/images/books/" . $directory . '/photos/' .  $name;
					
					}
				}

		$book->bookname = $request->input("bookname");
		$book->volnumber = $request->input("volnumber");
		$book->issuenumber = $request->input("issuenumber");
		
		$book->discount = $request->input("discount");
		$book->oprice = $request->input("oprice");
	
		$book->price = $request->input("price");
		
		$book->rate = $request->input("rate");
		

		$book->description = $request->input("description");
		$book->mdescription = $request->input("mdescription");
		
		$book->active = 0;
		if (Input::get('active') === ""){$book->active = 1;}

	
		$book->photourl1 = $photourl1;
		$book->pdfsample = $pdfsample;
		
		
		$book->save();
		
		return redirect()->route("books.index");
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

		


	
		
		Books::destroy($id);

		return redirect()->route("posts.index");
	}
	

	
	


}

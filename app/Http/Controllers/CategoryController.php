<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;
use App\Category;


class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	
		$categorys = Category::All();
    
		return view("dashboard.category.categoryspannel")
		->with("categorys", $categorys);
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	
		return view("dashboard.category.categorycreate");

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		// var_dump($request->input("maincategory"));
		// die();

		$this->validate($request,[
			'name' => 'required|max:255',
			'mname' => 'required|max:255',
			]);


		$category = new Category();

		$category->name = $request->input("name");
		$category->mname = $request->input("mname");
		$category->save();
		return redirect()->route("categorys.index");
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
		
		
		$category = Category::find($id);

		return view('dashboard.category.categoryedit')->with('category',$category);
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
		$category = Category::find($id);
		if($category->name!=$request->input("name"))
		{
			$this->validate($request,[
				'name' => 'required|unique:category|max:255',
				'mname' => 'required|max:255',
				]);
		}
		else
		{
			$this->validate($request,[
				'name' => 'required|max:255',
				'mname' => 'required|max:255',
				]);
		}
		

		
		$category->name = $request->input("name");
		$category->mname = $request->input("mname");
		
		$category->save();
		
		return redirect()->route("categorys.index");
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

		Category::destroy($id);

		return redirect()->route("categorys.index");
	}



}

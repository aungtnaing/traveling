<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;
use App\Orderstemp;
use App\Orders;
use App\Books;
use App\Category;
use App\Subscribes;

use Auth;

class CheckoutController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$orderbooks = Orderstemp::where('userid', $request->user()->id)
		->get();


		$categorys = Category::All();

		return view('pages.checkout')->with('orderbooks', $orderbooks)
		->with('categorys', $categorys);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function subscribeindex($bookid, Request $request)
	{
		
		$affed = Orderstemp::where('userid', Auth::user()->id)->delete();
		// 	if (Auth::check()) {


		

		// 	$bookinfo = Books::find($bookid);

		// 	$ordertemp = new Orderstemp();
		// 	$ordertemp->userid = $request->user()->id;
		// 	$ordertemp->bookid = $bookid;
		// 	$ordertemp->photourl1 = $bookinfo->photourl1;
		// 	$ordertemp->bookinfo = "vol" . $bookinfo->volnumber . ":" . $bookinfo->issuenumber;
		// 	$ordertemp->qty = 1;
		// 	$ordertemp->price = $bookinfo->price;
		// 	$ordertemp->total = $bookinfo->price;
		// 	$ordertemp->save();

		// }


		$subscribes = Subscribes::All();

		$orderbooks = Orderstemp::where('userid', $request->user()->id)
		->get();


		$categorys = Category::All();

		return view('pages.checkout')->with('orderbooks', $orderbooks)
		->with('subscribes', $subscribes)	
		->with('categorys', $categorys);
	}


	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function makeorder(Request $request)
	{
		
		
		if (Auth::check()) {



			$id = $_POST['id'];
	//  	// $msg = $id;

			$orrtemp = Orderstemp::where('userid', $request->user()->id)
			->where('bookid', $id)
			->get();

			if(count($orrtemp)>0)
			{
				$orrtemp[0]->qty = $orrtemp[0]->qty + 1;
				$orrtemp[0]->total = $orrtemp[0]->total + $orrtemp[0]->price;
				$orrtemp[0]->save();
			}
			else
			{

				$bookinfo = Books::find($id);

				$ordertemp = new Orderstemp();
				$ordertemp->userid = $request->user()->id;
				$ordertemp->bookid = $id;
				$ordertemp->photourl1 = $bookinfo->photourl1;
				$ordertemp->bookinfo = "vol" . $bookinfo->volnumber . ":" . $bookinfo->issuenumber;
				$ordertemp->qty = 1;
				$ordertemp->price = $bookinfo->price;
				$ordertemp->total = $bookinfo->price;
				$ordertemp->save();

			}


			$msg = "success";
		}
		else
		{

			$msg = "Need to login.";
			 // return view('auth.login');
		}
		
		return response()->json(array('msg'=> $msg), 200);
	}

	public function maketest($id,Request $request)
	{
		
				
		


		// $id = $_POST['id'];
	//  	// $msg = $id;

		$orrtemp = Orderstemp::where('userid', $request->user()->id)
					->where('bookid', $id)
					->get();

		if(count($orrtemp)>0)
		{
			$orrtemp[0]->qty = $orrtemp[0]->qty + 1;
			$orrtemp[0]->total = $orrtemp[0]->total + $orrtemp[0]->price;
			$orrtemp[0]->save();
		}
		else
		{

			$bookinfo = Books::find($id);

			$ordertemp = new Orderstemp();
			$ordertemp->userid = $request->user()->id;
			$ordertemp->bookid = $id;
			$ordertemp->photourl1 = $bookinfo->photourl1;
			$ordertemp->bookinfo = "vol" . $bookinfo->volnumber . ":" . $bookinfo->issuenumber;
			$ordertemp->qty = 1;
			$ordertemp->price = $bookinfo->price;
			$ordertemp->total = $bookinfo->price;
			$ordertemp->save();

		}

	 	return redirect('bookbuy');
		
	}



	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		// return view("dashboard.category.categorycreate");

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
		$orderbooks = Orderstemp::where('userid', $request->user()->id)
		->get();

		// echo $request->input("subscribevalue");
		// die();

		if($request->input("subscribevalue")!="") 
		{

			$subscribe = Subscribes::find($request->input("subscribevalue"));

			$this->validate($request,[
					'name' => 'required|max:255',
					'phoneno' => 'required|max:255',
					'address' => 'required|max:500',
					'note' => 'required|max:1000',
					]);


				$order = new Orders();
				$order->userid = $request->user()->id;
				$order->name = $request->input("name");
				$order->lastname = $request->input("lastname");
				$order->phoneno = $request->input("phoneno");
				$order->address = $request->input("address");
				$order->city = $request->input("city");
				$order->note = $request->input("note");
				$order->active = 0;

				$order->bookinfo = $subscribe->name . " : " . $subscribe->price;

					$order->save();

				$affed = Orderstemp::where('userid', Auth::user()->id)->delete();
				$categorys = Category::All();

				
                                  return redirect('bookstore');
		}
		else
		{
			if(count($orderbooks)>0)
			{
				$this->validate($request,[
					'name' => 'required|max:255',
					'phoneno' => 'required|max:255',
					'address' => 'required|max:500',
					'note' => 'required|max:1000',
					]);


				$order = new Orders();
				$order->userid = $request->user()->id;
				$order->name = $request->input("name");
				$order->lastname = $request->input("lastname");
				$order->phoneno = $request->input("phoneno");
				$order->address = $request->input("address");
				$order->city = $request->input("city");
				$order->note = $request->input("note");
					$order->active = 0;

				foreach($orderbooks as $orderbook)
				{
					if($order->bookinfo!="")
					{
						$order->bookinfo = $order->bookinfo . "<br>" . $orderbook->bookinfo . " : qty" . $orderbook->qty . " x " . $orderbook->price . " = " . $orderbook->total; 
					}
					else
					{
						$order->bookinfo = $orderbook->bookinfo . " : qty" . $orderbook->qty . " x " . $orderbook->price . " = " . $orderbook->total; 
					}
				}

				$order->save();

				$affed = Orderstemp::where('userid', Auth::user()->id)->delete();
				$categorys = Category::All();

				
                                  return redirect('bookstore');
			}
			else
			{
				return redirect('bookstore');

			}
		}
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

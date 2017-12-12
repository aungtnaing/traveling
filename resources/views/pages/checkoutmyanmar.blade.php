@extends('layouts.defaultmyanmar')
@section('content')
<section id="page-title">

	<div class="container clearfix">
		<h1>ငွေရှင်းရန် </h1>

	</div>

</section>


<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- <div class="col_half">
				<div class="panel panel-default">
					<div class="panel-body">
						Returning customer? <a href="login-register.html">Click here to login</a>
					</div>
				</div>
			</div> -->
			
			<div class="row clearfix">
				<div class="col-md-6">
					<h3>ဘယ်လိုဝယ်ရန်</h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta provident sint ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat minus ratione.</p>

					<div class="col-md-6">
						<div class=" clearfix">
							<h4>သင့်ရဲ့ Orders</h4>
							@if(count($orderbooks)>0)
							<table class="table cart">
								<thead>
									<tr>
										<th class="cart-product-thumbnail">&nbsp;</th>
										<th class="cart-product-name">Product</th>
										<th class="cart-product-quantity">Qty</th>
										<th class="cart-product-quantity">Price</th>
										<th class="cart-product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
									<?php $grandtotal = 0; ?>
									@foreach($orderbooks as $orderbook)
									<tr class="cart_item">
										<td class="cart-product-thumbnail">
											<a href="{{ $orderbook->photourl1 }}"><img width="64" height="64" src="{{ $orderbook->photourl1 }}" alt="Pink Printed Dress"></a>
										</td>

										<td class="cart-product-name">
											<a href="{{ $orderbook->photourl1 }}">{{ $orderbook->bookinfo }}</a>
										</td>

										<td class="cart-product-quantity">
											<div class="quantity clearfix">
												{{ $orderbook->qty }}
											</div>
										</td>

										<td class="cart-product-quantity">
											<div class="quantity clearfix">
												{{ $orderbook->price }}
											</div>
										</td>

										<td class="cart-product-subtotal">
											<span class="amount">{{ $orderbook->total }}ကျပ်</span>
										</td>
									</tr>
									<?php $grandtotal = $grandtotal + $orderbook->total; ?>
									@endforeach 
									<tr class="cart_item">
										<td class="cart-product-thumbnail">
											စုစုပေါင်း
										</td>

										<td class="cart-product-name">
										</td>

										<td class="cart-product-quantity">
										</td>

										<td class="cart-product-quantity">
										</td>

										<td class="cart-product-subtotal">
											<span class="amount">{{ $grandtotal }}ks</span>
										</td>
									</tr>
								</tbody>

							</table>

								@else

									<form action="">
								@foreach($subscribes as $subscribe)
								<option></option>

								<input type="radio" name="subscribe" value="{{ $subscribe->id }}" onchange="myFunction({{ $subscribe->id }})"> {{ $subscribe->name}} . {{ $subscribe->price }} ks<br>


								@endforeach
							</form>


								@endif
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h3 class="">ငွေတောင်းခံရန်လိပ်စာ</h3>

					 <form action="{{ route("checkouts.store") }}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="col_half">
							<label for="shipping-form-name">အမည်:</label>
							<input type="text" id="shipping-form-name" name="name" value="" class="sm-form-control" />
						</div>

						<div class="col_half col_last">
							<label for="shipping-form-lname">မျိုးနွယ်အမည်:</label>
							<input type="text" id="shipping-form-lname" name="lastname" value="" class="sm-form-control" />
						</div>

						<div class="clear"></div>
						<div class="col_full">
							<label for="shipping-form-companyname">ဖုန်းနံပါတ်:</label>
							<input type="text" id="shipping-form-companyname" name="phoneno" value="" class="sm-form-control" />
						</div>

						<div class="col_full">
							<label for="shipping-form-message">လိပ်စာ <small>*</small></label>
							<textarea class="sm-form-control" id="shipping-form-message" name="address" rows="3" cols="30"></textarea>
						</div>

						<div class="col_full">
							<label for="shipping-form-city">မြို့ / Town</label>
							<input type="text" id="shipping-form-city" name="city" value="" class="sm-form-control" />
						</div>

						<div class="col_full">
							<label for="shipping-form-message">မှတ်စုများ <small>*</small></label>
							<textarea class="sm-form-control" id="shipping-form-message" name="note" rows="6" cols="30"></textarea>
						</div>
						<div class="col_full">
							
							 <input class="btn btn-primary" type="submit" value="Place Order"> 
						</div>
						<input style="display:none;" type="text" id="subscribevalue" name="subscribevalue" value="" class="sm-form-control" />
					</form>
				</div>
				<div class="clear bottommargin"></div>
				
				
			</div>
		</div>

	</div>

</section>


<script>

function myFunction(id) {
     
                    // document.getElementById('subscribevalue').innerHTML = id;
                      var elem1 = document.getElementById('subscribevalue');
                        elem1.value = id;
}

 </script>

@stop

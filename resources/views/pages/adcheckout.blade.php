@extends('layouts.default')
@section('content')
<section id="page-title">

	<div class="container clearfix">
		<h1>Check Out</h1>

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
					<h3>How to Advertise</h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta provident sint ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat minus ratione.</p>

			
				</div>	
				<div class="col-md-6">
					<h3 class="">Billing Address</h3>

				  <form action="{{ route("advertises.store") }}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">


						 <ul class="thumbnails">
                <li class="span3"> <a> 
                  <input style="display:none;" id="file-input1" name="photourl1" type='file' onchange="readURL(this);" required/>                    
                  <label for="file-input1">
                    <i class="icon-camera"></i>.ad - picture<br>
                    <img id="blah" src="//placehold.it/100" alt="avatar" alt="your image" />

                  </label>
                  <div class="actions"><a id="preview1" class="lightbox_trigger" herf=""><i class="icon-search"></i></a> </div>

                </li>
               

            </ul>

						<div class="col_half">
							<label for="shipping-form-name">Ad Url:</label>
							<input type="text" id="shipping-form-name" name="urllink" value="" class="sm-form-control" />
						</div>

						<div class="col_half">
							<label for="shipping-form-name">Name:</label>
							<input type="text" id="shipping-form-name" name="adname" value="" class="sm-form-control" />
						</div>

						<div class="col_half col_last">
							<label for="shipping-form-lname">Email:</label>
							<input type="text" id="shipping-form-lname" name="email" value="" class="sm-form-control" />
						</div>

						<div class="clear"></div>
						<div class="col_full">
							<label for="shipping-form-companyname">Phone Number:</label>
							<input type="text" id="shipping-form-companyname" name="phoneno" value="" class="sm-form-control" />
						</div>

						<div class="col_full">
							<label for="shipping-form-message">Address <small>*</small></label>
							<textarea class="sm-form-control" id="shipping-form-message" name="address" rows="3" cols="30"></textarea>
						</div>

						<div class="col_full">
							<label for="shipping-form-city">City / Town</label>
							<input type="text" id="shipping-form-city" name="city" value="" class="sm-form-control" />
						</div>

						<div class="col_full">
							<label for="shipping-form-message">Description <small>*</small></label>
							<textarea class="sm-form-control" id="shipping-form-message" name="description" rows="6" cols="30"></textarea>
						</div>
						<div class="col_full">
							
							<input class="btn btn-primary" type="submit" value="Place Order"> 
						</div>
						<input style="display:none;" type="text" id="adid" name="adid" value="{{ $adid }}" class="sm-form-control" />
					</form>
				</div>
				<div class="clear bottommargin"></div>
				
				
			</div>
		</div>

	</div>

</section>

<script type="text/javascript">


 

function readURL(input) {


  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function (e) {
      $('#blah')
      .attr('src', e.target.result)
      .width(100)
      .height(100);

    };

    reader.readAsDataURL(input.files[0]);
  }
}





</script>

@stop

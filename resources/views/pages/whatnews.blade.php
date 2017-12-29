<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>


	<body class="stretched">


		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">


			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="/" class="standard-logo" data-dark-logo="<?php echo url(); ?>/images/logo1.png"><img src="<?php echo url(); ?>/images/logo1.png"></a>
						<a href="/" class="retina-logo" data-dark-logo="<?php echo url(); ?>/images/logo-dark@2x.png"><img src="<?php echo url(); ?>/images/logo@2x.png"></a>
					</div><!-- #logo end -->



				</div>

			</div>

		</header><!-- #header end -->
		
		
		
		
		<section id="slider" class="slider-parallax full-screen dark" style="background: url(images/bg1.jpg) center center no-repeat; background-size: cover">

			<div class="slider-parallax-inner">

				<div class="container vertical-middle clearfix">

					<div class="heading-block title-center nobottomborder">
						<h1> To create Free Lisiting </h1>
						<span>Fill to Lisiting form was so Easy </span>
					</div>

					<div class="center bottommargin">
						<a href="#top" class="button button-3d button-teal button-xlarge nobottommargin"><i class="icon-star3"></i>Start FREE Lisiting</a> - OR - <a href="http://www.mymagicalmyanmar.com/"data-scrollto="#section-pricing" class="button button-3d button-blue button-xlarge nobottommargin" target="blank"><i class="icon-cloud"></i>Go to Our Website</a>
					</div>

				</div>

			</div>

		</section>

		<section id="page-title" class="page-title-mini">

			<div class="container clearfix">
				<h1>Free Lisiting Form</h1>

			</div>

		</section>

			<!-- Content
			============================================= -->
			<section id="content">

				<div class="content-wrap">

					<div class="container clearfix">

				<!-- Contact Form
				============================================= -->
				<div class="col_full">

					<div class="fancy-title title-dotted-border ">
						<h3 id="top">Business Info</h3>
					</div>



					<div class="contact-form-result"></div>

					<form action="{{ route("whatnew.store") }}" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-process"></div>

						<div class="col_one_third">
							<label for="template-contactform-name">Business Name </label>
							<input type="text" id="template-contactform-name" name="businessname" value="" class="sm-form-control required" />
						</div>

						<div class="col_one_third">
							<label for="template-contactform-email">Business Email </label>
							<input type="email" id="template-contactform-email" name="businessemail" value="" class="required email sm-form-control" />
						</div>

						<div class="col_one_third col_last">
							<label for="template-contactform-phone">Business Phone</label>
							<input type="text" id="template-contactform-phone" name="businessphone" value="" class="sm-form-control" />
						</div>

						<div class="clear"></div>

						<div class="col_two_third">
							<label for="template-contactform-subject">Business Address</label>
							<input type="text" id="template-contactform-subject" name="address" value="" class="required sm-form-control" />
						</div>
						<div class="col_one_third col_last">
							<label for="template-contactform-phone">Postal Code</label>
							<input type="text" id="template-contactform-phone" name="postalcode" value="" class="sm-form-control" />
						</div>

						<div class="clear"></div>

						<div class="col_one_third">
							<label for="template-contactform-city">Region</label>
							<input type="text" id="template-contactform-phone" name="region" value="" class="sm-form-control" />
						</div>



						<div class="col_one_third" >
							<label for="template-contactform-township">City</label>
							<input type="text" id="template-contactform-phone" name="city" value="" class="sm-form-control" />
						</div>


						<div class="col_one_third" >
							<label for="template-contactform-township">Township</label>
							<input type="text" id="template-contactform-phone" name="township" value="" class="sm-form-control" />
						</div>





						<div class="col_one_third col_half">
							<label for="template-contactform-email">Website</label>
							<input type="text" id="template-contactform-email" name="websiteurl" value="" class="sm-form-control" />
						</div>





						<div class="col_one_third col_half">
							<label for="template-contactform-phone">Category</label>
							<select id="template-contactform-service" name="category" class="sm-form-control">
								<option value="">-- Select One --</option>
								<option value="Airline">Airline</option>
								<option value="Bakery">Bakery</option>
								<option value="Bar">Bar</option>
								<option value="Book Stores">Book Stores</option>
								<option value="Cafe">Cafe`</option>
								<option value="Car Rental">Car Rental</option>
								<option value="Cafe">Cafe</option>
								<option value="Catering service">Catering service</option>
								<option value="Clinic & Hospital">Clinic & Hospital</option>
								<option value="Gems & Jewelry">Gems & Jewelry</option>
								<option value="Guest house">Guest house</option>
								<option value="Handy Craft">Handy Craft</option>
								<option value="Hospitality traning">Hospitality traning</option>
								<option value="Hostel">Hostel</option>
								<option value="Hotel">Hotel</option>
								<option value="Hotel supplier">Hotel supplier</option>
								<option value="Motel">Online Travel Agent</option>
								<option value="Resort">Resort</option>
								<option value="Restaurant">Restaurant</option>
								<option value="River Cruise">River Cruise</option>
								<option value="Spa & Massage">Spa & Massage</option>
								<option value="Ticketing">Tour guide</option>
								<option value="Ticketing">Ticketing</option>
								<option value="Ticketing">Travel agent</option>
								<option value="Ticketing">Wine & Spirits</option>

							</select>
						</div>


						<div class="col_half">
							<label for="template-contactform-message">Upload Photo <small>*</small></label>
							<input type="file" id="template-contactform-file" name="photourl1" value="" class="required sm-form-control" />
						</div>



						<div class="clear"></div>
						<div class="fancy-title title-dotted-border">
							<h3>Contact Info</h3>
						</div>

						<div class="col_one_third">
							<label for="template-contactform-name"> Name</label>
							<input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />
						</div>

						<div class="col_one_third">
							<label for="template-contactform-email">Email </label>
							<input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
						</div>

						<div class="col_one_third col_last">
							<label for="template-contactform-phone">Phone</label>
							<input type="text" id="template-contactform-phone" name="phone" value="" class="sm-form-control" />
						</div>

						<div class="clear"></div>

						<div class="col_full">
							<label for="template-contactform-message">Message</label>
							<textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
						</div>

						<div class="col_full hidden">
							<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
						</div>



						<div class="col_full">

							<div class="form-actions">
								<input class="btn btn-primary" type="submit" value="Submit"> 
							</div>
						</div>





					</form>


				</div><!-- Contact Form End -->


			</div>
		</section>


		<!-- #content end -->




			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy;  2017 Logistics Media Services Company Limited / All rights reserved .<br>
						<div class="copyright-links"><a href="http://www.mymagicalmyanmar.com/privacy-policy">Terms of service</a> / <a href="http://www.mymagicalmyanmar.com/termsofservice.html">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="https://www.facebook.com/mymagicalmyanmar/" class="social-icon si-small si-borderless si-facebook"  target="blank">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="https://twitter.com/mymagicalmyanmar" class="social-icon si-small si-borderless si-twitter" target="blank">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="https://plus.google.com/collection/EfBqNB" class="social-icon si-small si-borderless si-gplus"  target="blank">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>
							


						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i>info@mymagicalmyanmar.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +95-9-1559-768<span class="middot">&middot;</span> 
					</div>

				</div>

			</div><!-- #copyrights end -->



		</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?php echo url(); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo url(); ?>/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo url(); ?>/js/functions.js"></script>

	<script type="text/javascript">
		function change_city(evt)
		{
			var states=document.getElementById('states'),whichstate;

			whichstate=states.options[state.selectedIndex].value;

			for(var i=0;i<states.options.length;i++)
				document.getElementById('cities_'+i).style.display=(i==whichstate ? 'inline' : 'none');
		}
	</script>
</body>
</html>
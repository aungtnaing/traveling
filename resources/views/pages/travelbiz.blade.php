<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body class="stretched">


	<div id="wrapper" class="clearfix">
	<!-- Top Bar
	============================================= -->
	<div id="top-bar">

		<div class="clearfix">

			<div class="col_half nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">

						<ul>

							@if (Auth::guest())
							<li><a href="{{ url('/auth/login') }}">Login</a>
								<div class="top-link-section">

									@if (count($errors) > 0)
									<div class="alert alert-danger">
										<strong>Whoops!</strong> There were some problems with your input.<br><br>
										<ul>
											@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
									@endif
									<form method="POST" action="{{ url('/auth/login') }}">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="input-group" id="top-login-username">
											<span class="input-group-addon"><i class="icon-user"></i></span>
											<input type="email" class="form-control" placeholder="email" name="email" value="{{ old('email') }}">
										</div>
										<div class="input-group" id="top-login-password">
											<span class="input-group-addon"><i class="icon-key"></i></span>
											<input type="password" class="form-control" placeholder="password" name="password">
										</div>
										<label class="checkbox">
											<input type="checkbox" value="remember-me"> Remember me
										</label>

									</br>
									<button class="btn btn-danger btn-block" type="submit">Sign in</button>
								</form>

								<a href="{{ url('/auth/register') }}"><button class="btn btn-danger btn-block" type="submit">Register</button></a>
							</div>
						</li>
						@else
						@if(Auth::user()->photourl!="")
						<!-- <li><a href=""><img src="{{ Auth::user()->photourl }}" width="25" height="25" class="img-circle"> <span>{{ substr(Auth::user()->name,0, 5) }}</span></a> -->
						<li><a href=""><img src="{{ Auth::user()->photourl }}" width="25" height="25" class="img-circle"> <span>{{ Auth::user()->name }}</span></a>
							@else
							<li><a href=""><i class="icon-user"></i> <span>{{ Auth::user()->name }}</span></a>
								@endif
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li><a href="{{ route("profiles.edit", Auth::user()->id) }}"><i class="icon-user"></i> <span>My Profile</span></a></li>
									<li><a href="{{ url('/auth/logout') }}">Logout <i class="icon-signout"></i></a></li>
								</ul>
							</li>
							@endif
						</ul>
					</ul>
				</div><!-- .top-links end -->

			</div>

			<div class="col_half fright col_last nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+95.9.1234567</span></a></li>
							<li><a href="mailto:info@mymagicalmyanmar.com" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">info@mymagicalmyanmar.com</span></a></li>
							

						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">


			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="/" class="standard-logo" data-dark-logo="<?php echo url(); ?>/images/logo-dark.png"><img src="<?php echo url(); ?>/images/logo-dark.png"></a>
						<a href="/" class="retina-logo" data-dark-logo="<?php echo url(); ?>/images/logo-dark@2x.png"><img src="<?php echo url(); ?>/images/logo@2x.png"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="dark">

						<ul>
							<li><a href="/"><div>Home</div></a>
								
							</li>
							<li><a href="<?php echo url(); ?>/magazine"><div>Magazine</div></a>
								
							</li>
						</ul>


						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Travel Search</h1>

			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="postcontent nobottommargin">
						<!-- <input type="text" name="search" placeholder="Search.."> -->

						@foreach($whatnews as $whatnew)
						<div class="ievent clearfix">
							<div class="entry-image">
								<a href="#">
									<img src="<?php echo url(); ?>{{ $whatnew->photourl1 }}" alt="Inventore voluptates velit totam ipsa">

								</a>
							</div>
							<div class="entry-c">
								<div class="entry-title">
									<h2><a href="{{ $whatnew->websiteurl }}">I{{ $whatnew->businessname }}</a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li><a href="{{ $whatnew->websiteurl }}"><i class="icon-globe"></i>{{ $whatnew->websiteurl }}</a></li>
									<li><a href="{{ $whatnew->businessphone }}"><i class="icon-phone"></i>{{ $whatnew->businessphone }}</a></li>
									<li><a href="{{ $whatnew->businessemail }}"><i class="icon-mail"></i>{{ $whatnew->businessemail }}</a></li>
									
								</ul>

							</div>
							<p class="icon-home">{{ $whatnew->address }}<p>
							</div>
							@endforeach
							{!! $whatnews->render() !!}



							<div class="row">
								<div class="col-half nobottommargin">


									@foreach($whatnewslists as $whatnewslist)

									<div class="thumbnail">

										<div>
											<h5><a href="{{ $whatnewslist->websiteurl }}">{{ $whatnewslist->businessname }}</a></h5>
											<ul class="entry-meta clearfix">
												<li><a href="{{ $whatnewslist->websiteurl }}"><i class="icon-globe"></i>{{ $whatnewslist->websiteurl }}</a></li>
												<li><a href="{{ $whatnewslist->businessphone }}"><i class="icon-phone"></i> 09888888888</a></li>
												<li><a href="{{ $whatnewslist->businessemail }}"><i class="icon-mail"></i>asadsad@gmail.cm</a></li>
												<li><i class="icon-home"></i>{{ $whatnewslist->address }}</li>

											</ul>

										</div>

									</div>

									@endforeach

							{!! $whatnewslists->render() !!}










								</div>


							</div>




						</div>

						<div class="sidebar nobottommargin col_last clearfix">
							<div class="sidebar-widgets-wrap">




								<div class="widget clearfix">
									<img class="aligncenter" src="<?php echo url(); ?>/images/magazine/ad.png" alt="">
								</div>	



								<div class="widget widget_links clearfix">

									<h4>Categories</h4>
									<div class="col_half nobottommargin">
										<ul>
											@for($i = 0; $i < count($categorys); $i++)
											@if($i < 6)
											<li><a href="{{ url('/postlists', $categorys[$i]->id) }}">{{ $categorys[$i]->name }}</a></li>
											@endif
											@endfor


										</ul>
									</div>
									<div class="col_half nobottommargin col_last">
										<ul>

											@for($i = 6; $i < count($categorys); $i++)

											<li><a href="{{ url('/postlists', $categorys[$i]->id) }}">{{ $categorys[$i]->name }}</a></li>

											@endfor


										</ul>
									</div>

								</div>	
















							</div>





						</div>
					</div>





				</div>

			</div>

		</section><!-- #content end -->

	<!-- Footer
	============================================= -->
	<footer id="footer" class="dark">

		<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

								<img src="images/footer-widget-logo.png" alt="" class="footer-logo">
								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Headquarters:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
								</div>

							</div>

						</div>

						<div class="col_one_third">

							<div class="widget widget_links clearfix">
								<h4>Catagories</h4>
								<ul>
									<li><a href="#">Travel sector update</a></li>
									<li><a href="#">Check In</a></li>
									<li><a href="#">Exposure</a></li>
									<li><a href="#">Picturesques</a></li>
									<li><a href="#">Arrival</a></li>
									<li><a href="#">Infocus</a></li>
									<li><a href="#">Deperature</a></li>
									<li><a href="#">Stand out</a></li>
									<li><a href="#">Snap Shop</a></li>
									<li><a href="#">Underground</a></li>
								</ul>
							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget widget_links clearfix">

								<h4>Contact</h4>
								<ul>
									<li><a href="aboutus.html">About US</a></li>

									<li><a href="adswithus.html">Advertise with us</a></li>
									<li><a href="privacy.html">Privacy policy</a></li>
									<li><a href="term.html">Terms and condition</a></li>
									<li><a href="contact.html">Contact us</a></li>
									<li><a href="storelocator.html">Store Locator</a></li>

								</ul>
							</div>
						</div>


						
					</div>

					<div class="col_one_third col_last">				
						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
						</div>

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-md-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
								</div>

							</div>


						</div>

					</div>
					<div class="clearfix"></div>
					<br></br>
					<div class="row">
						<div class="col">
							<div class="col-lg-2 col-sm-2 col-xs-4">
								<a href ="https://www.pata.org/" target="blank">
									<img src="images/member1.png" class="img-responsive" width="100px" height="50px">
								</a>
							</div>
							<div class="col-lg-2 col-sm-2 col-xs-4">

								<a href="http://www.myanmartourismfederation.org/"  target="blank">
									<img src="images/member2.png" class="img-responsive"  width="100px" height="50px">
								</a>
							</div>
							<div class="col-lg-2 col-sm-2 col-xs-4">
								<a href="https://www.umta.org/ " target="blank">
									<img src="images/member3.png" class="img-responsive"  width="100px" height="50px">
								</a>
							</div>
						</div>
					</div>
					
				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy;  2017 Logistics Media Services Company Limited / All rights reserved .<br>
						<div class="copyright-links"><a href="term.html">Terms of Use</a> / <a href="privacy.html">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>
							


						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i>info@mymagicalmyanmar.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +95-9-1234-567<span class="middot">&middot;</span> <i class="icon-skype2"></i>OnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

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
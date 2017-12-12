	<!-- Header
	============================================= -->
	<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">
		
		
		<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						
						<ul>
							<!-- <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-user"></i><i class="icon-angle-down"></i></a>
						<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
						<li><a href="#">Logout <i class="icon-signout"></i></a></li>
					</ul> -->
					
					
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
			</div><!-- .top-links end -->

		</div>

		<div class="col_half fright col_last nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<li><a href="https://www.facebook.com/mymagicalmyanmar" class="si-facebook" target="blank"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="https://twitter.com/magicalmyanmar" class="si-twitter" target="blank"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li><a href="https://www.instagram.com/my_magical_myanmar" class="si-instagram" target="blank"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="tel:+951554776" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+951554776</span></a></li>
							<li><a href="mailto:info@logimediamyanmar.com" class="si-email3" target="blank"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">info@logimediamyanmar.com</span></a></li>
							
							
						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->
		
		
		

		<div id="header-wrap" >

			<div class="container clearfix">

				<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

								<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="/" class="standard-logo" data-dark-logo="<?php echo url(); ?>/images/logo1.png"><img src="<?php echo url(); ?>/images/logo3.png" alt="Canvas Logo"></a>
						<a href="/" class="retina-logo" data-dark-logo="<?php echo url(); ?>/images/logo2.png"><img src="<?php echo url(); ?>/images/logo@2x.png" alt="mymagicalmyanmar"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="dark">

						<ul>
							<li><a href="/"><div>Home</div></a>
								
							</li>
							<li><a href="<?php echo url(); ?>/magazine"><div>Magazine</div></a>
								
							</li>
							<!--- <li><a href="<?php echo url(); ?>/booking"><div>Booking</div></a>
								
							</li> --->
							<li><a href="<?php echo url(); ?>/joinus"><div>Join Us</div></a>
								
							</li>
						</ul>
						

						<!-- Top Search
						============================================= -->
						
											<!-- Top Cart
						============================================= -->
						<div id="top-cart">
							<a href="{{ url('/checkouts') }}" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span><?php echo count($orderbooks); ?></span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">

								<?php $grandtotal = 0; ?>
									@foreach($orderbooks as $orderbook)
								
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="{{ $orderbook->photourl1 }}" alt="{{ $orderbook->bookinfo }}" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">{{ $orderbook->bookinfo }}</a>
											<span class="top-cart-item-price"{{ $orderbook->price }}</span>
											<span class="top-cart-item-quantity">x{{ $orderbook->qty }}</span>
										</div>
									</div>
									<?php $grandtotal = $grandtotal + $orderbook->total; ?>
									@endforeach 
						
								</div>
								
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">{{ $grandtotal }} ks</span>

									<br>
								<a class="button button-small" href="{{ url('/checkouts') }}">View Cart</a>
								
								
								</div>
							</div>
						</div><!-- #top-cart end -->
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
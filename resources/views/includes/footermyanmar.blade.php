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

								<img src="<?php echo url() ?>/images/footer-widget-logo.png" alt="" class="footer-logo">
								<div style="background: url('<?php echo url() ?>/images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Headquarters:</strong><br>
										No.2,Room.9 D/E,Zagawar Condo.Moekaung road <br>
										Yankin, Yangon.Myanmar 11081<br>
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (+951) 554776<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> (+951) 559768<br>
									
								</div>

							</div>

						</div>

						<div class="col_one_third">

							<div class="widget widget_links clearfix">
								<h4>Catagories</h4>
								<ul>
									@foreach($categorys as $category)
									<li><a href="{{ url('/postlists', $category->id) }}">{{ $category->name }}</a></li>
									
									@endforeach
								</ul>
							</div>

						</div>

						<div class="col_one_third col_last">
							
							<div class="widget widget_links clearfix">

								<h4>Contact</h4>
								<ul>
									<li><a href="<?php echo url() ?>/aboutus">About US</a></li>
									
									<li><a href="<?php echo url() ?>/advertisewithus">Advertise with us</a></li>
									<li><a href="<?php echo url() ?>/privacypolicy">Privacy policy</a></li>
									<li><a href="<?php echo url() ?>/termscondation">Terms of Services</a></li>
									<li><a href="<?php echo url() ?>/contactus">Contact us</a></li>
									<li><a href="<?php echo url() ?>/storelocator">Store Locator</a></li>
                                                                          <li><a href="<?php echo url() ?>/pictureupload">Picturesque T & C</a></li>
									
								</ul>
							</div>
						</div>


						
					</div>

					<div class="col_one_third col_last">				
						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter now to keep up to date with important travel news,amazing special offers and our 
latest trip-inspiring stories:</h5>
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
									<a href="https://www.facebook.com/mymagicalmyanmar/?ref=br_rs" target="blank"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-md-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="http://test.mymagicalmyanmar.com/subscribecheckouts/3"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
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
									<img src="<?php echo url() ?>/images/member1.png" class="img-responsive" width="100px" height="50px">
								</a>
							</div>
							<div class="col-lg-2 col-sm-2 col-xs-4">
								
								<a href="http://www.myanmartourismfederation.org/"  target="blank">
									<img src="<?php echo url() ?>/images/member2.png" class="img-responsive"  width="100px" height="50px">
								</a>
							</div>
							<div class="col-lg-2 col-sm-2 col-xs-4">
								<a href="https://www.umta.org/ " target="blank">
									<img src="<?php echo url() ?>/images/member3.png" class="img-responsive"  width="100px" height="50px">
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
						Copyrights &copy; 2017 All Rights Reserved by Logistics Media Services Company Limited.<br>
						
					</div>


				</div>

			</div><!-- #copyrights end -->

		</footer>
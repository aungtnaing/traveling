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

								<img src="<?php echo url() ?>/images/footerlogo1.png" alt="" class="footer-logo">
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
									<li><a href="<?php echo url() ?>/aboutus">About Us</a></li>
									
									<li><a href="<?php echo url() ?>/advertisewithus">Advertise With Us</a></li>
									<li><a href="<?php echo url() ?>/privacypolicy">Privacy Policy</a></li>
									<li><a href="<?php echo url() ?>/termscondation">Terms of Services</a></li>
									<li><a href="<?php echo url() ?>/contactus">Contact Us</a></li>
									
									<li><a href="<?php echo url() ?>/pictureupload">Picturesque T&C</a></li>
									
								</ul>
							</div>
						</div>


						
					</div>

					<div class="col_one_third col_last">				
						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter now to keep up to date with important travel news,amazing special offers and our 
								latest trip-inspiring stories:</h5>
								<!-- Begin MailChimp Signup Form -->
								<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
								<style type="text/css">
									#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
	<form action="https://mymagicalmyanmar.us8.list-manage.com/subscribe/post?u=d5232c0e03f30eb1d83964fa9&amp;id=561cf6b4a6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<div id="mc_embed_signup_scroll">

			<div class="mc-field-group">
				<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
				</label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
				<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
			</div>

			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d5232c0e03f30eb1d83964fa9_561cf6b4a6" tabindex="-1" value=""></div>
			<div class="clear"></div>
		</div>
	</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=1395950293865855';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="widget clearfix" style="margin-bottom: -20px;">

	<div class="row">

		<div class="col-md-6 clearfix bottommargin-sm">
			<!-- <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
				<i class="icon-facebook"></i>
				<i class="icon-facebook"></i>
			</a> -->
			<!-- <a href="https://www.facebook.com/mymagicalmyanmar/?ref=br_rs" target="blank"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a> -->
			<div class="fb-like" data-href="https://www.facebook.com/mymagicalmyanmar" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
		</div>
		<div class="col-md-6 clearfix">
			<a href="http://www.mymagicalmyanmar.com/rss-feed.xml" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
				<i class="icon-rss"></i>
				<i class="icon-rss"></i>
			</a>
			<a href="rss-feed.xml"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
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

			<a href="http://www.tourismmyanmar.org/" target="blank">
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


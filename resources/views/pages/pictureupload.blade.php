@extends('layouts.default')
@section('content')
<div class="clearfix"></div>

<section id="page-title">

	<div class="container clearfix">
		<h1>Picturesques | Terms and Conditions </h1>
		
	</div>

</section><!-- #page-title end -->

			<!-- Content
			============================================= -->
			<section id="content">

				<div class="content-wrap">

					<div class="container clearfix">

				<!-- Contact Form
				============================================= -->
				<div class="col_half">

					<div class="fancy-title title-dotted-border">
						<h3>Send us your content photo</h3>
					</div>

					
						
						
						<form action="{{ route("picturesques.store") }}" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">


							<div class="col_one_third">
								<label for="template-contactform-name">Name <small>*</small></label>
								<input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control"  />
							</div>

							<div class="col_one_third">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="email" value="" class="sm-form-control" />
							</div>

							<div class="col_one_third col_last">
								<label for="template-contactform-phone">Phone</label>
								<input type="text" id="template-contactform-phone" name="phone" value="" class="sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_two_third">
								<label for="template-contactform-subject">Subject <small>*</small></label>
								<input type="text" id="template-contactform-subject" name="subject" value="" class="sm-form-control" />
							</div>

							<div class="clear"></div>

							
							<ul class="thumbnails">
								<li class="span3"> <a> 
									<input style="display:none;" id="file-input1" name="photourl1" type='file' onchange="readURL(this);" />                    
									<label for="file-input1">
										<i class="icon-camera"></i>.ad - picture<br>
										<img id="blah" src="//placehold.it/100" alt="avatar" alt="your image" />

									</label>
									<div class="actions"><a id="preview1" class="lightbox_trigger" herf=""><i class="icon-search"></i></a> </div>

								</li>
								

							</ul>

							<div class="col_full">
								<label for="template-contactform-message">Message <small>*</small></label>
								<textarea class="sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
							</div>

							<div class="col_full">

								<input class="btn btn-primary" type="submit" value="Submit"> 
							</div>

						</form>
					
					<div class="line"></div>
					<div class="widget clearfix">
						<img src="images/magazine/ad.png" alt="">
					</div>
					
				</div><!-- Contact Form End -->
				
				<div class="col_half col_last">	
					<h4>Terms And Conditions </h4>

					<p>The Picturesque photo competition is hosted by My Magical Myanmar. It is a monthly publication of Logistics Media Services Company Limited.<p>
						<ul>
							<li>1. Photos must be taken in Myanmar.  </li>

							<li>2. Photos can be taken by any camera.</li>

							<li>3. 3000x2000 pixel in 300 dpi resolution. </li>

							<li>4. Without water mark. Without Boarder.</li>

							<li>5. Do not digitally manipulate, enhance or alter your photographs (Only minor burning, dodging and/or color correction is acceptable as is cropping.)</li>
						</ul>
						<div class="line"></div>
						<h4>Eligibility:</h4>

						<p>
							The Picturesque photo competition is open to everyone. Employees of Logistics Media Services Company Limited, and their immediate family members and/or those living in the same household of each are not eligible to participate in this competition.</p>
							<div class="line"></div>
							<h4>Agreement to Rules:</h4>
							<p>
								By participating, you agree to be fully unconditionally bound by these rules, and you represent and warrant that you meet the eligibility requirements set forth herein. In addition, you agree to accept the decisions of My Magical Myanmar, as final and binding as it relates to the content.
							</p>		
							<div class="line"></div>
							<h4>Period:</h4>
							<p>
								Entries will be accepted online starting on or about the 15th of each month prior. All online entries must be received by 23:59 (+6:30 Yangon time) on the 15th of each month of contest (ex: January Contest submissions are due by 23:59 15th January, 2015).
							</p>		
							<div class="line"></div>
							<h4>Prizes:</h4>
							<p>
								The first place photo of winner will be published in the next My Magical Myanmar Issue and will receive 50,000 MMK. Acceptance of prize constitutes permission for My Magical Myanmar to use winner’s name, likeness, and entry for purposes of publishing and advertising without further compensation, unless prohibited by law. Second, third, and fourth place winners will be published in the next issue of My Magical Myanmar.
							</p>	
							<div class="line"></div>
							<h4>How to Enter:</h4>
							<p>
								The picturesque photo competition must be entered by submitting by sending to<a href=" picturesque@mymagicalmyanmar.com"> picturesque@mymagicalmyanmar.com,<a> or uploading to 
								<a href="picturesques.html">www.mymagicalmyanmar.com/picturesque </a>The entry must fulfil all picturesque photo competition requirements, as specified, to be eligible to win a prize. Entries that are not complete or do not adhere to the rules or specifications may be disqualified at the sole discretion of My Magical Myanmar. You may enter five (5) photos only once and you must describe your information of your name, caption of photos. You may not enter more times than indicated by using multiple email addresses, identities or devices in an attempt to circumvent the rules. If you use fraudulent methods or otherwise attempt to circumvent the rules your submission may be removed from eligibility at the sole discretion of My Magical Myanmar.
							</p>	
							<div class="line"></div>
							<h4>Odds:</h4>
							<p>
								The odds of winning depend on the number of eligible entries received.
								Winner selection and notification:
								Winners of the picturesque photo competition will be selected in a random drawing under the supervision of the My Magical Myanmar. Winners will be notified via email to the email address they entered the picturesque photo competition with within a week (7) days following the winner selection. My Magical Myanmar shall have no liability for a winner’s failure to receive notices due to winners’ spam, junk e-mail or other security settings or for winners’ provision of incorrect or otherwise non-functioning contact information. If the selected winner cannot be contacted, is ineligible, fails to claim the prize within 15 days from the time award notification was sent, or fails to timely return a completed and executed declaration and releases as required, prize may be forfeited and an alternate winner selected.
							</p>	
							<div class="line"></div>
							<h4>Rights Granted by you:</h4>
							<p>
								By entering this content you understand that My Magical Myanmar, anyone acting on behalf of My Magical Myanmar, or its respective licensees, successors and assigns will have the right, where permitted by law, without any further notice, review or consent to print, publish, broadcast, distribute, and use, in any media now known or hereafter in perpetuity and throughout the World, your entry, including, without limitation, the entry and winner’s name, portrait, picture, likeness, image or statements about the Photo competition, and biographical information as news, publicity or information and for trade, advertising, public relations and promotional purposes without any further compensation. The applicant has to guarantee that the photo submitted to the contest is made by him/herself.
							</p>	
							<div class="line"></div>
							<h4>Terms:</h4>
							<p>
								My Magical Myanmar reserves the right, in its sole discretion to cancel, terminate, modify or suspend the picturesque photo competition should (in its sole discretion) a virus, bugs, non-authorized human intervention, fraud or other causes beyond its control corrupt or affect the administration, security, fairness or proper conduct of the Photo competition. In such case, My Magical Myanmar may select the recipients from all eligible entries received prior to and/or after (if appropriate) the action taken by My Magical Myanmar. My Magical Myanmar reserves the right at its sole discretion to disqualify any individual who tampers or attempts to tamper with the entry process or the operation of the picturesque photo competition or website or violates these Terms & Conditions.
								My Magical Myanmar has the right, in its sole discretion, to maintain the integrity of the Photo competition, to void votes for any reason, including, but not limited to; multiple entries from the same user from different IP addresses; multiple entries from the same computer in excess of that allowed by picturesque photo competition rules; or the use of bots, macros or scripts or other technical means for entering.
								Any attempt by an entrant to deliberately damage any web site or undermine the legitimate operation of the picturesque photo competition may be a violation of criminal and civil laws and should such an attempt be made, My Magical Myanmar reserves the right to seek damages from any such person to the fullest extent permitted by law.
								By entering the picturesque photo competition you agree to receive email newsletters periodically from mymagicalmyanmar.com. You can opt-out of receiving this communication at any time by clicking the unsubscribe link in the newsletter.
								Information submitted with an entry is subject to the Privacy Policy stated on the mymagicalmyanmar.com Web Site. To read the Privacy Policy, click here.
							</p>	
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

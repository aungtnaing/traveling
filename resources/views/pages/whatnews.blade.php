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
						<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png"></a>
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
									<select id="template-contactform-service" name="city" class="sm-form-control">
									<option value="">-- Select One --</option>
                                                                        <option value="Ayeyarwady">Ayeyarwady Region</option>
                                                                        <option value="Bago">Bago Region</option>
                                                                        <option value="Chin">Chin State</option>
                                                                        <option value="Kachin">Kachin State</option>
                                                                        <option value="Kayah">Kayah State</option>
                                                                        <option value="Kayin">Kayin State</option>
                                                                        <option value="Magway">Magway Region</option>
                                                                        <option value="Mandalay">Mandalay Region</option>
									<option value="Mon">Mon State</option>
                                                                        <option value="Rakhine">Rakhine State</option>
                                                                        <option value="Shan">Shan State</option>
                                                                        <option value="Sagaing">Sagaing Region</option>
                                                                        <option value="Sagaing">Tanintharyi Region</option>
                                                                        <option value="Yagon">Yagon Region</option>
                                                                        <option value="Naypyidaw">Naypyidaw Union Territory</option>


									
									</select></div>
										
										
										
										<div class="col_one_third" >
									<label for="template-contactform-township">City</label>
									<select id="template-contactform-service" name="township" class="sm-form-control">
									
                                                                       <option value="">-- Select One --</option>
                                                                          <optgroup label="Ayarwady Region">
									<option value="Hinthada">Hinthada District</option>
									<option value="Labutta">Labutta District</option>Ma-ubin District
									<option value="Ma-ubin">Ma-ubin District</option>
                                                                        <option value="Myaungmya">Myaungmya District</option>
                                                                        <option value="Pathein">Pathein District</option>
                                                                        <option value="Pyapon">Pyapon District</option>
                                                                       <option value="Kyonpyaw">Kyonpyaw District</option>
                                                                       <option value="Myaungmya">Myanaung District</option>
                                                                       <option value="Main cities and towns">Main cities and towns</option>

                                                                        
                                                                       <optgroup label="Bago Region">
                                                                        <option value="Bago">Bago District</option>
									<option value="Taungoo ">Taungoo District</option>


                                                                          <optgroup label="Chin State">
                                                                        <option value="Falam">Falam District</option>
									<option value="Hakha">Hakha District</option>
                                                                        <option value="Mindat">Mindat District</option>
                                                                         <option value="Cities and towns">Main cities and towns</option>

                                                                           <optgroup label="Kachin State">
                                                                        <option value="Mohnyin">Mohnyin District</option>
									<option value="Myitkyina">Myitkyina District</option>
                                                                        <option value="Putao">Putao District</option>
                                                                         <option value="Bhamo">Bhamo District</option>
                                                                         <option value="Cities and towns">Main cities and towns</option>

                                                                        <optgroup label="Kayah State">
                                                                        <option value="Loikaw">Loikaw District</option>
									<option value="Bawlakhe">Bawlakhe District</option>
                                                                        <option value="Cities and towns">Main cities and towns</option>



                                                                        <optgroup label="Kayin State">
                                                                        <option value="Hpapun">Hpapun District</option>
									<option value="Kawkareik">Kawkareik District</option>
                                                                        <option value="Myawaddy">Myawaddy District</option>
                                                                        <option value="Hpa-an">Hpa-an District</option>
                                                                  <option value="Gangaw ">Gangaw Districtt</option>
									<option value="Cities and towns">Main cities and towns</option>


                                                                        <optgroup label="Magway Region">
                                                                        <option value="Magway">Magway District</option>
									<option value="Minbu">Minbu District</option>
                                                                        <option value="Pakokku">Pakokku District</option>
                                                                        <option value="Thayet ">Thayet District</option>
                                                                       <option value="cities and towns ">Main cities and towns</option>
									

                                                                        <optgroup label="Mandalay Region">
                                                                        <option value="Kyaukse">Kyaukse District</option>
	                                                                <option value="Mandalay">Mandalay District</option>
                                                                        <option value="Myingyan">Myingyan District</option>
									<option value="Nyaung-U">Nyaung-U District</option>
                                                                        <option value="Pyinoolwin">Pyinoolwin District</option>
                                                                        <option value="Yamethin">Yamethin District</option>
                                                                       <option value="cities and towns ">Main cities and towns</option>

                                                                        
                                                                    <optgroup label="Mon Region">
                                                                        <option value="Mawlamyine">Mawlamyine District</option>
	                                                                <option value="Thaton">Thaton District</option>
                                                                       <option value="cities and towns ">Main cities and towns</option>


                                                                        
                                                                    <optgroup label="Rakhine State">
                                                                        <option value="Kyaukpyue">Kyaukpyu District</option>
	                                                                <option value="Maungdaw">Maungdaw District</option>
                                                                       <option value="Sittwe">Sittwe District</option>
                                                                       <option value="Thandwe">Thandwe District</option>
                                                                       <option value="Mrauk-U ">Mrauk-U District</option>
                                                                        <option value="cities and towns">Main cities and towns</option>

                                                                       
                                                                        <optgroup label="Shan State">
                                                                        <option value="Kengtung ">Kengtung District</option>
	                                                                <option value="Mong Hpayaki">Mong Hpayak District</option>
                                                                        <option value="Mong Hsat">Mong Hsat District</option>
                                                                        <option value="Tachileik">Tachileik District</option>
                                                                        <option value="Kunlong">Kunlong District</option>
                                                                        <option value="Kyaukme">Kyaukme District</option>
                                                                        <option value="Lashio">Lashio District</option>
                                                                        <option value="Muse">Mu Se District</option>
                                                                        <option value="Mongmit">Mongmit Districtt</option>
                                                                        <option value="Kokang">Kokang Self-Administered Zone</option>Pa Laung Self-Administered Zone1
                                                                        <option value="Pa Laung">Pa Laung Self-Administered Zone1</option>
								        <option value="Wa Self-Administered Division">Wa Self-Administered Division</option>
                                                                        <option value="Langkho">Langkho District</option>
                                                                        <option value="Loilen">Loilen District</option>
                                                                        <option value="Taunggyi">Taunggyi District</option>
                                                                        <option value="Danu">Danu Self-Administered Zone</option>
                                                                        <option value="Pa-O ">Pa-O Self-Administered Zone</option>
                                                                        <option value="cities and towns">Main cities and towns</option>
 
                                                                       <optgroup label="Sagaing Region">
                                                                       <option value="Hkamti">Hkamti District</option>
                                                                       <option value="Kanbalu">Kanbalu District</option>
                                                                       <option value="Kale">Kale District</option>
                                                                       <option value="Katha">Katha District</option>
                                                                      <option value="Mawlaik ">Mawlaik District</option>
                                                                      <option value="Monywa">Monywa District</option>
                                                                      <option value="Sagaing">Sagaing District</option>
                                                                      <option value="Shwebo ">Shwebo District</option>
                                                                      <option value="Tamu">Tamu District</option>
                                                                      <option value="Yinmabin">Yinmabin District</option>
                                                                      <option value="Naga">Naga Self-Administered Zone1</option>

                                                                        
                                                                        <optgroup label="Tanintharyi Region">
                                                                       <option value="Dawei">Dawei District</option>
                                                                       <option value="Kawthaung">Kawthaung District</option>
                                                                       <option value="Myeik">Myeik District</option>
                                                                       <option value=" cities and towns">Main cities and towns</option>

                                                                       
                                                                       <optgroup label="Tanintharyi Region">
                                                                       <option value="Dawei">Dawei District</option>
                                                                       <option value="Kawthaung">Kawthaung District</option>
                                                                       <option value="Myeik">Myeik District</option>
                                                                       <option value=" cities and towns">Main cities and towns</option>

         
                                                                       <optgroup label="Yangon Region">
                                                                       <option value="East Yangon">East Yangon Region</option>
                                                                       <option value="North Yangon">North Yangon Region</option>
                                                                       <option value="South Yangon">South Yangon Region</option>
                                                                       <option value=" West Yangon">West Yangon Region</option>
                                                                       <option value=" cities and towns">Main cities and towns</option>

                                                                        
                                                                       <optgroup label="Naypyitaw Region">
                                                                         <option value="North Naypyitaw">Ottara District-North Nyapyitaw</option>
                                                                       <option value="South Naypyitaw">Ottara District South Naypyitaw</option>
                                                                       <option value=" cities and towns">Main cities and towns</option>
                                                             



									</select></div>


                                                                     <div class="col_one_third" >
									<label for="template-contactform-township">Township</label>
									<select id="template-contactform-service" name="township" class="sm-form-control">
									<option value="">-- Select One --</option>
									

<optgroup label="Hinthada District">
<option value="Hinthada">Hinthada Township</option>
<option value="Lemyethna ">Lemyethna Township</option>
<option value="Ma-ubin">Ma-ubin District</option>
<option value="Myaungmya">Myaungmya District</option>

<optgroup label="Labutta v">
<option value="Labutta">Labutta Township</option>
<option value="Mawlamyinegyun">Mawlamyinegyun Township</option>
<option value="Kyonmanage">Kyonmanage Township</option>
<option value="Pyinsalu">Pyinsalu Township</option>

<optgroup label="Ma-ubin District">
<option value="Danubyu">Danubyu Township</option>
<option value="Ma-ubin">Ma-ubin Township</option>
<option value="Nyaungdon">Nyaungdon Township</option>
<option value="Pantanaw">Pantanaw Township</option>Myaungmya District
								
<optgroup label="Pathein District">
<option value="Kangyidaunk">Kangyidaunk Township</option>
<option value="Ngapudaw">Ngapudaw Township</option>
<option value="Nyaungdon">Nyaungdon Township</option>
<option value="Thabaung">Thabaung Township</option>
<option value="Thabaung">Chaungtha Township</option>
<option value="Hainggyi">Hainggyi Township</option>
<option value="Ngayokekaung">Ngayokekaung Township</option>

<optgroup label="Pyapon District">
<option value="Bogale">Bogale Township</option>
<option value="Dedaye>Dedaye Township</option>
<option value="Kyaiklat">Kyaiklat Township</option>
<option value="Pyapon">Pyapon Township</option>
<option value="Ahmar">Ahmar Township</option>
						
									</select></div>
										
										
										
										
										
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
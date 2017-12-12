@extends('layouts.default')
@section('content')
<div class="clearfix"></div>
<section id="page-title">

	<div class="container clearfix">
		<h1>Store Location</h1>

	</div>

</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="clearfix">		


						<div class="col_two_third">

							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="i-alt">1.</i></a>
								</div>
								<h3>Store Locator</h3>
								<p>53 Ocean Supercenter (Pazundaung Branch) Supermarket & Supercenter No 62, Corner of Maharbandoola Road & Tarwatainthar Streetreet,Yangon. PZDG.</p>
							</div>

						</div>

						<div class="col_two_third">

							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="i-alt">2.</i></a>
								</div>
								<h3>Store Locator</h3>
								<p>53 Ocean Supercenter (Pazundaung Branch) Supermarket & Supercenter No 62, Corner of Maharbandoola Road & Tarwatainthar Streetreet,Yangon. PZDG.</p>
							</div>

						</div>

					<div class="col_two_third">

							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="i-alt">3.</i></a>
								</div>
								<h3>Store Locator</h3>
								<p>22 Popular (Myaynigone) Book Shop Myaynigone City Mart SCHG.</p>
							</div>

						</div>
						<div class="col_two_third">

							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="i-alt">4.</i></a>
								</div>
								<h3>Store Locator</h3>
								<p>56 " City Mart Supermarket (FMI City Branch)
									" Supermarket & Supercenter FMI City, Padethapin Main Road, Yangon. HLTA.</p>
								</div>

							</div>

							<div class="col_two_third">

								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt">5.</i></a>
									</div>
									<h3>Store Locator</h3>
									<p>52 Ocean Supercenter (North Point Branch) Supermarket & Supercenter North Point Shopping Center, Corner of Pyay Road & Tawwin Road, Yangon. MYGN</p>
								</div>

							</div>

							<div class="col_one_third nobottommargin col_last">

								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt">6.</i></a>
									</div>
									<h3>Store Locator</h3>
									<p>18 Sarpay Beikman Book Shop 529/531, 1st Flr, Merchant Rd., Corner of 37th St., Ward (5), KTDA KTDA</p>
								</div>

							</div>
						<div class="col_two_third">

								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt">7.</i></a>
									</div>
									<h3>Store Locator</h3>
									<p>10 Sar Pay Yadanar Book Shop No.45,B-1,Ground Floor,Taw Win Centre, Pyay Road, Yangon, Myanmar DGN.</p>
								</div>

							</div>

					<div class="col_two_third">

								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt">8.</i></a>
									</div>
									<h3>Store Locator</h3>
									<p>6 Lucky 7 (U Chit Mg Rd) Book Shop U Chit Maung Rd, Near Of U Chit Maung Housing, BHN BHN.</p>
								</div>

							</div>

							<div class="col_two_third">

								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt">9.</i></a>
									</div>
									<h3>Store Locator</h3>
									<p>20 Lucky 7 (8 Mile) Book Shop Pyay Rd, Corner Of Sel Myaung Yeik Thar St, MYGN MYGN
										.</p>
									</div>

								</div>

							</div>
							<div class="container clearfix">

								<div class="line"></div>

								<h3>search location</h3>

								<div class="col_one_third nobottommargin">
									<div class="input-group input-group-lg">
										<span class="input-group-addon"><i class="icon-map-marker"></i></span>
										<input type="text" id="location-input" name="location-input" class="form-control" placeholder="Search for Location...">
										<span class="input-group-btn">
											<button class="btn btn-default" id="location-submit" type="submit"><i class="icon-line-search"></i></button>
										</span>
									</div>

									<p id="location-coordinates" style="display: none; margin-top: 10px;">
										<small id="latitude-text"><em>Latitude:</em></small> &middot; <small id="longitude-text"><em>Longitude:</em></small>
									</p>
								</div>

								<div class="col_two_third nobottommargin col_last">

									<div id="google-map-custom" class="gmap" style="height: 400px;"></div>

								</div>
							</div>
							<div class="line"></div>
							<div class="clearfix"></div>

							<br></br>

							<div class="clearfix">		


								<div class="col_two_third">

									<div class="feature-box fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="i-alt">10.</i></a>
										</div>
										<h3>Store Locator</h3>
										<p>53 Ocean Supercenter (Pazundaung Branch) Supermarket & Supercenter No 62, Corner of Maharbandoola Road & Tarwatainthar Streetreet,Yangon. PZDG.</p>
									</div>

								</div>

								<div class="col_two_third">

									<div class="feature-box fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="i-alt">11.</i></a>
										</div>
										<h3>Store Locator</h3>
										<p>53 Ocean Supercenter (Pazundaung Branch) Supermarket & Supercenter No 62, Corner of Maharbandoola Road & Tarwatainthar Streetreet,Yangon. PZDG.</p>
									</div>

								</div>

								<div class="col_two_third">

									<div class="feature-box fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="i-alt">12.</i></a>
										</div>
										<h3>Store Locator</h3>
										<p>22 Popular (Myaynigone) Book Shop Myaynigone City Mart SCHG.</p>
									</div>

								</div>
								<div class="col_two_third">
									<div class="feature-box fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="i-alt">13.</i></a>
										</div>
										<h3>Store Locator</h3>
										<p>56 " City Mart Supermarket (FMI City Branch)
											" Supermarket & Supercenter FMI City, Padethapin Main Road, Yangon. HLTA.</p>
										</div>

									</div>

								<div class="col_two_third">

										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="i-alt">14.</i></a>
											</div>
											<h3>Store Locator</h3>
											<p>52 Ocean Supercenter (North Point Branch) Supermarket & Supercenter North Point Shopping Center, Corner of Pyay Road & Tawwin Road, Yangon. MYGN</p>
										</div>

									</div>

									<div class="col_two_third">

										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="i-alt">15.</i></a>
											</div>
											<h3>Store Locator</h3>
											<p>18 Sarpay Beikman Book Shop 529/531, 1st Flr, Merchant Rd., Corner of 37th St., Ward (5), KTDA KTDA</p>
										</div>

									</div>
								<div class="col_two_third">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="i-alt">16.</i></a>
											</div>
											<h3>Store Locator</h3>
											<p>10 Sar Pay Yadanar Book Shop No.45,B-1,Ground Floor,Taw Win Centre, Pyay Road, Yangon, Myanmar DGN.</p>
										</div>

									</div>

									<div class="col_two_third">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="i-alt">17.</i></a>
											</div>
											<h3>Store Locator</h3>
											<p>6 Lucky 7 (U Chit Mg Rd) Book Shop U Chit Maung Rd, Near Of U Chit Maung Housing, BHN BHN.</p>
										</div>

									</div>

									<div class="col_two_third">

										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="i-alt">18.</i></a>
											</div>
											<h3>Store Locator</h3>
											<p>20 Lucky 7 (8 Mile) Book Shop Pyay Rd, Corner Of Sel Myaung Yeik Thar St, MYGN MYGN
												.</p>
											</div>

										</div>

									</div>


								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<br></br>

					</section><!-- #content end -->


					<script type="text/javascript" src="https://maps.google.com/maps/api/js"></script>
					<script type="text/javascript" src="<?php echo url() ?>/js/jquery.gmap.js"></script>



	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo url() ?>/js/functions.js"></script>
	<script type="text/javascript">

		$('#google-map1').gMap({

			address: 'Melbourne, Australia',
			maptype: 'ROADMAP',
			zoom: 14,
			markers: [
			{
				address: "Melbourne, Australia"
			}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}
		});

		$('#google-map2').gMap({
			address: 'New York, USA',
			maptype: 'HYBRID',
			zoom: 12,
			markers: [
			{
				address: "New York, USA"
			}
			],
			doubleclickzoom: false,
			controls: {
				panControl: false,
				zoomControl: false,
				mapTypeControl: false,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}
		});

		$('#google-map4').gMap({
			address: 'Australia',
			maptype: 'ROADMAP',
			zoom: 3,
			markers: [
			{
				address: "Melbourne, Australia",
				html: "Melbourne, Australia"
			},
			{
				address: "Sydney, Australia",
				html: "Sydney, Australia"
			},
			{
				address: "Perth, Australia",
				html: "Perth, Australia"
			}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: false,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}
		});

		$('#google-map5').gMap({
			address: 'Australia',
			maptype: 'ROADMAP',
			zoom: 3,
			markers: [
			{
				address: "Melbourne, Australia",
				html: "Melbourne, Australia"
			},
			{
				address: "Sydney, Australia",
				html: "Sydney, Australia"
			},
			{
				address: "Perth, Australia",
				html: "Perth, Australia"
			}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: false,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}
		});

		jQuery(document).ready(function($){

			$('#vmap').vectorMap({
				map: 'world_en',
				backgroundColor: null,
				color: '#ffffff',
				hoverOpacity: 0.7,
				selectedColor: '#666666',
				enableZoom: true,
				showTooltip: true,
				values: sample_data,
				scaleColors: ['#C8EEFF', '#006491'],
				normalizeFunction: 'polynomial'
			});
			$('#vmap2').vectorMap({
				map: 'usa_en',
				backgroundColor: null,
				color: '#006666',
				hoverOpacity: 0.7,
				selectedColor: '#333',
				enableZoom: true,
				showTooltip: true,
				values: sample_data,
				scaleColors: ['#339966', '#006666'],
				normalizeFunction: 'polynomial'
			});
			$('#vmap3').vectorMap({
				map: 'europe_en',
				backgroundColor: null,
				color: '#ffffff',
				hoverOpacity: 0.7,
				selectedColor: '#666666',
				enableZoom: true,
				showTooltip: true,
				values: sample_data,
				scaleColors: ['#996633', '#331A00'],
				normalizeFunction: 'polynomial'
			});
			$('#vmap4').vectorMap({
				map: 'germany_en',
				backgroundColor: null,
				color: '#8F6B00',
				hoverOpacity: 0.7,
				selectedColor: '#666666',
				enableZoom: true,
				showTooltip: true,
				values: sample_data,
				scaleColors: ['#B28F00', '#331A00'],
				normalizeFunction: 'polynomial'
			});

		});

function findLocation( selector, getLatitude, getLongitude ) {
	jQuery(selector).gMap('clearMarkers').gMap('addMarker', {
		latitude: getLatitude,
		longitude: getLongitude,
		content: 'You have selected this Location.',
		popup: true
	}).gMap('centerAt', {
		latitude: getLatitude,
		longitude: getLongitude,
		zoom: 12
	});
}

jQuery('#google-map-custom').gMap({

	address: 'Melbourne, Australia',
	maptype: 'ROADMAP',
	zoom: 12,
	markers: [
	{
		address: "Melbourne, Australia"
	}
	],
	doubleclickzoom: false,
	controls: {
		panControl: true,
		zoomControl: true,
		mapTypeControl: true,
		scaleControl: false,
		streetViewControl: false,
		overviewMapControl: false
	}

});

jQuery(window).load( function(){

	var t = setTimeout( function(){
		if(navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
				jQuery('#google-map-custom').gMap('addMarker', {
					latitude: position.coords.latitude,
					longitude: position.coords.longitude,
					content: 'You are here!',
					popup: true
				}).gMap('centerAt', {
					latitude: position.coords.latitude,
					longitude: position.coords.longitude,
					zoom: 14
				});
			}, function() {
				alert('Couldn\'t find you :(');
			});
		}
	}, 200 );

});

jQuery('#location-submit').click( function(e){

	var locationFinder = jQuery(this).parent().parent().find('#location-input').val();
	var locationFinderIcon = jQuery(this).parent().parent().find('.input-group-addon').find('i');

	jQuery('#location-coordinates').fadeOut();

	if( locationFinder != '' ){
		locationFinderIcon.removeClass('icon-map-marker').addClass('icon-line-loader icon-spin');

		jQuery.ajax({
			url: 'http://maps.google.com/maps/api/geocode/json?address=' + encodeURI(locationFinder),
					//force to handle it as text
					dataType: "text",
					success: function(data) {
						var json = jQuery.parseJSON(data);
						findLocation( '#google-map-custom', json.results[0].geometry.location.lat, json.results[0].geometry.location.lng );
						jQuery('#latitude-text').html('<strong>Latitude:</strong> ' + json.results[0].geometry.location.lat);
						jQuery('#longitude-text').html('<strong>Longitude:</strong> ' + json.results[0].geometry.location.lng);
						jQuery('#location-coordinates').fadeIn();
						locationFinderIcon.removeClass('icon-line-loader icon-spin').addClass('icon-map-marker');
					}
				});
	} else {
		alert('Please enter your Location!');
	}
	e.preventDefault();
});

</script>
@stop

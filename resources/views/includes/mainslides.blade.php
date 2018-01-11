		<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix" data-autoplay="7000" data-speed="650" data-loop="true">
			<div>

				<div class="swiper-container swiper-parent">


					<div class="swiper-wrapper">
						@foreach($mainslides as $mainslide)
						<div class="swiper-slide dark" style="background-image: url({{  $mainslide->photourl1 }});">
							<div class="container clearfix">
								<a href="{{ url('/postdetails', $mainslide->id) }}"><div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">{{ $mainslide->name }}</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">{{ $mainslide->subtitle }}</p>
								</div></a>
							</div>
						</div>
						
						@endforeach
					</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
				</div>

				<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

			</div>

		</section>
		
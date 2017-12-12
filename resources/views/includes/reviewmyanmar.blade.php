			
<section id="content">
	
	
	<div class="section parallax dark nobottommargin" style="background-image: url('images/services/home-testi-bg.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.4">

		<div class="heading-block center">
			<h3>ပြန်လည်သုံးသပ်</h3>
		</div>

		<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
			<div class="flexslider">
				<div class="slider-wrap">
					
					@foreach($reviews as $review)
					<div class="slide">
						<div class="testi-image">
							<a href="{{ url('/postdetailsmyanmar', $review->id) }}"><img src="{{ $review->photourl2 }}" alt="Customer Testimonails"></a>
						</div>
						<div class="testi-content">
							<p><?php echo substr($review->mdescription,0, 70) ?></p>
							<div class="testi-meta">
								{{ $review->mname }}
								<span>{{ $review->caption1 }}</span>
							</div>
						</div>
					</div>
					@endforeach
				
				</div>
			</div>
		</div>

	</div>

</section>
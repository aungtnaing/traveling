<div class="fancy-title title-border">
							<a href="{{ url('mn/exposure') }}"><h3>Exposure</h3></a>

</div>


<div class="col_full bottommargin-lg">
	<div class="fslider flex-thumb-grid grid-6" data-animation="fade" data-arrows="true" data-thumbs="true">
		<div class="flexslider">
			<div class="slider-wrap">
				@foreach($exposures as $exposure)
				<div class="slide" data-thumb="{{ $exposure->photourl1 }}">
				<a href="{{ url('/mn/exposure', $exposure->mnmae) }}">
						<img src="{{ $exposure->photourl2 }}" alt="">
						<div class="overlay">
							<div class="text-overlay">
								<div class="text-overlay-title">
									<h3>{{ $exposure->mname }}</h3>
								</div>
								<div class="text-overlay-meta">
									<span>{{ $exposure->msubtitle }}</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				@endforeach

			</div>
		</div>
	</div>
</div>
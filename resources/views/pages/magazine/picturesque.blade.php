					<div class="fancy-title title-border">
						<a href="{{ url('/picturesque') }}"><h3>Picturesque</h3></a>
					</div>
					@if($issue->active === 1)
					<a href="{{ url('/picturesque') }}" class="button">Upload Your Content Photo for {{ $issue->name }}</a>
					@endif
					<div class="col_full masonry-thumbs col-3 bottommargin-lg clearfix" data-big="5" data-lightbox="gallery">
						
					@for($i=0; $i < count($picturesques); $i++)
						

						<a href="{{ url('/picturesque', $picturesques[$i]->name) }}"><img class="image_fade" src="{{ $picturesques[$i]->photourl2 }}" alt="Gallery Thumb 1"></a>

				
					@endfor


					</div>
					@if($issue->active === 1)
					<a href="{{ url('/picturesque') }}" class="button">Upload Your Content Photo for {{ $issue->name }}</a>
					@endif
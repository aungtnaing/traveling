@extends('layouts.default')
@section('content')
<div class="clearfix"></div>
<section id="page-title">

	<div class="container clearfix">
		<h1>Photo Contest</h1>
		
	</div>

</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					@if($issue->active === 1)
					<a href="{{ url('/pictureupload') }}" class="button">Upload your photo for title of {{ $issue->name }}</a>
					@endif
					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container portfolio-3 clearfix">

						@if(count($lastpicturesquelists)>0)
						@foreach($lastpicturesquelists as $postlist)
						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<a href="{{ url('/picturesques', $postlist->name) }}">
									<img src="{{ $postlist->photourl2 }}" alt="Locked Steel Gate">
								</a>
								<div class="portfolio-overlay">
									<a href="{{ $postlist->photourl1 }}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="{{ url('/picturesques', $postlist->name) }}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>{{ $postlist->caption1 }}</h3>
								<span><a href="{{ url('/picturesques', $postlist->name) }}">{{ $postlist->groupname }}</a></span>
							</div>
						</article>
						@endforeach
						@else
						@foreach($postlists as $postlist)
						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<a href="{{ url('/picturesques', $postlist->name) }}">
									<img src="{{ $postlist->photourl2 }}" alt="Locked Steel Gate">
								</a>
								<div class="portfolio-overlay">
									<a href="{{ $postlist->photourl1 }}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="{{ url('/picturesques', $postlist->name) }}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>{{ $postlist->caption1 }}</h3>
								<span><a href="{{ url('/picturesques', $postlist->name) }}">{{ $postlist->groupname }}</a></span>
							</div>
						</article>
						@endforeach

						@endif
						

					</div><!-- #portfolio end -->
					{!! $postlists->render() !!}
					@if($issue->active === 1)
					<a href="{{ url('/pictureupload') }}" class="button">Upload your photo for title of {{ $issue->name }}</a>
					@endif
				</div>

			</div>

		</section>


		@stop

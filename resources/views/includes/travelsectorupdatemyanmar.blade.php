	<section id="content">	
		<div class="content-wrap">

			
			<div class="container clearfix">

<div class="section topmargin nobottommargin nobottomborder">
				<div class="container clearfix">
					<div class="heading-block center nomargin">
						<h3><a href="{{ url('/postlists', 1) }}">Travel Sector Update</a></h3>
					</div>
				</div>
			</div>


					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid grid-container grid-3 clearfix" data-layout="fitRows">

						@foreach($travelsectorposts as $travelsectorpost)
							<?php
		$tcmt = count($travelsectorpost->comments);
		foreach($travelsectorpost->comments as $cmt) 
		{
		$tcmt = $tcmt + count($cmt->replycomments);
		}
	?>
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="{{ $travelsectorpost->photourl1 }}" data-lightbox="image"><img class="image_fade" src="{{ $travelsectorpost->photourl2 }}" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="{{ url('/postdetailsmyanmar', $travelsectorpost->id) }}">{{ $travelsectorpost->mname }}</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> {{ $travelsectorpost->created_at }}</li>
								<li><a href="{{ url('/postdetailsmyanmar', $travelsectorpost->id) }}"><i class="icon-comments"></i>{{ $tcmt }}</a></li>
								<li><a href="{{ $travelsectorpost->photourl1 }}"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p><?php echo substr($travelsectorpost->mdescription,0, 160) ?></p>
								<a href="{{ url('/postdetailsmyanmar', $travelsectorpost->id) }}"class="more-link">Read More</a>
							</div>
						</div>


					</div>
					
					</div>
			</div>

		</section>
@endforeach
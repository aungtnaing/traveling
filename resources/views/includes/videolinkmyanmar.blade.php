		
<section id="content">
	<div class="container clearfix">
		<div class="section topmargin nobottommargin nobottomborder">
			<div class="container clearfix">
				<div class="heading-block center nomargin">
					<h3>ဗီဒီယို</h3>
				</div>
			</div>
		</div>

		<div id="posts" class="post-grid grid-container grid-3 clearfix" data-layout="fitRows">

			
			@foreach($videoposts as $videopost)

				<?php
		$tcmt = count($videopost->comments);
		foreach($videopost->comments as $cmt) 
		{
		$tcmt = $tcmt + count($cmt->replycomments);
		}
	?>

			<div class="entry clearfix">
				<div class="entry-image">
					<iframe width="560" height="315" src="{{ $videopost->youtubelink }}" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="entry-title">
					<h2><a href="{{ url('/postdetailsmyanmar', $videopost->id) }}">{{ $videopost->mname }}</a></h2>
				</div>
				<ul class="entry-meta clearfix">
					<li><i class="icon-calendar3"></i> {{ $videopost->created_at }}</li>
					<li><a href="{{ url('/postdetailsmyanmar', $videopost->id) }}"><i class="icon-comments"></i>{{ $tcmt }}</a></li>
					<li><a href="{{ $videopost->youtubelink }}"><i class="icon-film"></i></a></li>
				</ul>
				<div class="entry-content">
					<p><?php echo substr($videopost->mdescription,0, 70) ?></p>
					<a href="{{ url('/postdetailsmyanmar', $videopost->id) }}"class="more-link">Read More</a>
				</div>
			</div>


			@endforeach




		</div>






	</div>

</section>
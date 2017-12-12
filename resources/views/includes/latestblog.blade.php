<section id="content">
	<div class="section notopmargin notopborder">
		<div class="container clearfix">
			<div class="heading-block center nomargin">
				<h3>Latest from the Blog</h3>
			</div>
		</div>
	</div>

	<div class="container clear-bottommargin clearfix">
		<div class="row">

			@foreach($latestblogs as $latestblog)
			<?php
		$tcmt = count($latestblog->comments);
		foreach($latestblog->comments as $cmt) 
		{
		$tcmt = $tcmt + count($cmt->replycomments);
		}
	?>
			<div class="col-md-3 col-sm-6 bottommargin">
				<div class="ipost clearfix">
					<div class="entry-image">
						<a href="{{ $latestblog->photourl1 }}"><img class="image_fade" src="{{ $latestblog->photourl2 }}" alt="Image"></a>
					</div>
					<div class="entry-title">
						<h3><a href="{{ url('/latestblog', $latestblog->name) }}">{{ $latestblog->name }}</a></h3>
					</div>
					<ul class="entry-meta clearfix">
						<li><i class="icon-calendar3"></i>{{ $latestblog->created_at }}</li>
						<li><a href="{{ url('/latestblog', $latestblog->name) }}"><i class="icon-comments"></i>{{ $tcmt }}</a></li>
					</ul>
					<div class="entry-content">
						<p><?php echo substr($latestblog->description,0, 70) ?></p>
					</div>
				</div>
			</div>
			@endforeach

		

		

		</div>
	</div>
</section>
<div class="col_full nobottommargin clearfix">

	<div class="fancy-title title-border">
		<a href="{{ url('mn/underground') }}"><h3>Underground</h3></a>
	</div>

	@foreach($undergrounds as $underground)
	<?php
	$tcmt = 0;
	$tcmt = count($underground->comments);
	foreach($underground->comments as $cmt) 
	{
		$tcmt = $tcmt + count($cmt->replycomments);
	}
	?>
	<div class="col_one_third">
		<div class="ipost clearfix">
			<div class="entry-image">
				<a href="{{ $underground->photourl1 }}"><img class="image_fade" src="{{ $underground->photourl2 }}" alt="Image"></a>
			</div>
			<div class="entry-title">
				<h3><a href="{{ url('/postdetailsmyanmar', $underground->id) }}">{{ $underground->mname }}</a></h3>
			</div>
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i>{{ $underground->created_at }}</li>
				<li><a href="{{ url('/postdetailsmyanmar', $underground->id) }}"><i class="icon-comments"></i>{{ $tcmt }}</a></li>
			</ul>
			<div class="entry-content">
				<p><?php echo substr($underground->mdescription,0, 200) ?>...</p>
			</div>
		</div>
	</div>
	@endforeach

	
</div>	
<div class="col_full nobottommargin clearfix">

	<div class="fancy-title title-border">
		<a href="{{ url('mn/arrivals') }}"><h3>Arrivals</h3></a>
	</div>

	@foreach($arrivals as $arrival)
	<?php
	$tcmt = 0;
	$tcmt = count($arrival->comments);
	foreach($arrival->comments as $cmt) 
	{
		$tcmt = $tcmt + count($cmt->replycomments);
	}
	?>
	<div class="col_one_third">
		<div class="ipost clearfix">
			<div class="entry-image">
				<a href="{{ $arrival->photourl1 }}"><img class="image_fade" src="{{ $arrival->photourl2 }}" alt="Image"></a>
			</div>
			<div class="entry-title">
				<h3><a href="{{ url('/postdetailsmyanmar', $arrival->id) }}">{{ $arrival->mname }}</a></h3>
			</div>
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i>{{ $arrival->created_at }}</li>
				<li><a href="{{ url('/postdetailsmyanmar', $arrival->id) }}"><i class="icon-comments"></i>{{ $tcmt }}</a></li>
			</ul>
			<div class="entry-content">
				<p><?php echo substr($arrival->mdescription,0, 200) ?>...</p>
			</div>
		</div>
	</div>
	@endforeach

	

	<div class="clear"></div>

	<div class="fancy-title title-border">
		<a href="{{ url('mn/infocus') }}"><h3>In Focus</h3></a>
	</div>

	@foreach($infocus as $infocu)
	<?php
	$tcmt = 0;
	$tcmt = count($infocu->comments);
	foreach($infocu->comments as $cmt) 
	{
		$tcmt = $tcmt + count($cmt->replycomments);
	}
	?>
	<div class="col_one_third nobottommargin">
		<div class="ipost clearfix">
			<div class="entry-image">
				<a href="{{ $infocu->photourl1 }}"><img class="image_fade" src="{{ $infocu->photourl2 }}" alt="Image"></a>
			</div>
			<div class="entry-title">
				<h3><a href="{{ url('/postdetailsmyanmar', $infocu->id) }}">{{ $infocu->mname }}</a></h3>
			</div>
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i>{{ $infocu->created_at }}</li>
				<li><a href="{{ url('/postdetailsmyanmar', $infocu->id) }}"><i class="icon-comments"></i> {{ $tcmt }}</a></li>
			</ul>
			<div class="entry-content">
				<p><?php echo substr($infocu->mdescription,0, 200) ?>....</p>
			</div>
		</div>
	</div>


	@endforeach



</div>	
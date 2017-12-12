<div class="col_full nobottommargin clearfix">

	<div class="fancy-title title-border">
		<h3>Snapshot</h3>
	</div>

	@foreach($snapshops as $snapshop)
	<?php
	$tcmt = 0;
	$tcmt = count($snapshop->comments);
	foreach($snapshop->comments as $cmt) 
	{
		$tcmt = $tcmt + count($cmt->replycomments);
	}
	?>
	<div class="col_one_third">
		<div class="ipost clearfix">
			<div class="entry-image">
				<a href="{{ $snapshop->photourl1 }}"><img class="image_fade" src="{{ $snapshop->photourl2 }}" alt="Image"></a>
			</div>
			<div class="entry-title">
				<h3><a href="{{ url('/mn/snapshots', $snapshop->mname) }}">{{ $snapshop->mname }}</a></h3>
			</div>
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i>{{ $snapshop->created_at }}</li>
				<li><a href="{{ url('/mn/snapshots', $snapshop->mname) }}"><i class="icon-comments"></i>{{ $tcmt }}</a></li>
			</ul>
			<div class="entry-content">
				<p><?php echo substr($snapshop->mdescription,0, 200) ?>...</p>
			</div>
		</div>
	
	@endforeach

	
</div>	
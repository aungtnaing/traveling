	<div class="col_full nobottommargin clearfix">
<div class="fancy-title title-border">
		<a href="{{ url('/standout') }}"><h3>Standout</h3></a>
	</div>

	@foreach($standouts as $standout)
	<?php
	$tcmt = 0;
	$tcmt = count($standout->comments);
	foreach($standout->comments as $cmt) 
	{
		$tcmt = $tcmt + count($cmt->replycomments);
	}
	?>
	<div class="col_one_third">
		<div class="ipost clearfix">
			<div class="entry-image">
				<a href="{{ $standout->photourl1 }}"><img class="image_fade" src="{{ $standout->photourl2 }}" alt="Image"></a>
			</div>
			<div class="entry-title">
				<h3><a href="{{ url('/standout', $standout->name) }}">{{ $standout->name }}</a></h3>
			</div>
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i>{{ $standout->created_at }}</li>
				<li><a href="{{ url('/standout', $standout->name) }}"><i class="icon-comments"></i>{{ $tcmt }}</a></li>
			</ul>
			<div class="entry-content">
				<p><?php echo substr($standout->description,0, 200) ?>...</p>
			</div>
		</div>
	</div>

	@endforeach

	</div>

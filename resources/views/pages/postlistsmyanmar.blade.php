@extends('layouts.default')
@section('content')
<div class="clearfix"></div>
<section id="page-title">

	<div class="container clearfix">
		@if(count($postlists)>0)
		<h1>{{ $postlists[0]->category->mname }}</h1>
		@else
		<h1>None</h1>
		@endif

	</div>

</section>
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<div class="postcontent nobottommargin">

				<div id="posts" class="events small-thumbs">

					@foreach($postlists as $postlist)
					<?php
					$tcmt = count($postlist->comments);
					foreach($postlist->comments as $cmt) 
					{
						$tcmt = $tcmt + count($cmt->replycomments);
					}
					?>
					<div class="entry clearfix">
						<div class="entry-image">
							<a href="{{ $postlist->photourl1 }}">
								@if($postlist->youtubelink!="")
								<iframe width="560" height="315" src="{{ $postlist->youtubelink }}" frameborder="0" allowfullscreen></iframe>
								@else
								<img src="{{ $postlist->photourl2 }}" alt="Inventore voluptates velit totam ipsa tenetur">
								@endif
								<div class="entry-date">{{ $postlist->created_at->day }}<span>{{ $postlist->created_at->month }}</span></div>
							</a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h2><a href="{{ url('/postdetailsmyanmar', $postlist->id) }}">{{ $postlist->mname }}</a></h2>
							</div>
							<ul class="entry-meta clearfix">


								<li><i class="icon-comments"></i>{{ $tcmt }}</li>
							

<li><a href="{{ url('/postlists-mn-by', $postlist->author->id) }}"><i class="icon-user"></i></a></li>
								
							</ul>

							<div class="entry-content">
								<p><?php echo substr($postlist->mdescription,0, 300) ?></p>
								<a href="{{ url('/postdetailsmyanmar', $postlist->id) }}" class="btn btn-danger">Read More</a>
							</div>

						</div>
					</div>
					@endforeach

								

				</div>

						<!-- Pagination
						============================================= -->
						<!-- <ul class="pager nomargin">
							<li class="previous"><a href="#">&larr; Older</a></li>
							<li class="next"><a href="#">Newer &rarr;</a></li>
						</ul> --><!-- .pager end -->
						{!! $postlists->render() !!}

					</div>

					<div class="sidebar nobottommargin col_last clearfix">
						<div class="sidebar-widgets-wrap">

							<div class="widget clearfix">

								<h4>Latest Post</h4>
								<div id="post-list-footer">
									@foreach($latestposts as $latestpost)
									<div class="spost clearfix">
										<div class="entry-image">
											<a href="{{ $latestpost->photourl1 }}" class="nobg"><img src="{{ $latestpost->photourl2 }}" alt=""></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="{{ url('/postdetails', $latestpost->id) }}">{{ $latestpost->mname }}</a></h4>
											</div>
											<ul class="entry-meta">
												<li>{{ $latestpost->created_at }}</li>
											</ul>
										</div>
									</div>
									@endforeach


								</div>

							</div>
							<div class="widget clearfix">
								<img class="aligncenter" src="<?php echo url() ?>/images/posts/ad.png" alt="">
							</div>
							




						</div>
					</div>

				</div>

			</div>

		</section><!-- #content end -->

		@stop

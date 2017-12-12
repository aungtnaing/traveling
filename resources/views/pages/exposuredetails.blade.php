@extends('layouts.defaultpost')
@section('content')
<div class="clearfix"></div>
<section id="page-title">

	<div class="container clearfix">
		<h1>{{ $postdetail->category->name }}</h1>

	</div>

</section>
<?php
$tcmt = count($postdetail->comments);
foreach($postdetail->comments as $cmt) 
{
	$tcmt = $tcmt + count($cmt->replycomments);
}
?>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="postcontent nobottommargin clearfix">
				<div class="single-post nobottommargin">

					<div class="col_full bottommargin-lg">
						<div class="fslider flex-thumb-grid grid-6" data-animation="fade" data-arrows="true" data-thumbs="true">
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide" data-thumb="{{ $postdetail->photourl1 }}">
										<a href="{{ url('/exposures', $postdetail->name) }}">
											<img src="{{ $postdetail->photourl2 }}" alt="">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<a href="{{ url('/exposures', $postdetail->name) }}"><h3>{{ $postdetail->groupname }}</h3></a>
													</div>
													<div class="text-overlay-meta">
														<span>{{ $postdetail->caption1 }}</span>
													</div>
												</div>
											</div>
										</a>
									</div>
									@foreach($groupposts as $grouppost)
									<div class="slide" data-thumb="{{ $grouppost->photourl1 }}">
										<a href="{{ url('/exposures', $grouppost->name) }}">
											<img src="{{ $grouppost->photourl2 }}" alt="">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<a href="{{ url('/exposures', $grouppost->name) }}"><h3>{{ $grouppost->groupname }}</h3></a>
													</div>
													<div class="text-overlay-meta">
														<span>{{ $grouppost->caption1 }}</span>
													</div>
												</div>
											</div>
										</a>
									</div>
									@endforeach

								</div>
							</div>
						</div>
					</div>


<h4>Related Posts:</h4>

					<div class="related-posts clearfix">

						<div class="col_half nobottommargin">


							@if($exposure1 != "")
							<?php
							$tcmt = 0;
							$tcmt = count($exposure1->comments);
							foreach($exposure1->comments as $cmt) 
							{
								$tcmt = $tcmt + count($cmt->replycomments);
							}
							?>
							<div class="mpost clearfix">
								<div class="entry-image">
									<a href="{{ $exposure1->photourl1 }}"><img src="{{ $exposure1->photourl2 }}" alt="Blog Single"></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{ url('/exposure', $exposure1->name) }}">{{ $exposure1->groupname }}</a></h4>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> {{ $exposure1->created_at }}</li>
										<li><a href="{{ url('/exposure', $exposure1->name) }}"><i class="icon-comments"></i>{{ $tcmt }}</a></li>
									</ul>
									<div class="entry-content"><?php echo substr($exposure1->description,0, 40) ?>.</div>
								</div>
							</div>
							@endif
							@if($exposure2 != "")
							<?php
							$tcmt = 0;
							$tcmt = count($exposure2->comments);
							foreach($exposure2->comments as $cmt) 
							{
								$tcmt = $tcmt + count($cmt->replycomments);
							}
							?>
							<div class="mpost clearfix">
								<div class="entry-image">
									<a href="{{ $exposure2->photourl1 }}"><img src="{{ $exposure2->photourl2 }}" alt="Blog Single"></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{ url('/exposure', $exposure2->name) }}">{{ $exposure2->groupname }}</a></h4>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> {{ $exposure2->created_at }}</li>
										<li><a href="{{ url('/exposure', $exposure2->name) }}"><i class="icon-comments"></i>{{ $tcmt }}</a></li>
									</ul>
									<div class="entry-content"><?php echo substr($exposure2->description,0, 40) ?>.</div>
								</div>
							</div>

							@endif

						</div>

						<div class="col_half nobottommargin col_last">
							@if($exposure3 != "")
							<?php
							$tcmt = 0;
							$tcmt = count($exposure3->comments);
							foreach($exposure3->comments as $cmt) 
							{
								$tcmt = $tcmt + count($cmt->replycomments);
							}
							?>
							<div class="mpost clearfix">
								<div class="entry-image">
									<a href="{{ $exposure3->photourl1 }}"><img src="{{ $exposure3->photourl2 }}" alt="Blog Single"></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{ url('/exposure', $exposure3->name) }}">{{ $exposure3->groupname }}</a></h4>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> {{ $exposure3->created_at }}</li>
										<li><a href="{{ url('/exposure', $exposure3->name) }}"><i class="icon-comments"></i>{{ $tcmt }}</a></li>
									</ul>
									<div class="entry-content"><?php echo substr($exposure3->description,0, 40) ?>.</div>
								</div>
							</div>

							@endif

							@if($exposure4 != "")
							<?php
							$tcmt = 0;
							$tcmt = count($exposure4->comments);
							foreach($exposure4->comments as $cmt) 
							{
								$tcmt = $tcmt + count($cmt->replycomments);
							}
							?>

							<div class="mpost clearfix">
								<div class="entry-image">
									<a href="{{ $exposure4->photourl1 }}"><img src="{{ $exposure4->photourl2 }}" alt="Blog Single"></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{ url('/exposure', $exposure4->name) }}">{{ $exposure4->groupname }}</a></h4>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i>{{ $exposure4->created_at }}</li>
										<li><a href="{{ url('/exposure', $exposure4->name) }}"><i class="icon-comments"></i>{{ $tcmt }}</a></li>
									</ul>
									<div class="entry-content"><?php echo substr($exposure4->description,0, 40) ?>.</div>
								</div>
							</div>
							@endif

						</div>

					</div>



				</div>
			</div>

			<div class="sidebar nobottommargin col_last clearfix">
				<div class="sidebar-widgets-wrap">
					<div class="widget widget_links clearfix">

						<h4>Categories</h4>
						<div class="col_half nobottommargin">
							<ul>
								@for($i = 0; $i < count($categorys); $i++)
								@if($i < 6)
								<li><a href="{{ url('/postlists', $categorys[$i]->id) }}">{{ $categorys[$i]->name }}</a></li>
								@endif
								@endfor


							</ul>
						</div>
						<div class="col_half nobottommargin col_last">
							<ul>

								@for($i = 6; $i < count($categorys); $i++)

								<li><a href="{{ url('/postlists', $categorys[$i]->id) }}">{{ $categorys[$i]->name }}</a></li>

								@endfor


							</ul>
						</div>

					</div>

					@if($postdetail->category->id!=6)
					<div class="widget widget-twitter-feed clearfix">

						<h4>Twitter Feed</h4>
						<ul class="iconlist twitter-feed" data-username="mymagicalmyanmar" data-count="2">
							<li></li>	
						</ul>

						<a href="#" class="btn btn-default btn-sm fright">Follow Us on Twitter</a>

					</div>
					@else
					<form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin" novalidate="novalidate">
						<div class="form-process"></div>

						<input class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" aria-required="true" type="text">
						<input class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" aria-required="true" type="text">

						<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Vote</button>
					</form>

					@endif

					<div class="widget clearfix">

						<img class="aligncenter" src="<?php echo url() ?>/images/posts/ad.png" alt="">

					</div>

					<div class="widget clearfix">

						<div class="tabs nobottommargin clearfix" id="sidebar-tabs">

							<ul class="tab-nav clearfix">
								<li><a href="#tabs-1">Popular</a></li>
								<li><a href="#tabs-2">Recent</a></li>
										 <!-- <li><a href="#tabs-3"><i class="icon-comments-alt norightmargin"></i></a></li>  -->
									</ul>

									<div class="tab-container">

										<div class="tab-content clearfix" id="tabs-1">
											<div id="popular-post-list-sidebar">


												@foreach($popularposts as $popularpost)
												<?php
												$tcmt1 = count($popularpost->comments);
												foreach($popularpost->comments as $cmt) 
												{
													$tcmt1 = $tcmt1 + count($cmt->replycomments);
												}
												?>
												<div class="spost clearfix">
													<div class="entry-image">
														<a href="{{ $popularpost->photourl1 }}" class="nobg"><img class="img-circle" src="{{ $popularpost->photourl2 }}" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="{{ url('/postdetails', $popularpost->id) }}">{{ $popularpost->name }}</a></h4>
														</div>
														<ul class="entry-meta">
															<li><i class="icon-comments-alt"></i>{{ $tcmt1 }}Comments</li>
														</ul>
													</div>
												</div>
												@endforeach



											</div>
										</div>
										<div class="tab-content clearfix" id="tabs-2">
											<div id="recent-post-list-sidebar">

												@foreach($recentposts as $recentpost)

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="{{ $recentpost->photourl1 }}" class="nobg"><img class="img-circle" src="{{ $recentpost->photourl2 }}" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="{{ url('/postdetails', $recentpost->id) }}">{{ $recentpost->name }}</a></h4>
														</div>
														<ul class="entry-meta">
															<li>{{ $recentpost->createed_at }}</li>
														</ul>
													</div>
												</div>

												@endforeach

											</div>
										</div>
						<!-- 			<div class="tab-content clearfix" id="tabs-3">
										<div id="recent-post-list-sidebar">

											<div class="spost clearfix">
												<div class="entry-image">
													<a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
												</div>
												<div class="entry-c">
													<strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
												</div>
											</div>

											<div class="spost clearfix">
												<div class="entry-image">
													<a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
												</div>
												<div class="entry-c">
													<strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
												</div>
											</div>

											<div class="spost clearfix">
												<div class="entry-image">
													<a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
												</div>
												<div class="entry-c">
													<strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
												</div>
											</div>

										</div>
									</div> -->

								</div>

							</div>

						</div>

						

						<div class="widget clearfix">

							<img class="aligncenter" src="<?php echo url() ?>/images/posts/ad.png" alt="">

						</div>

					</div>

				</div><!-- .sidebar end -->

			</div>

		</div>

	</section><!-- #content end -->
	<script language="javascript">
		function fbshareCurrentPage()
		{window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(window.location.href)+"&t="+document.title, '', 
			'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
		return false; }
	</script>

	
	@stop


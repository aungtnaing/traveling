@extends('layouts.defaultmyanmar')
@section('content')


<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1787000394901909";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="clearfix"></div>
<section id="page-title">

	<div class="container clearfix">
		<h1>Magazine</h1>
		
	</div>

</section>
<section id="content">
	<div class="content-wrap">		
		<div class="container clearfix">
			<div class="row">
				<div class="col-md-8 bottommargin">


					@include('pages.magazine.travelsectormyanmar') 


					<div class="bottommargin-lg clearfix">
						<img src="<?php echo url() ?>/images/magazine/ads1.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
					</div>

					@include('pages.magazine.standoutmyanmar') 

					
					<div class="bottommargin-lg clearfix">
						<img src="<?php echo url() ?>/images/magazine/ads1.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
					</div>

					@include('pages.magazine.deperaturemyanmar') 
					





				</div>








				<div class="col-md-4">


					<div class="sidebar-widgets-wrap clearfix">
						<div class="widget clearfix">
							<img class="aligncenter" src="{{ $book->photourl1 }}" alt="">
						</div>


						<div style="padding-left:10px;">
							<a href="{{ url('/subscribemyanmarcheckouts', $book->id) }}" class="button button-large button-rounded">Subscribe</a>
							<a href="bookstoremyanmar" class="button button-large button-rounded">BUY A COPY</a>
						</div>

						<div class="widget widget_links clearfix">

							<h4>Categories</h4>
							<div class="col_half nobottommargin">
								<ul>
									@for($i = 0; $i < count($categorys); $i++)
									@if($i < 6)
									<?php $nameroute = strtolower(str_replace(' ', '', $categorys[$i]->name)); 
										// $nameroute = "mn/" . $nameroute; 
									?>
									<li><a href="<?php echo url(); ?>/{{ $nameroute }}">{{ $categorys[$i]->mname }}</a></li>
									@endif
									@endfor


								</ul>
							</div>



							<div class="col_half nobottommargin col_last">
								<ul>

									@for($i = 6; $i < count($categorys); $i++)
									<?php $nameroute = strtolower(str_replace(' ', '', $categorys[$i]->name)); 
										// $nameroute = "mn/" . $nameroute; 
									?>
									<li><a href="<?php echo url(); ?>/{{ $nameroute }}">{{ $categorys[$i]->mname }}</a></li>

									@endfor


								</ul>
							</div>

						</div>


						<div class="widget clearfix">

							<div class="tabs nobottommargin clearfix" id="sidebar-tabs">

								<ul class="tab-nav clearfix">
									<li><a href="#tabs-1">Popular</a></li>
									<li><a href="#tabs-2">Recent</a></li>
									<!-- <li><a href="#tabs-3"><i class="icon-comments-alt norightmargin"></i></a></li> -->
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
														<h4><a href="{{ url('/postdetailsmyanmar', $popularpost->id) }}">{{ $popularpost->mname }}</a></h4>
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
														<h4><a href="{{ url('/postdetailsmyanmar', $recentpost->id) }}">{{ $recentpost->mname }}</a></h4>
													</div>
													<ul class="entry-meta">
														<li>{{ $recentpost->createed_at }}</li>
													</ul>
												</div>
											</div>

											@endforeach

										</div>
									</div>


								</div>

							</div>

						</div>


						<div class="widget clearfix">
							<img class="aligncenter" src="images/magazine/ad.png" alt="">
						</div>

						<div class="widget clearfix">
							<div class="fb-page" data-href="https://www.facebook.com/mymagicalmyanmar/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/mymagicalmyanmar/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/mymagicalmyanmar/">My Magical Myanmar</a></blockquote></div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>		

</section><!-- #content end -->
@stop

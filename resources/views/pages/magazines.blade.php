@extends('layouts.defaultmagazine')
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

					
						   <div class="bottommargin-lg clearfix">
						<a href="http://www.manawmayagems.com/" target="blank"><img src="<?php echo url() ?>/images/magazine/manawmaya.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin"></a>
						</div>
					 	@include('pages.magazine.travelsector') 
					
						@include('pages.magazine.exposure') 
						   <div class="bottommargin-lg clearfix">

                                                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Leaderboard 728 x 90 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-9976259179268348"
     data-ad-slot="2214106515"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
						
                                              @include('pages.magazine.picturesque') 
                                               @include('pages.magazine.snapshop')

                                                   <div class="bottommargin-lg clearfix">
						<img src="<?php echo url() ?>/images/magazine/ads1.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
						</div>

 




                                               @include('pages.magazine.deperature')
                                                  @include('pages.magazine.checkin')

						   <div class="bottommargin-lg clearfix">
					
                                                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Leaderboard 728 x 90 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-9976259179268348"
     data-ad-slot="2214106515"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
			
						</div>
						
                                                  
				
	  	                             @include('pages.magazine.underground')  
                                              @include('pages.magazine.standout') 

						
						   <div class="bottommargin-lg clearfix">
						<img src="<?php echo url() ?>/images/magazine/ads3.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
						</div>
						


						
                                                   @include('pages.magazine.arrivalandinfocus') 


						
				
				</div>
				

				
</div>

			
<div class="col-md-4">
							

					<div class="sidebar-widgets-wrap clearfix">
						<div class="widget clearfix">
							<img class="aligncenter" src="{{ $book->photourl1 }}" alt="">
						</div>
						<div style="padding-left:10px;">
							<a href="{{ url('/subscribecheckouts', $book->id) }}" class="button button-large button-rounded">Subscribe</a>
							<a href="bookstore" class="button button-large button-rounded">BUY A COPY</a>
						</div>

							






<div class="widget clearfix">

								<h4>The Talk</h4>
								<div id="post-list-footer">

									@foreach($thetalks as $thetalk)

									<div class="spost clearfix">
										<div class="entry-image">
											
											<a href="{{ $thetalk->photourl1 }}" class="nobg"><img class="" src="{{ $thetalk->photourl2 }}" alt=""></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="{{ url('/thetalk', $thetalk->name) }}">{{ $thetalk->name }}</a></h4>
											</div>
											<ul class="entry-meta">
												<li>{{ $thetalk->created_at }}</li>
											</ul>
										</div>
									</div>

									@endforeach














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

							</div><!--sidebar-widgets-wrap clearfix-->


							<div class="widget clearfix">

								<div class="tabs nobottommargin clearfix" id="sidebar-tabs">

										<ul class="tab-nav clearfix">
											<li><a href="#tabs-1">Most Popular</a></li>
											<li><a href="#tabs-2">Most Recent</a></li>
											
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
										</div><!--  tab 1 -->
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
										</div> <!-- tab 2 -->
								

									</div> <!-- tab container -->

								</div> <!-- side bar tab -->

						</div> <!-- widget clear -->


						<div class="widget clearfix">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script>

  (adsbygoogle = window.adsbygoogle || []).push({

    google_ad_client: "ca-pub-9976259179268348",

    enable_page_level_ads: true

  });

</script>


						</div>
<div class="widget clearfix">

							<img class="aligncenter" src="<?php echo url() ?>/images/posts/ad.png" alt="">

						</div>

					
</div> <!-- col 4 -->
</div>  <!-- sidebar -->




</div>
</div>


			
</section>	
@stop

@extends('layouts.defaultpostmyanmar')
@section('content')
<div class="clearfix"></div>
<section id="page-title">

	<div class="container clearfix">
		<h1>{{ $postdetail->category->mname }}</h1>

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
					<div class="entry clearfix">
						<div class="entry-title">
							<h2>{{ $postdetail->mname }}</h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>{{ $postdetail->created_at }}</li>
							<li><a href="{{ url('/postlistsbyauthor', $postdetail->user->id) }}"><i class="icon-user"></i>{{ $postdetail->author->name }}</a></li>
							<li><i class="icon-comments"></i> {{ $tcmt }} Comments</li>
						</ul>
						<div class="entry-image">
							<figure>
								@if($postdetail->youtubelink!="")
								<iframe width="560" height="315" src="{{ $postdetail->youtubelink }}" frameborder="0" allowfullscreen></iframe>									
								@else
								<a href="#"><img src="{{ $postdetail->photourl1 }}" alt='missing' /></a>
								@endif
								<!-- <a href="#"><img src="{{ $postdetail->photourl1 }}" alt='missing' /></a> -->
								<figcaption><h5>{{ $postdetail->caption1 }}</h5></figcaption>
							</figure>
						</div>
						<div class="entry-content notopmargin">
							@if($postdetail->category->id!=6)
							<p style="padding-left:60px;padding-right: 50px;text-decoration:none;text-align:justify;"><?php echo $fbody; ?></p>
							
								<!--<div class="col_half col_last" >
									<div class="entry1 clearfix">
										<div class="entry-image">
											<blockquote>
												<p>{{ $postdetail->msubtitle }}</p>
												 <footer>Albert Einstein</footer> 
											</blockquote>
										</div>
									</div>
								</div>-->

								<p style="padding-right:50px;text-decoration:none;text-align:justify;"><?php echo $sbody; ?></p>
								<p style="padding-right:50px;text-decoration:none;text-align:justify;"><?php echo $lbody; ?></p>

								<div class="clear"></div>
								@endif
								<div class="si-share noborder clearfix">
									<span Share Post:</span>
										<div>
											<a href="javascript:fbshareCurrentPage()" class="social-icon si-borderless si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebဒီ Post Share Facebook"></i>
											</a>
											<a href="https://twitter.com/share?
											url&
											via=twitterdev&
											related=twitterapi%2Ctwitter&
											hashtags=example%2Cdemo&
											text={{ $postdetail->name }}"
											data-size="large"" class="social-icon si-borderless si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										
									</div>
								</div>
							</div>
						</div>
						@if($postdetail->category->id!=6)
						<div class="line"></div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Posted by <span><a href="{{ url('/postlistsbyauthor', $postdetail->author->id) }}">{{ $postdetail->author->name }}</a></span></h3>
							</div>
							<div class="panel-body">
								<div class="author-image">
									<img src="{{ $postdetail->user->photourl }}" alt="" class="img-circle">
								</div>
								<?php echo $postdetail->author->bio; ?>
							</div>
						</div>
						@else
						<div>
							<a href="{{ url('/pictureupload') }}">
								<button type="button" class="btn btn-primary btn-lg btn-block">Upload Your Content Photo</button>
							</a>
						</div>

						@endif
						<div id="comments" class="clearfix">
							
							<h3 id="comments-title"><span>{{ $tcmt }}</span>Comments</h3>
							<ol class="commentlist clearfix">
								@foreach($postdetail->comments as $comment)
								<li class="comment even thread-even depth-1" id="li-comment-1">
									<div id="comment-1" class="comment-wrap clearfix">
										<div class="comment-meta">
											<div class="comment-author vcard">
												<span class="comment-avatar clearfix">
													@if($comment->user->photourl=="")
													<img alt='' src="http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60" class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>
													@else
													<img alt='' src="{{ $comment->user->photourl }}" class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>
													@endif
												</div>
											</div>
											<div class="comment-content clearfix">
												<div class="comment-author"><a href='{{ url('/authorprofile', $comment->user->id) }}' rel='external nofollow' class='url'>{{ $comment->user->name }}</a><span>{{ $comment->created_at }}</span></div>

												<p>{{ $comment->comment }}</p>

												<a class='comment-reply-link' href='javascript:replyon({{ $comment->id }})'><i class="icon-reply"></i></a>
											</div>
											<div class="clear"></div>
										</div>
										<ul class='children'>
											@foreach($comment->replycomments as $replycomment)
											<li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">
												<div id="comment-3" class="comment-wrap clearfix">
													<div class="comment-meta">
														<div class="comment-author vcard">
															<span class="comment-avatar clearfix">
																@if($replycomment->user->photourl=="")
																<img alt='' src='http://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G' class='avatar avatar-40 photo' height='40' width='40' /></span>
																@else
																<img alt='' src='{{ $replycomment->user->photourl }}' class='avatar avatar-40 photo' height='40' width='40' /></span>
																@endif
															</div>
														</div>
														<div class="comment-content clearfix">
															<div class="comment-author"><a href='{{ url('/authorprofile', $replycomment->user->id) }}' rel='external nofollow' class='url'>{{ $replycomment->user->name }}</a><span>{{ $replycomment->created_at }}</span></div>

															<p>{{ $replycomment->comment }}</p>

															<a class='comment-reply-link' href='javascript:replyon({{ $comment->id }})'><i class="icon-reply"></i></a>
														</div>
														<div class="clear"></div>
													</div>
												</li>
												@endforeach
											</ul>
											<div class="clear"></div>
											<form style="display:none;" id="{{ $comment->id }}" action="{{ route("replycomments.store") }}" method="POST">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">


												<div class="col_full">
													
													<textarea name="replycomment" cols="58" rows="3" tabindex="4" class="sm-form-control"></textarea>
													<input style="display:none;" type="text" name="commentid" value="{{ $comment->id }}">
													<input style="display:none;" type="text" name="postid" value="{{ $postdetail->id }}">
													<input style="display:none;" type="text" name="ltype" value="mn">
												</div>

												<div class="col_full nobottommargin">
													<input class="btn btn-primary" type="submit" value="Reply Comment"> 

												</div>

											</form>
										</li>
										@endforeach
										
									</ol>
									<div id="respond" class="clearfix">
										<h3>Leave a <span>Comments</span></h3>

										<form action="{{ route("comments.store") }}" method="POST">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">


											<div class="col_full">
												<label for="comment">Comments</label>
												<textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
												<input style="display:none;" type="text" name="postid" value="{{ $postdetail->id }}">
												<input style="display:none;" type="text" name="ltype" value="mn">
											</div>

											<div class="col_full nobottommargin">
												<input class="btn btn-primary" type="submit" value="Submit Comment"> 

											</div>

										</form>
									</div>
								</div>
							</div>
						</div>

						<div class="sidebar nobottommargin col_last clearfix">
							<div class="sidebar-widgets-wrap">
								@if($postdetail->category->id!=6)
								<div class="widget widget-twitter-feed clearfix">

									<h4>Twitter Feed</h4>
									<ul class="iconlist twitter-feed" data-username="envato" data-count="2">
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
											<li><a href="#tabs-2">Recents</a></li>
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

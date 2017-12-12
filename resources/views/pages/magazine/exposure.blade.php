<div class="fancy-title title-border">
						<a href="{{ url('/exposure') }}"><h3>Exposure</h3></a>
					</div>

					
					<div class="col_full bottommargin-lg">
						<div class="fslider flex-thumb-grid grid-6" data-animation="fade" data-arrows="true" data-thumbs="true">
							<div class="flexslider">
								<div class="slider-wrap">
								<?php $groupname = "007"; ?>
								@foreach($exposures as $exposure)
									@if($groupname != $exposure->groupname)
									<div class="slide" data-thumb="{{ $exposure->photourl1 }}">
										<a href="{{ url('/exposure', $exposure->name) }}">
											<img src="{{ $exposure->photourl2 }}" alt="">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>{{ $exposure->groupname }}</h3>
													</div>
													<div class="text-overlay-meta">
														<span>{{ $exposure->subtitle }}</span>
													</div>
												</div>
											</div>
										</a>
									</div>
									@endif
									<?php $groupname = $exposure->groupname; ?>
								@endforeach
							
								</div>
							</div>
						</div>
					</div>
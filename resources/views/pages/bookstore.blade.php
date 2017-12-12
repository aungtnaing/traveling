@extends('layouts.defaultbookstore')
@section('content')
<div class="clearfix"></div>
<section id="page-title">

	<div class="container clearfix">
		<h1>STORE</h1>

	</div>

</section>
<section id="content">
			
			<div class="content-wrap">

				<div class="container clearfix">



						<div class="col_half">

						
					</div>
					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin col_last">

						<!-- Shop
						============================================= -->
						<div id="shop" class="shop product-3 grid-container clearfix">

							@foreach($books as $book)
							<div class="product {{ $book->volnumber }} clearfix">
								<div class="product-image">
									<a href="#"><img src="{{ $book->photourl1 }}" alt="Vol"></a>
									@if($book->discount>0)
									<div class="sale-flash">{{ $book->discount }} %Off*</div>
									@endif
									<div class="product-overlay">
										<!-- <a href="javascript:addbook({{ $book->price }}, {{ $book->volnumber }}, {{ $book->issuenumber }}, {{ $book->id }})" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Buy</span></a>-->
										 <a href="{{ url('/maketest', $book->id) }}" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Buy</span></a>
										<a href="{{ $book->pdfsample }}" data-lightbox="image" class="item-quick-view"><i class="icon-zoom-in2" ></i><span>View</span></a>


									</div>
								</div>






								<div class="product-desc center">
									<div class="product-title"><h3><a href="#">Vol Number {{ $book->volnumber }} : {{ $book->issuenumber }}</a></h3></div>
									<div class="product-price"><del>Ks-{{ $book->oprice }}</del> <ins>Ks-{{ $book->price }}</ins></div>
									<div class="product-rating">
										
										@if($book->rate>=100)
										<i class="icon-star3"></i>	
										<i class="icon-star3"></i>	
										<i class="icon-star3"></i>	
										<i class="icon-star3"></i>	
										<i class="icon-star3"></i>	
										@elseif($book->rate>=80)
										<i class="icon-star3"></i>	
										<i class="icon-star3"></i>	
										<i class="icon-star3"></i>	
										<i class="icon-star3"></i>	
											@if($book->rate>80)
												<i class="icon-star-half-full"></i>
											@else
												<i class="icon-star-empty"></i>
											@endif
										@elseif($book->rate>=60)
										<i class="icon-star3"></i>	
										<i class="icon-star3"></i>	
										<i class="icon-star3"></i>	
								
											@if($book->rate>60)
												<i class="icon-star-half-full"></i>
												<i class="icon-star-empty"></i>
											@else
												<i class="icon-star-empty"></i>
												<i class="icon-star-empty"></i>
											@endif

										@elseif($book->rate>=40)
										<i class="icon-star3"></i>	
										<i class="icon-star3"></i>	
								
											@if($book->rate>60)
												<i class="icon-star-half-full"></i>
												<i class="icon-star-empty"></i>
												<i class="icon-star-empty"></i>
											@else
												<i class="icon-star-empty"></i>
												<i class="icon-star-empty"></i>
												<i class="icon-star-empty"></i>
											@endif	

										@elseif($book->rate>=20)
										<i class="icon-star3"></i>	
								
								
											@if($book->rate>20)
												<i class="icon-star-half-full"></i>
												<i class="icon-star-empty"></i>
												<i class="icon-star-empty"></i>
												<i class="icon-star-empty"></i>
											@else
												<i class="icon-star-empty"></i>
												<i class="icon-star-empty"></i>
												<i class="icon-star-empty"></i>
												<i class="icon-star-empty"></i>
											@endif
										@elseif($book->rate>0)
										<i class="icon-star-half-full"></i>
										<i class="icon-star-empty"></i>
										<i class="icon-star-empty"></i>
										<i class="icon-star-empty"></i>
										<i class="icon-star-empty"></i>
										@else
										<i class="icon-star-empty"></i>
										<i class="icon-star-empty"></i>
										<i class="icon-star-empty"></i>
										<i class="icon-star-empty"></i>
										<i class="icon-star-empty"></i>
										@endif						
										
									</div>
								</div>
							</div>
							@endforeach

					

						</div><!-- #shop end -->

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin">
						<div class="sidebar-widgets-wrap">

							<div class="widget widget-filter-links clearfix">

								<h4>Select Category</h4>
								<ul class="custom-filter" data-container="#shop" data-active-class="active-filter">
									<li class="widget-filter-reset active-filter"><a href="#" data-filter="*">Clear</a></li>
									<li><a href="#" data-filter=".{{ $bookcols[count($bookcols)-1]->volnumber }}">Latest</a></li>
									
									@foreach($bookcols as $bookcol)

									<li><a href="#" data-filter=".{{ $bookcol->volnumber }}">vol:{{ $bookcol->volnumber }}</a></li>
									
									@endforeach

								</ul>

							</div>
<!-- 
							<div class="widget widget-filter-links clearfix">

								<h4>Sort By</h4>
								<ul class="shop-sorting">
									<li class="widget-filter-reset active-filter"><a href="#" data-sort-by="original-order">Clear</a></li>
									<li><a href="#" data-sort-by="name">Name</a></li>
									<li><a href="#" data-sort-by="price_lh">Price: Low to High</a></li>
									<li><a href="#" data-sort-by="price_hl">Price: High to Low</a></li>
								</ul>

							</div> -->

						</div>
					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->
	
		@stop

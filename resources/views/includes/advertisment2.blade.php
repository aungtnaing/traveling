			
<section id="content">
	
	<div class="clear"></div>
<div class="content-wrap">
		<div class="content-wrap">
			<div class="promo promo-dark promo-uppercase bottommargin" style="padding-left:200px;">
				

	@if(count($ad2s) > 0)
				<a href="{{ $ad2s[0]->urllink }}"><img src="{{ $ad2s[0]->photourl1 }}"></a>
			@else
				
				<a href="{{ url('/adcheckout', 'ad2') }}" class="button button-full button-dark center tright bottommargin-lg">
		<div class="container clearfix">
			ADVERTISMENT <i class="icon-caret-right" style="top:4px;"></i>
		</div>
	</a>
</div>
</div>
</div>
			@endif


	
</section>
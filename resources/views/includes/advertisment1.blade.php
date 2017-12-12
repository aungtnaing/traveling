<section id="content">	
	<div class="content-wrap">
		<div class="content-wrap">


<!-- /21634342863/mmm_home -->
<div id='div-gpt-ad-1506677959671-0' style='height:90px; width:970px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1506677959671-0'); });
</script>
</div>

			<div class="promo promo-dark promo-uppercase bottommargin"  style="padding-left:200px;">
				
			@if(count($ad1s) > 0)
				<a href="{{ $ad1s[0]->urllink }}"><img src="{{ $ad1s[0]->photourl1 }}"></a>
			@else
				<h3>Advertisment</h3>
				<span>advertisment</span>
				<a href="{{ url('/adcheckout', 'ad1') }}" class="button button-xlarge button-rounded">Start Now</a>

			@endif
			</div>
		</div>

	</div>
</section>
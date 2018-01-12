<!doctype html>
<html>
<head>
	@include('includes.head')  

	

</head>
<body class="stretched">

	<div id="wrapper" class="clearfix">



		@include('includes.headermagazine') 

		@yield('content')

		@include('includes.footer') 

		

	</div>
	

	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?php echo url(); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo url(); ?>/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo url(); ?>/js/functions.js"></script>

</body>
</html>

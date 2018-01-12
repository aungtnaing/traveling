<!doctype html>
<html>
<head>


  <html lang="en" class="no-js">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8">



    <meta property="og:url"           content="javascript:fbshareCurrentPage()" />
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="{{ $postdetail->name }}" />
    <meta property="og:description"   content="<?php echo $fbody; ?>" />
    <meta property="og:image"         content="<?php echo url(); ?>{{ $postdetail->photourl1 }}" />
    <meta property="fb:app_id" content="146821059241551" />


    <title>{{ $postdetail->name }}</title>
    <meta name="description" content="<?php echo $fbody; ?>">
    <meta name="lynnzas" content="My Magical Myanmar">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    

    
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?php echo url(); ?>/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo url(); ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo url(); ?>/css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo url(); ?>/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo url(); ?>/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo url(); ?>/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo url(); ?>/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo url(); ?>/css/responsive.css" type="text/css" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="<?php echo url(); ?>/public/images/mymagicalmyanmar-web-favicon.png" type="image/png" sizes="16x16">

    <!--  notification message -->
    

    <script src="<?php echo url(); ?>/js/jquery-2.1.3.js"></script> 


    <script type="text/javascript">
      function replyon(fid){
       
        var elem = document.getElementById(fid);
        elem.style.display = 'block';
        
        
      }
    </script>
    <script type="text/javascript">
      function addbook(bprice, vnum, inum, id){

       var getUrl = window.location;
       var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";


       $.ajax({
        type:'POST',
        url: baseUrl + 'makeorder',
        data: {
          "_token": "{{ csrf_token() }}",
          "id": id
        },
        datatype: "json",
        success:function(data){

          if(data.msg == "success")
          {
           var e1 = document.getElementById('totalbox').innerHTML;
           
           if (e1 == "")e1 = 0;
           document.getElementById('totalbox').innerHTML = parseInt(e1) + bprice;
           document.getElementById('bookinfo').innerHTML  =  document.getElementById('bookinfo').innerHTML + '<br>' + 'vol' + vnum + ':' + inum + '  =   ' + bprice + 'ks';
                     // document.getElementById('bookids').innerHTML = document.getElementById('bookids').innerHTML + id + ";";
                   }
                   else
                   {
                    var elem = document.getElementById('nlabel');
                    var elem1 = document.getElementById('btnlogin');
                    elem.style.display = 'block';
                    elem1.style.display = 'block';
                    
                  }
                }
              });
       
       
       
       
     }


     
     
   </script>






   <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-49247955-1', 'auto');
    ga('send', 'pageview');

  </script>




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

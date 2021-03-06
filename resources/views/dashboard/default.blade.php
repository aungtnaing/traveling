<!doctype html>
<html>
<head>
	@include('dashboard.includes.head')
</head>
<body>
	@include('dashboard.includes.header')
  @if(Auth::user()->roleid==1)
	@include('dashboard.includes.sidebar')
  @else
  @include('dashboard.includes.sidebarpublishers')
  @endif
		
	
			
			@yield('content')
	

	@include('dashboard.includes.footer')
	


</body>


<!--end-Footer-part-->

<script src="<?php echo url(); ?>/assets/js/excanvas.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo url(); ?>/assets/js/bootstrap.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.flot.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.flot.resize.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.peity.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/fullcalendar.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/matrix.js"></script> 
<script src="<?php echo url(); ?>/assets/js/matrix.dashboard.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.gritter.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/matrix.interface.js"></script> 
<script src="<?php echo url(); ?>/assets/js/matrix.chat.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.validate.js"></script> 
<script src="<?php echo url(); ?>/assets/js/matrix.form_validation.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.wizard.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.uniform.js"></script> 
<script src="<?php echo url(); ?>/assets/js/select2.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/matrix.popover.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/matrix.tables.js"></script> 




 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}

</script>

</html>

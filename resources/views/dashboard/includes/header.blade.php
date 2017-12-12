
<!--Header-part-->
<div id="header">
  <h1><a href="{{ url('/dashboard') }}">My Magical | Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" >
    <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><img src="{{ Auth::user()->photourl }}" width="25" height="25" class="img-circle" alt=""> <span>{{ Auth::user()->name }}</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="{{ url('dashboarduserprofile') }}"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
       
        <li><a href="{{ url('/auth/logout') }}"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
  
    <li class=""><a title="" href="{{ url('/auth/logout') }}"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

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




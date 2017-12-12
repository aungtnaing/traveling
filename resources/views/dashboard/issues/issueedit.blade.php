@extends('dashboard.default')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">edit picturesque</a> </div>

  </div>
  <div class="container-fluid">

    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif  
    <hr>
  
    <div class="row-fluid">
           
      <div class="span10">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Picturesque-info</h5>
          </div>
          <div class="widget-content">
               <form action="{{ route("issues.update", $issue->id) }}" method="POST" enctype="multipart/form-data">
          <input name="_method" type="hidden" value="PATCH">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
            


            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input name="name" class="span11" placeholder="Enter title" value="{{ $issue->name }}" type="text" required>
              </div>
            </div>


    


   <div class="control-group">
         
          @if($issue->active==0)
            <input type="checkbox" name="active" value="">Active<br>  
            @else   
            <input type="checkbox" name="active" value="" checked>Active<br>
            @endif
        </div>

        

            <div class="form-actions">
             <input class="btn btn-primary" type="submit" value="Save Changes"> 
           </div>
         </form>
       </div>
     </div>


   </div>
 </div>
</div>
</div>



<script src="<?php echo url(); ?>/assets/js/jquery.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo url(); ?>/assets/js/bootstrap.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/bootstrap-colorpicker.js"></script> 
<script src="<?php echo url(); ?>/assets/js/bootstrap-datepicker.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.toggle.buttons.js"></script> 
<script src="<?php echo url(); ?>/assets/js/masked.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.uniform.js"></script> 
<script src="<?php echo url(); ?>/assets/js/select2.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/matrix.js"></script> 
<script src="<?php echo url(); ?>/assets/js/matrix.form_common.js"></script> 
<script src="<?php echo url(); ?>/assets/js/wysihtml5-0.3.0.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.peity.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/bootstrap-wysihtml5.js"></script> 

<script>
 $('.textarea_editor').wysihtml5();
</script>

<script type="text/javascript">


 

function readURL(input) {


  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function (e) {
      $('#blah')
      .attr('src', e.target.result)
      .width(100)
      .height(100);

    };

    reader.readAsDataURL(input.files[0]);
  }
}





</script>
@stop
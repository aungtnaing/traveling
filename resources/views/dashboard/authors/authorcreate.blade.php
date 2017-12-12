@extends('dashboard.default')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">create author</a> </div>

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
            <h5>author-info</h5>
          </div>
          <div class="widget-content">
            <form action="{{ route("authors.store") }}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <ul class="thumbnails">
                <li class="span3"> <a> 
                  <input style="display:none;" id="file-input1" name="photourl" type='file' onchange="readURL(this);"/>                    
                  <label for="file-input1">
                    <i class="icon-camera"></i>.Photo 120 X 120<br>
                    <img id="blah" src="//placehold.it/100" alt="avatar" alt="your image" />

                  </label>
                  <div class="actions"><a id="preview1" class="lightbox_trigger" herf=""><i class="icon-search"></i></a> </div>

                </li>


              </ul>


              <div class="control-group">
                <label class="control-label">Name :</label>
                <div class="controls">
                  <input name="name" class="span11" placeholder="Enter author name" type="text" required>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Email :</label>
                <div class="controls">
                  <input name="email" class="span11" placeholder="Enter author email" type="text">
                </div>
              </div>

               <div class="control-group">
                <label class="control-label">Phone :</label>
                <div class="controls">
                  <input name="phone" class="span11" placeholder="Enter author phone" type="text">
                </div>
              </div>


              <div class="control-group">
              <label class="control-label">Bio :</label>
                <div class="controls">
                  <textarea class="textarea_editor span12" name="bio" placeholder="Enter author bio" class="span11" rows="2"></textarea>

                </div>
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
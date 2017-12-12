@extends('dashboard.default')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">create post english</a> </div>

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
            <h5>Post-info - English Type</h5>
          </div>
          <div class="widget-content">
            <form action="{{ route("posts.store") }}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <ul class="thumbnails">
                <li class="span3"> <a> 
                  <input style="display:none;" id="file-input1" name="photourl1" type='file' onchange="readURL(this);" required/>                    
                  <label for="file-input1">
                    <i class="icon-camera"></i>.Main 2000x1324<br>
                    <img id="blah" src="//placehold.it/100" alt="avatar" alt="your image" />

                  </label>
                  <div class="actions"><a id="preview1" class="lightbox_trigger" herf=""><i class="icon-search"></i></a> </div>

                </li>
                <li class="span3"> <a> 
                 <input style="display:none;" id="file-input2" name="photourl2" type='file' onchange="readURL2(this);" />                    
                 <label for="file-input2">
                  <i class="icon-camera"></i>.Thum 400x300<br>
                  <img id="blah2" src="//placehold.it/100" alt="avatar" alt="your image" />
                </label>
                <div class="actions"> <a class="lightbox_trigger" href="blah2"><i class="icon-search"></i></a> </div>
              </li>

            </ul>

            <div class="control-group">
              <label class="control-label">Photo Caption :</label>
              <div class="controls">
                <input name="caption1" class="span11" placeholder="Enter Your Photo Caption" type="text">
              </div>
            </div>     


            <div class="control-group">
              <label class="control-label">Post Name :</label>
              <div class="controls">
                <input name="name" class="span11" placeholder="Enter Your Post Name" type="text" required>
              </div>
            </div>

           

 <div class="control-group">
              <label class="control-label">Group Name :</label>
              <div class="controls">
                <input name="groupname" class="span11" placeholder="Enter Your Group Name" type="text">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Sub Title :</label>
              <div class="controls">
                <input name="subtitle" class="span11" placeholder="Enter Your Sub Title" type="text">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Description:</label>
              <div class="controls">
              <textarea class="textarea_editor span12" name="description" placeholder="Enter your post description" class="span11" rows="7"></textarea>
              
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">YouTube Link :</label>
              <div class="controls">
                <input name="youtubelink" class="span11" placeholder="Enter Your Youtube linke" type="text">
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">Category:</label>
              <div class="controls">
                <select name="category">
                  @foreach($categorys as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach 
                </select>
              </div>
            </div>
               <div class="control-group">
              <label class="control-label">Author:</label>
              <div class="controls">
                <select name="author">
                  @foreach($authors as $author)
                  <option value="{{ $author->id }}">{{ $author->name }}</option>
                  @endforeach 
                </select>
              </div>
            </div>
          @if(Auth::user()->roleid==1)
      <div class="control-group">
          <input type="checkbox" name="mainslide" value="1" checked>Mainslide
        </div>

            <div class="control-group">
          <input type="checkbox" name="active" value="1" checked>Active
        </div>

          <div class="control-group">
          <input type="checkbox" name="popular" value="1" checked>Popular
        </div>
         <div class="control-group">
          <input type="checkbox" name="issue" value="1" checked>Picturesque Last Match Issue
        </div>
        @endif

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


 

// $(document).ready(function(){
//     $("#file-input1").on('change',function(){
//         //do whatever you want
//         document.getElementById("preview1").src = $(this).src;
//     });
// });
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


//  document.getElementById('blah').onchange = function () {



//   // document.getElementById("preview1").herf = $(this).herf;
// };

function readURL2(input) {



  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah2')
      .attr('src', e.target.result)
      .width(100)
      .height(100);
    };

    reader.readAsDataURL(input.files[0]);
  }
}




</script>
@stop
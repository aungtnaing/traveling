@extends('dashboard.default')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">edit book</a> </div>

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
            <h5>Book-info</h5>
          </div>
          <div class="widget-content">
               <form action="{{ route("books.update", $book->id) }}" method="POST" enctype="multipart/form-data">
          <input name="_method" type="hidden" value="PATCH">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
              <ul class="thumbnails">
                <li class="span3"> <a> 
                  <input style="display:none;" id="file-input1" name="photourl1" type='file' onchange="readURL(this);"/>                    
                  <label for="file-input1">
                    <i class="icon-camera"></i>.Main 937 X 1200<br>
                     @if($book->photourl1!="")
                    <img id="blah" src= "{{ $book->photourl1 }}" width="100" height="100">
                    @else
                    <img id="blah" src="//placehold.it/100" alt="avatar" alt="your image" />
                    @endif
                  </label>
                  <div class="actions"><a id="preview1" class="lightbox_trigger" herf=""><i class="icon-search"></i></a> </div>

                </li>
                  <li class="span3"> <a> 
                 <input style="display:none;" id="file-input2" name="pdfsample" type='file' />                    
                 <label for="file-input2">
                  <i class="icon-file"></i>.pdf sample<br>
                  {{ $book->pdfsample }} 
                </label>
               
              </li>
           

            </ul>


            <div class="control-group">
              <label class="control-label">Book Name :</label>
              <div class="controls">
                <input name="bookname" class="span11" placeholder="Enter Your Book Name" value="{{ $book->bookname }}" type="text">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Vol Number :</label>
              <div class="controls">
                <!-- <input name="volnumber" class="span11" placeholder="Enter Your Sub Title" type="text"> -->
                <input name="volnumber" type="number" min="1" step="1" value="{{ $book->volnumber }}" required>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Issue Number :</label>
              <div class="controls">
                <!-- <input name="volnumber" class="span11" placeholder="Enter Your Sub Title" type="text"> -->
                <input name="issuenumber" type="number" min="1" step="1" value="{{ $book->issuenumber }}" required>
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">Discount :</label>
              <div class="controls">
                <!-- <input name="volnumber" class="span11" placeholder="Enter Your Sub Title" type="text"> -->
                <input name="discount" type="number" min="0" step="1" value="{{ $book->discount }}">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Old Price :</label>
              <div class="controls">
                <!-- <input name="volnumber" class="span11" placeholder="Enter Your Sub Title" type="text"> -->
                <input name="oprice" type="number" min="0" value="{{ $book->oprice }}" step="1">
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Price :</label>
              <div class="controls">
                <!-- <input name="volnumber" class="span11" placeholder="Enter Your Sub Title" type="text"> -->
                <input name="price" type="number" min="0" step="1" value="{{ $book->price }}" required>
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Rate :</label>
              <div class="controls">
                <!-- <input name="volnumber" class="span11" placeholder="Enter Your Sub Title" type="text"> -->
                <input name="rate" type="number" min="0" step="1" value="{{ $book->rate }}">
              </div>
            </div>

         
<div class="control-group">
              <label class="control-label">Description:</label>
              <div class="controls">
              <textarea class="textarea_editor span12" name="description" placeholder="Enter your post description" class="span11" rows="7">{{ $book->description }}</textarea>
              
              </div>
            </div>

          <div class="control-group">
              <label class="control-label">mDescription:</label>
              <div class="controls">
              <textarea class="textarea_editor span12" name="mdescription" placeholder="Enter your post mdescription" class="span11" rows="7">{{ $book->mdescription }}</textarea>
              
              </div>
            </div>


   <div class="control-group">
         
          @if($book->active==0)
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
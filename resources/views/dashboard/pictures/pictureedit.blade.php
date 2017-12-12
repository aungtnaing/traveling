@extends('dashboard.default')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">edit picturesques</a> </div>
    <!-- <h1>USER LISTS</h1> -->
  </div>
  <div class="container-fluid">
    <!--  <h1>Edit Profile</h1> -->

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
      <div class="span12">


        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>picturesques-info</h5>
          </div>
          <div class="widget-content nopadding">
            <form method="POST" action="{{ route("picturesques.update", $picture->id) }}" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal" role="form">
               <input name="_method" type="hidden" value="PATCH">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

             
              <ul class="thumbnails">
                <li class="span3"> <a> 
                  <input style="display:none;" id="file-input1" name="photourl1" type='file' onchange="readURL(this);"/>                    
                  <label for="file-input1">
                    <i class="icon-camera"></i>.picture -size <br>
                     @if($picture->photourl1!="")
                    <img id="blah" src= "{{ $picture->photourl1 }}" width="100" height="100">
                    @else
                    <img id="blah" src="//placehold.it/100" alt="avatar" alt="your image" />
                    @endif
                  </label>
                  <div class="actions"><a id="preview1" class="lightbox_trigger" herf=""><i class="icon-search"></i></a> </div>

                </li>
                
           

            </ul>
            
             
    
                
               

          <div class="control-group">
         
          @if($picture->newpic==0)
            <input type="checkbox" name="newpic" value="">Newpic<br>  
            @else   
            <input type="checkbox" name="newpic" value="" checked>Newpic<br>
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
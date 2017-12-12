@extends('dashboard.default')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">edit subscribes price</a> </div>
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
            <h5>subscribes-info</h5>
          </div>
          <div class="widget-content nopadding">
            <form method="POST" action="{{ route("subscribes.update", $subscribe->id) }}" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal" role="form">
              <input name="_method" type="hidden" value="PATCH">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
             
            
              <div class="control-group">
                  <label class="control-label">Name :</label>
                  <div class="controls">
                    <input type="text" class="span11" id="" name="name" placeholder="Enter Name" value="{{ $subscribe->name }}" required>
                  </div>
                </div>


                <div class="control-group">
                  <label class="control-label">Price :</label>
                  <div class="controls">
                 
                    <input name="price" type="number" min="1" step="1" value="{{ $subscribe->price }}" required>
                  </div>
                </div>
    
                
                <div class="control-group">
              <label class="control-label">Description:</label>
              <div class="controls">
              <textarea class="textarea_editor span12" name="description" placeholder="Enter your description" class="span11" rows="7">{{ $subscribe->description }}</textarea>
              
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


@stop
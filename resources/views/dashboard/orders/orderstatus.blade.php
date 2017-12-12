@extends('dashboard.default')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">new order</a> </div>
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
            <h5>Order-info</h5>
          </div>
          <div class="widget-content nopadding">
            <form method="POST" action="{{ route("orderlists.update", $order->id) }}" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal" role="form">
              <input name="_method" type="hidden" value="PATCH">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
         


             <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">

                <label>{{ $order->name }}</label>
             </div>
           </div>


           <div class="control-group">
            <label class="control-label">Last Name :</label>
            <div class="controls">

                   <label>{{ $order->lastname }}</label>
            </div>
          </div> 
            <div class="control-group">
            <label class="control-label">phoneno :</label>
            <div class="controls">
                 <label>{{ $order->phoneno }}</label>
           </div>
         </div>
          <div class="control-group">
            <label class="control-label">address :</label>
            <div class="controls">
                 <label>{{ $order->address }}</label>
           </div>
         </div>

        <div class="control-group">
            <label class="control-label">city :</label>
            <div class="controls">

                   <label>{{ $order->city }}</label>
            </div>
          </div> 

          <div class="control-group">
            <label class="control-label">order info :</label>
            <div class="controls">
                 <label><?php echo $order->bookinfo; ?></label>
           </div>
         </div>

          <div class="control-group">
            <label class="control-label">note :</label>
            <div class="controls">
                 <label>{{ $order->note }}</label>
           </div>
         </div>
     
        


       <input class="btn btn-mini btn-info" name="status" type="submit" value="checked">
        <input class="btn btn-mini btn-info" name="status" type="submit" value="close">
     </form>
   </div>
 </div>


</div>
</div>
</div>
</div>


@stop
@extends('dashboard.default')
@section('content')


<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>

  <div class="container-fluid">
   
   @if(Auth::user()->roleid==1 || Auth::user()->roleid==5)
    <hr/>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
            <h5>Latest Posts</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG2">
            <ul class="recent-posts">
              
            @foreach($latestposts as $latestblog)
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="{{ $latestblog->user->photourl }}"> </div>
                <div class="article-post"> <span class="user-info"> By: {{ $latestblog->user->name }} / Date: {{ $latestblog->created_at }} </span>
                  <p><a href="#">{{ $latestblog->name }}. :: {{ $latestblog->category->name }}</a> </p>
                </div>
              </li>
              
            @endforeach
            
            </ul>
          </div>
        </div>
    
      </div>
      <div class="span6">
         <div class="widget-box">
          <div class="widget-title bg_lo"  data-toggle="collapse" href="#collapseG3" > <span class="icon"> <i class="icon-chevron-down"></i> </span>
            <h5>New Order Lists</h5>
          </div>
          <div class="widget-content nopadding updates collapse in" id="collapseG3">
            @foreach($orderlists as $orderlist)
            <div class="new-update clearfix"><i class="icon-gift"></i>
              <div class="update-done"><a title="" href="{{ route("orderlists.edit", $orderlist->id ) }}"><strong>{{ $orderlist->name }}</strong></a> <span><?php echo $orderlist->bookinfo; ?></span> </div>
              <div class="update-date"><span class="update-day">{{ $orderlist->created_at->day }}</span>{{ $orderlist->created_at->month }}</div>
            </div>
            @endforeach
        
          </div>
        </div>
      </div>

        <div class="span6">
         <div class="widget-box">
          <div class="widget-title bg_lo"  data-toggle="collapse" href="#collapseG3" > <span class="icon"> <i class="icon-chevron-down"></i> </span>
            <h5>New ADs Lists</h5>
          </div>
          <div class="widget-content nopadding updates collapse in" id="collapseG3">
            @foreach($adlists as $adlist)
            <div class="new-update clearfix"><i class="icon-gift"></i>
              <div class="update-done"><a title="" href="{{ route("advertises.edit", $adlist->id ) }}"><strong>{{ $adlist->adname }}</strong></a> <span><?php echo $adlist->phoneno; ?></span> </div>
              <div class="update-date"><span class="update-day">{{ $adlist->created_at->day }}</span>{{ $adlist->created_at->month }}</div>
            </div>
            @endforeach
        
          </div>
        </div>
      </div>
 <div class="span6">
         <div class="widget-box">
          <div class="widget-title bg_lo"  data-toggle="collapse" href="#collapseG3" > <span class="icon"> <i class="icon-chevron-down"></i> </span>
            <h5>New Picturesques Lists</h5>
          </div>
          <div class="widget-content nopadding updates collapse in" id="collapseG3">
            @foreach($newpiclists as $newpiclist)
            <div class="new-update clearfix"><i class="icon-gift"></i>
              <div class="update-done"><a title="" href="{{ route("picturesques.edit", $newpiclist->id ) }}"><strong>{{ $newpiclist->name }}</strong></a> <span><?php echo $newpiclist->phone; ?></span> </div>
              <div class="update-date"><span class="update-day">{{ $newpiclist->created_at->day }}</span>{{ $newpiclist->created_at->month }}</div>
            </div>
            @endforeach
        
          </div>
        </div>
      </div>

      @else
          <hr/>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
            <h5>Latest Posts</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG2">
            <ul class="recent-posts">
              
            @foreach($latestposts as $latestblog)
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="{{ $latestblog->user->photourl }}"> </div>
                <div class="article-post"> <span class="user-info"> By: {{ $latestblog->user->name }} / Date: {{ $latestblog->created_at }} </span>
                  <p><a href="#">{{ $latestblog->name }}. :: {{ $latestblog->category->name }}</a> </p>
                </div>
              </li>
              
            @endforeach
            
            </ul>
          </div>
        </div>
    
      </div>

      @endif
    </div>
  </div>
</div>


@stop
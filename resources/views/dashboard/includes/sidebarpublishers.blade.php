<div id="sidebar"><a href="{{ url('/dashboard') }}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="{{ url('/dashboard') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
  	 @if(Auth::user()->roleid==2 || Auth::user()->roleid==3 || Auth::user()->roleid==4)
    <li><a href="{{ url('/posts') }}"><i class="icon icon-th"></i> <span>Posts</span></a></li>
    @endif
    @if(Auth::user()->roleid==2)
     <li><a href="{{ url('/books') }}"><i class="icon icon-th"></i> <span>Books</span></a></li> 
     @endif
      @if(Auth::user()->roleid==5)
       <li><a href="{{ url('/orderlists') }}"><i class="icon icon-th"></i> <span>Order Lists</span></a></li>

     @endif
        @if(Auth::user()->roleid==6)
       <li><a href="{{ url('/adlists') }}"><i class="icon icon-th"></i> <span>AD Lists</span></a></li>

     @endif
  </ul>
</div>
 
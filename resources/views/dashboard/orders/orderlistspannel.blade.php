@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">order lists</a> </div>
		<!-- <h1>USER LISTS</h1> -->
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">


				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
						<h5>Order Lists</h5>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
							<thead>
								<tr>
									<th>#</th>

									<th>Name</th>
									<th>Last Name</th>
									<th>User Name</th>
									<th>PhoneNo</th>
									<th>Address</th>
									<th>City</th>
									<th>Book Info</th>
									<th>Status</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>

								@foreach($orderlists as $orderlist)
								
								<tr lass="gradeX">
								
									<td>{{ $orderlist->id }}</td>
									<td>{{ $orderlist->name }}</td>
									<td>{{ $orderlist->lastname }}</td>
									<td>{{ $orderlist->user->name }}</td>
									<td>{{ $orderlist->phoneno }}</td>
									<td>{{ $orderlist->address }}</td>
									<td>{{ $orderlist->city }}</td>
									<td><?php echo $orderlist->bookinfo; ?></td>
									@if($orderlist->active==1)
									<td><i class="icon-check"></i></td>
									@else
									<td><i class="icon-check-empty"></i></td>
									@endif
									<td class="center">
									   <form method="POST" action="{{ route("orderlists.update", $orderlist->id) }}" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal" role="form">
							              <input name="_method" type="hidden" value="PATCH">
							              <input type="hidden" name="_token" value="{{ csrf_token() }}">
							              
							              @if($orderlist->active==1)
							              	<input class="btn btn-mini btn-info" name="status" type="submit" value="uncheck">
             							  @else
             							  	<input class="btn btn-mini btn-info" name="status" type="submit" value="check">
             							  @endif	
             							</form>
									</td>
									@if(Auth::user()->roleid==1)
									<td class="center">
										<form method="POST" action="{{ route("checkouts.destroy", $orderlist->id) }}" accept-charset="UTF-8">
											<input name="_method" type="hidden" value="DELETE">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<input class="btn btn-mini btn-danger" type="submit" value="Delete">
										</form>
									</td>
									@else
									<td></td>
									@endif
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>


<script src="<?php echo url(); ?>/assets/js/jquery.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo url(); ?>/assets/js/bootstrap.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.uniform.js"></script> 
<script src="<?php echo url(); ?>/assets/js/select2.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/matrix.js"></script> 
<script src="<?php echo url(); ?>/assets/js/matrix.tables.js"></script>s
@stop
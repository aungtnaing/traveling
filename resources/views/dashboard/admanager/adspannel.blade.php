@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">AD lists</a> </div>
		<!-- <h1>USER LISTS</h1> -->
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
			
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
						<h5>AD Lists</h5>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
							<thead>
								<tr>
									<th>#</th>
									<th>Ad</th>
									<th>Ad id</th>
									<th>Advertisor Name</th>
									<th>User Name</th>
									<th>PhoneNo</th>
									
									<th>urllink</th>
									<th>start date</th>
									<th>end date</th>
									
									<th>Status</th>
									<th>Newad</th>
									<th></th>
								</tr>
							</thead>
							<tbody>

								@foreach($advertises as $advertise)
								
								<tr lass="gradeX">
								
									<td>{{ $advertise->id }}</td>


									<td><img src="{{ $advertise->photourl1 }}" width="100" height="100"></td>	
									<td>{{ $advertise->adid }}</td>
			
									<td>{{ $advertise->adname }}</td>
									<td>{{ $advertise->user->name }}</td>
									<td>{{ $advertise->phoneno }}</td>
									<td>{{ $advertise->urllink }}</td>
									<td>{{ $advertise->startdate }}</td>
									<td>{{ $advertise->enddate }}</td>
									@if($advertise->active==1)
									<td><i class="icon-check"></i></td>
									@else
									<td><i class="icon-check-empty"></i></td>
									@endif
									@if($advertise->newad==1)
									<td><i class="icon-check"></i></td>
									@else
									<td><i class="icon-check-empty"></i></td>
									@endif
									<td class="center">
									  <a class="btn btn-mini btn-primary" href="{{ route("advertises.edit", $advertise->id ) }}">Edit</a>
									</td>
									
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
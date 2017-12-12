@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">picturesques lists</a> </div>
		<!-- <h1>USER LISTS</h1> -->
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
			
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
						<h5>picturesques Lists</h5>
					</div>
					<div class="widget-content nopadding">
					<table class="table table-bordered data-table">
							<thead>
								<tr>
									<th>#</th>
									<th>Photo</th>
									<th>user name</th>
									<th>name</th>
									<th>email</th>
									<th>phone</th>
									<th>subject</th>
									<th>message</th>
									<th>Newpic</th>
									<th></th>
								</tr>
							</thead>
							<tbody>

								@foreach($pictures as $picture)
								
								<tr lass="gradeX">
								
									<td>{{ $picture->id }}</td>


									<td><img src="{{ $picture->photourl1 }}" width="100" height="100"></td>	
									<td>{{ $picture->user->name }}</td>
			
									<td>{{ $picture->name }}</td>
									<td>{{ $picture->email }}</td>
									<td>{{ $picture->phone }}</td>
									<td>{{ $picture->subject }}</td>
									<td>{{ $picture->message }}</td>
								
									@if($picture->newpic==1)
									<td><i class="icon-check"></i></td>
									@else
									<td><i class="icon-check-empty"></i></td>
									@endif
									<td class="center">
									  <a class="btn btn-mini btn-primary" href="{{ route("picturesques.edit", $picture->id ) }}">Edit</a>
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
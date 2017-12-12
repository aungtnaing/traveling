@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">category lists</a> </div>
		<!-- <h1>USER LISTS</h1> -->
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
						<a class="btn btn-mini btn-info pull-left" href="{{ route("categorys.create") }}">Add New Category</a>

				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
						<h5>CATEGORIES</h5>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
							<thead>
								<tr>
									<th>#</th>

									<th>Name</th>
									<th>mName</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>

								@foreach($categorys as $category)
								<tr lass="gradeX">   
									<td>{{ $category->id }}</td>
									<td>{{ $category->name }}</td>
									<td>{{ $category->mname }}</td>
									<td>
										<a class="btn btn-mini btn-primary" href="{{ route("categorys.edit", $category->id ) }}">Edit</a>
									</td>
									@if(Auth::user()->roleid==1)
									<td>
										<form method="POST" action="{{ route("categorys.destroy", $category->id) }}" accept-charset="UTF-8">
											<input name="_method" type="hidden" value="DELETE">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<input class="btn btn-mini btn-danger" type="submit" value="Delete">
											
										</form>
									</td>
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
<script src="<?php echo url(); ?>/assets/js/matrix.tables.js"></script>

@stop

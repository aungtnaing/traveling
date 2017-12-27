@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">whatnews lists</a> </div>
		<!-- <h1>USER LISTS</h1> -->
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">


				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
						<h5>whatnews Lists</h5>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
							<thead>
								<tr>
									<th>#</th>
									<th>photo</th>
									<th>businessname</th>
									<th>businessemail</th>
									<th>phone</th>
									<th>website</th>
									<th>region</th>
									<th>city</th>
									<th>township</th>
									<th>category</th>
									<th>name</th>
									<th>email</th>
									<th>phone</th>
									<!-- <th>message</th> -->
									<th>ads</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>

								@foreach($whatnewslists as $whatnew)
								
								<tr lass="gradeX">
								
									<td>{{ $whatnew->id }}</td>
									<td><img src="{{ $whatnew->photourl1 }}" width="200" height="100"></td>
									<td>{{ $whatnew->businessname }}</td>
									<td>{{ $whatnew->businessemail }}</td>
									<td>{{ $whatnew->businessphone }}</td>
									<td>{{ $whatnew->websiteurl }}</td>
									<td>{{ $whatnew->region }}</td>
									<td>{{ $whatnew->city }}</td>
									<td>{{ $whatnew->township }}</td>
									<td>{{ $whatnew->category }}</td>
									
									<td>{{ $whatnew->name }}</td>
									<td>{{ $whatnew->email }}</td>
									<td>{{ $whatnew->phone }}</td>
									<!-- <td>{{ $whatnew->message }}</td> -->
									@if($whatnew->active==1)
									<td><i class=" icon-check"></i></td>
									@else
									<td></td>
									@endif
									<td><a class="btn btn-mini btn-primary" href="{{ route("whatnew.edit", $whatnew->id) }}">Edit</a></td>
									@if(Auth::user()->roleid==1)
									<td class="center">
										<form method="POST" action="{{ route("whatnew.destroy", $whatnew->id) }}" accept-charset="UTF-8">
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
<script src="<?php echo url(); ?>/assets/js/matrix.tables.js"></script>
@stop


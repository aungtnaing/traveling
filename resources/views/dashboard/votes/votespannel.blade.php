@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">votes lists</a> </div>
		<!-- <h1>USER LISTS</h1> -->
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">


				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
						<h5>votes Lists</h5>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
							<thead>
								<tr>
									<th>id</th>

									<th>Photo</th>
									<th>Photo by</th>
									
									<th>voter name</th>
									<th>voter email</th>
									
								
									<th></th>
								</tr>
							</thead>
							<tbody>

								@foreach($votes as $vote)
								
								<tr lass="gradeX">
								
									<td>{{ $vote->id }}</td>
                                                                       <td><img src="{{ $vote->post->photourl2 }}" width="200" height="100"></td>
									<td>{{ $vote->post->caption1 }}</td>
									
									<td>{{ $vote->name }}</td>
									<td>{{ $vote->email }}</td>
								
									
									@if(Auth::user()->roleid==1)
									<td class="center">
										<form method="POST" action="{{ route("votes.destroy", $vote->id) }}" accept-charset="UTF-8">
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
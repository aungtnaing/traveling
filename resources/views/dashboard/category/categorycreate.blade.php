@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">new category</a> </div>
		<!-- <h1>USER LISTS</h1> -->
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span4">
				<!-- <h3 class="panel-title">New Category</h3> -->
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif	
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
						<h5>Category-info</h5>
					</div>
					<div class="widget-content nopadding">
						<form action="{{ route("categorys.store") }}" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">



							<div class="control-group">
								<label class="control-label">Name :</label>
								<div class="controls">
									<input type="text" class="span11" id="" name="name" placeholder="Enter Category Name" value="{{ old('name') }}" required>
								</div>
							</div>


							<div class="control-group">
								<label class="control-label">mName :</label>
								<div class="controls">
									<input type="text" class="span11" id="" name="mname" placeholder="Enter Category mName" value="{{ old('mname') }}" required>
								</div>
							</div> 




							<div class="form-actions">
								<input class="btn btn-primary" type="submit" value="Save"> 
							</div>
						</form>
					</div>
				</div>

				
			</div>
		</div>
	</div>
</div>



@stop



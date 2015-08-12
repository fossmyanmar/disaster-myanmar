@extends('frontend.template.layout')

@section('content')
<div class="row">
	<div class="col-md-12">
		<p class="lead">Submit Your Orginization</p>
	</div>

	<div class="col-md-6">
		<form action="">
			<div class="form-group">
				<label>Type of Help</label>
				<select class="form-control">
				  	<option>Planning to help</option>
				  	<option>Finished Help</option>
				</select>
			</div>

			<div class="form-group">
				<label>Orginization Name</label>
				<input type="text" name="org-name" class="form-control" placeholder="Originization Name">
			</div>

			<div class="form-group">
				<label>Contact Address</label>
				<input type="text" name="org-contact" class="form-control" placeholder="Contact Address">
			</div>

			<hr>

			<div></div>

		</form>
	</div>

	<div class="col-md-3">
		
	</div>
</div>
@stop

@section('script')
	<script type="text/javascript">
	
	</script>
@stop
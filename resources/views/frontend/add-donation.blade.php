@extends('frontend.theme.layout')

@section('breadcrumbs')
{!! Breadcrumbs::render('donation.add') !!}
@stop 

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="">
				<div class="row">
					<div class="col-md-4">
						<h3>Basic Information</h3>
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
							<label>Contact Phone</label>
							<input type="text" name="org-contact" class="form-control" placeholder="Contact Phone">
						</div>

						<div class="form-group">
							<label>Date</label>
							<input type="text" name="date" class="form-control" placeholder="Date">
						</div>
					</div>
					<div class="col-md-4">
						<h3>Locations</h3>

						<div class="form-group">
							<label>State</label>
							<select class="form-control">
								<option>State</option>
								<option>State Two</option>
							</select>
						</div>

						<div class="form-group">
							<label>Township</label>
							<select class="form-control">
								<option>Township</option>
								<option>Township Two</option>
							</select>
						</div>

						<div class="form-group">
							<label>City</label>
							<select class="form-control">
								<option>City</option>
								<option>City Two</option>
							</select>
						</div>

						<div class="form-group">
							<label>Villages</label>
							<select class="form-control">
								<option>Villages</option>
								<option>Villages Two</option>
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<h3>Emergency Response</h3>
							<textarea class="form-control" rows="6" placeholder="Emergency Response"></textarea>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<h4>Type of Support</h4>
							<select class="form-control">
								<option>Aids</option>
								<option>Assistant</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<h4>Food Supply</h4>
							<label>Type of Food</label>
							<input type="text" class="form-control" placeholder="Type of Food">				

							<label>Weight of Food</label>
							<input type="text" class="form-control" placeholder="Weight of Food">

							<label>Count of Food</label>
							<input type="text" class="form-control" placeholder="Count of Food">
						</div>
						<button type="button" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Add More</button>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<h4>Medical</h4>
							<div class="row">
								<div class="col-md-12">
									<label>Name</label>
									<input type="text" class="form-control" placeholder="Name">
								</div>

								<div class="col-md-8">
									<label>Count</label>
									<input type="text" class="form-control" placeholder="Count">
								</div>
								<div class="col-md-4">
									<label>Type</label>
									<select class="form-control">
										<option>Pack</option>
										<option>Card</option>
										<option>Bottle</option>
										<option>Kit</option>
									</select>	
								</div>
							</div>
						</div>
						<button type="button" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Add More</button>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<h4>Finicial Support</h4>

							<div class="row">
								<div class="col-md-8">
									<label>Amount</label>
									<input type="text" class="form-control" placeholder="Amount">	
								</div>
								<div class="col-md-4">
									<label>Currency</label>
									<select class="form-control">
										<option>USD</option>
										<option>Kyats</option>
									</select>	
								</div>
							</div>
						</div>
						<button type="button" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Add More</button>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">
						<h4>Others</h4>
						<div class="form-group">
							<label>Water / Sanitation / Hygiene</label>
							<select class="form-control">
								<option>Water</option>
								<option>Sanitation</option>
								<option>Hygiene</option>
							</select>
						</div>

						<div class="form-group">
							<label>Shelter</label>
							<input type="text" class="form-control" placeholder="Support Count">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<h4>Coordinate with Other NGOs</h4>
							<select class="form-control">
								<option>Co NGO 1</option>
								<option>Co NGO 2</option>
								<option>Co NGO 3</option>
							</select>
						</div>
					</div>
				</div>
				<hr>
			{{-- 	<div class="form-group">
					<label>Detail of Supported Items</label>
					<textarea class="form-control" rows="3" placeholder="Detail of Supported Items"></textarea>
				</div>
	 --}}
				<div class="form-group">
					<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
@stop

@section('script')
<script type="text/javascript">
	
</script>
@stop
@extends('admin.theme.layout')

@section('breadcrumbs', Breadcrumbs::render('admin.ngos.add'))

@section('content')
<div class="row">
	<div class="col-md-6">
		<section class="panel">
			<div class="panel-heading">
				Add new contact
			</div>
			<div class="panel-body">
				{!! Form::open(['route'=>'ngos.store']) !!}
					{!! Form::txt('name', 'Name') !!}
					@if($errors->first('name'))
					<p class="text-danger">{{$errors->first('name')}}</p>
					@endif
						
					{!! Form::txt('mm_name', 'Name in Burmese') !!}
					{!! Form::txt('founder', 'Founder Name') !!}
					{!! Form::txt('mm_founder', 'Founder Name in Burmese') !!}
					{!! Form::txt('volunteers_count', 'Volunteers Count') !!}
					{!! Form::txt('phone', 'Phone') !!}
					@if($errors->first('phone'))
					<p class="text-danger">{{$errors->first('phone')}}</p>
					@endif
					{!! Form::txt('email', 'Email') !!}
					@if($errors->first('email'))
						<p class="text-danger">{{$errors->first('email')}}</p>
					@endif
					{!! Form::txt('facebook', 'Facebook Page') !!}

					<div class="form-group">
						<select class="form-control" id="select_state" name="state_id">
							<option value="0">State</option>
							
							@foreach($states as $id => $name)
							<option value="{{ $id }}">{{ $name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" id="select_city" name="city_id" disabled>
							<option>City</option>
						</select>
					</div>

					{!! Form::txtarea('address', 'Address') !!}
					{!! Form::txt('bank_account', 'Bank Account Number') !!}
					
					{!! Form::datetime('founded_date', 'Date') !!}
					@if($errors->first('founded_date'))
					<p class="text-danger">{{$errors->first('founded_date')}}</p>
					@endif
					{!! Form::txt('slogan', 'Slogan') !!}
					{!! Form::button('<i class="fa fa-plus"></i> Add', array('class'=>'btn btn-danger', 'type' => 'submit')) !!}
				{!! Form::close() !!}
			</div>
		</section>
	</div>
</div>
@stop

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		//Script for search bar
		$('#select_state').change(function(){
			$.getJSON("{{ route('admin.cities.json')}}", { state_id: $(this).val() }, 
				function(data) {
					var cities = $('#select_city');
					if(data.length == 0)
					{
						cities.empty();
						cities.append('<option value="no-data">No Cities</option>');
						cities.prop('disabled', true);
					}
					else
					{
						cities.empty();
						$.each(data, function(key, value) {   
							cities
							.append('<option value="' + key +'">' + value + '</option>');
						});
						cities.prop('disabled', false);
					}
				});
		});
	});
</script>
@stop
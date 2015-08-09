@extends('admin.theme.layout')

@section('breadcrumbs', Breadcrumbs::render('admin.villages'))

@section('content')
<div class="row">
	<div class="col-md-9">
		<section class="panel">
			<div class="panel-heading">
				List of Villages
			</div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<th>Name</th>
						<th>City</th>
						<th>Position Code</th>
						<th>Population</th>
						<th>Latitude</th>
						<th>Longitude</th>
						<th>Options</th>
					</thead>
					<tbody>
					
						@foreach($villages as $village)
						<tr>
							<td>{{ $village->mm_name ? $village->mm_name : $village->name }}</td>
							<td>
								{{ $village->city->mm_name ? $village->city->mm_name : $village->city->name }}
							</td>
							<td>{{ $village->position_code }}</td>
							<td>{{ $village->population }}</td>
							<td>{{ $village->lat }}</td>
							<td>{{ $village->lng }}</td>
							<td>
								<button class="btn btn-success btn-xs list-update" data-toggle="modal" data-target="#edit-{!! $village->id !!}"><i class="fa fa-edit"></i></button>
							 	{{-- 
							 	@include('admin.partials.edit-village', array('url' => 'village.update', 'data' => $village)) --}}
								<button class="btn btn-danger btn-xs list-delete" data-toggle="modal" data-target="#delete-{!! $village->id !!}"><i class="fa fa-times"></i></button>
								@include('admin.partials.delete', array('url' => 'villages.destroy', 'data' => $village))
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</section>
	</div>
	<div class="col-md-3">
		<section class="panel">
			<div class="panel-heading">
				Add new village
			</div>
			<div class="panel-body">
				{!! Form::open(['route'=>'villages.store']) !!}
					{!! Form::txt('name', 'Name') !!}
					@if($errors->first('name'))
					<p class="text-danger">{{$errors->first('name')}}</p>
					@endif
						
					{!! Form::txt('mm_name', 'Name in Burmese') !!}
					@if($errors->first('mm_name'))
					<p class="text-danger">{{$errors->first('mm_name')}}</p>
					@endif

					<div class="form-group">
						<select class="form-control" id="select_state" name="state">
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
					@if($errors->first('city_id'))
					<p class="text-danger">{{$errors->first('city_id')}}</p>
					@endif

					{!! Form::txt('lat', 'Latitude') !!}
					@if($errors->first('lat'))
					<p class="text-danger">{{$errors->first('lat')}}</p>
					@endif

					{!! Form::txt('lng', 'Longitude') !!}
					@if($errors->first('lng'))
					<p class="text-danger">{{$errors->first('lng')}}</p>
					@endif
					
					{!! Form::txt('position', 'Position Code') !!}
					@if($errors->first('position'))
					<p class="text-danger">{{$errors->first('position')}}</p>
					@endif

					{!! Form::txt('population', 'Population') !!}
					@if($errors->first('population'))
					<p class="text-danger">{{$errors->first('population')}}</p>
					@endif

					
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
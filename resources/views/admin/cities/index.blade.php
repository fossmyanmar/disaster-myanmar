@extends('admin.theme.layout')

@section('breadcrumbs', Breadcrumbs::render('admin.cities'))

@section('content')
<div class="row">
	<div class="col-md-9">
		<section class="panel">
			<div class="panel-heading">
				List of Cities
			</div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<th>Name</th>
						<th>State</th>
						<th>Position Code</th>
						<th>Population</th>
						<th>Latitude</th>
						<th>Longitude</th>
						<th>Options</th>
					</thead>
					<tbody>
						@foreach($cities as $city)
						<tr>
							<td>{{ $city->mm_name ? $city->mm_name : $city->name }}</td>
							<td>
								{{ $city->state->mm_name ? $city->state->mm_name : $city->state->name }}
							</td>
							<td>{{ $city->position_code }}</td>
							<td>{{ $city->population }}</td>
							<td>{{ $city->lat }}</td>
							<td>{{ $city->lng }}</td>
							<td>
								<button class="btn btn-success btn-xs list-update" data-toggle="modal" data-target="#edit-{!! $city->id !!}"><i class="fa fa-edit"></i></button>
							{{-- 	@include('admin.partials.edit-city', array('url' => 'city.update', 'data' => $city))
 --}}
								<button class="btn btn-danger btn-xs list-delete" data-toggle="modal" data-target="#delete-{!! $city->id !!}"><i class="fa fa-times"></i></button>
								@include('admin.partials.delete', array('url' => 'cities.destroy', 'data' => $city))
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
				Add new city
			</div>
			<div class="panel-body">
				{!! Form::open(['route'=>'cities.store']) !!}
					{!! Form::txt('name', 'Name') !!}
					@if($errors->first('name'))
					<p class="text-danger">{{$errors->first('name')}}</p>
					@endif
						
					{!! Form::txt('mm_name', 'Name in Burmese') !!}
					@if($errors->first('mm_name'))
					<p class="text-danger">{{$errors->first('mm_name')}}</p>
					@endif

					<div class='form-group'>
						{!! Form::select('state_id', $states, 'required', ['class' => 'form-control']) !!}
					</div>
					@if($errors->first('state_id'))
					<p class="text-danger">{{$errors->first('state_id')}}</p>
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
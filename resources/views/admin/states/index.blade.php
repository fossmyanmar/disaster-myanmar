@extends('admin.theme.layout')

@section('breadcrumbs', Breadcrumbs::render('admin.states'))

@section('content')
<div class="row">
	<div class="col-md-9">
		<section class="panel">
			<div class="panel-heading">
				List of States
			</div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<th>Name</th>
						<th>Position Code</th>
						<th>Population</th>
						<th>Latitude</th>
						<th>Longitude</th>
						<th>Options</th>
					</thead>
					<tbody>
						
						@foreach($states as $state)
						<tr>
							<td>{{ $state->mm_name ? $state->mm_name : $state->name }}</td>
							<td>{{ $state->position_code }}</td>
							<td>{{ $state->population }}</td>
							<td>{{ $state->lat }}</td>
							<td>{{ $state->lng }}</td>
							<td>
								<button class="btn btn-success btn-xs list-update" data-toggle="modal" data-target="#edit-{!! $state->id !!}"><i class="fa fa-edit"></i></button>
							{{-- 	@include('admin.partials.edit-state', array('url' => 'state.update', 'data' => $state))
 --}}
								<button class="btn btn-danger btn-xs list-delete" data-toggle="modal" data-target="#delete-{!! $state->id !!}"><i class="fa fa-times"></i></button>
								@include('admin.partials.delete', array('url' => 'states.destroy', 'data' => $state))
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
				Add new state
			</div>
			<div class="panel-body">
				{!! Form::open(['route'=>'states.store']) !!}
					{!! Form::txt('name', 'Name') !!}
					@if($errors->first('name'))
					<p class="text-danger">{{$errors->first('name')}}</p>
					@endif

					{!! Form::txt('mm_name', 'Name with Burmese') !!}
					@if($errors->first('mm_name'))
					<p class="text-danger">{{$errors->first('mm_name')}}</p>
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
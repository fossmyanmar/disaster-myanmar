@extends('admin.theme.layout')

@section('breadcrumbs', Breadcrumbs::render('admin.cities'))

@section('content')
<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<div class="panel-heading">
				List of Cities
				<span class="pull-right">
					<a href="{{ URL::route('cities.create') }}" class="btn btn-xs btn-danger"><i class="fa fa-plus"></i> Add New</a>
				</span>
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

								<a href="{!! URL::route('cities.show', ['id' => $city->id]) !!}" class="list-view btn btn-default btn-xs"><i class="fa fa-search"></i></a>
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</section>
	</div>
</div>
@stop
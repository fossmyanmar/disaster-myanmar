@extends('admin.theme.layout')

@section('breadcrumbs', Breadcrumbs::render('admin.cities.show', $city))

@section('content')
<div class="row">
	<div class="col-md-8">
		<section class="panel">
			<div class="panel-heading">
				Detail of {{ $city->mm_name ? $city->mm_name : $city->name }}
			</div>
			<div class="panel-body">
				<table class="table">
					<tr>
						<td>Name</td>
						<td>-</td>
						<td>{{ $city->mm_name ? $city->mm_name : $city->name }}</td>
					</tr>
					<tr>
						<td>State</td>
						<td>-</td>
						<td>{{ $city->state->mm_name ? $city->state->mm_name : $city->state->name }}</td>
					</tr>
					<tr>
						<td>Latitude</td>
						<td>-</td>
						<td>{{ $city->lat }}</td>
					</tr>
					<tr>
						<td>Longitude</td>
						<td>-</td>
						<td>{{ $city->lng }}</td>
					</tr>
					<tr>
						<td>Position Code</td>
						<td>-</td>
						<td>{{ $city->position_code }}</td>
					</tr>
					<tr>
						<td>Population</td>
						<td>-</td>
						<td>{{ $city->population }}</td>
					</tr>
					<tr>
						<td>District</td>
						<td>-</td>
						<td>{{ $district->mm_name ? $district->mm_name : $district->name }}</td>
					</tr>
				</table>
			</div>
		</section>
	</div>
</div>
@stop

@section('js')

@stop
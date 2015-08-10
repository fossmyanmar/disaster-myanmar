@extends('admin.theme.layout')

@section('breadcrumbs', Breadcrumbs::render('admin.villages'))

@section('content')
<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<div class="panel-heading">
				List of Villages
				<span class="pull-right">
					<a href="{{ URL::route('villages.create') }}" class="btn btn-xs btn-danger"><i class="fa fa-plus"></i> Add New</a>
				</span>
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
</div>
@stop
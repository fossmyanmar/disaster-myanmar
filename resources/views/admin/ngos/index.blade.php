@extends('admin.theme.layout')

@section('breadcrumbs', Breadcrumbs::render('admin.ngos'))

@section('content')
<div class="row">
	<div class="col-md-8">
		<section class="panel">
			<div class="panel-heading">
				List of NGOs
			</div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<th>Name</th>
						<th>Type</th>
						<th>Options</th>
					</thead>
					<tbody>
					
						@foreach($ngos as $ngo)
						<tr>
							<td>{{ $ngo->mm_name ? $ngo->mm_name : $ngo->name }}</td>
							<td>
								{{ $ngo->mm_type ? $ngo->mm_type : $ngo->type }}
							</td>
							
							<td>
								<button class="btn btn-success btn-xs list-update" data-toggle="modal" data-target="#edit-{!! $ngo->id !!}"><i class="fa fa-edit"></i></button>
							{{-- 	@include('admin.partials.edit-ngo', array('url' => 'ngo.update', 'data' => $ngo))
 --}}
								<button class="btn btn-danger btn-xs list-delete" data-toggle="modal" data-target="#delete-{!! $ngo->id !!}"><i class="fa fa-times"></i></button>
								@include('admin.partials.delete', array('url' => 'ngos.destroy', 'data' => $ngo))
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</section>
	</div>
	<div class="col-md-4">
		<section class="panel">
			<div class="panel-heading">
				Add new NGO
			</div>
			<div class="panel-body">
				{!! Form::open(['route'=>'ngos.store']) !!}
					{!! Form::txt('name', 'Name') !!}
					@if($errors->first('name'))
					<p class="text-danger">{{$errors->first('name')}}</p>
					@endif
						
					{!! Form::txt('mm_name', 'Name in Burmese') !!}
					@if($errors->first('mm_name'))
					<p class="text-danger">{{$errors->first('mm_name')}}</p>
					@endif
					
					{!! Form::txtarea('type', 'Type of NGO') !!}
					@if($errors->first('type'))
					<p class="text-danger">{{$errors->first('type')}}</p>
					@endif

					{!! Form::txtarea('mm_type', 'Type of NGO in Burmese') !!}
					@if($errors->first('mm_type'))
					<p class="text-danger">{{$errors->first('mm_type')}}</p>
					@endif
					
					{!! Form::button('<i class="fa fa-plus"></i> Add', array('class'=>'btn btn-danger', 'type' => 'submit')) !!}
				{!! Form::close() !!}
			</div>
		</section>
	</div>
</div>
@stop
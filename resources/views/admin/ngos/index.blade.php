@extends('admin.theme.layout')

@section('breadcrumbs', Breadcrumbs::render('admin.ngos'))

@section('content')
<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<div class="panel-heading">
				List of NGOs

				<span class="pull-right"> 
					<a href="{!! URL::route('ngos.create') !!}" class="btn btn-danger btn-xs"><i class="fa fa-plus"></i> Add New</a>
				</span>
			</div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<th width="40%">Name</th>
						<th>Founder</th>
						<th>Phone</th>
						<th width="20%">Address</th>
						<th>Options</th>
					</thead>
					<tbody>
					
						@foreach($ngos as $ngo)
						<tr>
							<td>{{ $ngo->mm_name ? $ngo->mm_name : $ngo->name }}</td>
							<td>{{ $ngo->mm_founder ? $ngo->mm_founder : $ngo->founder }}</td>
							<td>{{ $ngo->phone }}</td>
							<td>
								{{ $ngo->address }}, 
								{{ $ngo->city->mm_name ? $ngo->city->mm_name : $ngo->city->name }}, 
								{{ $ngo->state->mm_name ? $ngo->state->mm_name : $ngo->state->name }}
							</td>
							<td>
								<button class="btn btn-success btn-xs list-update" data-toggle="modal" data-target="#edit-{!! $ngo->id !!}"><i class="fa fa-edit"></i></button>
							{{-- 	@include('admin.partials.edit-ngo', array('url' => 'ngo.update', 'data' => $ngo))
 --}}
								<button class="btn btn-danger btn-xs list-delete" data-toggle="modal" data-target="#delete-{!! $ngo->id !!}"><i class="fa fa-times"></i></button>
								@include('admin.partials.delete', array('url' => 'ngos.destroy', 'data' => $ngo))
								
								<a href="{!! URL::route('ngos.contact.add', ['id' => $ngo->id]) !!}" class="add-ngocontact btn btn-info btn-xs"><i class="fa fa-plus"></i></a>

								<a href="{!! URL::route('ngos.show', ['id' => $ngo->id]) !!}" class="list-view btn btn-default btn-xs"><i class="fa fa-search"></i></a>
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

@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		$(".add-ngocontact").tooltip({placement : 'top', title : 'Add Contact Persons'});
	});
</script>
@stop
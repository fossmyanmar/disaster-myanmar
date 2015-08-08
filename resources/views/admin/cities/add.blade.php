@extends('admin.theme.layout')

@section('breadcrumbs', Breadcrumbs::render('admin.cities.add'))

@section('content')
<div class="row">
	<div class="col-md-9">
		<section class="panel">
			<div class="panel-heading">
				Add new city
			</div>
			<div class="panel-body">
				{!! Form::open(['route'=>'cities.store']) !!}
					<div class="row">
						<div class="col-md-7">
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
						</div>
						<div class="col-md-5">
							{!! Form::chkbox('is_district', 'ခရိုင်မြို့', true) !!}
						</div>
					</div>
					<hr>
					{!! Form::button('<i class="fa fa-plus"></i> Add', array('class'=>'btn btn-danger', 'type' => 'submit')) !!}
				{!! Form::close() !!}
			</div>
		</section>
	</div>
</div>
@stop
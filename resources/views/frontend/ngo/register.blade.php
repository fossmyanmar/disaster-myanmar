@extends('frontend.theme.layout')

@section('breadcrumbs')
{!! Breadcrumbs::render('ngos.register') !!}
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::open(['route'=>'ngo.postregister']) !!}
				{!! Form::txt('name', 'Name') !!}
				@if($errors->first('name'))	
				<label><small class="text-danger">{{ $errors->first('name')}}</small></label>
				@endif
				{!! Form::mail('email', 'Email') !!}
				@if($errors->first('email'))	
				<label><small class="text-danger">{{ $errors->first('email')}}</small></label>
				@endif
				{!! Form::txt('phone', 'Phone') !!}
				@if($errors->first('phone'))	
				<label><small class="text-danger">{{ $errors->first('phone')}}</small></label>
				@endif
				{!! Form::pwd('password', 'Password') !!}
				@if($errors->first('password'))	
				<label><small class="text-danger">{{ $errors->first('password')}}</small></label>
				@endif
				{!! Form::pwd('conf_password', 'Confirm Password') !!}
				@if($errors->first('conf_password'))	
				<label><small class="text-danger">{{ $errors->first('conf_password')}}</small></label>
				@endif
				{!! Form::txtarea('remark', 'Additional Info') !!}
				{!! Form::formSubmit('Register', 'fa-pencil') !!}
			{!! Form::close() !!}
		</div>
	</div>
</div>
@stop
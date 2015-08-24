@extends('frontend.theme.layout')

@section('breadcrumbs')
{!! Breadcrumbs::render('ngos.register') !!}
@stop

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		{!! Form::txt('name', 'Name') !!}
		{!! Form::mail('email', 'Email') !!}
		{!! Form::txt('phone', 'Phone') !!}
		{!! Form::pwd('password', 'Password') !!}
		{!! Form::pwd('conf_password', 'Confirm Password') !!}
		{!! Form::formSubmit('Register', 'fa-pencil') !!}
	</div>
</div>
@stop
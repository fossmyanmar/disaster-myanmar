@extends('frontend.theme.layout')

@section('breadcrumbs')
{!! Breadcrumbs::render('ngos.login') !!}
@stop 

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		{!! Form::mail('email', 'Email') !!}
		{!! Form::pwd('password', 'Password') !!}
		{!! Form::formSubmit('Login', 'fa-sign-in') !!}
	</div>
</div>
@stop
@extends('frontend.theme.layout')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h4 class="text-center">Login</h4>
		<hr>
		{!! Form::mail('email', 'Email') !!}
		{!! Form::pwd('password', 'Password') !!}
		{!! Form::formSubmit('Login', 'fa-sign-in') !!}
	</div>
</div>
@stop
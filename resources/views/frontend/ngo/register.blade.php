@extends('frontend.theme.layout')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h4 class="text-center">Register NGO</h4>
		<hr>
		{!! Form::txt('name', 'Name') !!}
		{!! Form::mail('email', 'Email') !!}
		{!! Form::txt('phone', 'Phone') !!}
		{!! Form::pwd('password', 'Password') !!}
		{!! Form::pwd('conf_password', 'Confirm Password') !!}
		{!! Form::formSubmit('Register', 'fa-pencil') !!}
	</div>
</div>
@stop
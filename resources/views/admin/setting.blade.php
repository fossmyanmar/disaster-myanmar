@extends('admin.template.layout')

@section('breadcrumbs')
{!! Breadcrumbs::render('admin.setting') !!}
@stop

@section('content')
<div class="row">
	<div class="col-md-4">
		<p class="lead text-muted">Update User Setting</p>
		{!! Form::open(['route'=>'admin.update_me', 'method' => 'put', 'class'=>'form-signin']) !!}
			{!! Form::txt('name', 'Name', $user->name) !!}
			@if($errors->first('name`'))
			<p class="text-danger">{{$errors->first('name')}}</p>
			@endif
			{!! Form::pwd('current_password', 'Current Password') !!}
			@if($errors->first('current_password'))
			<p class="text-danger">{{$errors->first('current_password')}}</p>
			@endif	
			{!! Form::pwd('new_password', 'New Password') !!}
			@if($errors->first('new_password'))
			<p class="text-danger">{{$errors->first('new_password')}}</p>
			@endif
			{!! Form::pwd('confirm_password', 'Confirm Password') !!}
			@if($errors->first('confirm_password'))
			<p class="text-danger">{{$errors->first('confirm_password')}}</p>
			@endif
			{!! Form::button('<i class="fa fa-refresh"></i> Update', array('class'=>'btn btn-info', 'type' => 'submit')) !!}
		{!! Form::close() !!}
	</div>
</div>
@stop
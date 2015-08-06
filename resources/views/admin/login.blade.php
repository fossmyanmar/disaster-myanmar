<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	@include('admin.theme.partials.style')
</head>
<body class="login-body">
	<div class="container">
		{!! Form::open(['route'=>'admin.post.login', 'class'=>'form-signin']) !!}
			<h2 class="form-signin-heading">Login to Console</h2>
			<div class="login-wrap">
				<input type="text" class="form-control" placeholder="User ID" autofocus name="email">
				@if($errors->first('email'))	
				<label><small class="label label-danger">{{ $errors->first('email')}}</small></label>
				@endif
				<input type="password" class="form-control" placeholder="Password" name="password">
				@if($errors->first('password'))	
				<label><small class="label label-danger">{{ $errors->first('password')}}</small></label>
				@endif

				<label class="checkbox">
					<input type="checkbox" value="remember_me" name="remember_me"> Remember me
				</label>
				{!! Form::submit('Sign In', array('class'=>'btn btn-primary btn-block')) !!}
			</div>
		{!! Form::close() !!}
	</div>	
	@include('admin.theme.partials.script')

	@if (Session::has('success'))
  	<script>
  		toastr.success(" {!! Session::get('success') !!} ")
  	</script>
  	@endif

  	@if (Session::has('error'))
  	<script>
  		toastr.error(" {!! Session::get('error') !!} ")
  	</script>
  	@endif
</body>
</html>
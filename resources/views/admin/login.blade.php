<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	{!! Html::style('assets/Director-free/css/bootstrap.min.css') !!}
	{!! Html::style('assets/css/vendor/toastr.css') !!}
	{!! Html::script('assets/Director-free/js/jquery.min.js') !!}
	{!! Html::script('assets/js/vendor/toastr.js') !!}
	<style>
		body {
			background: #eee !important;
		}

		.wrapper {
			margin-top: 100px;
			margin-bottom: 80px;
		}

		.form-signin {
			max-width: 380px;
			padding: 15px 35px 45px;
			margin: 0 auto;
			background-color: #fff;
			border: 1px solid rgba(0, 0, 0, 0.1);
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="wrapper">
				{!! Form::open(['route'=>'admin.post.login', 'class'=>'form-signin']) !!}
					<h2 class="lead text-muted">Login</h2>
					{!! Form::mail('email', 'E-mail') !!}
					@if($errors->first('email'))
					<p class="text-danger">{{$errors->first('email')}}</p>
					@endif
					{!! Form::pwd('password', 'Password') !!}
					@if($errors->first('email'))
					<p class="text-danger">{{$errors->first('password')}}</p>
					@endif
					{!! Form::chkbox('remember_me', 'Remember me') !!}
					{!! Form::submit('SIGN IN', array('class'=>'btn btn-default btn-block')) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>	
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
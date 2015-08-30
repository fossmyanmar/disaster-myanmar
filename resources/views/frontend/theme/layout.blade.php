<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<link rel="shortcut icon" href="img/favicon.png">
	<title>Myanmar Disaster | {{ isset($title) ? $title : 'Home'}}</title>
	@include('frontend.theme.partials.style')
</head>
<body>
	@include('frontend.theme.partials.header')
	@if(Route::current()->getName() != 'frontend.index')
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-4">
				<h1>{{ $title }}</h1>
				</div>
				<div class="col-lg-8 col-sm-8">
					@yield('breadcrumbs')
				</div>
			</div>
		</div>
	</div>
	@endif
	
	@yield('content')
	

	@include('frontend.theme.partials.footer')
	@include('frontend.theme.partials.script')
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
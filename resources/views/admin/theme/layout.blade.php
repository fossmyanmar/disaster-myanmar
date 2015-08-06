<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Myanmar Disaster</title>
	@include('admin.theme.partials.style')
</head>
<body>
	<section id="container">
		@include('admin.theme.partials.header')
		@include('admin.theme.partials.sidebar')
		<section id="main-content">
			<section class="wrapper">
				<div class="row">
					<div class="col-lg-12">
						@yield('breadcrumbs')
					</div>
				</div>
				@yield('content')
			</section>
		</section>
	</section>
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
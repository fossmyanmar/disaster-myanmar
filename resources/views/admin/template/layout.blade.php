<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Poutkaya | Dashboard</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<meta name="description" content="Developed By M Abdur Rokib Promy">
	<meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
	@include('admin.template.partials.style')
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
  </head>
  <body class="skin-black">
  	@include('admin.template.partials.header')
  	<div class="wrapper row-offcanvas row-offcanvas-left">
  		@include('admin.template.partials.sidebar')
  		<aside class="right-side">
  			<!-- Main content -->
  			<section class="content">
  				<div class="row">
  					<div class="col-md-12">
  						@yield('breadcrumbs')
  					</div>
  				</div>
  				<div class="row">
  					<div class="col-md-12">
  						<section class="panel">
  							<div class="panel-body">
  								@yield('content')
  							</div>
  						</section>
  					</div>
  				</div>
  			</section><!-- /.content -->
  			@include('admin.template.partials.footer')
  		</aside><!-- /.right-side -->
  	</div><!-- ./wrapper -->
  	@include('admin.template.partials.script')
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
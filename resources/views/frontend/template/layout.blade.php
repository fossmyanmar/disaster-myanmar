<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Myanmar Flood</title>
	@include('frontend.template.partials.style')
</head>
<body>
	@include('frontend.template.partials.header')
	<div class="container">
		@yield('content')
	</div>

	@include('frontend.template.partials.script')
</body>
</html>
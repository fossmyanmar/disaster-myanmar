<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Myanmar Flood</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href='http://mmwebfonts.comquas.com/fonts/?font=padauk' />
	{!! Html::style('assets/frontend/style.css') !!}
</head>
<body>
	@include('frontend.template.partials.header')
	<div class="container">
		@yield('content')
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		(function($){
			$(document).ready(function(){
				$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
					event.preventDefault(); 
					event.stopPropagation(); 
					$(this).parent().siblings().removeClass('open');
					$(this).parent().toggleClass('open');
				});
			});
		})(jQuery);
	</script>
</body>
</html>
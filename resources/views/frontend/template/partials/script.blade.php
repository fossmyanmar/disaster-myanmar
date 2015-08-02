<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
{!! Html::script('assets/js/vendor/gmap3.min.js') !!}
	
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


@yield('script')
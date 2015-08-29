<!-- js placed at the end of the document so the pages load faster -->
{!! Html::script('assets/js/vendor/jquery.js') !!}
{!! Html::script('assets/js/vendor/bootstrap.js') !!}
{!! Html::script('assets/theme/js/hover-dropdown.js') !!}
{!! Html::script('assets/theme/js/jquery.flexslider.js') !!}
{!! Html::script('assets/theme/assets/bxslider/jquery.bxslider.js') !!}
{!! Html::script('assets/theme/js/jquery.parallax-1.1.3.js') !!}
{!! Html::script('assets/theme/js/jquery.easing.min.js') !!}
{!! Html::script('assets/theme/js/link-hover.js') !!}
{!! Html::script('assets/theme/assets/fancybox/source/jquery.fancybox.pack.js') !!}
{!! Html::script('assets/theme/assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js') !!}
{!! Html::script('assets/theme/assets/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js') !!}
{!! Html::script('assets/admin-theme/toastr/toastr.min.js') !!}
{!! Html::script('assets/theme/js/common-scripts.js') !!}
{!! Html::script('assets/theme/js/revulation-slide.js') !!}

{{-- 
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    --}}
    
    <script>
    	RevSlide.initRevolutionSlider();
    	$(window).load(function() {
    		$('[data-zlname = reverse-effect]').mateHover({
    			position: 'y-reverse',
    			overlayStyle: 'rolling',
    			overlayBg: '#fff',
    			overlayOpacity: 0.7,
    			overlayEasing: 'easeOutCirc',
    			rollingPosition: 'top',
    			popupEasing: 'easeOutBack',
    			popup2Easing: 'easeOutBack'
    		});
    	});
    	$(window).load(function() {
    		$('.flexslider').flexslider({
    			animation: "slide",
    			start: function(slider) {
    				$('body').removeClass('loading');
    			}
    		});
    	});
      //    fancybox
      jQuery(".fancybox").fancybox();
  </script>
{!! Html::script('assets/admin-theme/jquery/jquery.js') !!}
{!! Html::script('assets/admin-theme/bootstrap/bootstrap.min.js') !!}
{!! Html::script('assets/admin-theme/toastr/toastr.min.js') !!}
{!! Html::script('assets/admin-theme/jquery/jquery.dcjqaccordion.2.7.js') !!}
{!! Html::script('assets/admin-theme/jquery/jquery.scrollTo.min.js') !!}
{!! Html::script('assets/admin-theme/jquery/jquery.nicescroll.js') !!}

{!! Html::script('assets/admin-theme/slidebars.min.js') !!}
{!! Html::script('assets/admin-theme/common-scripts.js') !!}

<script type="text/javascript">
	$(document).ready(function(){
		$(".list-delete").tooltip({placement : 'top', title : 'Delete'});
		$(".list-update").tooltip({placement : 'top', title : 'Update'});
		$(".list-view").tooltip({placement : 'top', title : 'Detail'});
	});
</script>
@yield('js')




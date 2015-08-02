@extends('frontend.template.layout')

@section('content')
<div class="row">
	<div class="col-md-12">
		<p class="lead">June 2015 Flood Maps</p>
		<div id="map">
			
		</div>
	</div>
</div>
@stop

@section('script')
	<script type="text/javascript">
	$('#map').gmap3({
		 map:{
		    options:{
		     center: [16.8496403,96.12921519999999],
		     zoom: 20
		    }
		 },
		 marker:{
		    latLng:[16.8496403,96.12921519999999]
		 }
		});
	</script>
@stop
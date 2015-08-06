@extends('admin.theme.layout')

@section('content')
<div class="row state-overview">
	<div class="col-lg-3 col-sm-6">
		<section class="panel">
			<div class="symbol red">
				<i class="fa fa-clock-o"></i>
			</div>
			<div class="value">
				<h1 class="count">120</h1>
				<p>Current Disaster</p>
			</div>
		</section>
	</div>
	
	<div class="col-lg-3 col-sm-6">
		<section class="panel">
			<div class="symbol terques">
				<i class="fa fa-group"></i>
			</div>
			<div class="value">
				<h1 class="count">120</h1>
				<p>NGO</p>
			</div>
		</section>
	</div>
	<div class="col-lg-3 col-sm-6">
		<section class="panel">
			<div class="symbol yellow">
				<i class="fa fa-globe"></i>
			</div>
			<div class="value">
				<h1 class="count">120</h1>
				<p>Locations</p>
			</div>
		</section>
	</div>
	<div class="col-lg-3 col-sm-6">
		<section class="panel">
			<div class="symbol blue">
				<i class="fa fa-bar-chart-o"></i>
			</div>
			<div class="value">
				<h1 class="count">120</h1>
				<p>Some Caption</p>
			</div>
		</section>
	</div>
</div>
@stop
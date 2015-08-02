<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{!! URL::route('frontend.index') !!}">Myanmar DIASTERS</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">FLOODS <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Testing</a>
							<ul class="dropdown-menu">
								<li><a href="{!! URL::route('frontend.donation.group') !!}">Donation Groups</a></li>
								<li><a href="{!! URL::route('frontend.news') !!}">News</a></li>
								<li><a href="{!! URL::route('frontend.addinfo') !!}">Add Information</a></li>
								<li><a href="{!! URL::route('frontend.map') !!}">Map</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">EARTHQUAKE<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Test Data</a>
							<ul class="dropdown-menu">
								<li><a href="{!! URL::route('frontend.donation.group') !!}">Donation Groups</a></li>
								<li><a href="{!! URL::route('frontend.news') !!}">News</a></li>
								<li><a href="{!! URL::route('frontend.addinfo') !!}">Add Information</a></li>
								<li><a href="{!! URL::route('frontend.map') !!}">Map</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="{!! URL::route('frontend.submit.information}">SUBMIT INFORMATION</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
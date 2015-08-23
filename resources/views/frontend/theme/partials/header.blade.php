<!--header start-->
<header class="header-frontend">
	<div class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">Myanmar <span>Disaster</span></a>
			</div>
			<div class="navbar-collapse collapse ">
				<ul class="nav navbar-nav">
					<li class="active"><a href="{!! URL::route('frontend.index') !!}">Home</a></li>
					
					<li class="dropdown ">
						<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">NGOs <b class=" icon-angle-down"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{!! URL::route('ngo.register') !!}">Register NGO</a></li>
							<li><a href="{!! URL::route('ngo.login') !!}">Login</a></li>
							<li><a href="{!! URL::route('donation.add')!!}">Add Your Donation</a></li>
						</ul>
					</li>
					<li><a href="#">News</a></li>
					<li><a href="#">Alert</a></li>
					<li><a href="#">How this website work?</a></li>
					<li><input type="text" placeholder=" Search" class="form-control search"></li>
				</ul>
			</div>
		</div>
	</div>
</header>
    <!--header end-->
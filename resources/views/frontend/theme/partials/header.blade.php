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
					<li class="active"><a href="{!! URL::route('frontend.index') !!}"><i class="fa fa-home"></i> Home</a></li>
					
					<li class="dropdown ">
						<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-users"></i> NGOs <b class=" icon-angle-down"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{!! URL::route('ngo.register') !!}"><i class="fa fa-pencil"></i> Register NGO</a></li>
							<li><a href="{!! URL::route('ngo.login') !!}"><i class="fa fa-sign-in"></i> Login</a></li>
							<li><a href="{!! URL::route('donation.add')!!}"><i class="fa fa-archive"></i> Add Your Donation</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="fa fa-file-text-o"></i> News</a></li>
					<li><a href="#"><i class="fa fa-bullhorn"></i> Alert</a></li>
					<li><a href="#"><i class="fa fa-question-circle"></i> How this website work?</a></li>
					<li><input type="text" placeholder=" Search" class="form-control search"></li>
				</ul>
			</div>
		</div>
	</div>
</header>
    <!--header end-->
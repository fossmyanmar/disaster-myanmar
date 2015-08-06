<header class="header white-bg">
	<div class="sidebar-toggle-box">
		<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
	</div>
	<a href="{!! URL::route('admin.index') !!}" class="logo">Myanmar <span>Disaster</span></a>
	
	<div class="top-nav ">
		<ul class="nav pull-right top-menu">
			<li>
				<input type="text" class="form-control search" placeholder="Search">
			</li>
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
					<i class="fa fa-user"></i>
					<span class="username"> 
						@if(Auth::check())
						{{ Auth::user()->name }}
						@else 
						Account
						@endif
					</span>
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu extended logout">
					<div class="log-arrow-up"></div>
					<li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
					<li><a href="{!! URL::route('admin.setting') !!}"><i class="fa fa-cog"></i> Settings</a></li>
					<li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
					<li><a href="{!! URL::route('admin.logout') !!}"><i class="fa fa-key"></i> Log Out</a></li>
				</ul>
			</li>
			<li class="sb-toggle-right ">
				<i class="fa fa-align-right"></i>
			</li>		
		</ul>
	</div>
</header>
<!--header end-->
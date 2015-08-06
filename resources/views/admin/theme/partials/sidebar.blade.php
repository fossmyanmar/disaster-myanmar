<aside>
	<div id="sidebar"  class="nav-collapse ">
		<ul class="sidebar-menu" id="nav-accordion" style="display: block;">
			<li>
				<a href="#" target="_blank">
					<i class="fa fa-desktop"></i>
					<span>View Website</span>
				</a>
			</li>
			<li>
				<a href="{!! URL::route('admin.index') !!}">
					<i class="fa fa-dashboard"></i>
					<span>Dashboard</span>
				</a>
			</li>		

			<li class="sub-menu">
				<a href="javascript:;">
					<i class="fa fa-globe"></i>
					<span>Locations</span>
					<span class="dcjq-icon"></span>
				</a>
				<ul class="sub" style="display: block;">
					<li>
						<a href="{!! URL::route('states.index') !!}">
							<span>States</span>
						</a>
					</li>
					<li>
						<a href="{!! URL::route('cities.index') !!}">
							<span>Cities</span>
						</a>
					</li>
					<li>
						<a href="{!! URL::route('villages.index') !!}">
							<span>Villages</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="{!! URL::route('ngos.index') !!}">
					<i class="fa fa-group"></i>
					<span>NGO</span>
				</a>
			</li>				
		</ul>
	</div>
</aside>
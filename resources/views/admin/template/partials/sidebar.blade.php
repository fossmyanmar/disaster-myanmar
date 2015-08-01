<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				{!! Html::image('assets/img/avatar.png', 'User Image', ['class'=>'img-circle', 'width'=>'50']) !!}</p>
			</div>
			<div class="pull-left info">
				<p>{!! Html::image('assets/img/mingalar.png', '', ['class'=>'img', 'width'=>'50']) !!}</p>
				
				@if(Auth::check())
				<p>{{ Auth::user()->name }}</p>
				@endif
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search..."/>
				<span class="input-group-btn">
					<button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="active">
				<a href="{!! URL::route('admin.index') !!}">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
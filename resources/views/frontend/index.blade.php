@extends('frontend.theme.layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<h3><i class="fa fa-file-text-o"></i> Latest News</h3>
			<hr>
			<div class="blog-item">
				<h4><a href="blog_detail.html">Suspendisse dignissim in sem eget pulvinar. Mauris. </a></h4>
				<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,</p>
				<a href="blog_detail.html" class="btn btn-sm btn-default">Continue Reading</a>
			</div>
			<div class="blog-item">
				<h4><a href="blog_detail.html">Suspendisse dignissim in sem eget pulvinar. Mauris. </a></h4>
				<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,</p>
				<a href="blog_detail.html" class="btn btn-sm btn-default">Continue Reading</a>
			</div>
			<div class="blog-item">
				<h4><a href="blog_detail.html">Suspendisse dignissim in sem eget pulvinar. Mauris. </a></h4>
				<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,</p>
				<a href="blog_detail.html" class="btn btn-sm btn-default">Continue Reading</a>
			</div>
		</div>
		<div class="col-md-5">
			<h3><i class="fa fa-bullhorn"></i> Alert</h3>
			<hr>
			<div class="about-testimonial boxed-style about-flexslider ">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides about-flex-slides">
							<li>
								<a class="about-testimonial-author" href="#">Ericson Reagan</a>
								<span class="about-testimonial-company">ABC Realestate LLC</span>
								<div class="about-testimonial-content">
									<p class="about-testimonial-quote">
										Pellentesque et pulvinar enim. Quisque at tempor ligula. Maecenas augue ante, euismod vitae egestas sit amet, accumsan eu nulla. Nullam tempor lectus a ligula lobortis pretium. Donec ut purus sed tortor malesuada venenatis eget eget lorem.
									</p>
								</div>
							</li>
							<li>
								{{-- <div class="about-testimonial-image ">
									<img alt="" src="img/avatar2.jpg">
								</div> --}}
								<a class="about-testimonial-author" href="#">Jonathan Smith</a>
								<span class="about-testimonial-company">DEF LLC</span>
								<div class="about-testimonial-content">
									<p class="about-testimonial-quote">
										Pellentesque et pulvinar enim. Quisque at tempor ligula. Maecenas augue ante, euismod vitae egestas sit amet, accumsan eu nulla. Nullam tempor lectus a ligula lobortis pretium. Donec ut purus sed tortor malesuada venenatis eget eget lorem.
									</p>
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
			
			<h3><i class="fa fa-microphone"></i> Help Needed</h3>
			<hr>
			<div>
				<h4><a href="#">Suspendisse dignissim in sem </a></h4>
				<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets..</p>
			</div>
			<div>
				<h4><a href="#">Suspendisse dignissim in sem </a></h4>
				<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets..</p>
			</div>
			<div>
				<h4><a href="#">Suspendisse dignissim in sem </a></h4>
				<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets..</p>
			</div>
		</div>
	</div>
</div>
<div class="gray-box mbot50">
	<div class="container">
		<div class="row">
			<div class="text-center feature-head">
				<h1> NGO List </h1>
				<p>Aenean nibh ante, lacinia non tincidunt nec, lobortis ut tellus. Sed in porta diam.</p>
			</div>
			<div class="col-md-4">
				<div class="pricing-table">
					<div class="pricing-head">
						<p>OVDR4MM </p>
					</div>
					<ul class="list-unstyled">
						<li><i class="fa fa-phone"></i> 09421308127</li>
						<li>
							<p><i class="fa fa-map-signs"></i> Address </p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  
						</li>
					</ul>
					<div class="price-actions">
						<a href="#" class="btn btn-xs"><i class="fa fa-search"></i> Detail</a>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="pricing-table">
					<div class="pricing-head">
						<p>Wai Lu Kyaw Foundation </p>
					</div>
					<ul class="list-unstyled">
						<li><i class="fa fa-phone"></i> 09421308127</li>
						<li>
							<p><i class="fa fa-map-signs"></i> Address </p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  
						</li>
					</ul>
					<div class="price-actions">
						<a href="#" class="btn btn-xs"><i class="fa fa-search"></i> Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
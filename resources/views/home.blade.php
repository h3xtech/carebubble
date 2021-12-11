@extends('layouts.crm')

@section('content')
<style type="text/css">
.carousel {
	margin: 0px auto;
	padding: 0 70px;
  max-width: 750px;
}
.carousel .item {
	min-height: 330px;
    text-align: center;
	overflow: hidden;
}
.carousel .item .img-box {
	height: 160px;
	width: 100%;
	position: relative;
}
.carousel .item img {
	max-width: 100%;
	max-height: 100%;
	display: inline-block;
	position: absolute;
	bottom: 0;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.carousel .item h4 {
	font-size: 18px;
	margin: 10px 0;
}
.carousel .item .btn {
	color: #333;
    border-radius: 0;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    border: 1px solid #ccc;
    padding: 5px 10px;
    margin-top: 5px;
    line-height: 16px;
}
.carousel .item .btn:hover, .carousel .item .btn:focus {
	color: #fff;
	background: #000;
	border-color: #000;
	box-shadow: none;
}
.carousel .item .btn i {
	font-size: 14px;
    font-weight: bold;
    margin-left: 5px;
}
.carousel .thumb-wrapper {
	text-align: center;
}
.carousel .thumb-content {
	padding: 15px;
}
.carousel .carousel-control {
	height: 100px;
    width: 40px;
    background: none;
    margin: auto 0;
    background: rgba(0, 0, 0, 0.2);
}
.carousel .carousel-control i {
    font-size: 30px;
    position: absolute;
    top: 50%;
    display: inline-block;
    margin: -16px 0 0 0;
    z-index: 5;
    left: 0;
    right: 0;
    color: rgba(0, 0, 0, 0.8);
    text-shadow: none;
    font-weight: bold;
}
.carousel .item-price {
	font-size: 13px;
	padding: 2px 0;
}
.carousel .item-price strike {
	color: #999;
	margin-right: 5px;
}
.carousel .item-price span {
	color: #86bd57;
	font-size: 110%;
}
.carousel .carousel-control.left i {
	margin-left: -3px;
}
.carousel .carousel-control.left i {
	margin-right: -3px;
}
.carousel .carousel-indicators {
	bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 4px;
	border-radius: 50%;
	border-color: transparent;
}
.carousel-indicators li {
	background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {
	background: rgba(0, 0, 0, 0.6);
}
.star-rating li {
	padding: 0;
}
.star-rating i {
	font-size: 14px;
	color: #ffc000;
}
</style>
<!--
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<center>
				<div class="col-md-8">
					<h2>Next <b>Steps</b></h2>
					<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item carousel-item active">
							<div class="row">
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Step one</h4>
											<p class="item-price">Await your UDID Confirmation email</p>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Step Two</h4>
											<p class="item-price">Download the Reciever App</p>
											<a href="/downlads/reciever/latest" target="_blank"><button class="btn btn-primary" style="background:url('https://developer.apple.com/app-store/marketing/guidelines/images/badge-example-preferred_2x.png'); background-size:cover; width:100px; height:35px;">&nbsp;</button></a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Step Three</h4>
											<p class="item-price">Onboard your first Patient</p>
											<a href="#" class="btn btn-primary">Click Here</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Step Four</h4>
											<p class="item-price">Send the reciever app to patient</p>
											<a href="#" class="btn btn-primary">Click Here</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item carousel-item">
							<div class="row">
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Sony Play Station</h4>
											<p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
											<a href="#" class="btn btn-primary">Add to Cart</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Macbook Pro</h4>
											<p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
											<a href="#" class="btn btn-primary">Add to Cart</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Bose Speaker</h4>
											<p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
											<a href="#" class="btn btn-primary">Add to Cart</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Samsung Galaxy S8</h4>
											<p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
											<a href="#" class="btn btn-primary">Add to Cart</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item carousel-item">
							<div class="row">
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Apple iPhone</h4>
											<p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">Add to Cart</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Canon DSLR</h4>
											<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">Add to Cart</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Google Pixel</h4>
											<p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">Add to Cart</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Apple Watch</h4>
											<p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">Add to Cart</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				</div>
			</center>
		</div>
	</div>
</div>
-->

<div class="container">
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
		<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
					  <div class="panel-body">
							<?php $message = \App\Section::find(0);?>
							<h2>{{$message->title}}</h2>
							<p>Hi again {{Auth::user()->name}}, {!!$message->content!!}</p>
							<!--
							<p>You can now download the Care Giver App below</p>
							<a href="https://bit.ly/2XPewyO">https://bit.ly/2XPewyO</a>
							<small>You will need to log in using the following link</small>
							<small><a href="carebubble://loadUser?{{Auth::user()->id}}">carebubble://loadUser?{{Auth::user()->id}}</a></small>
							<hr>
							<p>You can also send your Patient this link to download</p>
							<a href="https://bit.ly/3oXnA0y">https://bit.ly/3oXnA0y</a>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							-->
							<?php if(!isset($admin)){$admin = "";}?>
							<div class="panel-footer">{!!$admin!!}</div>
							<div class="panel-footer"><a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a></div>
						</div>
					</div>
				</div>
		</div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
@endsection

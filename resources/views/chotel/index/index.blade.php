<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>CHotel | Da Nang</title>
<link rel="shortcut icon" type="image/ico" href="/resources/assets/templates/chotel/images/s4.jpg" />
<link href="/resources/assets/templates/chotel/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="/resources/assets/templates/chotel/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!-- <link href="/resources/assets/templates/chotel/css/font-awesome.css" rel="stylesheet"> -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<script src="/resources/assets/templates/chotel/js/jquery.min.js"></script>
<script src="/resources/assets/templates/chotel/js/bootstrap.min.js"></script>
<!---->
<link rel="stylesheet" href="/resources/assets/templates/chotel/css/flexslider.css" type="text/css" media="screen" />
<link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!---strat-date-piker---->
<!-- requried-jsfiles-for owl -->
<link href="/resources/assets/templates/chotel/css/owl.carousel.css" rel="stylesheet">
<script src="/resources/assets/templates/chotel/js/owl.carousel.js"></script>
    <script>
	    $(document).ready(function() {
	      $("#owl-demo").owlCarousel({
	        items : 1,
	        lazyLoad : true,
	        autoPlay : true,
	        navigation : false,
	        navigationText :  false,
	        pagination : true,
	      });
	    });
    </script>
<!-- //requried-jsfiles-for owl -->

</head>
<body>
	<div class="banner-section">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="slider-info">
							<img src="/resources/assets/templates/chotel/images/ba1.jpg" class="img-responsive" alt="">
						</div>
						<div class="container">
							<div class="banner-text">
								<h3>Outdoor & Indoor Luxury</h3>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-info">
							<img src="/resources/assets/templates/chotel/images/ba2.jpg" class="img-responsive" alt="">
						</div>
						<div class="container">
							<div class="banner-text">
								<h3>Luxury & Oriental Harmony</h3>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-info">
							<img src="/resources/assets/templates/chotel/images/ba3.jpg" class="img-responsive" alt="">
						</div>
						<div class="container">
							<div class="banner-text">
								<h3>A Brand New Hotel</h3>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
			<!-- FlexSlider -->
			<script defer src="/resources/assets/templates/chotel/js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(function(){
						SyntaxHighlighter.all();
					});
					$(window).load(function(){
					$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
					});
					});
				</script>
			<!-- FlexSlider -->
			<!-- slider -->
	</div>
    <div class="header">
		<div class="container">
			<div class="header-menu">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <div class="navbar-brand logo">
								<h1><a href="{{ route('chotel.index.index') }}"><span>CHotel</span></a></h1>
							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						   <ul class="nav navbar-nav">
							<li class="active"><a href="{{ route('chotel.index.index') }}" data-hover="Home">Trang chủ</a></li>
							<li><a href="{{ route('chotel.about.index') }}" data-hover="About">Giới thiệu</a></li>
							<li><a data-hover="Rooms" href="{{ route('chotel.room.index') }}">Các phòng</a></li>
							 <li><a data-hover="Contact" href="{{ route('chotel.contact.index') }}">Liên hệ</a></li>
							 
						  </ul>
						</div>
						<!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			<div class="clearfix"></div>
			</div>	
		</div> 
	</div>
		<!---header--->		
		<div class="content">
			<!---welcome--->
			<div class="welcome">
				<div class="container">
					<h2 class="tittle">Welcome To CHotel</h2>
						<p class="wel text">CHÀO MỪNG CÁC BẠN ĐẾN VỚI CHOTEL-MỘT TRONG NHỮNG KHÁCH SẠN SANG TRỌNG BẬT NHẤT ĐÀ NẴNG VỚI NHIỀU TIỆN ÍCH,DỊCH VỤ ĐẲNG CẤP.</p>
					<div class="wel-grids">
						@foreach ($objItems as $objItem)
							@php
								$id = $objItem->rid;
								$slug = str_slug($objItem->rname);
								$preview_text = str_limit($objItem->description, '135');
								$urlImg = '/storage/app/files/'.$objItem->picture;
							@endphp
							<div class="col-md-3 wel-grid">
								<a href="{{ route('chotel.room.detail', ['slug' => $slug, 'id' => $id]) }}"><img src="{{ $urlImg }}" class="img-responsive gray" alt=""/></a>
								<a href="{{ route('chotel.room.detail', ['slug' => $slug, 'id' => $id]) }}"><h4>{{ $objItem->rname }}</h4></a>
								<p style="color: #1288C3">Tien ich: {{ $objItem->uname }}</p>
								<p>{{ $preview_text }}</p>
							</div>
						@endforeach
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!---welcome--->
			<div class="resort-section">
				<div class="container">
					<h3 class="tittle"><span>Dịch vụ mới nhất của CHotel</span></h3>
					<div class="resort-grids">
				<!-- start content_slider -->
						<div id="owl-demo" class="owl-carousel">
					    @foreach ($objItems as $objItem)  
					    	@php
								$id = $objItem->rid;
								$slug = str_slug($objItem->rname);
								$preview_text = str_limit($objItem->description, '135');
								$urlImg = '/storage/app/files/'.$objItem->picture;
							@endphp 
					        <div class="item">
					           <div class="col-md-6 cap-img">
									<a href="{{ route('chotel.room.detail', ['slug' => $slug, 'id' => $id]) }}"><img src="{{ $urlImg }}" class="img-responsive gray" alt=""/>
									</a>
								</div>
								<div class="col-md-6 cap">
									<a href="{{ route('chotel.room.detail', ['slug' => $slug, 'id' => $id]) }}""><h4>{{ $objItem->rname }}</h4></a>	
									<ul class="cap1">
										<li><i class="glyphicon glyphicon-map-marker"></i> 154 Phạm Như Xương-Liên Chiểu-Đà Nẵng</li>
										<li><i class="glyphicon glyphicon-plane"></i> VN Airlines</li>
										<li><i class="glyphicon glyphicon-road"></i> Free Transport</li>
									</ul>										
									<p>{{ $preview_text }}</p>
									<div class="detais">
										<div class="col-md-9 deatils-left">
											<div class="list">
												<ul>
													<li>
														<i class="glyphicon glyphicon-thumbs-up"></i> Free Private Parking is Available
													</li>
													<li>
														<i class="glyphicon glyphicon-cutlery"></i> Tiện ích: {{ $objItem->uname }}
													</li>
													<li>
														<i class="glyphicon glyphicon-signal"></i> Loại phòng: {{ $objItem->tname }}
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-3 deatils-right">
											<div class="detail-top">
												<span>PER NIGHT</span>
												<h4>${{ $objItem->cost }}</h4>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
					            <div class="clearfix"> </div>
					        </div>
						@endforeach
				        </div>
					</div>
				</div>
			</div>
			<div class="superlist">
				<div class="container">
					<h3 class="tittle">MANG ĐẾN NHỮNG GIÁ TRỊ MỚI</h3>
					<p class="wel text">
						<img src="/resources/assets/templates/chotel/images/images.jpg">
					</p>
					<div class="super-grids">
						<div class="col-md-8 super-grid">
							<div class="super-top">
							<img src="/resources/assets/templates/chotel/images/s1.jpg" class="img-responsive gray" alt=""/>
							</div>
							<div class="super-bottom">
								<div class="col-md-6 super-left">
								<img src="/resources/assets/templates/chotel/images/s2.jpg" class="img-responsive gray" alt=""/>
								</div>
								<div class="col-md-6 super-right">
								<img src="/resources/assets/templates/chotel/images/s3.jpg" class="img-responsive gray" alt=""/>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-4 super-grid1">
							<div class="super-top">
								<img src="/resources/assets/templates/chotel/images/s4.jpg" class="img-responsive gray" alt=""/>
									<h4>Luxury CHotel</h4>
									<p>Với nhiều dịch vụ,tiện ích mang đẳng cấp quốc tế,xứng danh là khách sạn hàng đầu bậc nhất Đà Thành.</p>
							</div>
						</div>
							<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
@include('templates.chotel.footer')	
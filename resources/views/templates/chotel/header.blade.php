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
<link href="/resources/assets/templates/chotel/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/resources/assets/templates/chotel/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="/resources/assets/templates/chotel/css/style.css" rel="stylesheet" type="text/css" media="all" />	
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
<script src="/resources/assets/templates/chotel/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="/resources/assets/templates/chotel/css/font-awesome.min.css">  -->
<!---->
<script type="text/javascript" src="/resources/assets/templates/chotel/js/numscroller-1.0.js"></script>
<link rel="stylesheet" href="/resources/assets/templates/chotel/css/flexslider.css" type="text/css" media="screen" />
<link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/ico" href="/resources/assets/templates/chotel/images/s4.jpg" />
</head>
<body>
<div class="banner">
		
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
							<h1><a href="{{ route('chotel.index.index') }}"><span>Chotel</span></a></h1>
							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						   <ul class="nav navbar-nav">
							<li class="{{ route::currentRouteName() == 'chotel.index.index' ? 'active' : '' }}"><a href="{{ route('chotel.index.index') }}" data-hover="Home">Trang chủ</a></li>
							<li class="{{ route::currentRouteName() == 'chotel.about.index' ? 'active' : '' }}"><a href="{{ route('chotel.about.index') }}" data-hover="About">Giới thiệu</a></li>
							<li class="{{ route::currentRouteName() == 'chotel.room.index' ? 'active' : '' }}"><a data-hover="Rooms" href="{{ route('chotel.room.index') }}">Các phòng</a></li>
							 <li class="{{ route::currentRouteName() == 'chotel.contact.index' ? 'active' : '' }}"><a data-hover="Contact" href="{{ route('chotel.contact.index') }}">Liên hệ</a></li>
							 
						  </ul>
						</div>
						<!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			<div class="clearfix"></div>
			</div>	
		</div> 
	</div>
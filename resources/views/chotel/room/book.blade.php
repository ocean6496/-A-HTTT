
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Classy Hotel Booking Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classy Hotel Booking Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- js -->
<script src="/resources/assets/templates/book/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<!-- //js -->
<link href="/resources/assets/templates/book/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/ico" href="/resources/assets/templates/chotel/images/s4.jpg" />
</head>
<body>
	<div class="main">
		<h1 class="w3layouts_head">CHotel Booking Widget</h1>
		<div class="w3layouts_main_grid">
			<form action="{{ route('chotel.room.book', $id) }}" method="post" autocomplete="off" class="w3_form_post">
				{{ csrf_field() }}
				<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">
						<h5>Name * </h5>
						<div class="nam">
							<input type="text" name="firstname" placeholder="First Name" required="">
						</div>
						@if ($errors->any())
                            <h4 style="color: red">{{ $errors->first('firstname') }}</h4>
                        @endif
						<div class="nam1">
							<input type="text" name="lastname" placeholder="Last Name" required="">
						</div>
						@if ($errors->any())
                            <h4 style="color: red">{{ $errors->first('lastname') }}</h4>
                        @endif
						<div class="clear"></div>
					</div>
				</div>
				<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">
						<h5>Verify * </h5>
						<div class="nam">
							<input type="text" name="idcard" placeholder="Identity Card" required="">
						</div>
						@if ($errors->any())
                            <h4 style="color: red">{{ $errors->first('idcard') }}</h4>
                        @endif
						<div class="nam1">
							<input type="text" name="phone" placeholder="Phone" required="">
						</div>
						@if ($errors->any())
                            <h4 style="color: red">{{ $errors->first('phone') }}</h4>
                        @endif
						<div class="clear"></div>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Check In *</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input class="date" id="datepicker" name="check_in" type="text" value="yyyy-mm-dd" onfocus="this.value = '';"  required="">
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Check Out *</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input class="date" id="datepicker1" name="check_out" type="text" value="yyyy-mm-dd" onfocus="this.value = '';" required="">
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				@if (Session::has('msg'))
					<h4 style="color: red; text-align: center">{{ Session::get('msg') }}</h4>
				@endif
				<div class="w3_main_grid">
					<button style="padding: 9px;background: #FBB884"><a href="{{ route('chotel.index.index') }}">Back Home</a></button>
					<div class="w3_main_grid_right">
						<input type="submit" value="Book Now">
					</div>
					<div class="clear"> </div>
				</div>
			</form>
		</div>
		<!-- Calendar -->
			<link rel="stylesheet" href="/resources/assets/templates/book/css/jquery-ui.css" />
			<script src="/resources/assets/templates/book/js/jquery-ui.js"></script>
			  <script>
					  $(function() {
						$( "#datepicker,#datepicker1" ).datepicker({
						    dateFormat: 'yy-mm-dd'
						});
					  });
			  </script>
		<!-- //Calendar -->
		<div class="agileits_copyright">
			<p>© 2018 CHotel Booking Widget. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="/resources/assets/templates/login/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="/resources/assets/templates/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/resources/assets/templates/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/resources/assets/templates/login/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="/resources/assets/templates/login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="/resources/assets/templates/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="/resources/assets/templates/login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="/resources/assets/templates/login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="/resources/assets/templates/login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="/resources/assets/templates/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="/resources/assets/templates/login/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/resources/assets/templates/login/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form action="{{ route('auth.auth.login') }}" method="POST" class="login100-form validate-form">
					{{ csrf_field() }}
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
						<!-- <input type="submit" name="submit" value="Login" class="login100-form-btn"> -->
					</div>
					@if (Session::has('msg'))
						<h5 style="color: red">{{ Session::get('msg') }}</h5>
					@endif
					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<script src="/resources/assets/templates/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="/resources/assets/templates/login/vendor/animsition/js/animsition.min.js"></script>
	<script src="/resources/assets/templates/login/vendor/bootstrap/js/popper.js"></script>
	<script src="/resources/assets/templates/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/resources/assets/templates/login/vendor/select2/select2.min.js"></script>
	<script src="/resources/assets/templates/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="/resources/assets/templates/login/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="/resources/assets/templates/login/vendor/countdowntime/countdowntime.js"></script>
	<script src="/resources/assets/templates/login/js/main.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('Login_v4/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{asset('Login_v4/images/bg01.jpg')}}');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
					<span class="login100-form-title p-b-49">
						Daftar
					</span>

					<!-- --- nama --- -->
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Nama depan harus diisi">
						    <span class="label-input100">{{ __('Name') }}</span>
                            <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						    <span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 m-b-23">
						<span class="label-input100">Nama Belakang</span>
						<input class="input100" type="text" name="lastname" placeholder="ketik nama belakang anda">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<!-- --- email --- -->
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email harus diisi">
						<span class="label-input100">{{ __('E-Mail Address') }}</span>
                            <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            	<strong>{{ $message }}</strong>
                            </span>
                            @enderror
						<span class="focus-input100" data-symbol="&#xf15a;"></span>
					</div>

					<!-- ---Password--- -->
					<div class="wrap-input100 validate-input m-b-23" data-validate="Kata sandi harus diisi">
						<span class="label-input100">Kata Sandi</span>
						<input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<!-- ---confirm pass--- -->
					<div class="wrap-input100 validate-input m-b-23" data-validate="Kata sandi harus diisi">
						    <span class="label-input100">Ulangi Password</span>
						        <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password">
                            <span class="focus-input100" data-symbol="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
                                    {{ __('Register') }}
                            </button>
						</div>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							anda sudah memiliki akun?
						</span>

						<a href="/signin" class="txt2">
							Masuk
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
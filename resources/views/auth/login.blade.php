<!DOCTYPE html>
<html lang="en">
<head>
	<title>	Inicio de Sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="loginRegister/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginRegister/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginRegister/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginRegister/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginRegister/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginRegister/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginRegister/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginRegister/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginRegister/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginRegister/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginRegister/css/main.css">
<!--===============================================================================================-->
</head>
<body>

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-t-15 p-b-30">
				<form method="POST" class="login100-form validate-form" action="{{ route('login') }}">
							@csrf
					<!-- Rotulo principal -->
					<span class="login100-form-title p-b-10">
						Inicio de Sesión
					</span>
					<!-- Rotulo de seccion -->
					<div class="text-center p-t-25 p-b-15">
						<span class="txt1">
							Iniciar Sesión
						</span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate="Por favor ingrese un correo electrónico: abc@example.com">

								<input class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
								<!-- Seccion si encuentra errores en la respuesta -->
								@if ($errors->has('email'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('email') }}</strong>
										</span>
								@endif
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-20" data-validate = "Por favor ingrese una contraseña ">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" id="password" placeholder="Password">
						@if ($errors->has('password'))
								<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('password') }}</strong>
								</span>
						@endif
						<span class="focus-input100"></span>
					</div>

					<div class="text-center">
							<div class="form-check">
									<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

									<label class="form-check-label" for="remember">
											{{ __('Recordar Contraseña') }}
									</label>
							</div>
			</div>

			@if (Route::has('password.request'))
				<a class="btn btn-link flex-col-c p-t-3" href="{{ route('password.request') }}">
						{{ __('¿Olvidaste tu contraseña?') }}
				</a>
			@endif
			<div class="container-login100-form-btn">
				<button class="login100-form-btn">
						{{ __('Iniciar Sesión') }}
				</button>
			</div>

			<div class="p-b-15 p-t-25">
				<a href="{{ route('social.auth', 'facebook') }}" class="btn-login-with bg1 m-b-5">
					<i class="fa fa-facebook-official"></i>
					Iniciar Sesión con Facebook
				</a>

				<a href="#" class="btn-login-with bg2">
					<i class="fa fa-twitter"></i>
					Iniciar Sesión con Twitter
				</a>
			</div>

			<div class="flex-col-c p-t-25">
				<span class="txt2 p-b-10">
					¿Todavía no tienes una cuenta?
				</span>

				<a href="{{ route('register') }}" class="txt3 bo1 hov1">
					!Regístrate ahora¡
				</a>
			</div>

			</div>
			</form>
		</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="loginRegister/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="loginRegister/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="loginRegister/vendor/bootstrap/js/popper.js"></script>
	<script src="loginRegister/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="loginRegister/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="loginRegister/vendor/daterangepicker/moment.min.js"></script>
	<script src="loginRegister/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="loginRegister/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="loginRegister/js/main.js"></script>

</body>
</html>

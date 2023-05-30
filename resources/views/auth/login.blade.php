@extends('layouts.app')

@section('content')
<br><br><br><br><br><br><br>
<!-- Bootstrap 5 CDN Link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #f1cf00">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body" style="background-color: #02826b">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection







{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="imagem/png" href="../public/images/Logom.png" />
    
    <title>mkesh</title>
	<!-- Bootstrap 5 CDN Link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS Link -->
	<link rel="stylesheet" href="style12.css">
</head>
<body class="bod">
    <section class="wrapper">
		<div class="container">
			<div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
				<!-- <div class="logo">
					<img src="images/mkesh.png" class="img-fluid" alt="Logo">
				</div> -->
				<form class="rounded bg-white shadow py-5 px-4">
					<img class="logs" src="images/mkesh.png" class="img-fluid mb-5" alt="Logo">
					<div class="form-floating mb-3 mt-5">
						<input type="email" class="form-control form-control-sm" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Digite seu email / nome do trabalhador</label>
					</div>
					<div class="form-floating">
						<input type="password" class="form-control form-control-sm" id="floatingPassword" placeholder="Password">
						<label for="floatingPassword">Senha</label>
					</div>
					<div class="mt-2 text-end">
						<a href="#" class="text-white fw-bold text-decoration-none">Esqueceu a password?</a>
					</div>
					<button type="submit" class="btn btn-sm btn-warning submit_btn w-100 my-4">ENTRAR</button>
					<div class="text-center text-muted text-uppercase">or</div>
					<button type="submit" class="btn btn-sm btn-success submit_btn w-100 my-4">CADASTRE~-SE</button>
				</form>
			</div>
		</div>
	</section>
    
</body>
</html> --}}
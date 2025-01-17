<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">{{ __('Email Address') }}</label>
					<div class="col-md-6">
                        <input id="user" type="text" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
				</div>
				<div class="group">
					<label for="pass" class="label">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="pass" type="password" class="input data-type="  @error('password') is-invalid @enderror name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
				</div>
				
                    <div class="group">
                        <input id="check" type="checkbox" class="check" {{ old('remember') ? 'checked' : '' }}>

                        <label for="check"><span class="icon"></span>
                            {{ __('Remember Me') }}
                        </label>
                    </div>
				
				<div class="group">
					
                    <input type="submit" class="button" value="Log in"></input>
				</div>

				<div class="hr"></div>
				<div class="foot-lnk">
					
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
				</div>

                
                <div class="foot-lnk">
					
                    @if (Route::has('register'))
                    <a class="btn btn-link" href="{{ route('register') }}">
                        {{ __('SIGN UP') }}
                    </a>
                @endif
				</div>
			</div>
			
			</div>
		</div>
	</div>
</div>
</body>
</html>
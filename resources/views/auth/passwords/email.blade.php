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
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Reset Password</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
            <form method="POST" action="{{ route('password.email') }}">
                
                @csrf
                <form class="sign-in-htm">
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

<<<<<<< HEAD
                        <div class="group">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit"  class="button" value=
                                    {{ __('Send Password Reset Link') }}>
                                </input>
=======
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
>>>>>>> f4e61944f63fd80786e8c81a824bdf544359ec7b
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
</div>
</div>
</div>
</body>
</html>
=======
@endsection
>>>>>>> f4e61944f63fd80786e8c81a824bdf544359ec7b

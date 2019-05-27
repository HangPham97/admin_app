<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked> <label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="sign-in-htm">
                    <div class="group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="user" class="label">Email</label>
                        <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required
                               autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                        @endif
                    </div>
                    <div class="group">
                        <label for="pass"
                               class="label {{ $errors->has('password') ? ' has-error' : '' }}">Password</label>
                        <input id="password" name="password" type="password" class="input" data-type="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
            </form>

            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="sign-up-htm">
                    <div class="group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="label">User Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="input" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="group">
                        <label for="password-confirm" class="label">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                        </div>
                    </div>


                    <div class="group">
                        <input type="submit" class="button" value="Sign Up">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
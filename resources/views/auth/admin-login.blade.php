<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fondamento:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
</head>
<body style="background-image: url('../images/irongrip.png') !important;">
    <div id="app">
        
        <div class="container-fluid py-5">
            <div class="row justify-content-center">
                <div class="login-box mt-5 pt-5">
                    <div class="card" style="border-radius: 0px;">
                        <div class="card-body login-card-body">
                            <h4 class="text-center">OHRCS LOGIN</h4>
                            <hr>
    
                            <form method="POST" action="{{ route('admin.login.submit') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
    
                                <div class="input-group mb-3">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="icheck-primary">
                                            <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-primary" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password ?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

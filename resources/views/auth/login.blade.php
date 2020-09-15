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
<body>
    <div id="app">
        <main class="py-4">
            <div class="container col-12">
                <div class="row justify-content-center">
                    <div class="my-lg-5 py-lg-5">
                        <div class="card mx-4" style="width: 28rem;">
                            <div class="card-body p-4">
                                <h4 class="text-center"> LOGIN {{ config('app.name') }}</h4>
                                <hr>

                                @if(session('message'))
                                    <div class="alert alert-info" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>

                                        <input id="email" name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" autocomplete="email" autofocus placeholder="{{ trans('Enter Email') }}" value="{{ old('email', null) }}">

                                        @if($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                        </div>

                                        <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ trans('Enter Password') }}">

                                        @if($errors->has('password'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="input-group mb-4">
                                        <div class="form-check checkbox">
                                            <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                                            <label class="form-check-label" for="remember" style="vertical-align: middle;">
                                                {{ trans('Remember me') }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary px-4">
                                                {{ trans('Login') }}
                                            </button>
                                        </div>
                                        <div class="col-6 text-right">
                                            @if(Route::has('password.request'))
                                                <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                                    {{ trans('Forgot password') }}
                                                </a><br>
                                            @endif
                                            <a class="btn btn-link px-0" href="{{ route('register') }}">
                                                {{ trans('Register') }}
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</htm
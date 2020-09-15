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
                                
                                <form method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    
                                    <h4 class="text-center">{{ config('app.name') }} Register</h4>
                                    <hr>
                
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user fa-fw"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" autofocus placeholder="{{ trans('Enter both names') }}" value="{{ old('name', null) }}">
                                        @if($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-envelope fa-fw"></i>
                                            </span>
                                        </div>
                                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ trans('Enter email') }}" value="{{ old('email', null) }}">
                                        @if($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-lock fa-fw"></i>
                                            </span>
                                        </div>
                                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ trans('Enter password') }}">
                                        @if($errors->has('password'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>
                
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-lock fa-fw"></i>
                                            </span>
                                        </div>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="{{ trans('Enter password confirmation') }}">
                                    </div>
                                    <hr>
                                    <button class="btn btn-primary">
                                        {{ trans('Register') }}
                                    </button>
                                </form>
                
                            </div>
                        </div>
                
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

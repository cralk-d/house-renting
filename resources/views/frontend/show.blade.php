<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fondamento:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="bg-white">
  
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container col-md-11 bg-white mt-4">
        <div class="row">
            <div class="col-12 col-sm-6 mt-4">
                <div class="col-12">
                    <img src="/storage/{{ $post->image }}" class="product-image" alt="House Image">
                </div>
                <div class="col-12 product-image-thumbs">
                    <div class="product-image-thumb active"><img src="/storage/{{ $post->image }}" alt="House Image"></div>
                    <div class="product-image-thumb" ><img src="/storage/{{ $post->image_i}}" alt="House Image"></div>
                    <div class="product-image-thumb" ><img src="/storage/{{ $post->image_ii }}" alt="House Image"></div>
                    <div class="product-image-thumb" ><img src="/storage/{{ $post->image_iii }}" alt="House Image"></div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card col-md-12 mt-4 shadow-sm" style="border-radius: 0px; border:0px;">
                    
                    <div class="card-body">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <h4 class="text-center">REQUEST THIS HOUSE</h4>
                        <hr>
                        <form action="{{ route('frontend.book') }}" method="post">
                            @csrf
                            <div class="form-group">
                                
                                <input type="hidden" class="form-control @error('post_id') is-invalid @enderror" name="post_id" value="{{ $post->id }}">
                                @error('post_id')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span> 
                                @enderror
                                
                            </div>
                            <div class="form-group">
                                <label for="">Both Names</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                                @error('name')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span> 
                                @enderror
                                
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email">
                                @error('email')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                                @enderror
                                
                            </div>
                            <div class="form-group">
                                <label for="">Mobile No</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone">
                                @error('phone')
                                <span  class="invalid-feedback">
                                    {{ $message }}
                                </span> 
                                @enderror
                                
                            </div>
                            <hr>
                            <button class="btn btn-primary float-right" type="submit"> <i class="fas fa-shopping-cart"></i> Send Request House</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12"><h4 class="text-center">House Details</h4>
                    <hr></div>

                    <div class="col-6">
                        <strong>Owner:</strong> <p class="text-muted float-right">{{ $post->user->name }} </p>
                        <hr>
                    </div>
                    <div class="col-6">
                        <strong>Contact:</strong> <p class="text-muted float-right">{{ $post->user->mobile }} </p>
                        <hr>
                    </div>
                    <div class="col-6">
                        <strong>Price:</strong> <p class="text-muted float-right">{{ $post->price }} Rwf/M </p>
                        <hr>
                    </div>
                    <div class="col-6">
                        <strong>Bedrooms:</strong> <p class="text-muted float-right">{{ $post->bedrooms }} </p>
                        <hr>
                    </div>
                    <div class="col-6">
                        <strong>Bathrooms:</strong> <p class="text-muted float-right">{{ $post->bathrooms }} </p>
                        <hr>
                    </div>
                    <div class="col-6">
                        <strong>Status:</strong> <p class="text-muted float-right">@if ($post->status == 1)
                            <button class="btn btn-flat btn-success">Available</button>
                        @else
                           <button class="btn btn-dark"> Gone</button> 
                        @endif </p>
                        <hr>
                    </div>
                    
                </div>
                <div class="row mt-4">
                    <div class="col-4">
                        <button class="btn btn-block btn-success btn-flat"><i class="fab fa-whatsapp-square"></i> Share </button>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-block btn-primary btn-flat"><i class="fab fa-facebook-square"></i> Share </button>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-block btn-danger btn-flat"><i class="fab fa-twitter"></i> Share </button>
                    </div>
    
                </div>
                
                
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col-md-12">
                <h4></h4>
                <p class="text-center">{{ $post->description }}</p>
            </div>
            
        </div>
    </div>
    <div class="container-fluid" id="subscriber">
        <div class="col-md-12">
            <h4 class="py-3 text-center" style="text-transform: uppercase">Subscribe to our News Letter</h4>
            <div class="row justify-content-center">
                
                <form action="" method="post" class="py-5" id="subscribe-form">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="email" class="form-control" id="emailid">
                        <span class="input-group-append">
                            <button type="button" class="btn btn-info btn-flat"> <i class="fas fa-cloud"></i> Subscribe</button>
                        </span>
                        </div>
                </form>
                
            </div>
        </div>
    </div>
    <div class="container-fluid footer-pages">
        <div class="row">
            <div class="col-md-4 mt-4">
                <h4 class="text-center">Pages</h4>
                <hr>
                <ul>
                    <li class="nav-link"><a href="#" class="page-links"><i class="fas fa-mobile"></i> Contact Us</a></li>
                    <li class="nav-link"><a href="#" class="page-links"><i class="fas fa-road"></i> Help</a></li>
                    <li class="nav-link"><a href="#" class="page-links"><i class="fas fa-rss"></i> Feedback</a></li>
                    <li class="nav-link"><a href="#" class="page-links"><i class="fas fa-users"></i> About Us</a></li>
                </ul>
            </div>
            <div class="col-md-4 mt-4 ">
                <h4 class="text-center">Payments</h4>
                <hr>
                <li class="nav-link">MOMO</li>
                <li class="nav-link">EQUITY</li>
                <li class="nav-link">BK</li>
                <li class="nav-link">Paypal</li>
            </div>
            <div class="col-md-4 mt-4">
                <h4 class="text-center">Administration</h4>
                <hr>
                <ul>
                    <li class="nav-link"><a href="/admin/login" class="page-links"><i class="fas fa-briefcase"></i> Site Administration</a></li>
                    <li class="nav-link"><a href="/owner/login" class="page-links"><i class="fas fa-user"></i> Landlords Administration</a></li>
                </ul>
            </div>
        </div>
        
    </div>
    <footer class="main-footer" style=" margin-left:0px;">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <a href="#" class="btn btn-default"><i class="fas fa-chevron-up"></i></a>
        </div>
    </footer> 
    
    <script src="../plugins/jquery/jquery.js"></script>
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/admin.min.js"></script>
</body>
</html>

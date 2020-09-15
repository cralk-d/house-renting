<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fondamento:ital@0;1&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link href="../css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/custom.css">

</head>
<body>
    
    <nav class="navbar navbar-expand-md fixed-top navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                {{ config('app.name') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link mr-5"> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/frontend/owners" class="nav-link mr-5"> Landlords</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link mr-5"> Privacy & Policy</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link mr-5"> About us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link mr-5"> Help</a>
                    </li>
                </ul>

                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-5">
                        <a id="login" class="nav-link" href="{{ route('login') }}"><i class="fas fa-lock"></i> Login</a>
                    </li>
                    <li class="nav-item ml-5">
                        <a id="register" class="nav-link" href="{{ route('register') }}"> <i class="fas fa-pen"></i> Register</a>
                    </li>  
                </ul>
            </div>
        </div>
    </nav>

    <main class="pt-5 mt-5">
        <div class="container">
            <div class="row">
				@foreach ($owners as $owner)
					<!-- /.col -->
					<div class="col-md-4">
						<!-- Widget: user widget style 1 -->
						<div class="card card-widget widget-user">
						<!-- Add the bg color to the header using any of the bg-* classes -->
						<div class="widget-user-header text-white" style="background: url('../images/wood_1.png') center center;">
							<h3 class="widget-user-username text-right">{{ $owner->name }}</h3>
							<h5 class="widget-user-desc text-right">House Owner</h5>
						</div>
						<div class="widget-user-image">
							<img class="img-circle" src="{{ $owner->profile->profileImage()}}" alt="User Avatar">
						</div>
						<div class="card-footer" style="background-color: ">
							<div class="row">
								<div class="col-sm-4 border-right">
									<div class="description-block">
										<h5 class="description-header">{{ $owner->posts->Count() }}</h5>
										<span class="description-text">Posts</span>
									</div>
									<!-- /.description-block -->
								</div>
								<!-- /.col -->
								<div class="col-sm-4 border-right">
									<div class="description-block">
										<h5 class="description-header">13,000</h5>
										<span class="description-text">FOLLOWERS</span>
									</div>
									<!-- /.description-block -->
								</div>
								<!-- /.col -->
								<div class="col-sm-4">
									<div class="description-block">
										<h5 class="description-header">35</h5>
										<span class="description-text">PRODUCTS</span>
									</div>
									<!-- /.description-block -->
								</div>
								<!-- /.col -->
							</div>
						</div>
					 
					</div>
				
				</div>	<!-- /.row -->
            @endforeach
            
            </div>
        </div> 
    </main>
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
        <strong>Copyright &copy; Martine KAYITESI & MABABZI Jacques</strong>
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


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/css/app.css">
  <link href="https://fonts.googleapis.com/css2?family=Fondamento:ital@0;1&display=swap" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/admin" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
    
            <ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="float-right badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
				
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
						<i class="fas fa-user"></i>
						{{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">Settings</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user mr-2"></i> Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-cog mr-2"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{ route('logout') }}" 
							onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> Log out
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        
                    </div>
                </li>
            </ul>
        </nav>
    
        <aside class="main-sidebar sidebar-dark-success elevation-1">
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light text-center">OHRCS</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview menu-open">
                            <a href="/owner" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
						</li>
						<li class="nav-header"></li>
                        <li class="nav-item">
                            <a href="/posts/" class="nav-link">
                                <i class="nav-icon fas fa-image"></i>
                                <p>Post Management</p>
                            </a>
						</li>
						<li class="nav-header"></li>
						<li class="nav-item">
                            <a href="/orders/" class="nav-link">
                                <i class="nav-icon fas fa-shopping-bag"></i>
                                <p>Order Management</p>
                            </a>
                        </li>
                        
                        <li class="nav-header"></li>
                        <li class="nav-item">
                            <a href="/payments/" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>Payment</p>
                            </a>
                        </li>
                        
                        
                        <li class="nav-header"></li>
    
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-cogs"></i>
                                <p>
                                    Account
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-user nav-icon"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-lock nav-icon"></i>
                                        <p>
                                            Change password
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header"></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-sign-out-alt"></i>
                                <p class="text">Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container col-md-11">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card card-outline card-green">
                        <div class="card-body">
                            <h4>ADD POST HERE</h4>
                            <hr>
                            <form action="{{ route('posts.store') }}" enctype="multipart/form-data" method="POST" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" value="House for rent" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{old('price')}}">
                                            @error('price')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">No of Bedrooms</label>
                                            <input type="text" class="form-control @error('bedrooms') is-invalid @enderror" name="bedrooms" value="{{old('bedrooms')}}">
                                            @error('bedrooms')
                                            <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">No of Bathrooms</label>
                                            <input type="text" class="form-control @error('bathrooms') is-invalid @enderror" name="bathrooms" value="{{old('bathrooms')}}">
                                            @error('bathrooms')
                                            <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image">Upload House image I</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" id="image">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="image">Upload</span>
                                                </div>
                                            </div>
                                            @error('image')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image">Upload House image II</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="image_i" class="custom-file-input @error('image_i') is-invalid @enderror" id="image">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="image">Upload</span>
                                                </div>
                                            </div>
                                            @error('image_i')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image">Upload House image III</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="image_ii" class="custom-file-input @error('image_ii') is-invalid @enderror" id="image">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="image">Upload</span>
                                                </div>
                                            </div>
                                            @error('image_ii')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image">Upload House image IV</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="image_iii" class="custom-file-input @error('image_iii') is-invalid @enderror" id="image">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="image">Upload</span>
                                                </div>
                                            </div>
                                            @error('image_iii')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="price">Enter House Description</label>
                                            <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" data-placement="top" data-toggle="tooltip" title="Here in description you can add  sensitive information about house location and address!">
                                            </textarea>
                                            @error('description')
                                            <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class=" form-group">
                                    <button type="submit" class="btn btn-warning"> Publish Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 Martine KAYITESI & MBABAZI Jacques.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>OHRCS</b> Group
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="../../js/admin.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
    bsCustomFileInput.init();
    });
    </script>
</body>
</html>
            


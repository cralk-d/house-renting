
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
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
                            <a href="/owner" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
						</li>
						<li class="nav-header"></li>
                        <li class="nav-item">
                            <a href="/posts/" class="nav-link active">
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
                <div class="card card-outline card-green">
                    <div class="card-header">
                    <h3 class="card-title" style="text-transform: uppercase; text-align:center;">MY POSTS {{ config('app.name')}}</h3>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('posts.create') }}" >Create Post</a>
                        <table id="all-post" class="table table-stripped table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach(Auth::user()->posts as $post)
                                <tr>
                                <td>{{ $post->id}}</td>
                                    <td>
                                        <img src="/storage/{{ $post->image }}"  class="img-size-50">
                                    </td>
                                    <td>{{$post->title}}</td>
                                    <td> {{ $post->price }} Rwf</td>
                                    <td></td>

                                    <td>
                                        <a href="{{ route('posts.show',$post->id) }}" class="btn btn-primary btn-flat">
                                            <i class="fas fa-eye"></i> View
                                        </a>
                                        <a href="{{-- route('owner.posts.edit',$post->id) --}}" class="btn btn-info btn-flat disabled">
                                            <i class="fas fa-pen-square"></i> Edit post
                                        </a>
                                        <button class="btn btn-danger btn-flat" type="button">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </button>
                                        <form id="delete-form-{{ $post->id }}" action="{{ route('posts.destroy',$post->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>{{ config('app.name') }}</b> 
        </div>
        <strong>Copyright &copy; 2014-2019 KAYITESI Martine & MBABAZI Jacques.</strong> All rights
      reserved.
    </footer>
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript"></script>
<script>
    </script>
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
  <!-- Toastr -->
  <!-- AdminLTE App -->
  <script src="../js/admin.min.js"></script>
  

</body>
</html>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
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
                <img src="/icons/app-indicator.svg" height="42" width="42" alt="OHRCS Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
                <span class="brand-text font-weight-light">OHRCS</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../admin/hh5YWa4YJ0PR5Bd0XG3v6eYQRO0IdYb9m2A3jTch.jpeg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                    <a href="/owner/setting/1/edit" class="d-block">{{Auth::user()->username}}</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview menu-open">
                            <a href="/admin" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/owner/users/" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Manage Users</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/owner/posts/" class="nav-link">
                                <i class="nav-icon fas fa-shopping-bag"></i>
                                <p>Post<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/owner/posts/create" class="nav-link">
                                        <i class="fas fa-check-circle success"></i>
                                        <p>Add Post</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/owner/orders/pending" class="nav-link">
                                        <i class="fa fa-th info"></i>
                                        <p>Pending</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/owner/orders/cancelled" class="nav-link danger">
                                        <i class="fa fa-times-circle"></i>
                                        <p>Cancelled</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-shopping-bag"></i>
                                <p>Order<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/owner/orders/completed" class="nav-link">
                                        <i class="fas fa-check-circle success"></i>
                                        <p>Finished</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/owner/orders/pending" class="nav-link">
                                        <i class="fa fa-th info"></i>
                                        <p>Pending</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/owner/orders/cancelled" class="nav-link danger">
                                        <i class="fa fa-times-circle"></i>
                                        <p>Cancelled</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/owner/feeds/" class="nav-link">
                                <i class="nav-icon fas fa-rss"></i>
                                <p>Feedback
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-file-invoice"></i>
                                <p>Invoices
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/owner/invoices/completed" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Payed</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/owner/invoices/pending" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pending</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/owner/invoices/cancelled" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cancelled</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/owner/series/" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>Manage Series</p>
                            </a>
                        </li>
                        <li class="nav-header"></li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>Payment<span class="badge badge-info right"></span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Gallery
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>Mailbox<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/mailbox/mailbox.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inbox</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Compose</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/mailbox/read-mail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Draft</p>
                                    </a>
                                </li>
                            </ul>
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
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>EDIT POST</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">EDIT POST</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card" style="border-radius: 0px; border:0px;">
                    <div class="card-body">
                        <form action="{{ route('owner.posts.edit',$post->id) }}" method="post">
                            @csrf
                            @method('PUT')
 
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
                                            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$post->price}}">
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
                                            <input type="text" class="form-control @error('bedrooms') is-invalid @enderror" name="bedrooms" value="{{$post->bedrooms}}">
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
                                            <input type="text" class="form-control @error('bathrooms') is-invalid @enderror" name="bathrooms" value="{{$post->bathrooms}}">
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
                                            <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{old('description')}}">
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
                                    <button type="submit" class="btn btn-warning float-right"> Publish Post</button>
                                </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>OHRCS</b> 
            </div>
            <strong>Copyright &copy; 2014-2019 KAYITESI Martine & MBABAZI Jacques</strong> All rights
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
    <script src="../../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('../../../js/admin.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
</body>
</html>

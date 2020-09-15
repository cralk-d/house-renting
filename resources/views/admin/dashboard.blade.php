
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
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
                <li v-for="notification in notifications" class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <span class="badge badge-warning navbar-badge">{{ Auth::user()->unreadNotifications->Count()}}</span> 
                        Notifications <i class="far fa-bell"></i>
                        
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">{{ Auth::user()->unreadNotifications->Count()}} Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" v-on:click="MarkAsRead(notification)" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                      <i class="far fa-user"></i> {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt mr-2"></i> Log out
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </a>

                      
                    </div>
                  </li>
            </ul>
        </nav>
    
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="/icons/app-indicator.svg" height="42" width="42" alt="OHRCS Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
                <span class="brand-text font-weight-light">{{ config('app.name')}}</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ Auth::user()->profileImage()}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                    <a href="/admin/setting/{{Auth::user()->id}}/edit" class="d-block">{{Auth::user()->name}}</a>
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
                            <a href="/admin/users/" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Manage Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/posts/" class="nav-link">
                                <i class="nav-icon fas fa-images"></i>
                                <p>Posts</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-shopping-bag"></i>
                                <p>Order<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/orders/completed" class="nav-link">
                                        <i class="fas fa-check-circle success"></i>
                                        <p>Finished</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/orders/pending" class="nav-link">
                                        <i class="fa fa-th info"></i>
                                        <p>Pending</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/orders/cancelled" class="nav-link danger">
                                        <i class="fa fa-times-circle"></i>
                                        <p>Cancelled</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/feeds/" class="nav-link">
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
                                    <a href="/admin/invoices/" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Invoices</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/invoices/pending" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pending</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/invoices/cancelled" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cancelled</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/series/" class="nav-link">
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
                            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out-alt"></i>
                                <p class="text">Logout</p>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $orders->Count() }}</h3>
                                    <p>Total Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <a href="/admin/orders/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
         
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $users->Count() }}</h3>
                                    <p>Total  Users</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="/admin/users/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{$posts->Count()}}</h3>
                                    <p>Total Posts</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-images"></i>
                                </div>
                                <a href="/admin/posts/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $feeds->Count() }}</h3>
                                    <p>Total Feedback</p>
                                </div>
                            <div class="icon">
                                <i class="fas fa-rss"></i>
                            </div>
                            <a href="/admin/feeds/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
						</div>
					</div>
					
					<div class="row">
						<section class="col-lg-6 connectedSortable">
            
							<div class="card">
								<div class="card-header">
									<h2 class="card-title">
										<i class="fas fa-file-invoice mr-1"></i>Sales
									</h3>
									
								</div><!-- /.card-header -->
								<div class="card-body border-0">
									<table class="table">
										<thead>
										  <tr>
											<th style="width: 10px">#</th>
											<th>Task</th>
											<th>Progress</th>
											<th style="width: 40px">Label</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1.</td>
											<td>Update software</td>
											<td>
											  <div class="progress progress-xs">
												<div class="progress-bar progress-bar-danger" style="width: 55%"></div>
											  </div>
											</td>
											<td><span class="badge bg-danger">55%</span></td>
										  </tr>
										  <tr>
											<td>2.</td>
											<td>Clean database</td>
											<td>
											  <div class="progress progress-xs">
												<div class="progress-bar bg-warning" style="width: 70%"></div>
											  </div>
											</td>
											<td><span class="badge bg-warning">70%</span></td>
										  </tr>
										  <tr>
											<td>3.</td>
											<td>Cron job running</td>
											<td>
											  <div class="progress progress-xs progress-striped active">
												<div class="progress-bar bg-primary" style="width: 30%"></div>
											  </div>
											</td>
											<td><span class="badge bg-primary">30%</span></td>
										  </tr>
										  <tr>
											<td>4.</td>
											<td>Fix and squish bugs</td>
											<td>
											  <div class="progress progress-xs progress-striped active">
												<div class="progress-bar bg-success" style="width: 90%"></div>
											  </div>
											</td>
											<td><span class="badge bg-success">90%</span></td>
										  </tr>
										</tbody>
									  </table>
								</div><!-- /.card-body -->
							</div>
          				</section>
						<section class="col-lg-6 connectedSortable">
							<div class="card bg-gradient-default">
								<div class="card-header">
									<h3 class="card-title">
										<i class="far fa-bell mr-1"></i>
										Notifications
									</h3>
								</div>
								<div class="card-body">
									<div class="list-group">
                                        @foreach (Auth::user()->unreadNotifications as $notification)
                                            <a href="#" class="list-group-item">
                                                {{ $notification->data['message'] }}
                                                <span class="pull-right text-muted small float-right"><em>{{ $notification->created_at->diffForHumans() }}</em>
                                                </span>
                                            </a>
                                        @endforeach
									</div>
								</div>
							</div>
						</div>
					</section>
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-3">
								<div class="info-box">
									<span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
									<div class="info-box-content">
										  <span class="info-box-text">CPU Traffic</span>
										  <span class="info-box-number">
											10
											<small>%</small>
										  </span>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="info-box mb-3">
									<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
				  
									<div class="info-box-content">
										<span class="info-box-text">Likes</span>
										<span class="info-box-number">41,410</span>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="info-box mb-3">
									<span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
				  
									<div class="info-box-content">
										  <span class="info-box-text">Sales</span>
										  <span class="info-box-number">760</span>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="info-box mb-3">
									<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
				  
									<div class="info-box-content">
										  <span class="info-box-text">New Members</span>
										  <span class="info-box-number">2,000</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
    </div>
  <footer class="main-footer">
    <strong>Copyright &copy; Martine KAYITESI & MBABAZI Jacques</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>OHRCS</b> GROUP
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/js/admin.min.js"></script>
</body>
</html>

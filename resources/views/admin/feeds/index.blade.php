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
  <link href="{{ asset('../../plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{ asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link href="{{ asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}" rel="stylesheet">
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
                        <span class="badge badge-warning navbar-badge">15</span>
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
                            <a href="/admin" class="nav-link">
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
                            <a href="/admin/feeds/" class="nav-link active">
                                <i class="nav-icon fas fa-rss"></i>
                                <p>Feedback</p>
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
                                    <a href="/admin/invoices/completed" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Payed</p>
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
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>FEEDBACK</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/">Home</a></li>
                            <li class="breadcrumb-item active">Feedback</li>
                        </ol>
                    </div>
                </div>
             </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-center">LIST FEEDBACK</h3>
                        </div>
                        <div class="card-body">
                            <table id="feeds" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($feeds as $feed)
                                        <tr>
                                            <td>{{$feed->id}}</td>                                        
                                            <td>{{ $feed->email}}</td>
                                            <td>{{ $feed->feed }}</td>
                                            <td>{{ $feed->created_at}} </td> 
                                            <td>
                                            
                                                <button class="btn btn-info"><i class="fas fa-check-circle"></i> Activate</button>
                                                <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                            </td> 
                                        </tr> 
                                    @endforeach
                                
                                
                                </tbody>
                                
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.4
        </div>
        <strong>Copyright &copy; 2014-2019 AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../js/admin.min.js"></script>
<script>
  $(function () {
    
    $('#feeds').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

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
    <link href="https://fonts.googleapis.com/css2?family=Fondamento&display=swap" rel="stylesheet">
    <!-- fonts-awesome -->
    <link rel="stylesheet" type="text/css" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('../../plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{ asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
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

        <!-- SEARCH FORM -->
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

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->

            <!-- Notifications Dropdown Menu -->
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
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <img src="" height="42" width="42" alt="OHRCS Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">{{ config('app.name')}}</span>
        </a>
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
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
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fa fa-users-cog"></i>
                            <p>Users<i class="fas fa-angle-left right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/users/landlord" class="nav-link">
                                    <i class="fa fa-users"></i>
                                    <p>Landlord</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/users/tenant" class="nav-link">
                                    <i class="fa fa-user-shield"></i>
                                    <p>Tenants</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/users/administrator" class="nav-link">
                                    <i class="fa fa-user-cog"></i>
                                    <p>Administrators</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/feeds/" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
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
                                <a href="/admin/invoices/completed" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Finished</p>
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
                    <li class="nav-header"></li>
                    <li class="nav-item">
                        <a href="/admin/payments/" class="nav-link">
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
                        <h4 style="text-transform: uppercase;">List of series </h4>
                        <hr>
                        <button type="button" class="btn btn-dark float-left" data-toggle="modal" data-target="#modal-create">
                            <i class="fas fa-plus-circle"></i> Add New
                        </button>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>

                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">LIST OF SERIES</h3>
                        </div>
                        <div class="card-body">
                            <table id="all-series" class="table table-bordered table-striped">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                                        {{ $message }}
                                    </div>
                                @endif
                                <thead>
                                <tr>
                                    <th>S/No</th>
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($series as $serie)
                                    <tr>
                                        <td> {{$serie->id}} </td>
                                        <td>{{$serie->prefix}}</td>
                                        <td>{{$serie->created_at}}</td>
                                        <td>
                                        <a href="{{ route('admin.series.edit',$serie->id) }}" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit">
                                            <i class="fas fa-pen"></i> Edit</a>
                                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete"> Delete</button>
                                        <div class="modal fade" id="modal-delete">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header bg-danger">
                                                        <h4 class="modal-title">DELETE SERIE</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.series.destroy', $serie)}}" method="POST" class="float-left">
                                                            @csrf
                                                            @method('DELETE')
                                                            <p style="text-align: center;"> Are you sure to delete <strong>{{ $serie->prefix}} ?</strong></p>
                                                        
                                                    </div>
                                                    <div class="modal-footer bg-danger justify-content-between">
                                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal"> <i class="fas fa-times-circle"></i> Close</button>
                                                        <button type="submit" class="btn btn-warning"><i class="fas fa-trash"></i> Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="modal fade" id="modal-create">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('admin.series.store')}}" method="POST">
                                        @csrf
                                        <div class="modal-header">
                                            <h4 class="modal-title">CREATE NEW SERIE HERE</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label> Name</label>
                                            <input type="text" name="prefix" class="form-control @error('prefix') is-invalid @enderror"
                                                   value="{{old('prefix')}}">
                                            @error('prefix')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
                                            <button type="submit" class="btn btn-outline-success swalDefaultSuccess"><i class="fa fa-check"></i> Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <aside class="control-sidebar control-sidebar-dark"></aside>
    <footer class="main-footer">
        <strong>Copyright &copy; {{date('Y')}}  KAYITESI Martine & MBABAZI Jacques.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>{{ config('app.name') }}</b>
        </div>
    </footer>
</div>

<script src="{{ ('../../plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ ('../../plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ ('../../plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ ('../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ ('../../plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ ('../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ ('../js/custom.min.js') }}"></script>

<script>
    $(function () {

    $("#all-series").DataTable({
      "responsive": true,
      "autoWidth": false,
      "paging":false,
      "serching":true,
      "info":true,
    });
    });
</script>
</body>
</html>

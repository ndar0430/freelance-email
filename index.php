<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Internet Banking</title>

    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/fonts/googlefonts.css')  }}">




    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bower includes -->
    

    
    <link rel="stylesheet" href="{{ asset('css/bower_bundle.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/bundle.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.css') }}">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



    <!-- Google Font -->
    <link rel="stylesheet"
          href="{{ asset('fonts/googlefonts.css') }}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <div href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">IB</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">Internet Banking</span>
        </div>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <!-- // get current route -->
    <?php $currentRoutePrefix = request()->route()->getPrefix(); ?>
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li style ="color:white;" class="header">
                
                Welcome

                 
                 </li>

                <li class="treeview {{ ($currentRoutePrefix === '/admin/users') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Home</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="{{ route('home.index') }}">
                                <i class="fa fa-circle-o"></i>
                                Home
                            </a>
                        </li>

                    </ul>
                </li>


                @role('super_admin|admin')
                <li class="treeview {{ ($currentRoutePrefix === '/admin/users') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Users</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="{{ route('users.list') }}">
                                <i class="fa fa-circle-o"></i>
                                Registered Users List
                            </a>
                        </li>

                        <li class="">
                            <a href="{{ route('signup.list') }}">
                                <i class="fa fa-circle-o"></i>
                                Unregistered Users List
                            </a>
                        </li>
                        @role('super_admin')
                        <li class="">
                            <a href="{{ route('roleuser.index') }}">
                                <i class="fa fa-circle-o"></i>
                                Attach Role
                            </a>
                        </li>
                        @endrole
                    </ul>
                </li>

                <li class="treeview {{ ($currentRoutePrefix === '/admin/users') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Balance</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="{{ route('bank.index') }}">
                                <i class="fa fa-dollar-sign"></i>
                                Add Balance
                            </a>
                        </li>

                    </ul>
                </li>
                @endrole

                @role('normal-user')
                <li class="treeview {{ ($currentRoutePrefix === '/admin/users') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Balance</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="{{ route('bank.checkbalance') }}">
                                <i class="fa fa-circle-o"></i>
                                Check Balance
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole

                <li>
                    <a href="{{ route('logout') }}">
                        <i class="fa fa-sign-out"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @yield('content-header')

        <!-- Main content -->
        @yield('content-main')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
    </footer>

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>

<script src="{{ asset('js/bundle.js') }}"></script>
<script src="{{ asset('/js/bootstrap-multiselect.js') }}"></script> 
@yield('scripts')

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title> Admin Panel </title>
        
		{{ Html::style('admin/bootstrap/css/bootstrap.min.css') }}
		{{ Html::style('admin/semantic/semantic.min.css') }}
		{{ Html::script('admin/jquery/jquery-3.1.1.min.js') }}
        {{ Html::script('admin/jquery/jquery-ui.js') }}
        {{ Html::style('admin/jquery/jquery-ui.min.css') }}
		{{ Html::style('admin/admin-lte/dist/css/AdminLTE.css') }}
    	{{ Html::style('admin/admin-lte/dist/css/skins/skin-blue-light.css') }}
        {{ Html::style('admin/css/modal.css') }}

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.semanticui.min.css">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="hold-transition skin-blue-light sidebar-mini">

	
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b> Laravel</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                   {{-- Aca van los li para las notificaciones --}}

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('eva-01.jpg') }}" class="user-image" alt="User Image">
                            @if (Auth::check())
                            	<span class="hidden-xs">{{ Auth::user()->name }} </span>
                            @endif
                            
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ asset('davemoustache.jpg') }}" class="img-circle" alt="User Image">

                                <p>

                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>

                                <div class="pull-right">
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                                            {{ csrf_field() }}
                                             <button  class="btn btn-default btn-flat">Sign out</button>
                                        </form>
                                   
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('eva-01.jpg') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                @if (Auth::check())
                	<p>{{ Auth::user()->name }} </p>
                @endif
                    
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>

                @include('default.layouts.sidebar')

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Panel de Administración
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
       
        <!-- Main content -->
        <section class="content">
          
              @yield('content')

        </section>
        <!-- /.content -->
        @include('default.layouts.modal')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
           <b>Admin Laravel  Version</b> 0.1
        </div>
        <strong>Copyright &copy; 2017 </strong> All rights
        reserved.
    </footer>

    <div class="control-sidebar-bg"></div>
</div>

</body>

    {!! Html::script('admin/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('admin/semantic/semantic.js') !!}
    {!! Html::script('admin/admin-lte/dist/js/app.min.js') !!}
    {!! Html::script('admin/utils/ckeditor/ckeditor.js') !!}

    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.semanticui.min.js"></script>

    {!! Html::script('admin/js/admin.js') !!}

<script src="/vendor/laravel-filemanager/js/lfm.js"></script>

<script type="text/javascript">
	$('.fm-button').filemanager('image');

    $(document).on('click', '.preview-flm' ,function() {
        var nombreImagen = $(this).data('name');
        path = nombreImagen;

        $("#modal-image").find('img').attr('src', path);

        setTimeout(function(){
          $('#modal-image').show();
        },0);
    });

    $(document).on('click', '.pink' ,function() {
        $("#modal-image").hide()
    });
</script>
    
@yield('scripts')
</html>
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
        {{-- {{ Html::style('admin/admin-lte/dist/css/skins/skin-blue-light.css') }} --}}
        {{ Html::style('admin/admin-lte/dist/css/skins/skin-blue.css') }}
        {{ Html::style('admin/css/modal.css') }}
        {{ Html::style('admin/css/admin.css?v=2.1') }}
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.semanticui.min.css">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
{{-- <body class="hold-transition skin-blue-light sidebar-mini"> --}}

	
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
                @include('default.layouts.navbar')
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

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

        <h3 class="ui block header">
          Admin panel 
        </h3>
            {{-- <h1>
                Panel de Administración
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol> --}}
        </section>
        @include('default.alerts.success')
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
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title> ADMIN PANEL </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<style type="text/css">
	.form-group label {
		font-weight: bold;
	}


	.has-error .control-label,
	.has-error .help-block,
	.has-error .form-control {
	    color: #F3413D !important;
	}
</style>

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"> -->
{{ Html::style('admin/bootstrap/css/bootstrap.min.css') }}
{{ Html::style('admin/metronic/css/uniform.default.css') }}
{{ Html::style('admin/metronic/css/bootstrap-switch.min.css') }}
{{ Html::style('admin/jquery/jquery-ui.min.css') }}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
{{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css"> --}}
{{ Html::style('admin/metronic/css/components.css') }}
{{ Html::style('admin/metronic/css/plugins.css') }}
{{ Html::style('admin/metronic/css/layout.css') }}
{{ Html::style('admin/metronic/css/themes/grey.css') }}
{{ Html::style('admin/metronic/css/custom.css') }}
{{ Html::style('admin/css/modal.css') }}
{{ Html::style('admin/css/admin.css?v=2.1') }}
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>

<style type="text/css">
	.dataTables_filter {
		right: 0 !important;
	}
</style>
</head>

<body class="page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo page-header-fixed-mobile page-footer-fixed1">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="../../assets/admin/layout2/img/logo-default.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>

		<div class="page-top">

			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
				
					<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="../../assets/admin/layout2/img/avatar3_small.jpg"/>
						<span class="username username-hide-on-mobile">
						Nick </span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="extra_profile.html">
								<i class="fa fa-lock"></i> Password Recovery </a>
							</li>
							
							{{-- <li class="divider">
							</li> --}}

							<li>
								<a href="login.html">
								<i class="fa fa-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">

		<div class="page-sidebar navbar-collapse collapse">

			@include('default.mlayout.msidebar')
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>

			<h3 class="page-title">
			Administrador <small> Control panel </small>
			</h3>
		
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					 @yield('content')
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>

</div>

@include('default.layouts.modal')

<div class="page-footer">
	<div class="page-footer-inner">
		 2017 &copy; Admin laravel template v2.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
{!! Html::script('admin/metronic/scripts/jquery.min.js') !!}
{!! Html::script('admin/metronic/scripts/jquery-migrate.min.js') !!}
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
{!! Html::script('admin/metronic/scripts/jquery-ui.min.js') !!}
{!! Html::script('admin/bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('admin/metronic/scripts/bootstrap-hover-dropdown.min.js') !!}
{!! Html::script('admin/metronic/scripts/jquery.slimscroll.min.js') !!}
{!! Html::script('admin/metronic/scripts/jquery.blockui.min.js') !!}
{!! Html::script('admin/metronic/scripts/jquery.cokie.min.js') !!}
{!! Html::script('admin/metronic/scripts/jquery.uniform.min.js') !!}
{!! Html::script('admin/metronic/scripts/bootstrap-switch.min.js') !!}
<!-- END CORE PLUGINS -->
{!! Html::script('admin/metronic/scripts/metronic.js') !!}
{!! Html::script('admin/metronic/scripts/layout.js') !!}
{!! Html::script('admin/metronic/scripts/demo.js') !!}

{!! Html::script('admin/utils/ckeditor/ckeditor.js') !!}

<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>

<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
{!! Html::script('admin/js/admin.js') !!}

<script>
	$(document).ready(function() {

		$('.fm-button').filemanager('image');

	});

		$(document).on('click', '.preview-flm' ,function() {
	        var nombreImagen = $(this).data('name');
	        path = nombreImagen;

	        $("#modal-image").find('img').attr('src', path);

	        setTimeout(function(){
	          $('#modal-image').show();
	        },0);
	    });

      jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Demo.init(); // init demo features
      });
   </script>

   @yield('scripts')
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
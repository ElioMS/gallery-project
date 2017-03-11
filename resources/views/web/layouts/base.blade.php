<!DOCTYPE html>
<html>
<head>
	<title> Home </title>
	{{ Html::style('admin/semantic/semantic.min.css') }}
	{{ Html::script('admin/jquery/jquery-3.1.1.min.js') }}
</head>

<style type="text/css">
	.footer{
		position: fixed;
		right: 0;
	    bottom: 0;
	    left: 0;
		padding: 1rem;
		background-color: black;
		border: 1px;
		text-align: center;
	}
	.main-text {
		padding-top: 5%;
		padding-left: 5%;
		padding-right: 5%;
		padding-bottom: 5%;
	}
</style>
<body>
	@include('web.layouts.header')

		<div class="container main-text">
			@yield('content')
		</div>
			
	@include('web.layouts.footer')

	{!! Html::script('admin/semantic/semantic.js') !!}
	@yield('scripts')
</body>
</html>
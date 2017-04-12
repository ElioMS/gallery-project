<!DOCTYPE html>
<html>
<head>
	@include('web.layouts.metatag')
	{{ Html::style('admin/semantic/semantic.min.css') }}
	{{ Html::style('css/web.css') }}
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
		/*padding-left: 5%;
		padding-right: 5%;*/
		padding-bottom: 5%;
	}
</style>
<body>
	@php
	    use App\Http\Controllers\General\SeoController;
		$site = config('app.infosite');
		$full_url = url()->current();
		$path = str_replace($site , '', $full_url);

		$result = SeoController::checkIfRouteExists($path);
	@endphp

	@include('web.layouts.header')

		<div class="ui container main-text">
			@yield('content')
		</div>
			
	@include('web.layouts.footer')

	{!! Html::script('admin/semantic/semantic.js') !!}
	@yield('scripts')
</body>
</html>
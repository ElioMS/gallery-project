@php
    $value = config('sidebar.menu');
    $url = Request::segment(2);
@endphp


<div class="ui orange fixed inverted menu">
	<div class="ui container">
		<div class="header item">
			 <img src="{{ asset('admin/images/laravel_logo.png') }}"><a href="{{ route('home') }}"> Base Laravel Project </a> 
		</div>

		@foreach ($categories as $category)
			<a class="item @if ($url == $category->slug) active @endif" href="{{ route('web.galleries.index', ['category' => $category->slug]) }}">  <strong>{{ $category->name }}</strong> </a>
		@endforeach

		<div class="right menu">
			<a href="{{ route('contact.index') }}" class="item"> Contact Us </a>
		</div>
	</div>
</div>
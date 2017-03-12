<div class="ui teal fixed inverted menu">
	<div class="ui container">
		<div class="header item"> <img src="{{ asset('admin/images/laravel_logo.png') }}"> Base Laravel Project </div>

		@foreach ($categories as $category)
			<a class="item" href="{{ route('web.galleries.index', ['category' => $category->slug]) }}"> {{ $category->name }} </a>
		@endforeach

		<div class="right menu">
			<a href="{{ route('contact.index') }}" class="item"> Contact Us </a>
		</div>
	</div>
</div>
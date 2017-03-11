<div class="ui teal fixed inverted menu">
	<div class="ui container">
		<div class="header item"> Gallery </div>

		@foreach ($categories as $category)
			<a class="item" href=""> {{ $category->name }} </a>
		@endforeach

		<div class="right menu">
			<a href="{{ route('contact.index') }}" class="item"> Contact Us </a>
		</div>
	</div>
</div>
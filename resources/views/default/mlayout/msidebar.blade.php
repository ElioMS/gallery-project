<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	@php
	    $value = config('sidebar.menu');
	    // $url = Route::currentRouteName();
	    // $prefix = explode('.' , $url);
	@endphp
	@foreach ($value as $element)
		
		@if ($element['type'] == 'simple')
				<li class="tooltips">
					<a href="{{ route($element['url']) }}">
					<i class="{{ $element['ico'] }}"></i>
					<span class="title"> {{ $element['text'] }} </span>
					</a>
				</li>
			@else

				<li>
					<a href="javascript:;">
					<i class="{{ $element['ico'] }}"></i>
						<span class="title">{{ $element['text'] }}</span>
						<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						@foreach ($element['childs'] as $elem)
							<li>
								<a href="{{ route($elem['url']) }}"><i class="icon-home"></i>{{ $elem['text'] }}</a>
							</li>
						@endforeach
					</ul>
				</li>

		@endif

	@endforeach

		

		
				
</ul>
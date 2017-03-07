@php
    $value = config('sidebar.menu');
    $url = Route::currentRouteName();
    $prefix = explode('.' , $url);
@endphp

@foreach ($value as $element)
    @if ($element['type'] == 'simple')
        @php
            $entity = explode('.' , $element['url']);
        @endphp
        <li class="sb-links @if ($prefix[0] == $entity[0]) active @endif">
            <a href="{{ route($element['url']) }}"><i class="{{ $element['ico'] }}"></i> <span> {{ $element['text'] }} </span></a>
        </li> 
    @else
        <li class="treeview">
            <a href="#">
                <i class="{{ $element['ico'] }}"></i> <span> {{ $element['text'] }} </span>
            </a>
            <ul class="treeview-menu">
                @foreach ($element['childs'] as $e)
                    <li><a href="{{ route($e['url']) }}"><i class="fa fa-circle-o text-aqua"></i> {{ $e['text'] }} </a></li>
                @endforeach
            </ul>
        </li>
    @endif
@endforeach
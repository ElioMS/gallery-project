@php
    $value = config('sidebar.menu');
@endphp

@foreach ($value as $element)
    @if ($element['type'] == 'simple')
     <li><a href="{{ route($element['url']) }}"><i class="{{ $element['ico'] }}"></i> <span> {{ $element['text'] }} </span></a></li> 

     @else
      <li class="treeview">
        <a href="#">
            <i class="{{ $element['ico'] }}"></i>
            <span> {{ $element['text'] }} </span>
        </a>
        <ul class="treeview-menu">
            @foreach ($element['childs'] as $e)
               <li><a href="{{ route($e['url']) }}"><i class="fa fa-circle-o text-aqua"></i> {{ $e['text'] }} </a></li>
            @endforeach
           
            {{-- <li><a href="{{ route('subcategories.index') }}"><i class="fa fa-circle-o text-aqua"></i> Nueva Subcategoría </a></li> --}}
            {{-- <li><a href="{{ route('products.index') }}"><i class="fa fa-circle-o text-aqua"></i> Nuevo Producto </a></li> --}}
            {{-- <li><a href=""><i class="fa fa-circle-o text-aqua"></i> Nuevo Producto </a></li> --}}
        </ul>
    </li>
    @endif
  
@endforeach
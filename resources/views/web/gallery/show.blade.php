@extends('web.layouts.base')

@section('content')

  <div class="ui large breadcrumb">
    <a href="{{ route('home') }}" class="section">Home</a>
    <i class="right chevron icon divider"></i>
    <a href="{{ route('web.galleries.index' , ['slug' => $gallery->category->slug]) }}" class="section"> {{ $gallery->category->name }} </a>
    <i class="right chevron icon divider"></i>
    <div class="active section"> {{ $gallery->name }} </div>
  </div>

	<h2> Gallery : {{ $gallery->name }}</h2>
    <div class="ui items">
        <div class="item">
            <div class="ui medium image">
            <img src="{{ asset($gallery->image) }}">
            </div>
            <div class="content">
            <a class="header">Header</a>
                <div class="meta">
                <span>
                	
                </span>
                </div>
                <div class="description">
                    <p>{!! $gallery->description !!}</p>
                </div>
                <div class="extra">
                Additional Details
                </div>
            </div>
        </div>
    </div>

    <div class="ui small images">
        @foreach ($gallery->image_tags as $element)
        	<img src="{{ asset($element['image']) }}" alt="{{ $element['tag'] }}">
        @endforeach
    </div>

       
        @if (count($related) > 0)
            <h2> Related Galleries </h2>
            @foreach ($related as $element)
                <div class="ui medium image imgdh">
                    <div class="ui dimmer">
                        <div class="content">
                            <div class="center">
                                <h2 class="ui inverted header"> {{ $element->name }} </h2>
                                <a class="ui orange tiny button" href="{{ route('web.galleries.index' , ['slug' => $element->category->slug, 'slug2' => $element->slug]) }}">View</a>
                            </div>
                        </div>
                    </div>

                    <img class="ui image" src="{{ asset($element->image) }}">
                </div>
            @endforeach
        @endif
	
@stop

@section('scripts')
    <script type="text/javascript">
        $('.imgdh').dimmer({ on: 'hover'});
    </script>
@stop
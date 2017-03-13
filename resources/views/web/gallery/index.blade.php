@extends('web.layouts.base')

@section('content')
	<h2 class="ui header"> Category : {{ $category->name }}</h2>
	<div class="ui cards">
	@foreach ($galleries as $element)
		<div class="card">
		  <div class="image ic-img">
		    <img src="{{ asset($element->image) }}">
		  </div>
		  <div class="content">
		    <div class="header">{{ $element->name }}</div>

		    @php
		    	$limit = strlen($element->description);
		    	$limit > 250 ? $text = substr($element->description, 0, 200).' ...' : $text = $element->description;
		    @endphp

		    <div class="description">
		      {!! $text !!}
		    </div>

		  </div>
		  <div class="ui bottom attached buttons">
		  	
	     	<a class="ui fluid primary button" href="{{ route('web.galleries.index', ['slug' => $category->slug , 'slug2' => $element->slug]) }}">
		      	<i class="play icon"></i>
		       Watch 
	       </a>
		   
		  </div>
		</div>

	@endforeach
	</div>
@stop
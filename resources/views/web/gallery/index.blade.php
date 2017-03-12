@extends('web.layouts.base')

@section('content')
	<h2> Galleries {{ $category->name }}</h2>
	<div class="ui cards">
	@foreach ($galleries as $element)
		<div class="card">
		  <div class="image">
		    <img src="{{ $element->image }}">
		  </div>
		  <div class="content">
		    <div class="header">{{ $element->name }}</div>
		    <div class="description">
		      {!! $element->description !!}
		    </div>
		  </div>
		  <div class="ui bottom attached buttons">
		
		    <div class="ui primary button">
		      <i class="play icon"></i>
		      Watch
		    </div>
		  </div>
		</div>

	@endforeach
	</div>
@stop
@extends('default.panel')

@section('content')
	
	{!! Form::model($gallery, ['route' => ['galleries.update', $gallery->id], 'method' => 'PUT', 'id' => 'general-form']) !!}
		@include('admin.gallery.forms.form')
	{!! Form::close() !!}

<div class="container white">
 	<div class="col-md-12">
          <button type="button" id="submit-btn" class="ui primary button"> Edit </button>
          <a href="{{ route('galleries.index') }}" class="ui red button"> Back </a>
  	</div>
</div>
  
@endsection
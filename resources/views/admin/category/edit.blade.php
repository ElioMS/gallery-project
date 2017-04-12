@extends('default.panel')

@section('content')
	
	{!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT', 'id' => 'general-form']) !!}
		@include('admin.category.forms.form')
	{!! Form::close() !!}

<div class="container white">
 	<div class="col-md-12">
          <button type="button" id="submit-btn" class="ui primary button"> Edit </button>
          <a href="{{ route('categories.index') }}" class="ui red button"> Back </a>
  	</div>
</div>
  
@endsection
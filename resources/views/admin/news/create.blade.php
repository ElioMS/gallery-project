@extends('default.panel')

@section('content')

{!! Form::open(['route' => 'news.store', 'method' => 'POST' , 'id' => 'general-form']) !!}
    @include('admin.news.forms.form')
{!! Form::close() !!}

<div class="container white">
  <div class="col-md-12">
      <button type="button" id="submit-btn" class="ui primary button"> Crear </button>
      <a href="{{ route('news.index') }}" class="ui red button"> Volver </a>
  </div>
</div>

@endsection

@section('scripts')
	
@endsection

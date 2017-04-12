@extends('default.metronic')

@section('content')

{!! Form::open(['route' => 'news.store', 'method' => 'POST' , 'id' => 'general-form']) !!}
    @include('admin.news.forms.form')
{!! Form::close() !!}

<div class="container white">
  <div class="col-md-12">
      <button type="button" id="submit-btn" class="btn btn-primary"> Crear </button>
      <a href="{{ route('news.index') }}" class="btn btn-danger"> Volver </a>
  </div>
</div>

@endsection

@section('scripts')
	
@endsection

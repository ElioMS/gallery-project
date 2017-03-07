@extends('default.panel')

@section('content')

{!! Form::open(['route' => 'categories.store', 'method' => 'POST' , 'id' => 'general-form']) !!}
    @include('admin.category.forms.form')
{!! Form::close() !!}

<div class="container">
  <div class="col-md-12">
      <button type="button" id="submit-btn" class="ui primary button"> Crear </button>
      <a href="{{ route('categories.index') }}" class="ui red button"> Volver </a>
  </div>
</div>

@endsection

@section('scripts')

@endsection

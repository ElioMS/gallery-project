@extends('default.metronic')

@section('content')

{!! Form::open(['route' => 'news.store', 'method' => 'POST' , 'id' => 'general-form' , 'class' => 'form-horizontal']) !!}
    @include('admin.news.forms.form')
{!! Form::close() !!}

<div class="container white">
  <div class="col-md-12">
      <button type="button" id="submit-btn" class="btn btn-success"> Crear </button>
      <a href="{{ route('news.index') }}" class="btn btn-danger"> Volver </a>
  </div>
</div>

@endsection

@section('scripts')
	<script type="text/javascript">
	</script>
@endsection

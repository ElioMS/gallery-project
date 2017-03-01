@extends('default.panel')

@section('content')
 	<div class="titles">
	    <h1> Galleries </h1>
		<a href="{{ route('galleries.create') }}" type="button" class="ui blue button"> <i class="add circle icon"></i> Add new </a>
		{{-- <button type="button" class="ui green button"> Exportar </button> --}}
		{{-- <button type="button" class="ui yellow button"> Mostrar inactivas </button> --}}
  	</div>

  	<div class="container white">

        <table id="myTable" class="ui celled table">
			<thead>
				<th> Image </th>
				<th> Name </th>
				<th> Status </th>
				<th> </th>
			</thead>

			<tbody>
			  @foreach ($galleries as $gallery)
			      <tr class="filas-tabla" data-id="{{ $gallery->id }}">
			        <td> <a href="{{ route('categories.edit', ['slug' => $gallery->slug]) }}"> {{ $gallery->name }} </a></td>
			        <td> <span class="ui @if ($gallery->status == 1) green @else red @endif  basic label"> {{ $gallery->statusname }} </span></td>
			        <td> <button type="button" class="ui tiny red button eliminar-elemento"  data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-trash"></i> </button></td>
			      </tr>
			  @endforeach
			</tbody>

        </table>

    </div>
@stop

@section('scripts')
	{{-- expr --}}
@stop
@extends('default.panel')

@section('content')
 	<div class="titles">
	    <h1> Galleries 
	    	<a href="{{ route('galleries.create') }}" type="button" class="ui inverted right floated blue button"> <i class="add circle icon"></i> Add new </a>
	    </h1>
  	</div>

  	@include('default.alerts.success')

  	<div class="container white">

        <table id="myTable" class="ui celled table">
			<thead>
				<th> Image </th>
				<th> Name </th>
				<th> </th>
			</thead>

			<tbody>
				@foreach ($galleries as $gallery)
					<tr class="table-rows" data-id="{{ $gallery->id }}">
						<td> 
							<a href="{{ route('galleries.edit', ['slug' => $gallery->slug]) }}"> 
								<img  src="{{ asset($gallery->image) }}">
						 	</a>
						</td>
						<td> {{ $gallery->name }} </td>
						<td> <button type="button" class="ui tiny red button eliminar-elemento"  data-toggle="modal" data-target="#delete-modal"> <i class="fa fa-trash"></i> </button></td>
					</tr>
				@endforeach
			</tbody>

        </table>

    </div>
@stop

@include('default.layouts.delete')
{{ Form::open(['route' => ['galleries.destroy' , ':c_id'] , 'method' => 'DELETE', 'id' => 'form-delete']) }}
{{ Form::close() }}

@section('scripts')
  {!! Html::script('admin/js/delete-element.js') !!}
@stop
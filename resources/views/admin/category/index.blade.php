@extends('default.panel')

@section('content')

 	<div class="titles">
	    <h1> Categories 
	    	<a href="{{ route('categories.create') }}" type="button" class="ui inverted right floated blue button"> 
	    		<i class="add circle icon"></i> Add new 
	    	</a>
	    </h1>
  	</div>

  	<div class="container white">

        <table id="myTable" class="ui blue celled table">
			<thead>
				<th> Image </th>
				<th> Name </th>
				<th> Status </th>
				<th> </th>
			</thead>

			<tbody>
				@foreach ($categories as $category)
					<tr class="table-rows" data-id="{{ $category->id }}">
						<td> <a href="{{ route('categories.edit', ['slug' => $category->slug]) }}"> <img src="{{ asset($category->image) }}" width="100" height="100"> </a></td>
						<td> {{ $category->name }} </td>
						<td> <span class="ui @if ($category->status == 1) green @else red @endif  basic label"> {{ $category->statusname }} </span></td>
						<td> 
						<button type="button" class="ui tiny red button eliminar-elemento"  data-toggle="modal" data-target="#delete-modal"> <i class="fa fa-trash"></i> </button>
						</td>
					</tr>
				@endforeach
			</tbody>
        </table>

    </div>
@stop

@include('default.layouts.delete')
{{ Form::open(['route' => ['categories.destroy' , ':c_id'] , 'method' => 'DELETE', 'id' => 'form-delete']) }}
{{ Form::close() }}

@section('scripts')
  {!! Html::script('admin/js/delete-element.js') !!}
@stop
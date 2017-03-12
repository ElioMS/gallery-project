@extends('default.panel')


@section('content')

 	<div class="titles">
	    <h2 class="ui inverted header"> News 
	    	<a href="{{ route('news.create') }}" type="button" class="ui inverted right floated blue button"> 
	    		<i class="add circle icon"></i> Add new 
	    	</a>
	    </h2>
  	</div>

  	<div class="container white">

        <table id="myTable" class="ui blue celled table">
			<thead>
				<th> Image </th>
				<th> Name </th>
				<th> Date </th>
				<th> </th>
			</thead>

			<tbody>
				@foreach ($news as $item)
					<tr class="table-rows" data-id="{{ $item->id }}">
						<td> <a href="{{ route('news.edit', ['slug' => $item->slug]) }}"> <img src="{{ asset($item->image) }}"> </a></td>
						<td> {{ $item->title }} </td>
						<td> {{ $item->date->format('d-m-Y') }} </td>
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
{{ Form::open(['route' => ['news.destroy' , ':c_id'] , 'method' => 'DELETE', 'id' => 'form-delete']) }}
{{ Form::close() }}

@section('scripts')
  {!! Html::script('admin/js/delete-element.js') !!}
@stop
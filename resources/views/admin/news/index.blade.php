@extends('default.metronic')

@section('content')

<div class="portlet box blue-hoki">
	<div class="portlet-title">
	    <h2 class="page-header"> News 
	    	<a href="{{ route('news.create') }}" type="button" class="btn btn-circle btn-info pull-right"> 
	    		 Add new <i class="fa fa-plus-circle"></i>
	    	</a>
	    </h2>
  	</div>

  	<div class="portlet-body">

        <table id="myTable" class="table table-bordered table-hover">
			<thead>
				<th> Image </th>
				<th> Name </th>
				<th> Date </th>
				<th> </th>
			</thead>

			<tbody>
				@foreach ($news as $item)
					<tr class="table-rows" data-id="{{ $item->id }}">
						<td> <a href="{{ route('news.edit', ['slug' => $item->slug]) }}"> <img src="{{ asset($item->image) }}" width="100" height="100"> </a></td>
						<td> {{ $item->title }} </td>
						<td> {{ $item->date->format('d-m-Y') }} </td>
						<td> 
						<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#delete-modal"> <i class="fa fa-trash"></i> </button>
						</td>
					</tr>
				@endforeach
			</tbody>
        </table>

    </div>
</div>
 	

  	
@stop

@include('default.layouts.delete')
{{ Form::open(['route' => ['news.destroy' , ':c_id'] , 'method' => 'DELETE', 'id' => 'form-delete']) }}
{{ Form::close() }}

@section('scripts')
  {!! Html::script('admin/js/delete-element.js') !!}
@stop
@extends('default.panel')

@section('content')
 	<div class="titles">
	    <h1> Contact form 
	    	<a href="{{ route('admin.export.contacts') }}" type="button" class="ui inverted right floated basic green button"> <i class="file excel outline icon"></i> Export </a>
	    </h1>
  	</div>

  	@include('default.alerts.success')

  	<div class="container white">

        <table id="myTable" class="ui very basic table">
			<thead>
				<th> Name & LastName </th>
				<th> Email </th>
				<th> Address </th>
				<th> Phone </th>
				<th> Date </th>
			</thead>

			<tbody>
				@foreach ($contacts as $contact)
					<tr class="table-rows">
						<td> {{ $contact->fullName }} </td>
						<td> {{ $contact->email }} </td>
						<td> {{ $contact->address }} </td>
						<td> {{ $contact->phone }} </td>
						<td> {{ $contact->created_at->toFormattedDateString() }} </td>
					</tr>
				@endforeach
			</tbody>

        </table>

    </div>
@stop

@section('scripts')
 
@stop
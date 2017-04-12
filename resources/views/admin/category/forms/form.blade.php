<style>
	.ui.popup .content{
		min-height: auto !important;
		padding: 0px !important;
	}
</style>

<div class="ui blue segment">
	<h2 class="ui blue header">
	    <strong><i> Create and edit </i></strong>
	    <div class="sub header"> Some text about categories </div>
  	</h2>
  	<div class="ui divider"></div>

		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
			{!! Form::label('name') !!}
			{!! Form::text('name', null , ['class' => 'form-control', 'placeholder' => 'Category name']) !!}
			{!! $errors->first('name', '<span class="help-block"><strong> :message </strong></span>') !!}
		</div>

		<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
			{!! Form::label('description') !!}
			{!! Form::textarea('description', null , ['class' => 'ckeditor']) !!}
			{!! $errors->first('description', '<span class="help-block"><strong> :message </strong></span>') !!}
		</div>

		<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
			@if (isset($category))
				{!! Form::imagen('image', $category->image) !!}
			@else
				{!! Form::imagen('image') !!}
			@endif
			{!! $errors->first('image', '<span class="help-block"><strong> :message </strong></span>') !!}
		</div>

		<div class="form-group">
			{!! Form::stdCheckbox('status', 'Put as active?') !!}
		</div>

		<input type="text" data-content="Add users to your feed" data-inverted="" >

		<div data-tooltip="Add users to your feed" data-inverted="">
			<input type="text"  >
		</div>
		
		<button data-tooltip="Add users to your feed" data-inverted=""> aaa </button>
		

</div>

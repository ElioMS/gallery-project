<div class="ui blue segment">
	<h2 class="ui blue header">
	    <strong><i> Create and edit </i></strong>
	    <div class="sub header"> News </div>
  	</h2>

  	<div class="ui divider"></div>

		<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
			{!! Form::label('title') !!}
			{!! Form::text('title', null , ['class' => 'form-control', 'placeholder' => 'Category title']) !!}
			{!! $errors->first('title', '<span class="help-block"><strong> :message </strong></span>') !!}
		</div>

		<div class="form-group {{ $errors->has('abstract') ? 'has-error' : '' }}">
			{!! Form::label('abstract') !!}
			{!! Form::textarea('abstract', null , ['class' => 'ckeditor']) !!}
			{!! $errors->first('abstract', '<span class="help-block"><strong> :message </strong></span>') !!}
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
			{!! Form::datePicker('date') !!}
		</div>

</div>

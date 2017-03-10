<div class="ui blue segment">
	<h2 class="ui blue header">
	    <strong><i> Create and edit </i></strong>
	    <div class="sub header"> Some text about galleries </div>
  	</h2>
  	<div class="ui divider"></div>

  		<div class="form-group">
  			{!! Form::label('Category') !!}
  			{!! Form::select('category_id', $categories , null , ['class' => 'form-control']) !!}
  		</div>

		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
			{!! Form::label('name') !!}
			{!! Form::text('name', null , ['class' => 'form-control', 'placeholder' => 'Gallery name']) !!}
			{!! $errors->first('name', '<span class="help-block"><strong> :message </strong></span>') !!}
		</div>

		<div class="form-group">
			{!! Form::label('description') !!}
			{!! Form::textarea('description', null , ['class' => 'ckeditor']) !!}
		</div>

		<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
			@if (isset($gallery))
				{!! Form::imagen('image', $gallery->imagen) !!}
			@else
				{!! Form::imagen('image') !!}
			@endif
			{!! $errors->first('image', '<span class="help-block"><strong> :message </strong></span>') !!}
		</div>

		<div class="form-group">
			<div id="div-image_tags">
				
			</div>

			<button class="ui active orange button" id="add-image_tags"> <i class="add square icon"></i> Add more </button>
		</div>

</div>


<div class="portlet light">
	<div class="portlet-title">
        <div class="caption font-red-sunglo">
            <i class="icon-settings font-red-sunglo"></i>
            <span class="caption-subject bold uppercase"> Create & edit - NEWS </span>
        </div>
    </div>

    <div class="portlet-body form">
		<div class="form-body">

	    	<div class="form-group form-md-line-input {{ $errors->has('title') ? 'has-error' : '' }}">
				{{ Form::text('title', null , ['class' => 'form-control', 'id' => "form_control_1" ,'placeholder' => 'Category title']) }}
				{!! Form::label('title') !!}
				{!! $errors->first('title', '<span class="help-block"><strong> :message </strong></span>') !!}
			</div>

			<div class="form-group form-md-line-input {{ $errors->has('abstract') ? 'has-error' : '' }}">
				{!! Form::textarea('abstract', null , ['class' => 'ckeditor form-control' , 'id' => 'form_control_1' ]) !!}
				{!! Form::label('abstract') !!}
				{!! $errors->first('abstract', '<span class="help-block"><strong> :message </strong></span>') !!}
			</div>

			<div class="form-group form-md-line-input {{ $errors->has('description') ? 'has-error' : '' }}">
				{!! Form::textarea('description', null , ['class' => 'ckeditor form-control']) !!}
				{!! Form::label('description') !!}
				{!! $errors->first('description', '<span class="help-block"><strong> :message </strong></span>') !!}
			</div>
		</div>
    </div>
</div>


{{-- <div class="ui blue segment">
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

</div> --}}

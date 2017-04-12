<div class="portlet light">
	<div class="portlet-title">
        <div class="caption font-red-sunglo">
            <i class="icon-settings font-red-sunglo"></i>
            <span class="caption-subject bold uppercase"> Create & edit - NEWS </span>
        </div>
    </div>

    <div class="portlet-body form">
		<div class="form-body">

	    	<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
	    		{!! Form::label('title', 'Title *' , ['class' => 'col-md-2 control-label']) !!}
	    		<div class="col-md-10">
					{!! Form::text('title', null , ['class' => 'form-control' ,'placeholder' => 'Category title']) !!}
					{!! $errors->first('title', '<span class="help-block"><strong> :message </strong></span>') !!}
				</div>
				
			</div>

			<div class="form-group {{ $errors->has('abstract') ? 'has-error' : '' }}">
				{!! Form::label('abstract', null , ['class' => 'col-md-2 control-label']) !!}
				<div class="col-md-10">
					{!! Form::textarea('abstract', null , ['class' => 'ckeditor' , 'id' => 'form_control_1' ]) !!}
				</div>
				
				{!! $errors->first('abstract', '<span class="help-block"><strong> :message </strong></span>') !!}
			</div>

			<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
				{!! Form::label('description', null, ['class' => 'col-md-2 control-label']) !!}
				<div class="col-md-10">
					{!! Form::textarea('description', null , ['class' => 'ckeditor form-control']) !!}
					{!! $errors->first('description', '<span class="help-block"><strong> :message </strong></span>') !!}
				</div>
			</div>

			<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
				@if (isset($category))
					{!! Form::imagen('image', $category->image) !!}
				@else
					{!! Form::imagen('image') !!}

					<div class="col-md-10 col-md-offset-2">
					{!! $errors->first('image', '<span class="help-block"><strong> :message </strong></span>') !!}
					</div>
				@endif
				
			</div>

			<div class="form-group">
				{!! Form::datePicker('date') !!}
			</div>
		</div>
    </div>
</div>


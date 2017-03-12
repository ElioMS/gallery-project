@extends('web.layouts.base')

@section('content')
	

	<div class="ui container">

	<h2 class="header ui message"> Contact Us </h2>

		{!! Form::open(['id' => 'contact-form']) !!}
		<div class="ui large form">
			<div class="ui two collumn grid">
				<div class="nine wide column">
					<div class="ui segment ">
							<div class="two fields">
								<div class="required field">
									<label> Name </label>
									<input type="text" name="name">
								</div>
								
								<div class="required field">
									<label> Lastname </label>
									<input type="text" name="lastname">
								</div>
							</div>

							<div class="two fields">
								<div class="required field">
									<label> Email </label>
									<input type="text" name="email">
								</div>

								<div class="field">
									<label> Phone </label>
									<input type="text" name="phone">
								</div>
								
							</div>

							<div class="field">
								<label> Address </label>
								<input type="text" name="address">
							</div>

							<div class="required field">
								<label> Message </label>
								<textarea name="message" rows="5x5"></textarea>
							</div>

							<div class="field">
								<div class="ui checkbox">
								      <input id="check" type="checkbox" tabindex="0" class="hidden">
								      <label> I agree with the <a href="">terms and condition</a></label>
							    </div>
							</div>
			
							<a class="ui green right button" id="snd-btn">Submit</a>
					</div>
				</div>

				<div class="three wide column">
					<h2> Google Maps </h2>
				</div>


			</div>
		</div>

		{!! Form::close() !!}

	</div>

@stop

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function () {
			$('.ui.checkbox').checkbox();

			$('#snd-btn').on('click' , function (e) {
				e.preventDefault();
				var form = $('#contact-form').serialize();
				$.ajax({
					url: "{{ route('contact.store') }}",
					type: 'post',
					dataType: 'json',
					data : form,
					success: function (response) {
						console.log(response)
					},
					error : function (xhr , status , error) {
						console.log(xhr.responseText)
					}
				});
			})
		});
	</script>
@stop


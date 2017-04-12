<style type="text/css">
	.popup {
		right: 15;
		position: absolute; 
		z-index: 9999;
	}
</style>

@if ($message = session('success'))
<div class="popup">
 	<div class="alert alert-success">
  		<strong> {{ $message }}</strong> .
	</div>
</div>
@endif

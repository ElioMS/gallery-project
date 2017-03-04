@if ($message = session('success'))
<div class="alert alert-success" role="alert" style="z-index: 9999999;">
    <h4> <i class="fa fa-check-circle"></i> {{ $message }} </h4>  
</div>
@endif

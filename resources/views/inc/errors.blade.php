<!-- Erros Laravel -->
@if (count($errors) != 0)
	@foreach ($errors->all() as $error)
	<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<p> {{ $error }} </p>
	</div>
	@endforeach
@endif


<!-- Erros BD -->
@if (isset($errors_bd))
	@foreach ($errors_bd as $error)
	<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<p> {{ $error }} </p>
	</div>
	@endforeach
@endif
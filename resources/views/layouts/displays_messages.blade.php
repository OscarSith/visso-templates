@if (Session::has('success_message'))
<div class="col-sm-12">
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<span>{{ Session::get('success_message') }}</span>
	</div>
</div>
@elseif (Session::has('error_message'))
<div class="col-sm-12">
	<div class="alert error-message">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		{{ Session::get('error_message') }}
	</div>
</div>
@endif
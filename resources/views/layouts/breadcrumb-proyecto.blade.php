<div class="row">
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}">Inicio</a></li>
		@if (isset($proyectos))
			<li class="active">Proyectos</li>
		@else
			<li><a href="{{ url('proyectos') }}">Proyectos</a></li>
		@endif
		@if (isset($proyecto))
			<li class="active">{{ $proyecto->proy_nombre }}</li>
		@endif
	</ol>
</div>
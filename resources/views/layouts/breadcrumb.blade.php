<div class="row">
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}">Inicio</a></li>
		@if (isset($view) && $view == 1)
			<li class="active">Productos {{ $marca }}</li>
		@else
			<li><a href="{{ route('categorias', $marca) }}">Productos {{ $marca }}</a></li>
		@endif
		@if (isset($productNivel) && $productNivel == 1)
			<li class="active">{{ $cat_name }}</li>
		@elseif (isset($cat_name))
			<li><a href="{{ route('catByProduct', [$marca, $cat_name])}}">{{ $cat_name }}</a></li>
		@endif
		@if (isset($productoNombre))
			<li class="active">{{ $productoNombre }}</li>
		@endif
	</ol>
</div>
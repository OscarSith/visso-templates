<div class="row">
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}">Inicio</a></li>
		@if ((isset($view) && $view == 1))
			<li class="active">{{ $marca }}</li>
		@else
			<li><a href="{{ route('categorias', $marca) }}">{{ $marca }}</a></li>
		@endif

		@if ($cat_name != '')
			@if (isset($productNivel) && $productNivel == 1)
				<li class="active">{{ $cat_name }}</li>
			@elseif (isset($cat_name))
				<li><a href="{{ route('catByProduct', [$marca, str_slug($cat_name)])}}">{{ $cat_name }}</a></li>
			@endif
		@endif

		@if (isset($sub_cat_name) && $productNivel == 2)
			<li class="active">{{ $sub_cat_name }}</li>
		@elseif (isset($sub_cat_name))
			<li><a href="{{ route('catBySubCatID', [$marca, str_slug($cat_name), str_slug($sub_cat_name)])}}">{{ $sub_cat_name }}</a></li>
		@endif

		@if (isset($producto) && $cat_name != '')
			<li class="active" id="breadcrumbProductName">{{ $producto->pro_nombre }}</li>
		@endif
	</ol>
</div>
@extends('layouts.master')

@section('content')
<?php
	$total = (count($productos) > 0) ? $productos->count() : $categorias->count();
	$flag = ($total <= 5 || $total == 6);
?>
<section id="products" class="products section-area">
	<div class="container" id="{{ $marca }}">
		@include('layouts.breadcrumb')
		<div class="cat-name">
			<div>{{ $cat_name }}</div>
		</div>
		<div class="row visso-list text-center">
			<div class="col-md-offset-1 col-md-10 {{ $flag ? 'no-float' : ''}}">
			@if (count($productos) > 0 && count($categorias) == 0)
				@foreach($productos as $n => $producto)
				@if (($total == 4 && $n == 2) || ($total == 7 && $n == 4))
					<div class="clearfix no-float col-sm-12">
				@endif
					<div class="col-md-3 col-sm-4">
						<div class="thumbnail wow fadeInUp" data-wow-delay="{{ $n/5 }}s">
							<a href="{{ route('detalleProducto', [$marca, str_slug($cat_name), $producto->id, str_slug($producto->pro_nombre)]) }}" class="fix-list">
								<img src="{{ asset('images/product-imgs/' . $producto->pro_imagen_default) }}" alt="{{ $producto->pro_nombre }}" class="img-responsive">
								<div class="caption">
									<div class="product-details">
										<strong>{{ $producto->pro_nombre }}</strong>
									</div>
								</div>
							</a>
						</div>
					</div>
				@if (($total == 4 && $n == 3) || ($total == 7 && $n == 6))
					</div>
				@endif
				@endforeach
			@else
				@foreach($categorias as $n => $categoria)
				@if (($total == 4 && $n == 2) || (($total == 7 || $total == 6) && $n == 3))
					<div class="col-sm-12 no-float">
				@endif
					<div class="col-md-3 col-sm-4">
						<div class="thumbnail wow fadeInUp" data-wow-delay="{{ $n/4 }}s">
							@if ($categoria->cat_parent > 0)
							<a href="{{ route('detalleProducto', [$marca, str_slug($cat_name), $categoria->id, str_slug($categoria->cat_nombre)]) }}" class="fix-list">
							@else
							<a href="{{ route('catBySubCatID', [$marca, str_slug($cat_name), str_slug($categoria->cat_nombre)]) }}" class="fix-list">
							@endif
								<img src="{{ asset('images/categorias/' . $categoria->cat_imagen) }}" alt="{{ $categoria->cat_nombre }}" class="img-responsive">
								<div class="caption">
									<div class="product-details">
										<div class="clearfix text-center">
											<strong>{{ $categoria->cat_nombre }}</strong>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				@if (($total == 4 && $n == 3) || ($total == 7 && $n == 6))
					</div>
				@endif
				@endforeach
			@endif
			</div>
		</div>
	</div>
</section>
@endsection
@section('footer')
@if ($marca === 'quadrifoglio')
<div class="container">
	<div class="content-link-partners">
		<ul class="list-unstyled text-center">
			<li class="cert-2 quadri">
				<a href="https://ic.fsc.org/es" target="_blank"><img src="{{ asset('images/partners2.png') }}"></a>
			</li>
			<li class="cert-5">
				<a href="http://www.pannelloecologico.com/" target="_blank"><img src="{{ asset('images/partners5.png') }}"></a>
			</li>
		</ul>
	</div>
</div>
@elseif($marca === 'aresline')
<div class="container">
	<div class="content-link-partners">
		<ul class="list-unstyled text-center aresline">
			<li class="cert-2 quadri">
				<a href="http://www.aresline.com/en_US/pagine/5/certified-quality" target="_blank"><img src="{{ asset('images/partners1.png') }}"></a>
			</li>
			<li class="cert-5">
				<a href="http://www.aresline.com/en_US/pagine/5/certified-quality" target="_blank"><img src="{{ asset('images/partners3.png') }}"></a>
			</li>
			<li class="cert-5">
				<a href="http://www.aresline.com/en_US/pagine/5/certified-quality" target="_blank"><img src="{{ asset('images/partners4.png') }}"></a>
			</li>
			<li class="cert-5">
				<a href="http://www.aresline.com/en_US/pagine/5/certified-quality" target="_blank"><img src="{{ asset('images/partners6.png') }}"></a>
			</li>
		</ul>
	</div>
</div>
@endif
@endsection
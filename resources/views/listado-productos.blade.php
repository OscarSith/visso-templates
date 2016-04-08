@extends('layouts.master')

@section('content')
<?php
	$total = $productos->count();
	$flag = $total <= 5;
?>
<section id="products" class="products section-area">
	<div class="container" id="{{ $marca }}">
		@include('layouts.breadcrumb')
		<div class="cat-name">
			<div>{{ $cat_name }}</div>
		</div>
		<div class="row visso-list text-center">
			<div class="{{ $flag ? 'no-float' : ''}}">
				@foreach($productos as $n => $producto)
				@if ($total == 4 && $n == 2)
					<div>
				@endif
				<div class="col-md-3 col-sm-4">
					<div class="thumbnail wow fadeInUp" data-wow-delay="{{ $n/4 }}s">
						<a href="{{ route('detalleProducto', [$marca, str_slug($cat_name), $producto->id, str_slug($producto->pro_nombre)]) }}">
							<img src="{{ asset('images/product-imgs/' . $producto->pro_imagen_default) }}" alt="{{ $producto->pro_nombre }}" class="img-responsive">
						</a>
					</div>
				</div>
				@if ($total == 4 && $n == 3)
					</div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
</section>
@endsection
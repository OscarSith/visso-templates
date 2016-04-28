@extends('layouts.master')

@section('content')
<?php
	$total = $categorias->count();
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
				@foreach($categorias as $n => $categoria)
				@if (($total == 4 && $n == 2))
					<div class="col-sm-12 no-float">
				@endif
					<div class="col-md-3 col-sm-4">
						<div class="thumbnail wow fadeInUp" data-wow-delay="{{ $n/4 }}s">
							@if ($categoria->cat_detalle)
							<a href="{{ route('detalleProducto', [$marca, str_slug($cat_name), $categoria->product_id, str_slug($categoria->cat_nombre)]) }}" class="fix-list chota-detalle">
							@else
							<a href="{{ route('catBySubCatID', [$marca, str_slug($cat_name), $categoria->cat_parent, str_slug($categoria->cat_nombre)]) }}" class="fix-list">
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
				@if (($total == 4 && $n == 3))
					</div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
</section>
@endsection
@section('footer')
@include('layouts.certificaciones')
@endsection
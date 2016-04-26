@extends('layouts.master')

@section('content')
<?php
	$total = $productos->count();
	$flag = ($total <= 5 || $total == 6);
?>
<section id="products" class="products section-area">
	<div class="container" id="{{ $marca }}">
		@include('layouts.breadcrumb')
		<div class="cat-name">
			<div>{{ $sub_cat_name }}</div>
		</div>
		<div class="row {{ $marca }}-list text-center">
			<div class="col-md-offset-1 col-md-10 {{ $flag ? 'no-float' : ''}}">
				@foreach($productos as $n => $producto)
				@if (($total == 4 && $n == 2) || ($total == 7 && $n == 4) || $n == 8)
					<div class="clearfix no-float col-sm-12">
				@endif
				<div class="col-md-3 col-sm-4">
					<div class="thumbnail wow fadeInUp" data-wow-delay="{{ $n/5 }}s">
						<a href="{{ route('detalleProductoSub', [$marca, $cat_name, $sub_cat_name, $producto->id, str_slug($producto->pro_nombre)])}}" class="fix-list">
							<img src="{{ asset('images/product-imgs/' . $producto->pro_imagen_default) }}" alt="{{ $producto->pro_nombre }}" class="img-responsive">
							<div class="caption">
								<div class="product-details">
									<div class="clearfix text-center">
										<strong>{{ $producto->pro_nombre }}</strong>
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
			</div>
		</div>
	</div>
</section>
@endsection
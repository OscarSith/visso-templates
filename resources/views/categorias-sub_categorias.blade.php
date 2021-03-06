@extends('layouts.master')

@section('title', ucwords($marca))

@section('content')
<section id="products" class="products section-area">
	<div class="container">
		@include('layouts.breadcrumb')
		<div class="row logo-marca">
			<div class="col-sm-12">
				<img src="{{ asset('images/logo-' . $marca . '-productos.png') }}" alt="" class="img-responsive center-block" style="width: 164px;">
			</div>
		</div>
		<div class="row visso-list">
			<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10">
				<div class="row {{ $categorias->count() == 2 ? 'fix-vertical-center' : '' }}" {{ $view == 1 ? ("id=marca-" . $marca ) : ''}}>
					@if (!$categorias->isEmpty())
						@foreach($categorias as $n => $categoria)
						<div class="col-sm-4">
							<div class="thumbnail wow fadeInUp" data-wow-delay="{{ $n/4 }}s">
								@if ($categoria->cat_detalle)
									@if ($categoria->cat_sub_nivel == 0)
									<a href="{{ route('detalleProductoSimple', [$marca, str_slug($categoria->cat_nombre), $categoria->product_id]) }}" class="fix-list">
									@else
									<a href="{{ route('detalleProducto', [$marca, str_slug($categoria->cat_nombre), $categoria->product_id, str_slug($categoria->cat_nombre)]) }}" class="fix-list">
									@endif
								@else
									<a href="{{ route('catByProduct', [str_slug($marca), str_slug($categoria->cat_nombre)])}}" class="fix-list">
								@endif
									<img src="{{ asset('images/categorias/'. $categoria->cat_imagen) }}" alt="{{ strtolower($categoria->cat_nombre) }}" class="img-responsive">
								</a>
							</div>
						</div>
						@endforeach
					@else
						<div class="col-sm-12">
							<br><br><br>
							<h4 class="text-center">Lo sentimos, no hay resultados que mostrar</h4>
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('footer')
@include('layouts.certificaciones')
@endsection
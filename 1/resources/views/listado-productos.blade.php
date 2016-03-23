@extends('layouts.master')

@section('content')
<section id="products" class="products section-area">
	<div class="container">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{ url('/') }}">Inicio</a></li>
				<li><a href="{{ route('categorias') }}">Productos</a></li>
				<li><a href="{{ route('catByProduct', [$catName, $parent_cat_id]) }}">{{ $catName }}</a></li>
				<li class="active">{{ $cat_name_sub }}</li>
			</ol>
		</div>
		<div class="row visso-list">
			@foreach($productos as $n => $producto)
			<div class="col-md-3 col-sm-4">
				<div class="thumbnail wow fadeInUp" data-wow-delay="{{ $n/4 }}s">
					<img src="{{ asset('images/categorias/' . $producto->pro_imagen_default) }}" alt="{{ $producto->pro_nombre }}" class="img-responsive">
					<div class="caption">
						<div class="product-details">
							<a href="#">
								<div class="clearfix">
									<img src="{{ asset('images/equis.png') }}" style="height: 27px;" class="center-block">
								</div>
								<div class="clearfix text-center">
									<strong>{{ $producto->pro_nombre }}</strong>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection
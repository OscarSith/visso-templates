@extends('layouts.master')

@section('content')
<section id="products" class="products section-area">
	<div class="container">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{ url('/') }}">Inicio</a></li>
				<li class="active">Productos</li>
			</ol>
		</div>
		<div class="row visso-list">
			@foreach($categorias as $n => $categoria)
			<div class="col-md-3 col-sm-4">
				<div class="thumbnail wow fadeInUp" data-wow-delay="{{ $n/4 }}s">
					<img src="{{ asset('images/categorias/'. $categoria->cat_imagen) }}" alt="{{ strtolower($categoria->cat_nombre) }}" class="img-responsive">
					<div class="caption">
						<div class="product-details">
							<a href="{{ route('catByProduct', [str_slug($categoria->cat_nombre), $categoria->cat_parent]) }}">
								<div class="clearfix">
									<img src="{{ asset('images/equis.png') }}" style="height: 27px;" class="center-block">
								</div>
								<div class="clearfix text-center">
									<strong>{{ $categoria->cat_nombre }}</strong>
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
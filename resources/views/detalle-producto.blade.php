@extends('layouts.master')

@section('content')
<section class="products section-area">
	<div class="container" id="{{ $marca }}">
		@include('layouts.breadcrumb')
		<div class="cat-name">
			<div>{{ $cat_name }}</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="img-size">
					<img src="{{ asset('images/product-imgs/' . $producto->pro_imagen_default) }}" alt="{{ $producto->pro_nombre }}" class="img-responsive center-block" id="productImage">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="row">
					<h2 class="product-title text-center">
						<div id="productName">{{ $productoNombre }}</div>
					</h2>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6">
								<img src="{{ asset('images/share-facebook.jpg')}}" width="70px">
							</div>
							<div class="col-sm-6 text-right pright-0">
								<a href="#" class="btn btn-visso">SOLICITAR COTIZACIÓN</a>
							</div>
						</div>
						<div class="col-sm-12">
							<p class="about-banners product-desc text-justify" id="product-description">{{ $producto->pro_descripcion }}</p>
						</div>
					</div>
					<div class="col-sm-12 about-banners">
						<span class="txt-others">OTROS ACCESORIOS</span>
						<div class="others-products">
							@foreach($productosPorCategoria as $rec)
							<div class="item-products">
								<img src="{{ asset('images/product-imgs/' . $rec->pro_imagen_default) }}" class="img-responsive" alt="{{ $rec->pro_nombre }}" title="{{ $rec->pro_nombre }}">
								<input type="hidden" value="{{ $rec->pro_descripcion }}" data-name="{{ $rec->pro_nombre }}" data-img="{{ $rec->pro_imagen_default }}">
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@extends('layouts.master')

@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<section class="products section-area">
	<div class="container" id="{{ $marca }}">
		@include('layouts.breadcrumb')
		<div class="cat-name">
			<div>
				@if ($cat_name != '')
					{{ isset($sub_cat_name) ? $sub_cat_name : $cat_name }}
				@else
					{{ $producto->pro_nombre }}
				@endif
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="img-size wow fadeInUp" data-wow-delay="0s">
					<img src="{{ asset('images/product-imgs/' . $producto->pro_imagen_default) }}" alt="{{ $producto->pro_nombre }}" class="img-responsive center-block" id="productImage">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="row">
					<h2 class="product-title text-center">
						<div id="productName">{{ $producto->pro_nombre }}</div>
					</h2>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6">
								<div class="fb-share-button" data-href="https://www.facebook.com/VissoMuebles/" data-layout="button_count" data-mobile-iframe="true"></div>
							</div>
							<div class="col-sm-6 text-right pright-0">
								<a href="{{ url('contacto') }}" class="btn btn-visso">SOLICITAR COTIZACIÓN</a>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="about-banners product-desc text-justify" id="product-description">{!! $producto->pro_descripcion !!}</div>
						</div>
					</div>
					<div class="col-sm-12 about-banners">
						<div class="others-products">
							@foreach($productosPorCategoria as $n => $rec)
							<div class="item-products wow fadeInDown" data-wow-delay="{{ $n/4 }}s">
								<img src="{{ asset('images/product-imgs/' . $rec->pro_imagen_default) }}" class="img-responsive" alt="{{ $rec->pro_imagen_default }}" data-img="{{ $rec->pro_imagen_default }}">
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
@section('footer')
@include('layouts.certificaciones')
@endsection
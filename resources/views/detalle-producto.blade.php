@extends('layouts.master')
<?php $title = '' ?>
@if ((isset($producto) && $cat_name != '') || $marca == 'aresline')
	<?php $title = ucwords(strtolower($producto->pro_nombre)) ?>
@else
	<?php $title = ucwords($sub_cat_name) ?>
@endif

@section('title', $title)

@section('content')
<div id="fb-root"></div>
<script>
(function(d, s, id) {
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
							<div class="col-xs-5 col-sm-5">
								<button class="btn btn-small btn-primary" disabled id="share-fb"><i class="fa fa-facebook"></i> <span>Cargando...</span></button>
							</div>
							<div class="col-xs-7 col-sm-7 text-right pright-0">
								<a href="{{ url('contacto') }}" class="btn btn-visso"><span class="hidden-xs">SOLICITAR </span>COTIZACIÓN</a>
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
								<img src="{{ asset('images/product-imgs/' . $rec->pro_imagen_default) }}" class="img-responsive" alt="{{ $rec->pro_imagen_default }}" data-img="{{ $rec->pro_imagen_default }}" data-name="{{ $rec->name }}" data-description="{{ $rec->description }}">
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="modal fade" id="facebookModalId" tabindex="-1" role="dialog" aria-labelledby="facebookModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="facebookModal">Compartir en Facebook</h4>
			</div>
			<div class="modal-body">
				<form id="form-facebook-share">
					<div class="form-group">
						<textarea id="fbDescription" cols="30" rows="3" placeholder="Algún mensaje adicional..." class="form-control"></textarea>
					</div>
					<div class="row">
						<div class="col-md-6">
							<img src="{{ asset('images/product-imgs/' . $producto->pro_imagen_default) }}" id="fbImg" class="img-responsive center-block">
						</div>
						<div class="col-md-6" id="fbMessage">{!! $producto->pro_descripcion !!}</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" id="shareContent">Compartir</button>
			</div>
		</div>
	</div>
</div>
@endsection
@section('footer')
@include('layouts.certificaciones')
@endsection
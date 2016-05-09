@extends('layouts.master')

@section('title', 'Proyecto ' . $proyecto->proy_nombre)

@section('content')
<section id="detalle-proyecto" class="products">
	<div class="container">
		@include('layouts.breadcrumb-proyecto')
		@if ($proyecto->proy_logotipo != '')
		<div class="cat-name">
			<div>
				<img src="{{ asset('images/proyectos/logotipos/' . $proyecto->proy_logotipo) }}" class="img-responsive center-block">
			</div>
		</div>
		@else
		&nbsp;
		@endif
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-6 wow fadeInUp" data-wow-delay="0s">
					<img src="{{ asset('images/proyectos/' . $proyecto->proy_imagen_default) }}" alt="" class="img-responsive center-block" id="productImage">
				</div>
				<div class="col-sm-6">
					<h2 class="product-title proyect-title text-center">
						<div id="productName">{{ $proyecto->proy_nombre }}</div>
					</h2>
					<div class="lead-info">
						{!! $proyecto->proy_descripcion !!}
					</div>
					<div class="others-proyects">
						@foreach($galery as $n => $rec)
						<div class="item-products item-proyects wow fadeInDown" data-wow-delay="{{ $n/4 }}s" data-img="{{ $rec }}" style="background-image: url('{{ asset('images/proyectos/' . $rec) }}')">
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
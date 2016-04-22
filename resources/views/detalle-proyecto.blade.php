@extends('layouts.master')

@section('content')
<section id="detalle-proyecto" class="products">
	<div class="container">
		<div class="cat-name">
			<div>
				<img src="{{ asset('images/proyectos/logotipos/' . $proyecto->proy_logotipo) }}" class="img-responsive center-block">
			</div>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-6">
					<img src="{{ asset('images/proyectos/' . $proyecto->proy_imagen_default) }}" alt="" class="img-responsive center-block" id="productImage">
				</div>
				<div class="col-sm-6">
					<h2 class="product-title proyect-title text-center">
						<div id="productName">¿Porque trabajar con nosotros?</div>
					</h2>
					<div class="lead-info">
						{!! $proyecto->proy_descripcion !!}
					</div>
					<div class="others-proyects">
						@foreach($galery as $rec)
						<div class="item-products item-proyects" data-img="{{ $rec }}" style="background-image: url('{{ asset('images/proyectos/' . $rec) }}')">
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
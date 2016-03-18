@extends('layouts.master')

@section('content')
<section id="products" class="products section-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="{{ url('/') }}">Nosotros</a></li>
					<li class="active">Productos</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-4">
				<div class="thumbnail">
					<img src="images/Almacenero_puertas_batientes.jpg" alt="Product Image" class="img-responsive">
					<div class="caption">
						<div class="product-details">
							<a href="{{ url('detalle-producto') }}">
								<div class="clearfix">
									<img src="images/equis.png" style="height: 27px;" class="center-block">
								</div>
								<div class="clearfix text-center">
									<strong>Almacenero con puertas</strong>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4">
				<div class="thumbnail">
					<img src="images/Almaceneros_puertas_corredizas.jpg" alt="Product Image" class="img-responsive">
					<div class="caption">
						<div class="product-details">
							<a href="{{ url('detalle-producto') }}">
								<div class="clearfix">
									<img src="images/equis.png" style="height: 27px;" class="center-block">
								</div>
								<div class="clearfix text-center">
									<strong>Almacenero con puertas corredizas</strong>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4">
				<div class="thumbnail">
					<img src="images/confort_2.jpg" alt="Product Image" class="img-responsive">
					<div class="caption">
						<div class="product-details">
							<a href="{{ url('detalle-producto') }}">
								<div class="clearfix">
									<img src="images/equis.png" style="height: 27px;" class="center-block">
								</div>
								<div class="clearfix text-center">
									<strong>Silla confort</strong>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4">
				<div class="thumbnail">
					<img src="images/Credenza_de_puertas_corredizas.jpg" alt="Product Image" class="img-responsive">
					<div class="caption">
						<div class="product-details">
							<a href="{{ url('detalle-producto') }}">
								<div class="clearfix">
									<img src="images/equis.png" style="height: 27px;" class="center-block">
								</div>
								<div class="clearfix text-center">
									<strong>Credena con puertas corredizas</strong>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4">
				<div class="thumbnail">
					<img src="images/Credenza_mixta_larga.jpg" alt="Product Image" class="img-responsive">
					<div class="caption">
						<div class="product-details">
							<a href="{{ url('detalle-producto') }}">
								<div class="clearfix">
									<img src="images/equis.png" style="height: 27px;" class="center-block">
								</div>
								<div class="clearfix text-center">
									<strong>Credenza mixta larga</strong>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4">
				<div class="thumbnail">
					<img src="images/Credenza_porta_documentos.jpg" alt="Product Image" class="img-responsive">
					<div class="caption">
						<div class="product-details">
							<a href="{{ url('detalle-producto') }}">
								<div class="clearfix">
									<img src="images/equis.png" style="height: 27px;" class="center-block">
								</div>
								<div class="clearfix text-center">
									<strong>Credena porta documentos</strong>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thumbnail">
					<img src="images/gerencial_dukon_0003_prv.jpg" alt="Product Image" class="img-responsive">
					<div class="caption">
						<div class="product-details">
							<a href="{{ url('detalle-producto') }}">
								<div class="clearfix">
									<img src="images/equis.png" style="height: 27px;" class="center-block">
								</div>
								<div class="clearfix text-center">
									<strong>Gerencial dukon</strong>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thumbnail">
					<img src="images/Integra_2.jpg" alt="Product Image" class="img-responsive">
					<div class="caption">
						<div class="product-details">
							<a href="{{ url('detalle-producto') }}">
								<div class="clearfix">
									<img src="images/equis.png" style="height: 27px;" class="center-block">
								</div>
								<div class="clearfix text-center">
									<strong>Integra</strong>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thumbnail">
					<img src="images/Paneles_de_1.74_m.jpg" alt="Product Image" class="img-responsive">
					<div class="caption">
						<div class="product-details">
							<a href="{{ url('detalle-producto') }}">
								<div class="clearfix">
									<img src="images/equis.png" style="height: 27px;" class="center-block">
								</div>
								<div class="clearfix text-center">
									<strong>paneles de 1.74m</strong>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
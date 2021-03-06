@extends('layouts.master')

@section('title', 'Contacto')

@section('content')
<section id="contact" class="contact section-area products">
	<div class="rotate-box-1"></div>
	<div class="container">
		<h2 class="page-header">Escríbenos</h2>
		<div class="contact-form-area">
			<div class="status alert alert-success"></div>
			{!! Form::open(['route' => 'sendMailContact', 'class' => 'contact-contact', 'id' => 'main-contact-form']) !!}
				<div class="row">
					@if(Session::has('success_message'))
					<div class="col-sm-12">
						<div class="alert alert-success alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
								<i class="fa fa-times" aria-hidden="true"></i>
							</button>
							<p>{{ session('success_message')}}</p>
						</div>
					</div>
					@endif
					<div class="col-sm-6 col-xs-12">
						<div class="form-group wow fadeInUp" data-wow-delay="0s">
							<label for="razon" class="sr-only">Razón Social: </label>
							<input type="text" class="form-control no-border-radius" name="razon" id="razon" required="required" placeholder="Razón Social">
						</div>
						<div class="form-group wow fadeInUp" data-wow-delay="0.2s">
							<label for="name" class="sr-only">Nombre y Apellido: </label>
							<input type="text" class="form-control no-border-radius" name="name" id="name" required="required" placeholder="Nombre y Apellido">
						</div>
						<div class="form-group wow fadeInUp" data-wow-delay="0.3s">
							<label for="puesto" class="sr-only">Puesto: </label>
							<input type="text" class="form-control no-border-radius" name="puesto" id="puesto" required="required" placeholder="Puesto que ocupa">
						</div>
						<div class="form-group wow fadeInUp" data-wow-delay="0.4s">
							<label for="email" class="sr-only">Correo: </label>
							<input type="text" class="form-control no-border-radius" name="correo" id="email" required="required" placeholder="Correo electrónico">
						</div>
						<div class="form-group wow fadeInUp" data-wow-delay="0.5s">
							<label for="telefono" class="sr-only">Teléfono: </label>
							<input type="text" class="form-control no-border-radius" name="telefono" id="telefono" placeholder="Teléfono">
						</div>
					</div>
					<div class="col-sm-6 col-xs-12">
						<div class="form-group wow fadeInDown" data-wow-delay="0.3s">
							<label for="message" class="sr-only">Message: </label>
							<textarea class="form-control no-border-radius" rows="12" style="height: 270px" name="mensaje" id="message"  required="required" placeholder="Escriba aqui su mensaje..."></textarea>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group wow fadeInDown" data-wow-delay="0.7s">
							<div class="checkbox">
								<label><input type="checkbox" name="acepta" value="1" class="fix-checkbox" checked> Acepto recibir newsletter y novedades</label>
							</div>
						</div>
						<div class="form-group text-center wow fadeInDown" data-wow-delay="0.9s">
							<input type="submit" class="btn btn-lg btn-secondary" value="Enviar Mensaje">
						</div>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</section>
<hr>
<div class="footer-top-area">
	<div class="container">
		<div class="row">
			<div class="col-md-8 newsletter-block">
				<div class="row">
					<div class="col-md-12">
						<h4>Boletin de Novedades</h4>
					</div>
					<div class="col-md-10">
						{!! Form::open(['route' => 'newsletter']) !!}
						<div class="input-group">
							<input type="email" name="correo" class="form-control" placeholder="Correo electrónico">
							<span class="input-group-btn">
								<button class="btn btn-secondary">Suscribete</button>
							</span>
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
			<div class="col-md-4 social-media-block">
				<div class="row">
					<div class="col-md-12">
						<h4>Siguenos</h4>
					</div>
					<div class="col-md-10">
						<ul class="list-unstyled list-inline sm-links">
							<li>
								<a href="https://www.facebook.com/VissoMuebles" target="_blank"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="https://issuu.com/visso_peru" target="_blank"><i class="fa fa-bullseye"></i></a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/peviso" target="_blank"><i class="fa fa-linkedin"></i></a>
							</li>
							<li>
								<a href="https://es.pinterest.com/vissoperu" target="_blank"><i class="fa fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="map"></div>
@endsection

@section('contact')
	<script src="https://maps.googleapis.com/maps/api/js"></script>
@endsection
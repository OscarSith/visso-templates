@extends('layouts.master')

@section('content')
<section id="contact" class="contact section-area products">
	<div class="rotate-box-1"></div>
	<div class="container">
		<h2 class="page-header">Escribenos</h2>
		<div class="contact-form-area">
			<div class="status alert alert-success"></div>
			<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="#">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<div class="form-group">
							<label for="razon" class="sr-only">Razón Social: </label>
							<input type="text" class="form-control no-border-radius" name="razon" id="razon" required="required" placeholder="Razón Social">
						</div>
						<div class="form-group">
							<label for="name" class="sr-only">Nombre y Apellido: </label>
							<input type="text" class="form-control no-border-radius" name="name" id="name" required="required" placeholder="Nombre y Apellido">
						</div>
						<div class="form-group">
							<label for="puesto" class="sr-only">Puesto: </label>
							<input type="text" class="form-control no-border-radius" name="puesto" id="puesto" required="required" placeholder="Puesto que ocupa">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Correo: </label>
							<input type="text" class="form-control no-border-radius" name="email" id="email" required="required" placeholder="Correo electrónico">
						</div>
						<div class="form-group">
							<label for="telefono" class="sr-only">Teléfono: </label>
							<input type="text" class="form-control no-border-radius" name="telefono" id="telefono" placeholder="Teléfono">
						</div>
					</div>
					<div class="col-sm-6 col-xs-12">
						<div class="form-group">
							<label for="message" class="sr-only">Message: </label>
							<textarea class="form-control no-border-radius" rows="12" style="height: 270px" name="message" id="message"  required="required" placeholder="Escriba aqui su mensaje..."></textarea>
						</div>
					</div>
					<div class="col-xs-12 text-center">
						<input type="submit" class="btn btn-lg btn-secondary" value="Enviar Mensaje">
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<hr>
<div class="map"></div>
@endsection

@section('contact')
	<script src="https://maps.googleapis.com/maps/api/js"></script>
@endsection
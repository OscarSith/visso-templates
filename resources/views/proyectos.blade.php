@extends('layouts.master')

@section('title', 'Proyectos')

@section('content')
<section id="proyectos" class="products">
	<div class="container" id="visso">
		@include('layouts.breadcrumb-proyecto')
		<div class="cat-name">
			<div>Proyectos</div>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
				@if (!$proyectos->isEmpty())
				@foreach($proyectos as $n => $proyecto)
					<div class="col-sm-4">
						<div class="content-proyect wow fadeInUp" data-wow-delay="{{ $n/5 }}s">
							<a href="{{ route('proyectDetail', [$proyecto->id, str_slug($proyecto->proy_nombre)])}}">
								<img src="{{ asset('images/proyectos/thumbs/' . $proyecto->proy_thumb_imagen) }}" alt="{{ $proyecto->proy_nombre }}" class="img-responsive center-block img-proyects">
								<div class="caption">
									<div class="product-details">
										@if ($proyecto->proy_logotipo != '')
										<img src="{{ asset('images/proyectos/logotipos/' . $proyecto->proy_logotipo) }}" class="img-responsive center-block">
										@else
										<div class="text-center">
											{{ $proyecto->proy_nombre }}
										</div>
										@endif
									</div>
								</div>
							</a>
						</div>
					</div>
				@endforeach
				@endif
			</div>
		</div>
	</div>
</section>
@endsection
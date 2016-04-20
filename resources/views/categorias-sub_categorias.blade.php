@extends('layouts.master')

@section('content')
<section id="products" class="products section-area">
	<div class="container">
		@include('layouts.breadcrumb')
		<div class="row logo-marca">
			<div class="col-sm-12">
				<img src="{{ asset('images/logo-' . $marca . '-productos.png') }}" alt="" class="img-responsive center-block" style="width: 164px;">
			</div>
		</div>
		<div class="row visso-list">
			<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10">
				<div class="row {{ $categorias->count() == 2 ? 'fix-vertical-center' : '' }}" {{ $view == 1 ? ("id=marca-" . $marca ) : ''}}>
					@if (!$categorias->isEmpty())
						@foreach($categorias as $n => $categoria)
						<div class="col-sm-4">
							<div class="thumbnail wow fadeInUp" data-wow-delay="{{ $n/4 }}s">
								<a href="{{ route('catByProduct', [str_slug($marca), str_slug($categoria->cat_nombre)])}}">
									<img src="{{ asset('images/categorias/'. $categoria->cat_imagen) }}" alt="{{ strtolower($categoria->cat_nombre) }}" class="img-responsive">
								</a>
							</div>
						</div>
						@endforeach
					@else
						<div class="col-sm-12">
							<br><br><br>
							<h4 class="text-center">Lo sentimos, no hay resultados que mostrar</h4>
							<br><br><br>
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
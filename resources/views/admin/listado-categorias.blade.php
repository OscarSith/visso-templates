@extends('layouts.app')

@section('content')
<div class="col-sm-12">
	<div class="panel panel-inverse">
		<div class="row">
			@foreach($categorias as $categoria)
			<div class="col-sm-4 col-md-3">
				<div class="thumbnail">
					<img src="{{ asset('images/categorias/'. $categoria->cat_imagen) }}" alt="" class="img-responsive center-block">
					<div class="caption">
						<h3>{{ $categoria->cat_name}}</h3>
							<p>
								<a href="#" class="btn btn-primary btn-sm" role="button">Cambiar Foto</a>
								<a href="#" class="btn btn-default btn-sm" role="button" title="Ver galería de fotos">Galeria</a></p>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</div>
@endsection
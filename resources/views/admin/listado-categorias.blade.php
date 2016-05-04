@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-inverse">
			<div class="row">
				<h2 class="page-header text-center">{{ $nombre }}</h2>
				@include('layouts.displays_messages')
				@foreach($categorias as $categoria)
				<div class="col-sm-4 col-md-3">
					<div class="thumbnail">
						<div class="cat-image-list">
							<img src="{{ asset('images/categorias/'. $categoria->cat_imagen) }}" alt="" class="img-responsive center-block">
						</div>
						<div class="caption">
							<h4>{{ $categoria->cat_nombre}}</h4>
							<p data-id="{{ $categoria->cat_sub_nivel }}">
								<a href="#modalImage" class="btn btn-primary btn-sm" role="button" data-toggle="modal" data-id="{{ $categoria->id }}" data-name="{{ $categoria->cat_nombre }}" data-img="{{ $categoria->cat_imagen }}">Cambiar Foto</a>
								@if ($categoria->cat_sub_nivel == 0)
									<a href="{{ route('adminDetalleProducto', $categoria->product_id) }}" class="btn btn-default btn-sm" role="button" title="Ver galería de fotos">Ver Detalle</a>
								@elseif ($categoria->cat_sub_nivel >= 1)
									@if ($categoria->cat_detalle)
										<a href="{{ route('adminDetalleProducto', $categoria->product_id) }}" class="btn btn-default btn-sm" role="button" title="Ver galería de fotos">Ver Detalle</a>
									@else
										<a href="{{ route('adminViewSubCat', [$marca, $categoria->cat_parent]) }}" class="btn btn-warning btn-sm" role="button" title="Ver galería de fotos">Ver Categorias</a>
									@endif
								@endif
							</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="modalImage" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Cambiar imagen</h4>
			</div>
			<div class="modal-body">
				{!! Form::open(['route' => 'changeImagen', 'files' => true, 'method' => 'post', 'id' => 'frmUpdatePhoto']) !!}
					<input type="hidden" name="cat_id" id="cat_id">
					<input type="hidden" name="current_cat_image" id="current_cat_image">
					<div class="form-group">
						<input type="text" class="form-control" name="cat_nombre" placeholder="Nombre de la categoría..." id="cat_nombre">
					</div>
					<div class="form-group">
						<input type="file" class="form-control" name="cat_imagen">
					</div>
				{!! Form::close() !!}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary submit">Cambiar</button>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script>
$('#modalImage').on('show.bs.modal', function(e) {
	var $this = $(e.relatedTarget),
		$modal = $(e.currentTarget);

	$modal.find('#cat_id').val($this.data('id'));
	$modal.find('#cat_nombre').val($this.data('name'));
	$modal.find('#current_cat_image').val($this.data('img'));

	$modal.find('button.submit').off('click').on('click', function() {
		$modal.find('form').submit();
	});
}).find('form').on('submit', function(e) {
	$(this).find('button.submit').prop('disabled', true).text('Subiendo foto...');
});
</script>
@endsection
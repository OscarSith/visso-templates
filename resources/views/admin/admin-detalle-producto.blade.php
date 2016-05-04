@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-sm-6">
		<img src="{{ asset('images/product-imgs/' . $producto->pro_imagen_default) }}" class="img-responsive center-block" id="productImage">
	</div>
	<div class="col-sm-6">
		{!! Form::model($producto, ['route' => ['adminUpdateProduct', $producto->id], 'method' => 'put', 'files' => true]) !!}
		<div class="row">
			@include('layouts.displays_messages')
		</div>
		{!! Form::hidden('id') !!}
		<div class="form-group">
			<h3 class="page-header mt0">
				{!! Form::text('pro_nombre', null, ['class' => "form-control", 'placeholder'=>"Nombre del producto"]) !!}
			</h3>
		</div>
		<div class="form-group" id="product-description">
			{!! Form::textarea('pro_descripcion', null, ['class' => "form-control", "rows" => 10, 'placeholder' => "Descripción del producto..."]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('pro_imagen_default', 'Cambiar imagen por defecto', ['class' => 'control-label']) !!}
			<div>
				{!! Form::file('pro_imagen_default', ['class' => 'form-control'])!!}
			</div>
		</div>
		<div class="form-group">
			<hr>
			<button class="btn btn-success btn-lg"><i class="fa fa-edit"></i> Actualizar</button>
		</div>
		{!! Form::close() !!}
	</div>
</div>
<div class="row">
	<hr>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4 class="no-margin">
				<span class="pull-left">GALERIA DE IMAGENES</span>
				<a href="#modal-new-image-galery" class="btn btn-default pull-right" data-toggle="modal" title="Agregar nueva imagen"><i class="fa fa-plus"></i> Nuevo</a>
				<div class="clearfix"></div>
			</h4>
		</div>
		<div class="panel-body">
			<div class="row galery">
				@foreach($galerias as $n => $galeria)
				<div class="col-sm-3 col-md-2">
					<div class="thumbnail">
						<div class="thumb-image-galery">
							<img src="{{ asset('images/product-imgs/' . $galeria->pro_imagen_default) }}" class="img-responsive" alt="{{ $galeria->pro_imagen_default }}">
						</div>
						<p data-id="{{ $galeria->id }}">
							<a href="#modal-edit-image-galery" data-toggle="modal" data-img="{{ $galeria->pro_imagen_default }}" data-name="{{ $galeria->name }}" data-description="{{ $galeria->description }}" class="btn btn-xs btn-info" data-flag="{{ $n+1 }}">
								<i class="fa fa-eye"></i> Ver
							</a>
							<a href="#modal-delete-image-galery" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Eliminar</a>
						</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-new-image-galery" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Agregar Imagen</h4>
			</div>
			{!! Form::open(['route' => 'addNewImageGalery', 'files' => true, 'method' => 'post', 'id' => 'frmAddNewGalery']) !!}
				@include('layouts.form-galery')
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Agregar</button>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-edit-image-galery" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Editar <span id="galeryName"></span></h4>
			</div>
			{!! Form::open(['url' => '#', 'files' => true, 'method' => 'put', 'id' => 'frmEditGalery', 'data-action' => route('editImageGalery', ':galeria_id')]) !!}
				<input type="hidden" name="position" id="imagePosition">
				<input type="hidden" name="current_cat_image" id="current-img">
				@include('layouts.form-galery')
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Editar</button>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-delete-image-galery" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Eliminar Imagen</h4>
			</div>
			<div class="modal-body">
				<p>¿Seguro de eliminar esta Imagen?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary">Eliminar</button>
			</div>
		</div>
	</div>
</div>
{!! Form::open(['url' => '#', 'method' => 'delete', 'id' => 'frmDeleteImageGalery', 'data-action' => route('deleteImageGalery', ':galeria_id')]) !!}
{!! Form::close() !!}
@endsection

@section('script')
<script>
$('#modal-edit-image-galery').on('show.bs.modal', function(e) {
	var $this = $(e.currentTarget),
		$btn = $(e.relatedTarget),
		$form = $this.find('form'),
		action = $form.data('action').replace(':galeria_id', $btn.parent().data('id'));

	$form.attr('action', action);
	$('#imagePosition').val($btn.data('flag'));
	$this.find('#current-img').val($btn.data('img'));
	$this.find('.name').val($btn.data('name'));
	$this.find('.description').val($btn.data('description'));
	$form.off('submit').on('submit', function() {
		$(this).find(':input:last').prop('disabled', true);
	});
});
$('#modal-delete-image-galery').on('show.bs.modal', function(e) {
	var id = $(e.relatedTarget).parent().data('id'),
		$form = $('#frmDeleteImageGalery'),
		action = $form.data('action').replace(':galeria_id', id);

	$form.attr('action', action);
	$(e.currentTarget).find(':input:last').on('click', function() {
		$form.submit();
	});
});
</script>
@endsection
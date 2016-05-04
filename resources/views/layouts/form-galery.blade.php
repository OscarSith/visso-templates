<div class="modal-body">
	{!! Form::hidden('producto_id', $producto->id) !!}
	<div class="form-group">
		<input type="file" class="form-control" name="pro_imagen_default">
	</div>
	<div class="form-group">
		<label class="control-label">Nombre</label>
		{!! Form::text('name', null, ['class' => 'form-control name', 'placeholder' => 'Nombre de la categoría'])!!}
		<strong class="help-block">* Este campo es opcional</strong>
	</div>
	<div class="form-group">
		<label class="control-label">Descripción</label>
		{!! Form::textarea('description', null, ['class' => 'form-control description']) !!}
		<strong class="help-block">* Este campo es opcional</strong>
	</div>
</div>
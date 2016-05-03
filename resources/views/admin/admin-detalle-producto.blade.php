@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-sm-6">
		<img src="{{ asset('images/product-imgs/' . $producto->pro_imagen_default) }}" class="img-responsive center-block" id="productImage">
	</div>
	<div class="col-sm-6">
		{!! Form::model($producto, ['route' => ['adminUpdateProduct', $producto->id], 'method' => 'put']) !!}
		<div class="row">
			@include('layouts.displays_messages')
		</div>
		{!! Form::hidden('id') !!}
		<div class="form-group">
			<h3 class="page-header">
				{!! Form::text('pro_nombre', null, ['class' => "form-control", 'placeholder'=>"Nombre del producto"]) !!}
			</h3>
		</div>
		<div class="form-group" id="product-description">
			{!! Form::textarea('pro_descripcion', null, ['class'=>"form-control", "rows" => 10, 'placeholder' => "Descripción del producto..."]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('pro_imagen_default', 'Cambiar imagen por defecto', ['class' => 'control-label']) !!}
			<div>
				{!! Form::file('pro_imagen_default')!!}
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
			<h4>GALERIA DE IMAGENES</h4>
		</div>
		<div class="panel-body">
			<div class="row galery">
				@foreach($galerias as $galeria)
				<div class="col-sm-3 col-md-2">
					<div class="thumbnail">
						<img src="{{ asset('images/product-imgs/' . $galeria->pro_imagen_default) }}" class="img-responsive" alt="{{ $galeria->pro_imagen_default }}" data-img="{{ $galeria->pro_imagen_default }}" data-name="{{ $galeria->name }}" data-description="{{ $galeria->description }}">
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script>
</script>
@endsection
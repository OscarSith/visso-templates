@extends('layouts.master')

@section('content')
<div id="slider" class="container">
	<div id="sliders" class="row">
		<div class="col-sm-4">
			<div id="sliders-01">
				<div>
					<a href="{{ route('categorias', 'aresline') }}"><img src="images/marcas/aresline.jpg" alt="" class="img-responsive"></a>
				</div>
				<div>
					<a href="{{ route('categorias', 'aresline') }}"><img src="images/marcas/aresline.jpg" alt="" class="img-responsive"></a>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div id="sliders-02">
				<div>
					<a href="{{ route('categorias', 'quadrifoglio') }}"><img src="images/marcas/quadrifoglio.jpg" alt="" class="img-responsive"></a>
				</div>
				<div>
					<a href="{{ route('categorias', 'quadrifoglio') }}"><img src="images/marcas/quadrifoglio.jpg" alt="" class="img-responsive"></a>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div id="sliders-03">
				<div>
					<a href="{{ route('categorias', 'visso') }}"><img src="images/marcas/visso.jpg" alt="" class="img-responsive"></a>
				</div>
				<div>
					<a href="{{ route('categorias', 'visso') }}"><img src="images/marcas/visso.jpg" alt="" class="img-responsive"></a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
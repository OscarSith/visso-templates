@extends('layouts.master')

@section('content')
<div id="slider" class="container">
	<div id="sliders" class="row">
		<div class="col-sm-4 wow fadeInUp" data-wow-delay="0s">
			<div id="sliders-01">
				<div>
					<a href="{{ route('categorias', 'aresline') }}"><img src="images/marcas/aresline.jpg" alt="" class="img-responsive"></a>
				</div>
				<div>
					<a href="{{ route('categorias', 'aresline') }}"><img src="images/marcas/aresline2.jpg" alt="" class="img-responsive"></a>
				</div>
				<div>
					<a href="{{ route('categorias', 'aresline') }}"><img src="images/marcas/aresline3.jpg" alt="" class="img-responsive"></a>
				</div>
			</div>
		</div>
		<div class="col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
			<div id="sliders-02">
				<div>
					<a href="{{ route('categorias', 'quadrifoglio') }}"><img src="images/marcas/quadrifoglio.jpg" alt="" class="img-responsive"></a>
				</div>
				<div>
					<a href="{{ route('categorias', 'quadrifoglio') }}"><img src="images/marcas/quadrifoglio2.jpg" alt="" class="img-responsive"></a>
				</div>
				<div>
					<a href="{{ route('categorias', 'quadrifoglio') }}"><img src="images/marcas/quadrifoglio3.jpg" alt="" class="img-responsive"></a>
				</div>
			</div>
		</div>
		<div class="col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
			<div id="sliders-03">
				<div>
					<a href="{{ route('categorias', 'visso') }}"><img src="images/marcas/visso.jpg" alt="" class="img-responsive"></a>
				</div>
				<div>
					<a href="{{ route('categorias', 'visso') }}"><img src="images/marcas/visso2.jpg" alt="" class="img-responsive"></a>
				</div>
				<div>
					<a href="{{ route('categorias', 'visso') }}"><img src="images/marcas/visso3.jpg" alt="" class="img-responsive"></a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@extends('layouts.master')

@section('content')
<div id="slider" class="container">
	<div id="sliders" class="row">
		<div class="col-sm-4 wow fadeInUp" data-wow-delay="0s">
			<div id="sliders-01">
				<div>
					<a href="{{ route('categorias', 'aresline') }}"><img src="images/marcas/aresline.jpg" alt="" class="img-responsive center-block"></a>
				</div>
				<div>
					<a href="{{ route('categorias', 'aresline') }}"><img src="images/marcas/aresline2.jpg" alt="" class="img-responsive center-block"></a>
				</div>
				<div>
					<a href="{{ route('categorias', 'aresline') }}"><img src="images/marcas/aresline3.jpg" alt="" class="img-responsive center-block"></a>
				</div>
			</div>
		</div>
		<div class="col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
			<div id="sliders-02">
				<div>
					<a href="{{ route('categorias', 'quadrifoglio') }}"><img src="images/marcas/quadrifoglio.jpg" alt="" class="img-responsive center-block"></a>
				</div>
				<div>
					<a href="{{ route('categorias', 'quadrifoglio') }}"><img src="images/marcas/quadrifoglio2.jpg" alt="" class="img-responsive center-block"></a>
				</div>
				<div>
					<a href="{{ route('categorias', 'quadrifoglio') }}"><img src="images/marcas/quadrifoglio3.jpg" alt="" class="img-responsive center-block"></a>
				</div>
			</div>
		</div>
		<div class="col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
			<div id="sliders-03">
				<div>
					<a href="{{ route('categorias', 'visso') }}"><img src="images/marcas/visso.jpg" alt="" class="img-responsive center-block"></a>
				</div>
				<div>
					<a href="{{ route('categorias', 'visso') }}"><img src="images/marcas/visso2.jpg" alt="" class="img-responsive center-block"></a>
				</div>
				<div>
					<a href="{{ route('categorias', 'visso') }}"><img src="images/marcas/visso3.jpg" alt="" class="img-responsive center-block"></a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('footer')
<div class="container">
	<div class="content-link-partners">
		<ul class="list-unstyled all">
			<li class="cert-1"><a href="http://www.aresline.com/en_US/pagine/5/certified-quality" target="_blank"></a></li>
			<li class="cert-2 quadri"><a href="https://ic.fsc.org/es" target="_blank"></a></li>
			<li class="cert-3"><a href="http://www.aresline.com/en_US/pagine/5/certified-quality" target="_blank"></a></li>
			<li class="cert-4"><a href="http://www.aresline.com/en_US/pagine/5/certified-quality" target="_blank"></a></li>
			<li class="cert-5"><a href="http://www.pannelloecologico.com/" target="_blank"></a></li>
			<li class="cert-6"><a href="http://www.aresline.com/en_US/pagine/5/certified-quality" target="_blank"></a></li>
		</ul>
	</div>
	<img src="{{ asset('images/partners.png') }}" class="center-block" id="img-partners">
</div>
@endsection
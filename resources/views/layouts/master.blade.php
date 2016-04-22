<?php
$currentUri = \Route::current()->uri();
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Venta de muebles de oficina / VISSO</title>
		<link href="{{ asset('css/style.min.css') }}" rel="stylesheet">

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<header id="main-header" class="main-header">
			<div id="main-menu-wrap" class="sticky-nav">
				<div id="main-menu">
					<div class="container">
						<div class="row">
							<nav id="nav" class="navbar navbar-default row">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a href="{{ url('/') }}" class="navbar-brand">
										<img src="{{ asset('images/logo_p2.png') }}" alt="logo Visso">
									</a>
									<div class="links-socials pull-left">
										<a href="https://www.facebook.com/VissoMuebles" target="_blank">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle-thin fa-stack-2x"></i>
												<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
											</span>
										</a>
										<a href="https://issuu.com/visso_peru" target="_blank">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle-thin fa-stack-2x"></i>
												<i class="fa fa fa-bullseye fa-stack-1x fa-inverse"></i>
											</span>
										</a>
										<a href="https://www.linkedin.com/company/peviso" target="_blank">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle-thin fa-stack-2x"></i>
												<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
											</span>
										</a>
										<a href="https://es.pinterest.com/vissoperu" target="_blank">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle-thin fa-stack-2x"></i>
												<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
											</span>
										</a>
									</div>
								</div>
								<div class="navbar-collapse collapse">
									<ul class="nav navbar-nav navbar-right">
										<li {{ $currentUri == '/' ? "class=current" : ''}}><a href="{{ url('/') }}">INICIO</a></li>
										<li {{ $currentUri == 'nosotros' ? "class=current" : ''}}><a href="{{ url('nosotros') }}">NOSOTROS</a></li>
										<li class="dropdown">
											<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRODUCTOS <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="{{ route('categorias', 'aresline') }}">Aresline</a></li>
												<li><a href="{{ route('categorias', 'quadrifoglio') }}">Quadrifoglio</a></li>
												<li><a href="{{ route('categorias', 'visso') }}">Visso</a></li>
											</ul>
										</li>
										<li><a href="{{ url('proyectos') }}">PROYECTOS</a></li>
										<li {{ $currentUri == 'contacto' ? "class=current" : ''}}><a href="{{ url('contacto') }}">CONTACTO</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div id="body-content">
		@section('content')
		@show
		</div>
		<footer class="main-footer">
			<div class="container">
				<img src="{{ asset('images/partners.png') }}" class="center-block" id="img-partners">
			</div>
		</footer>
		<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/slick.min.js') }}"></script>
		<script src="{{ asset('js/wow.min.js') }}"></script>
		@yield('contact')
		<script src="{{ asset('js/custom.js') }}"></script>
	</body>
</html>
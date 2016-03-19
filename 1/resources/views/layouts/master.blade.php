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
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

		<!-- Google Web Fonts -->
		<!-- <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css"> -->
		<!-- <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css"> -->
		<!-- <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"> -->
		<!-- <link href="http://fonts.googleapis.com/css?family=Rochester" rel="stylesheet" type="text/css"> -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">

		<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/loader.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
		<link href="{{ asset('css/slick.css') }}" rel="stylesheet">

		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="loading-wrap">
			<div class="loading">
				<span>Cargando...</span>
			</div>
		</div>
		<header id="main-header" class="main-header">
			<div id="main-menu-wrap" class="sticky-nav">
				<div id="main-menu">
					<div class="container">
						<nav id="nav" class="navbar navbar-default row">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a href="{{ url('/') }}" class="navbar-brand">
									<img src="{{ asset('images/logo_p2.png') }}">
								</a>
								<div class="links-socials pull-left">
									<a href="#">
										<span class="fa-stack fa-lg">
											<i class="fa fa-circle-thin fa-stack-2x"></i>
											<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
										</span>
									</a>
									<a href="#">
										<span class="fa-stack fa-lg">
											<i class="fa fa-circle-thin fa-stack-2x"></i>
											<i class="fa fa-youtube-play fa-stack-1x fa-inverse"></i>
										</span>
									</a>
									<a href="#">
										<span class="fa-stack fa-lg">
											<i class="fa fa-circle-thin fa-stack-2x"></i>
											<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
										</span>
									</a>
								</div>
							</div>
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="{{ url('/') }}">NOSOTROS</a></li>
									<li><a href="{{ route('categorias') }}">PRODUCTOS</a></li>
									<li><a href="#">PROYECTOS</a></li>
									<li><a href="{{ url('contacto') }}">CONTACTO</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		@section('content')
		@show
		<footer class="main-footer">
			<div class="container">
				<img src="{{ asset('images/partners.jpg') }}" class="center-block">
			</div>
		</footer>
		<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/slick.min.js') }}"></script>
		@yield('contact')
		<script src="{{ asset('js/custom.js') }}"></script>
	</body>
</html>
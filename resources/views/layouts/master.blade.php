<?php
$currentUri = \Route::current()->uri();
function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Safari';
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
    }

    return $bname;
}
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
		@if (getBrowser() != 'Safari')
		<style type="text/css">
			.visso-list .thumbnail .caption {
				-webkit-transform: translateY(150px);
					-moz-transform: translateY(150px);
						transform: translateY(150px);
			}
		</style>
		@endif
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
										<li {{ $currentUri == '/' ? "class=current" : ''}}><a href="{{ url('/') }}">INICIO</a></li>
										<li {{ $currentUri == 'nosotros' ? "class=current" : ''}}><a href="#">NOSOTROS</a></li>
										<li {{ $currentUri == 'productos' ? "class=current" : ''}}><a href="{{ route('categorias', 'visso') }}">PRODUCTOS</a></li>
										<li><a href="#">PROYECTOS</a></li>
										<li {{ $currentUri == 'contacto' ? "class=current" : ''}}><a href="{{ url('contacto') }}">CONTACTO</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		@section('content')
		@show
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
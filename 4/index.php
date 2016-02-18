<?php include 'tpl/header.tpl.html'; ?>
		<section id="hero" class="light-typo ">
			<div class="container welcome-content">
				<div class="row">
					<div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 text-center wow fadeInUp">
						<img id="logo" src="img/logo.png" class="img-responsive text-center" alt="Logo">
					</div>
				</div>
			</div>
			<div class="overlay-bg"></div>
			<div id="hero-slides">
				<div class="slides-container">
					<img src="img/01.jpg" alt="">
					<img src="img/06.jpg" alt="">
					<img src="img/10.jpg" alt="">
				</div>
			</div>
		</section>

		<section id="products" class=" padding-top-bottom">
			<div class="container">
				<header class="section-header text-center wow fadeInUp">
					<h2>Products</h2>
				</header>
			</div>
			<div class="container">
				<div id="projects-container" class="row">
					<article class="col-xs-12 col-sm-6 col-md-4">
						<div class="img-box">
							<a href="productos.php">
								<img class="img-responsive project-image" src="img/Credenza_de_puertas_corredizas.jpg" alt="">
							</a>
						</div>
						<div class="product-info col-md-12">
							<div>
								<h4 class="text-center project-title">VISSO</h4>
							</div>
						</div>
					</article>

					<article class="col-xs-12 col-sm-6 col-md-4">
						<div class="img-box">
							<a href="productos.php">
								<img class="img-responsive project-image" src="img/Quadra_multiple_recto.jpg" alt="">
							</a>
						</div>
						<div class="product-info col-md-12">
							<div>
								<h4 class="text-center project-title">QUADRIFOGLIO</h4>
							</div>
						</div>
					</article>

					<article class="col-xs-12 col-sm-6 col-md-4">
						<div class="img-box">
							<a href="productos.php">
								<img class="img-responsive project-image" src="img/Paneles_de_1.74_m.jpg" alt="">
							</a>
						</div>
						<div class="product-info col-md-12">
							<div>
								<h4 class="text-center project-title">NOVEDADES</h4>
							</div>
						</div>
					</article>
				</div>
			</div>

			<div id="project-modal" class="modal " aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a class="close" href="#" data-dismiss="modal" ><i class="icon-close"></i></a>
							<div class="loader"></div>
							<div class="screen"></div>
						</div>
						<div class="modal-body">
							<div class="container">
								<div class="row">
									<div id="project-sidebar" class="col-md-4 ">
										<h2 id="sdbr-title">Flat UI-Kit</h2>
										<div>
											<div id="sdbr-price">200</div>
											<div id="sdbr-oldprice">500</div>
										</div>
									</div>
									<div id="project-content" class="col-md-8 ">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="gray-bg padding-top-bottom ">
			<div class="container">
				<div class="row">
					<div class="col-md-8 wow fadeInLeft">
						<h3 class="center cta-message">Free international shipping only  <strong><span id="countdown"></span></strong></h3>

					</div>
					<div class="col-md-4 text-center wow fadeInRight">
						<a class="btn btn-store cta-button smooth-scroll" href="#orderform" >Solicitar Cotización</a>
					</div>
				</div>
			</div>
		</section>

		<section id="about" class="padding-top-bottom ">
			<div class="container">
				<div class="row">
					<div class="col-md-4 wow fadeInLeft">
						<header class="section-header cta-message">
							<h2>About company</h2>
							<h4>Pellentesque interdum eget</h4>
						</header>
					</div>
					<div class="col-md-8 cta-message wow fadeInUp">
						<p>Pellentesque interdum eget odio eu rutrum. Nunc tempus massa a tellus aliquet sodales. Nunc urna tortor, rhoncus accumsan vestibulum non, feugiat a mauris. In hac habitasse platea dictumst. In sagittis orci nec aliquet tristique.</p>
						<p style="display:none;" id="showme">Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
						<a class="btn btn-store outline" id="show-btn" href="#">Read more</a>
					</div>
				</div>
			</div>
		</section>

		<section id="testimonial" class="padding-top-bottom image-bg light-typo">
			<div class="container">

				<div class="testimonial">
					<div id="carousel-example-generic" class="carousel slide bs-docs-carousel-example" data-interval="10000">
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
							<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<h1>This is one of the most beautiful site I have ever seen in my life. <br>Your site is great!</h1>
								<br>
								<h3>Brad Cooper</h3>
							</div>
							<div class="item">
								<h1>The Difference between ordinary and extraordinary <br>is just that little extra.</h1>
								<br>
								<h3>Albert Einstein</h3>
							</div>
							<div class="item">
								<h1>Hugely thought out! <br>Trying it now.I like the use of shape and background image!</h1>
								<br>
								<h3>John Doe</h3>
							</div>
						</div>
						<br><br><br>
					</div>
				</div>
				<div class="overlay-bg"></div>
			</div>
		</section>
		<section id="newsletter" class="light-typo dark-bg padding-top-bottom">
			<div class="container ">
				<header class="section-header text-center">
					<h2>Stay in touch</h2>
					<h4>Sign Up for Email Updates on on News & Offers</h4>
				</header>
				<div class="row">
					<form id="newsletter-form" action="http://demo.angelostudio.net/microstore/index.html" method="POST" class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 ">
						<div class="input-group">
							<input id="newsletter-mail" name="email" placeholder="Enter your email" class="form-control input-lg" type="email" >
							<span class="input-group-btn">
								<button name="submit" type="submit" class="btn btn-store">Subscribe!</button>
							</span>
						</div>
						<input type="hidden" name="submitted" id="submitted2" value="true">
					</form>
				</div>
			</div>
		</section>
<?php include 'tpl/footer.tpl.html'; ?>
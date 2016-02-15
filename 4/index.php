<?php include 'tpl/header.tpl.html'; ?>

		<section id="hero" class="light-typo ">
			<div class="container welcome-content">
				<div class="row">
					<div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 text-center wow fadeInUp">
						<img id="logo" src="img/logo-green.png" class="img-responsive text-center" alt="shop logo" width="300">
						<h2>If you have 1-3  or more products for sale microStore is perfect template for you! MicroStore is a simple modern One page 100% responsive template.</h2>
						<ul class="social-links text-center">
							<li><a href="#link"><i class="icon-twitter"></i></a></li>
							<li><a href="#link"><i class="icon-facebook"></i></a></li>
							<li><a href="#link"><i class="icon-vimeo"></i></a></li>
						</ul>
						<a class="btn btn-store smooth-scroll" href="#products">browse the goods</a>
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
							<img class="img-responsive project-image" src="img/product1.jpg" alt="">
						</div>
						<div class="product-info col-md-12">
							<div>
								<h4 class="text-center project-title">VISSO</h4>
							</div>
						</div>
					</article>

					<article class="col-xs-12 col-sm-6 col-md-4">
						<div class="img-box">
							<img class="img-responsive project-image" src="img/product2.jpg" alt="">
						</div>
						<div class="product-info col-md-12">
							<div>
								<h4 class="text-center project-title">QUADRIFOGLIO</h4>
							</div>
						</div>
					</article>

					<article class="col-xs-12 col-sm-6 col-md-4">
						<div class="img-box">
							<img class="img-responsive project-image" src="img/product3.jpg" alt="">
						</div>
						<div class="product-info col-md-12">
							<div>
								<h4 class="text-center project-title">NOVEDADES</h4>
							</div>
						</div>
					</article>
				</div>
			</div>

			<div id="project-modal" class="modal " style="display: none;" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a class="close" href="#" data-dismiss="modal" ><i class="icon-close"></i></a>
							<div class="loader" style="display: block;"></div>
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

		<!-- <section id="orderform" class="gray-bg padding-top-bottom" ng-controller="orderController">
			<div class="container">
				<header class="section-header text-center">
					<h2>Order Form</h2>
				</header>
				<form action="http://demo.angelostudio.net/microstore/index.html" method="post" novalidate id="order-form">
					<div class="row">
						<div class="col-sm-12 col-md-12">
						<table class="table">
						  <thead>
							<tr>
							  <th>Product</th>
							  <th>Unit Cost</th>
							  <th class="text-center">
							  <span class="hidden-xs">Quantity</span>
							  <span class="visible-xs">QNT</span>
							  </th>
							  <th class="text-right">Total</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td class="vert-align">Bed</td>
							  <td class="vert-align">{{ 700 | currency:"$":0 }}</td>
							  <td class="text-center">
								<select class="form-control form-control-inline" ng-model="myBed" ng-options="opt as opt.label for opt in options"></select>
							  </td>
							  <td class="text-right vert-align">{{ myBed.value * 700 | currency:"$":0  }}</td>
							</tr>
							<tr>
							  <td class="vert-align">Nightstand</td>
							  <td class="vert-align">{{ 400 | currency:"$":0  }}</td>
							  <td class="text-center">
								<select class="form-control form-control-inline" ng-model="myNightstand" ng-options="opt as opt.label for opt in options"></select>
							  </td>
							  <td class="text-right vert-align">{{ myNightstand.value * 400 | currency:"$":0  }}</td>
							</tr>
							<tr>
							  <td class="vert-align">Hammock</td>
							  <td class="vert-align">{{ 600 | currency:"$":0  }}</td>
							  <td class="text-center">
								<select class="form-control form-control-inline" ng-model="myHammock" ng-options="opt as opt.label for opt in options"></select>
							  </td>
							  <td class="text-right vert-align">{{ myHammock.value * 600 | currency:"$":0  }}</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						  </tbody>
						</table>
						</div>

					<div class="col-sm-6 col-md-6 contact-info">
						<p class="text-center"><strong>Payment Method</strong></p>
						<div class="row">
							<div class="col-sm-8 col-md-8">
								<div class="form-group">
									<label class="control-label">Name</label>
									<input name="Card number" placeholder="Card number" class="form-control input-lg" type="text">
								</div>
							</div>
							<div class="col-sm-4 col-md-4">
								<div class="form-group">
									<label class="control-label">Code</label>
									<input name="Code" placeholder="Code" class="form-control input-lg" type="text" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<div class="form-group">
									<label class="control-label" for="contact-mail">month</label>
									<div class=" controls">
										<select class="form-control">
										  <option>January</option>
										  <option>February</option>
										  <option>March</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="form-group">
									<label class="control-label" for="contact-mail">year</label>
									<div class=" controls">
										<select class="form-control">
										  <option>2014</option>
										  <option>2015</option>
										  <option>2016</option>
										  <option>2017</option>
										  <option>2018</option>
										</select>
									</div>
								</div>
							</div>
						</div>

						<p class="text-center"><strong>Information</strong></p>
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<div class="form-group">
									<label class="control-label">Name</label>
									<input name="First name" placeholder="First name" class="form-control input-lg" type="text">
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="form-group">
									<label class="control-label">Last Name</label>
									<input name="Last name" placeholder="Last name" class="form-control input-lg" type="text" >
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label" >Email</label>
							<input name="email" placeholder="Your email" class="form-control input-lg" type="email">
						</div>
						<p class="text-center"><strong>If you have Coupon code</strong></p>
						<div class="input-group ">
							<input placeholder="Coupon code" class="form-control input-lg" type="text" >
							<span class="input-group-btn">
								<button name="submit" type="submit" class="btn btn-store">Check!</button>
							</span>
						</div>

					</div>

					<div class="col-sm-6 col-md-6">
						<p class="text-center"><strong>Delivery address</strong></p>
						<div class="form-group">
							<label class="control-label">Street</label>
							<input name="street" placeholder="Street address" class="form-control" type="text">
						</div>
						<div class="form-group">
							<label class="control-label">City</label>
							<input name="city" placeholder="City" class="form-control" type="text">
						</div>
						<div class="form-group">
							<label class="control-label">Country</label>
							<input name="Country" placeholder="Country" class="form-control" type="text">
						</div>
						<div class="form-group">
							<label class="control-label">postcode</label>
							<input name="postcode" placeholder="Post code" class="form-control" type="text">
						</div>

						<table class="table">
						  <thead>
							<tr>
							  <th colspan="3" class="text-center">Order sumary</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Shipping cost:</td>
							  <td></td>
							  <td class="text-right">Free</td>
							</tr>
							<tr>
							  <td>Total:</td>
							  <td></td>
							  <td id="total" class="text-right">{{ (myBed.value * 700) +  (myNightstand.value * 400) + (myHammock.value * 600) | currency  }}</td>
							</tr>
						  </tbody>
						</table>
						<p>
							<button name="submit" type="submit" class="btn btn-store btn-block">Order Product</button>
						</p>
						<input type="hidden" name="submitted" id="submitted" value="true">
					</div>

				</div>
					</form>

			</div>
		</section> -->

		<!-- <section id="cta" class="padding-top-bottom color-bg light-typo">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-4 col-sm-4 news wow fadeInUp" data-wow-delay="0.2s" data-wow-offset="10">
						<i class="icon-trophy iconBig"></i>
						<h3>Quality guaranteed</h3>
					</div>
					<div class="col-md-4 col-sm-4 news wow fadeInUp" data-wow-delay="0.4s" data-wow-offset="10">
						<i class="icon-truck iconBig"></i>
						<h3>Home delivery</h3>
					</div>
					<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s" data-wow-offset="10">
						<i class="icon-lock iconBig news"></i>
						<h3>Secure payment</h3>
					</div>
				</div>
			</div>
		</section> -->

<?php include 'tpl/footer.tpl.html'; ?>
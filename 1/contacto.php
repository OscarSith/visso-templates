<?php include "tpl/header.tpl.html" ?>
		<section id="contact" class="contact section-area">
			<div class="rotate-box-1"></div>
			<!-- Nested Container Starts -->
			<div class="container">
				<h2><span>Contact Us</span></h2>
			<!-- Contact Form Starts -->
				<div class="contact-form-area">
					<div class="status alert alert-success"></div>
					<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="http://sainathchillapuram.com/BS/mini-stores-v2.1/demos/bags/sendemail.php">
						<div class="row">
							<div class="col-sm-6 col-xs-12">
							<!-- Name Field Starts -->
								<div class="form-group">
									<label for="name" class="sr-only">Name: </label>
									<input type="text" class="form-control no-border-radius" name="name" id="name" required="required" placeholder="Name">
								</div>
							<!-- Name Field Ends -->
							<!-- Email Field Starts -->
								<div class="form-group">
									<label for="email" class="sr-only">Email: </label>
									<input type="text" class="form-control no-border-radius" name="email" id="email" required="required" placeholder="Email">
								</div>
							<!-- Email Field Ends -->
							</div>
							<div class="col-sm-6 col-xs-12">
							<!-- Message Field Starts -->
								<div class="form-group">
									<label for="message" class="sr-only">Message: </label>
									<textarea class="form-control no-border-radius" rows="3" name="message" id="message"  required="required" placeholder="Message"></textarea>
								</div>
							<!-- Message Field Ends -->
							</div>
							<div class="col-xs-12 text-center">
								<input type="submit" class="btn btn-lg btn-secondary" value="Send Message">
							</div>
						</div>
					</form>
				</div>
			<!-- Contact Form Ends -->
			</div>
		<!-- Nested Container Ends -->
		</section>
		<div class="map"></div>
		<?php include 'tpl/footer.tpl.html'; ?>
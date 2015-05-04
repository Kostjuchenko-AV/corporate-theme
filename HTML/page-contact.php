<?php ob_start(); ?>
		<?php include('includes/header.php'); ?>
			
			<!--Begin Title Bar-->
			<section class="title-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li class="active">Pages</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h2>Contact Us</h2>
						</div>
					</div>
				</div>
			</section>			
			<!--End Title Bar-->
			
			<!--Begin Contact Section-->
			<div id="map"></div>	
			
			<div class="container contact">
				<div class="row">
					<div class="col-md-6">
						<h3 class="page-header">Contact <span>Form</span></h3>
						<form id="contactForm" action="#" method="POST" novalidate="novalidate">
							<div class="row">
								<div class="form-group clearfix">
									<div class="col-md-6">
										<label>Your name *</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="" aria-required="true" aria-invalid="true">									</div>
									<div class="col-md-6">
										<label>Your email address *</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required="" aria-required="true">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group clearfix">
									<div class="col-md-12">
										<label>Subject</label>
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required="" aria-required="true">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group clearfix">
									<div class="col-md-12">
										<label>Message *</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required="" aria-required="true"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<input type="submit" value="Send Message" class="btn btn-primary pull-right" data-loading-text="Loading...">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-6 details">

						<h4>Stay In Touch</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>

						<hr>

						<h4>Contact Details</h4>
						<ul class="list-unstyled">
						 	<li>
						 		<i class="fa fa-map-marker"></i> <span>Address:</span> 1170 Peachtree St NE #1200 Atlanta, GA 30039
						 	</li>
						 	<li><i class="fa fa-phone"></i> <span>Phone:</span> (800) 466 4515</li>
						 	<li><i class="fa fa-envelope"></i> <span>Email:</span> <a href="mailto:hello@company.com">hello@company.com</a></li>
						 </ul>

						<hr>

						<h4>Office Hours</h4>
						<ul class="list-unstyled">
							<li><i class="fa fa-clock-o"></i> <span>Monday - Friday:</span> 9:00 am - 6:00 pm</li>
							<li><i class="fa fa-clock-o"></i> <span>Saturday - Sunday:</span> Closed</li>
						</ul>

					</div>

				</div>

			</div>	
			<!--End Contact Section-->	
			
		<?php include('includes/footer.php'); ?>
		<?php // echo ''; file_put_contents('html/page-contact.html', ob_get_contents()); ?>
			
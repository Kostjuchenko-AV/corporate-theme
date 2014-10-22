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
							<h2>Full Width Page</h2>
						</div>
					</div>
				</div>
			</section>			
			<!--End Title Bar-->
			
			<!--Begin Contact Section-->
			<div class="container">
				<div class="row">
					<div class="col-md-6">

						<div class="alert alert-success hidden" id="contactSuccess">
							<strong>Success!</strong> Your message has been sent to us.
						</div>

						<div class="alert alert-danger hidden" id="contactError">
							<strong>Error!</strong> There was an error sending your message.
						</div>

						<h2 class="short"><strong>Contact</strong> Us</h2>
						<form id="contactForm" action="php/contact-form.php" method="POST" novalidate="novalidate">
							<div class="row">
								<div class="form-group">
									<div class="col-md-6 has-error">
										<label>Your name *</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="" aria-required="true" aria-invalid="true"><label id="name-error" class="error" for="name">Please enter your name.</label>
									</div>
									<div class="col-md-6 has-error">
										<label>Your email address *</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required="" aria-required="true"><label id="email-error" class="error" for="email">Please enter your email address.</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-12 has-error">
										<label>Subject</label>
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required="" aria-required="true"><label id="subject-error" class="error" for="subject">Please enter the subject.</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-12 has-error">
										<label>Message *</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required="" aria-required="true"></textarea><label id="message-error" class="error" for="message">Please enter your message.</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-6">

						<h4 class="push-top">Get in <strong>touch</strong></h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>

						<hr>

						<h4>The <strong>Office</strong></h4>
						<ul class="list-unstyled">
							<li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
							<li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-7890</li>
							<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
						</ul>

						<hr>

						<h4>Business <strong>Hours</strong></h4>
						<ul class="list-unstyled">
							<li><i class="fa fa-time"></i> Monday - Friday 9am to 5pm</li>
							<li><i class="fa fa-time"></i> Saturday - 9am to 2pm</li>
							<li><i class="fa fa-time"></i> Sunday - Closed</li>
						</ul>

					</div>

				</div>

			</div>	
			<!--End Contact Section-->	
			
		<?php include('includes/footer.php'); ?>
			
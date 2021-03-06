			<!--Begin Footer Section-->
			<footer>
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-sm-4 contact-block">
								 <h4 class="title">Contact <span>Us</span></h4>
								 <ul class="list-unstyled">
								 	<li>
								 		<i class="fa fa-map-marker"></i><span>Address:</span> 1170 Peachtree St NE #1200 Atlanta, GA 30039
								 	</li>
								 	<li><i class="fa fa-phone"></i><span>Phone:</span> (800) 466 4515</li>
								 	<li><i class="fa fa-envelope"></i><span>Email:</span> <a href="mailto:hello@company.com">hello@company.com</a></li>
								 	<li><i class="fa fa-clock-o"></i><span>Monday - Friday:</span> 9:00 am - 6:00 pm <br/>
								 		<span>Saturday - Sunday:</span> Closed
								 	</li>
								 </ul>		
							</div>
							<div class="col-sm-4 twitter-block">
								<h4 class="title">Latest <span>Tweets</span></h4>
								<ul class="list-unstyled">
									<li>
										<span class="fa-stack">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-twitter fa-stack-1x"></i>
										</span>
										<a href="#">@CompanyName</a> RT Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis laoreet urna. Phasellus nec erat odio. 
										<time>December 19,2014</time>
									</li>
									<li>
										<span class="fa-stack">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-twitter fa-stack-1x"></i>
										</span>
										<a href="#">@CompanyName</a> RT Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis laoreet urna.
										<time>December 19,2014</time>
									</li>
								</ul>
							</div>
							<div class="col-sm-4 newsletter-block">
								<h4 class="title">Newsletter</h4>
								<p>Sign up to recieve our email newsletter to latest news, updates, and specials that we have to offer.</p>
								<form class="form-inline clearfix" role="form">
									<div class="form-group">
										<label for="newsletter-email" class="control-label">Email</label>
										<input type="email" class="form-control pull-left" id="newsletter-email" />
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</form>
								<small>Trust us, we hate spam as much as you do.</small>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">	
						<div class="row">
							<div class="col-sm-8">
								 <p>&copy; Copyright <?php echo date("Y"); ?> Amity. All Rights Reserved. Designed by <a href="http://nathanieldeal.com" target="_blank">Nathaniel Deal LLC</a></p>
							</div>
							<div class="col-sm-4">
								<div class="follow pull-right">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-yelp"></i></a>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>		
			</footer>	

		<!--End Wrapper-->
		</div>
		
		<!--Scroll To Top -->
		<a class="scroll-to-top hidden-xs" href="#"><i class="fa fa-chevron-up"></i></a>
		
		<!--Begin Style Switcher -->
		<div id="style-switcher" class="hidden-xs">
			
			<h4>Style Switcher<a href="#" class="style-toggle"><i class="fa fa-wrench animated tada"></i></a></h4>
			<div class="switcher-wrapper">
				
				<p>Colors</p>				
				<ul class="style-colors list-inline">
					<li><a href="#" rel="css/colors/default.css"><i class="fa fa-square blue"></i></a></li>
					<li><a href="#" rel="css/colors/light-blue.css"><i class="fa fa-square light-blue"></i></a></li>
					<li><a href="#" rel="css/colors/red.css"><i class="fa fa-square red"></i></a></li>
					<li><a href="#" rel="css/colors/green.css"><i class="fa fa-square green"></i></a></li>
					<li><a href="#" rel="css/colors/gold.css"><i class="fa fa-square gold"></i></a></li>
					<li><a href="#" rel="css/colors/mint.css"><i class="fa fa-square mint"></i></a></li>
					<li><a href="#" rel="css/colors/orange.css"><i class="fa fa-square orange"></i></a></li>
					<li><a href="#" rel="css/colors/purple.css"><i class="fa fa-square purple"></i></a></li>
					<li><a href="#" rel="css/colors/silver.css"><i class="fa fa-square silver"></i></a></li>
					<li><a href="#" rel="css/colors/yellow.css"><i class="fa fa-square yellow"></i></a></li>
				</ul>
				
				<p>Navbar Type</p>
				<ul class="options list-inline">
					<li><a href="#" data-background-color="navbar-light" class="active">Light</a></li>
					<li><a href="#" data-background-color="navbar-dark">Dark</a></li>
				</ul>
				
				<p>Footer Type</p>
				<ul class="options list-inline">
					<li><a href="#" data-background-color="footer-light">Light</a></li>
					<li><a href="#" data-background-color="footer-dark" class="active">Dark</a></li>
				</ul>
			</div>
		</div>
		<!--End Style Switcher -->
		
		<?php include('includes/dev/js.php'); ?>
			
	</body>
</html>
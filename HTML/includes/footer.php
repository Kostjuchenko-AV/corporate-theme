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
								 <p>&copy; Copyright 2014 Amity. All Rights Reserved. Designed by <a href="http://nathanieldeal.com">Nathaniel Deal</a></p>
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
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="bower_components/jquery-waypoints/waypoints.min.js"></script>
		<script src="bower_components/jquery-waypoints/shortcuts/sticky-elements/waypoints-sticky.min.js"></script>
		<script src="bower_components/stellar.js/jquery.stellar.min.js"></script>
		<script src="bower_components/jquery-prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<script src="bower_components/mixitup2/build/jquery.mixitup.min.js"></script>
		<script>
				
			// Stick Header Top Top
			$('.navbar-wrapper').waypoint('sticky');
	
			// Shrink Header
			$('header').waypoint(function(direction) {
				$(this).toggleClass('shrink-header', direction === 'down');
			}, { offset: -55 });
				
			// Initialize Main Carousel
			$('.carousel').carousel({
				interval: 15000
			});
		 	
		 	// Parallax Background Effect
		 	$.stellar({
				horizontalScrolling: false,
				verticalOffset: 40
			});
			
			// Toggle Animation
			$('.toggle label').on('click', function(e){
			    var answer = $(this).next('.answer');
			    
			    if(!$(answer).is(":visible")) {
			      $(this).parent().addClass('active');
			    } else {
			      $(this).parent().removeClass('active');
			    }
			    $(answer).slideToggle(300);
			  });
								
			// Initialize PrettyPhoto for gallery
			$("a[rel^='prettyPhoto']").prettyPhoto({
				theme: 'facebook',
				slideshow:5000, 
				autoplay_slideshow:false,
				show_title: false,
				theme: 'light_square',
				social_tools: false,
				overlay_gallery: false 
			});
			
			// Expand Portfolio Button
			$('.toggle-portfolio').click(function(event) {
				event.preventDefault();
				$("a[rel^='prettyPhoto']:first").click();
			});
			
			// Animate Progress Bars
			$('.line-graph').waypoint(function() {
				$('.graph-item .animated-bar').each(function(){
					var setWidth = $(this).attr('aria-valuenow');
					$(this).width(setWidth + '%');
				});
			}, { offset: 400 });
			
			// Animation Page
			$(".animated.repeat").on('click', function() {
				$(this).addClass("clicked");
			});
			
			// Scroll To Top
			$('footer').waypoint(function() {
				$('.scroll-to-top').toggleClass('visible');
			}, { offset: 500 });
			
			$('.scroll-to-top').on('click', function () {
		        $("html, body").animate({
		            scrollTop: 0
		        }, 500);
		        return false;
		    });
		    
		    // Intialize Mix It Up			
			$('#portfolio-container').mixItUp();
			$('.portfolio .controls a').on('click', function(e){
				e.preventDefault();
			});


			
			/*
			
			$('#nav-search').on('click', function() {
				$(this).toggleClass('show hidden');
				$(this).removeClass('animated flipInX');
				$("#nav-search-close").toggleClass('show hidden');
				$("#nav-search-form").toggleClass('show hidden animated flipInX');
				return false;
			});
			
			$('#nav-search-close').on('click', function() {
				$(this).toggleClass('show hidden');
				$("#nav-search").toggleClass('show hidden animated flipInX');
				$("#nav-search-form").toggleClass('show hidden animated flipInX');
				return false;
			});
			
			$('.style-toggle-btn').on('click', function() {
				$(".style-toggle").toggleClass("style-toggle-show");
				$(this).toggleClass("fa-gears fa-angle-double-right");
				return false;
			});

			$('#opt-navbar-dark').on('change', function() {
				$(".mini-navbar").addClass("mini-navbar-dark");
				$(".mini-navbar").removeClass("mini-navbar-white");
				$(".navbar").addClass("navbar-dark");
				$(".navbar").removeClass("navbar-white");
				return false;
			});
			
			$('.style-toggle-body .colors > .green').on('click', function() {
				$("body").addClass("body-green");
				$("body").removeClass("body-blue");
				$("body").removeClass("body-orange");
				$("body").removeClass("body-red");
				return false;
			});
			
			$('#opt-footer-white').on('change', function() {
				$("footer").addClass("footer-white");
				$("footer").removeClass("footer-dark");
				return false;
			});
			*/

			
		</script>
		
	</body>
</html>
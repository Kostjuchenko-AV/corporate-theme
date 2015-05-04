<?php ob_start(); ?>
		<?php include('includes/header.php'); ?>
			
			<!--Begin Title Bar-->
			<section class="title-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li class="active">Features</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h2>Animations</h2>
						</div>
					</div>
				</div>
			</section>			
			<!--End Title Bar-->
			
			<!--Begin Animations Section-->
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="lead">
							This theme contains a bunch of cool, fun, and cross-browser animations for you to use in your projects. Great for emphasis, home pages, sliders, and general just-add-water-awesomeness. <a href="http://getbootstrap.com/css/#grid" target="_blank">View them all</a>
						</p>
						<p>To use animations, simply add the class <code>animated</code> to an element, along with any of the animation class names. That's it! You've got a CSS animated element!
						</p>
					</div>
				</div>
			</div>	
			<div class="container marketing">
				<div class="row">
					<div class="col-sm-4">
						<div class="animated bounce repeat">
							<span><i class="fa fa-html5 fa-4x"></i></span>
							<h3>Bounce</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis laoreet urna. Phasellus nec erat odio.</p>
							</div>				
						</div>
					<div class="col-sm-4">
						<div class="animated flash repeat">
							<span><i class="fa fa-html5 fa-4x"></i></span>
							<h3>Flash</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis laoreet urna. Phasellus nec erat odio.</p>
						</div>						
					</div>
					<div class="col-sm-4">
						<div class="animated pulse repeat">
							<span><i class="fa fa-html5 fa-4x"></i></span>
							<h3>Pulse</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis laoreet urna. Phasellus nec erat odio.</p>
						</div>						
					</div>
				</div>

				<hr>
			
				<div class="row">
					<div class="col-sm-4">
						<div class="animated rubberBand repeat">
							<span><i class="fa fa-html5 fa-4x"></i></span>
							<h3>Rubber Band</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis laoreet urna. Phasellus nec erat odio.</p>
						</div>						
					</div>
					<div class="col-sm-4">
						<div class="animated shake repeat">
							<span><i class="fa fa-html5 fa-4x"></i></span>
							<h3>Shake</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis laoreet urna. Phasellus nec erat odio.</p>
						</div>					
					</div>
					<div class="col-sm-4">
						<div class="animated swing repeat">
							<span><i class="fa fa-html5 fa-4x"></i></span>
							<h3>Swing</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis laoreet urna. Phasellus nec erat odio.</p>
						</div>						
					</div>
				</div>
				
				<hr>
			
				<div class="row">
					<div class="col-sm-4">
						<div class="animated tada repeat">
							<span><i class="fa fa-html5 fa-4x"></i></span>
							<h3>Tada</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis laoreet urna. Phasellus nec erat odio.</p>
						</div>						
					</div>
					<div class="col-sm-4">
						<div class="animated wobble repeat">
							<span><i class="fa fa-html5 fa-4x"></i></span>
							<h3>Wobble</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis laoreet urna. Phasellus nec erat odio.</p>
						</div>					
					</div>
					<div class="col-sm-4">
						<div class="animated fadeIn repeat">
							<span><i class="fa fa-html5 fa-4x"></i></span>
							<h3>Fade In</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis laoreet urna. Phasellus nec erat odio.</p>
						</div>						
					</div>
				</div>
				
			</div>		
			<!--End Animations Section-->	
			
		<?php include('includes/footer.php'); ?>
		<?php echo ''; file_put_contents('html/feature-animations.html', ob_get_contents()); ?>
			
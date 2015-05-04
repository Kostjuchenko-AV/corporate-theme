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
							<h2>Left Sidebar Page</h2>
						</div>
					</div>
				</div>
			</section>			
			<!--End Title Bar-->
			
				
			<div class="container">
				<div class="row">
				
					<!--Begin Left Sidebar-->
					<div class="col-md-3">
						<aside class="sidebar">
							<h4>Side Menu</h4>
							<ul class="nav nav-list">
								<li><a href="#"><i class="fa fa-caret-right"></i> Business</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i> Technology</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i> Photography</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i> Lifestyle</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i> Planning</a></li>
							</ul>
							<hr>
							<h4>Responsive Video</h4>
							<div class="responsive-video">
								<iframe src="//player.vimeo.com/video/87701971" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
							<hr>
							<h4>Text Box</h4>
							<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</aside>
					</div>
					<!--End Left Sidebar-->
						
					<!--Begin Main Section-->	
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-12">
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non pulvinar. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh metus.
								</p>								
								<p><img class="pull-left padded" src="img/responsive-illustrations.png" alt="Responsive devices">Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							</div>	
						</div>
					</div>
					<!--End Main Section-->	

				</div>
			</div>
			
			
		<?php include('includes/footer.php'); ?>
		<?php // echo ''; file_put_contents('html/page-left-sidebar.html', ob_get_contents()); ?>
			
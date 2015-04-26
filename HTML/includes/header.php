<!DOCTYPE html>
	<html lang="en">
		<head>
			<!-- Meta Data -->
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="author" content="Nathaniel Deal LLC">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="Preview Of Amity - Responsive Website Template For WrapBootstrap">
			<title>Amity - Responsive Bootstrap Template For WrapBootstrap</title>
			
			<!-- CSS -->
			<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
			<link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
			<link href="bower_components/animate.css/animate.min.css" rel="stylesheet">
			<link href="bower_components/jquery-prettyPhoto/css/prettyPhoto.css" rel="stylesheet">
			<?php include('includes/dev/css.php'); ?>
			<link href="css/main.css" rel="stylesheet">
			
			<link href="css/colors/default.css" class="switch-style" rel="stylesheet">
			
			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
				<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
			
			<!-- Share This Plugin For Single Blog Post -->
			<script type="text/javascript">var switchTo5x=true;</script>
			<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
			<script type="text/javascript">stLight.options({publisher: "ur-12729c0a-324f-2471-33d8-97008cd499ce", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
		</head>
		<body>
			<?php include('includes/dev/analytics-tracking.php'); ?>
			<!--Begin Wrapper-->
			<div id="wrapper">
				
				<!--Begin Header-->
				<header>	
					<div id="top">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 clearfix">
									<div class="contact pull-left">
										<span><i class="fa fa-phone"></i><address> Call Us: (800) 466 4515</address></span>	
										<span class="hidden-xs"><i class="fa fa-envelope"></i><address> <a href="mailto:hello@company.com">Email: hello@company.com</a> </address></span>			
									</div>
									<div class="follow pull-right hidden-xs">
										<span>Follow Us:</span>
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
					
					<!--Begin Navigation-->
					<div class="navbar-wrapper">
				    	<div class="container">
							<nav class="navbar navbar-default" role="navigation">
								<div class="navbar-header">
									 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1"> 
										 <span class="sr-only">Toggle navigation</span>
										 <i class="fa fa-bars"></i>
									 </button> 
									 <!--Begin Logo -->
									 <a class="navbar-brand" href="/">
									 	<img src="img/logo.png" class="gray-logo" title="Amity" alt="Amity" />
									 	<img src="img/logo-white.png" class="white-logo" title="Amity" alt="Amity" />
									 </a>
									 <!--End Logo -->
								</div>
								
								<div class="collapse navbar-collapse" id="navbar-collapse-1">
									<ul class="nav navbar-nav navbar-right">
										<li class="active">
											<a href="/">Home</a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												Pages <strong class="caret"></strong>
											</a>
											<ul class="dropdown-menu animated fadeIn">
												<li><a href="page-about.php">About Page</a></li>
												<li><a href="page-login.php">Login/Register Page</a></li>
												<li><a href="page-faq.php">FAQ Page</a></li>
												<li><a href="page-gallery.php">Gallery Page</a></li>
												<li><a href="page-full-width.php">Full Width Page</a></li>
												<li><a href="page-left-sidebar.php">Left Sidebar Page</a></li>
												<li><a href="page-right-sidebar.php">Right Sidebar Page</a></li>											
												<li><a href="page-404.php">404 Error Page</a></li>
											</ul>	
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											 	Features <strong class="caret"></strong>
											</a>
											<ul class="dropdown-menu animated fadeIn">
												<li><a href="feature-typography.php">Typography</a></li>
												<li><a href="feature-pricing-tables.php">Pricing Tables</a></li>
												<li><a href="feature-animations.php">Animations</a></li>
												<li><a href="feature-icons.php">Icons</a></li>
												<li><a href="feature-grid-system.php">Grid System</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												Portfolio <strong class="caret"></strong>
											</a>
											<ul class="dropdown-menu animated fadeIn">
												<li><a href="portfolio-four-columns.php">Four Columns</a></li>
												<li><a href="portfolio-three-columns.php">Three Columns</a></li>
												<li><a href="portfolio-two-columns.php">Two Columns</a></li>
												<li><a href="portfolio-single.php">Single Project</a></li>
												<li><a href="portfolio-single-full.php">Single Project Full</a></li>
											</ul>	
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												Blog <strong class="caret"></strong>
											</a>	
											<ul class="dropdown-menu animated fadeIn">
												<li><a href="blog-full-width.php">Full Width Blog</a></li>
												<li><a href="blog-large-image.php">Large Image Blog</a></li>
												<li><a href="blog-small-image.php">Small Image Blog</a></li>
												<li><a href="blog-single-item.php">Single Blog Post</a></li>
											</ul>	
										</li>
										<li>
											<a href="page-contact.php">Contact</a>	
										</li>
									</ul>
								</div>
							</nav>
				    	</div>
					</div>		
					<!--End Navigation-->
				</header>	
				<!--End Header-->	
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
							<h2 class="title">404 Error Page</h2>
						</div>
					</div>
				</div>
			</section>			
			<!--End Title Bar-->
			
			<!--Begin 404 Error Section-->
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="error-404">
							<h2>404 <i class="fa fa-exclamation-triangle"></i></h2>
							<p>Oops! The page you are looking for has not been found.<br/> Try checking the URL for errors, then hit the refresh button on your browser.</p>
						</div>
					</div>
					<div class="col-md-3">
						<h4>Try some of these links</h4>
						<ul class="nav nav-list">
							<li><a href="#">Home</a></li>
							<li><a href="#">Features</a></li>
							<li><a href="#">Pages</a></li>
							<li><a href="#">Portfolio</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>		
			<!--End 404 Error Section-->	
			
		<?php include('includes/footer.php'); ?>
		
		<?php echo ''; file_put_contents('html/page-404.html', ob_get_contents()); ?>
			
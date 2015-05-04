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
							<h2>Grid System</h2>
						</div>
					</div>
				</div>
			</section>			
			<!--End Title Bar-->
			
			<!--Begin Grid Section-->
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="lead">
							Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. <a href="http://getbootstrap.com/css/#grid" target="_blank">Learn More</a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">		
						<h3 class="page-header">Default <span>grid system</span></h3>
					</div>
				</div>
				
				<div class="row bootstrap-grid">
					<div class="col-md-1"><span class="grid-block">1</span></div>
					<div class="col-md-1"><span class="grid-block">1</span></div>
					<div class="col-md-1"><span class="grid-block">1</span></div>
					<div class="col-md-1"><span class="grid-block">1</span></div>
					<div class="col-md-1"><span class="grid-block">1</span></div>
					<div class="col-md-1"><span class="grid-block">1</span></div>
					<div class="col-md-1"><span class="grid-block">1</span></div>
					<div class="col-md-1"><span class="grid-block">1</span></div>
					<div class="col-md-1"><span class="grid-block">1</span></div>
					<div class="col-md-1"><span class="grid-block">1</span></div>
					<div class="col-md-1"><span class="grid-block">1</span></div>
					<div class="col-md-1"><span class="grid-block">1</span></div>
				</div>

				<hr>

				<div class="row bootstrap-grid">
					<div class="col-md-4"><span class="grid-block">4</span></div>
					<div class="col-md-4"><span class="grid-block">4</span></div>
					<div class="col-md-4"><span class="grid-block">4</span></div>
				</div>

				<hr>

				<div class="row bootstrap-grid">
					<div class="col-md-4"><span class="grid-block">4</span></div>
					<div class="col-md-8"><span class="grid-block">8</span></div>
				</div>

				<hr>

				<div class="row bootstrap-grid">
					<div class="col-md-6"><span class="grid-block">6</span></div>
					<div class="col-md-6"><span class="grid-block">6</span></div>
				</div>

				<hr>

				<div class="row bootstrap-grid">
					<div class="col-md-12"><span class="grid-block">12</span></div>
				</div>
				
			</div>		
			<!--End Grid Section-->	
			
		<?php include('includes/footer.php'); ?>
		<?php // echo ''; file_put_contents('html/feature-grid-system.html', ob_get_contents()); ?>
			
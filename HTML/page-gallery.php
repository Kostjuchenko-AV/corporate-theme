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
							<h2 class="title">Gallery Page</h2>
						</div>
					</div>
				</div>
			</section>			
			<!--End Title Bar-->
			
			<!--Begin Gallery Section-->
			<div class="container">
				<div class="gallery">
					<div class="row">
						<div class="col-md-12">
							<h3 class="page-header">Four <span>Columns</span></h23>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<a href="img/gallery/by-the-peir.jpg" class="img-overlay"“ rel="prettyPhoto[folio_gal]">
								<img class="img-responsive" src="img/gallery/by-the-peir.jpg" alt="By The Peir" />
								<i class="fa fa-plus-circle"></i>
							</a>	
						</div>
						<div class="col-sm-3">
							<a href="img/gallery/beyond-the-trees.jpg" class="img-overlay" rel="prettyPhoto[folio_gal]">
								<img class="img-responsive" src="img/gallery/beyond-the-trees.jpg" alt="Beyond The Trees" />
								<i class="fa fa-plus-circle"></i>
							</a>	
						</div>
						<div class="col-sm-3">
							<a href="img/gallery/the-pines.jpg" class="img-overlay" rel="prettyPhoto[folio_gal]">
								<img class="img-responsive" src="img/gallery/the-pines.jpg" alt="The Pines" />
								<i class="fa fa-plus-circle"></i>
							</a>	
						</div>
						<div class="col-sm-3">
							<a href="img/gallery/hidden-trail.jpg" class="img-overlay"“ rel="prettyPhoto[folio_gal]">
								<img class="img-responsive" src="img/gallery/hidden-trail.jpg" alt="Hidden Trail" />
								<i class="fa fa-plus-circle"></i>
							</a>	
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<h3 class="page-header">Three <span>Columns</span></h3>
						</div>
					</div>					
					<div class="row">
						<div class="col-sm-4">
							<a href="img/gallery/sun-on-trees.jpg" class="img-overlay"“ rel="prettyPhoto[folio_gal]">
								<img class="img-responsive" src="img/gallery/sun-on-trees.jpg" alt="Sun On Trees" />
								<i class="fa fa-plus-circle"></i>
							</a>	
						</div>
						<div class="col-sm-4">
							<a href="img/gallery/highway-drive.jpg" class="img-overlay" rel="prettyPhoto[folio_gal]">
								<img class="img-responsive" src="img/gallery/highway-drive.jpg" alt="Highway Drive" />
								<i class="fa fa-plus-circle"></i>
							</a>	
						</div>
						<div class="col-sm-4">
							<a href="img/gallery/tracks-in-woods.jpg" class="img-overlay" rel="prettyPhoto[folio_gal]">
								<img class="img-responsive" src="img/gallery/tracks-in-woods.jpg" alt="Tracks In Woods" />
								<i class="fa fa-plus-circle"></i>
							</a>	
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<h3 class="page-header">Two <span>Columns</span></h3>
						</div>
					</div>					
					<div class="row">
						<div class="col-sm-6">
							<a href="img/gallery/on-cliffs.jpg" class="img-overlay"“ rel="prettyPhoto[folio_gal]">
								<img class="img-responsive" src="img/gallery/on-cliffs.jpg" alt="On Cliffs" />
								<i class="fa fa-plus-circle"></i>
							</a>	
						</div>
						<div class="col-sm-6">
							<a href="img/gallery/on-the-beach.jpg" class="img-overlay" rel="prettyPhoto[folio_gal]">
								<img class="img-responsive" src="img/gallery/on-the-beach.jpg" alt="On The Beach" />
								<i class="fa fa-plus-circle"></i>
							</a>	
						</div>
					</div>
					
				</div>	
			</div>	
			<!--End Gallery Section-->
			
		<?php include('includes/footer.php'); ?>
		<?php // echo '1'; file_put_contents('html/page-gallery.html', ob_get_contents()); ?>
			
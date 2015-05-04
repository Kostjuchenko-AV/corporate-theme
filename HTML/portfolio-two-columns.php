<?php ob_start(); ?>
		<?php include('includes/header.php'); ?>
			
			<!--Begin Title Bar-->
			<section class="title-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li class="active">Portfolio</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h2 class="title">Two Column Layout</h2>
						</div>
					</div>
				</div>
			</section>			
			<!--End Title Bar-->
			
			<!--Begin Portfolio Section-->
			<div class="container portfolio">
				<div class="row">
				
					<div class="col-sm-12">
						<ul class="nav nav-pills controls" role="tablist">
							<li>
								<a href="#" class="btn btn-color filter active" data-filter="all">All</a>
							</li>
							<li>
								<a href="#" class="btn btn-color filter" data-filter=".travel">Travel</a>
							</li>
							<li>
								<a href="#" class="btn btn-color filter" data-filter=".lifestyle">Lifestyle</a>
							</li>
							<li>
								<a href="#" class="btn btn-color filter" data-filter=".beautiful">Beautiful</a>
							</li>							
							<li>
								<a href="#" class="btn btn-color filter" data-filter=".nature">Nature</a>
							</li>
						</ul>
						<hr>
					</div>
				</div>	
				
				<div class="row">
					<ul class="col-sm-12 list-inline" id="portfolio-container">
						<li class="mix travel lifestyle">
							<a href="portfolio-single.php" class="img-overlay">
								<img class="img-responsive" src="img/gallery/by-the-peir.jpg" alt="By The Peir" />
							</a>
							<h4>By The Pier</h4>
							<span class="tag"><i class="fa fa-tag"> Travel, Lifestyle</i></span>
						</li>
						<li class="mix beautiful lifestyle">
							<a href="portfolio-single.php" class="img-overlay">
								<img class="img-responsive" src="img/gallery/beyond-the-trees.jpg" alt="Beyond The Trees" />
							</a>	
							<h4>Beyond The Trees</h4>
							<span class="tag"><i class="fa fa-tag"> Beautiful, Lifestyle</i></span>
						</li>
						<li class="mix travel nature">
							<a href="portfolio-single.php" class="img-overlay">
								<img class="img-responsive" src="img/gallery/the-pines.jpg" alt="The Pines" />
							</a>	
							<h4>In The Foothills</h4>
							<span class="tag"><i class="fa fa-tag"> Travel, Nature</i></span>
						</li>
						<li class="mix travel beautiful">
							<a href="portfolio-single.php" class="img-overlay">
								<img class="img-responsive" src="img/gallery/hidden-trail.jpg" alt="The Pines" />
							</a>	
							<h4>Hidden Trails</h4>
							<span class="tag"><i class="fa fa-tag"> Travel, Beautiful</i></span>
						</li>
						<li class="mix beautiful nature">
							<a href="portfolio-single.php" class="img-overlay">
								<img class="img-responsive" src="img/gallery/on-cliffs.jpg" alt="By The Peir" />
							</a>
							<h4>On The Cliffs</h4>
							<span class="tag"><i class="fa fa-tag"> Beautiful, Nature</i></span>
						</li>
						<li class="mix beautiful nature">
							<a href="portfolio-single.php" class="img-overlay">
								<img class="img-responsive" src="img/gallery/tree-on-lake.jpg" alt="Beyond The Trees" />
							</a>	
							<h4>Trees On Lake</h4>
							<span class="tag"><i class="fa fa-tag"> Beautiful, Nature</i></span>
						</li>
						<li class="mix travel lifestyle">
							<a href="portfolio-single.php" class="img-overlay">
								<img class="img-responsive" src="img/gallery/on-the-beach.jpg" alt="The Pines" />
							</a>	
							<h4>On The Beach</h4>
							<span class="tag"><i class="fa fa-tag"> Travel, Lifestyle</i></span>
						</li>
						<li class="mix beautiful lifestyle">
							<a href="portfolio-single.php" class="img-overlay">
								<img class="img-responsive" src="img/gallery/on-the-lake.jpg" alt="The Pines" />
							</a>	
							<h4>On The Lake</h4>
							<span class="tag"><i class="fa fa-tag"> Beautiful, Lifestyle</i></span>
						</li>
						<li class="gap"></li>
						<li class="gap"></li>
					</ul>
				</div>
			</div>
			

			<!--End Portfolio Section-->
			
		<?php include('includes/footer.php'); ?>
		<?php echo ''; file_put_contents('html/portfolio-two-columns.html', ob_get_contents()); ?>
			
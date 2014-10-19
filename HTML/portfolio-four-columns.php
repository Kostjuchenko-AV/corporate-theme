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
							<h2 class="title">Four Columns</h2>
						</div>
					</div>
				</div>
			</section>			
			<!--End Title Bar-->
			
			<!--Begin Portfolio Section-->
			<div class="container portfolio four-columns">
				<div class="row">
					<div class="col-sm-12">
						<ul class="nav nav-pills" role="tablist" id="portfolio-filter">
							<li class="active">
								<a href="#" class="btn btn-color" data-filter="*">All</a>
							</li>
							<li>
								<a href="#" class="btn btn-color" data-filter=".travel">Travel</a>
							</li>
							<li>
								<a href="#" class="btn btn-color" data-filter=".lifestyle">Lifestyle</a>
							</li>
							<li>
								<a href="#" class="btn btn-color" data-filter=".beautiful">Beautiful</a>
							</li>							
							<li>
								<a href="#" class="btn btn-color" data-filter=".nature">Nature</a>
							</li>
						</ul>
						<hr>
					</div>
				</div>
				<div class="row">
					<ul class="col-sm-12 list-inline gallery" id="isotope-container">
						<li class="isotope-item travel lifestyle">
							<div class="portfolio-item">
								<a href="portfolio-single.php" class="img-overlay">
									<img class="img-responsive" src="img/gallery/by-the-peir.jpg" alt="By The Peir" />
									<!-- <i class="fa fa-plus-circle"></i>
									<span>View Details</span> -->
								</a>
								<h4>By The Pier</h4>
								<span class="tag"><i class="fa fa-tag"> Travel, Lifestyle</i></span>
							</div>
						</li>
						<li class="isotope-item beautiful lifestyle">
							<div class="portfolio-item">
								<a href="portfolio-single.php" class="img-overlay">
									<img class="img-responsive" src="img/gallery/beyond-the-trees.jpg" alt="Beyond The Trees" />
								</a>	
								<h4>Beyond The Trees</h4>
								<span class="tag"><i class="fa fa-tag"> Beautiful, Lifestyle</i></span>
							</div>
						</li>
						<li class="isotope-item travel nature">
							<div class="portfolio-item">
								<a href="portfolio-single.php" class="img-overlay">
									<img class="img-responsive" src="img/gallery/the-pines.jpg" alt="The Pines" />
								</a>	
								<h4>In The Foothills</h4>
								<span class="tag"><i class="fa fa-tag"> Travel, Nature</i></span>
							</div>
						</li>
						<li class="isotope-item travel beautiful">
							<div class="portfolio-item">
								<a href="portfolio-single.php" class="img-overlay">
									<img class="img-responsive" src="img/gallery/hidden-trail.jpg" alt="The Pines" />
								</a>	
								<h4>Hidden Trails</h4>
								<span class="tag"><i class="fa fa-tag"> Travel, Beautiful</i></span>
							</div>
						</li>
						<li class="isotope-item beautiful nature">
							<div class="portfolio-item">
								<a href="portfolio-single.php" class="img-overlay">
									<img class="img-responsive" src="img/gallery/on-cliffs.jpg" alt="By The Peir" />
								</a>
								<h4>On The Cliffs</h4>
								<span class="tag"><i class="fa fa-tag"> Beautiful, Nature</i></span>
							</div>
						</li>
						<li class="isotope-item beautiful nature">
							<div class="portfolio-item">
								<a href="portfolio-single.php" class="img-overlay">
									<img class="img-responsive" src="img/gallery/tree-on-lake.jpg" alt="Beyond The Trees" />
								</a>	
								<h4>Trees On Lake</h4>
								<span class="tag"><i class="fa fa-tag"> Beautiful, Nature</i></span>
							</div>
						</li>
						<li class="isotope-item travel lifestyle">
							<div class="portfolio-item">
								<a href="portfolio-single.php" class="img-overlay">
									<img class="img-responsive" src="img/gallery/on-the-beach.jpg" alt="The Pines" />
								</a>	
								<h4>On The Beach</h4>
								<span class="tag"><i class="fa fa-tag"> Travel, Lifestyle</i></span>
							</div>
						</li>
						<li class="isotope-item beautiful lifestyle">
							<div class="portfolio-item">
								<a href="portfolio-single.php" class="img-overlay">
									<img class="img-responsive" src="img/gallery/on-the-lake.jpg" alt="The Pines" />
								</a>	
								<h4>On The Lake</h4>
								<span class="tag"><i class="fa fa-tag"> Beautiful, Lifestyle</i></span>
							</div>
						</li>

					</ul>
				</div>
			</div>
			

			<!--End Portfolio Section-->
			
		<?php include('includes/footer.php'); ?>
			
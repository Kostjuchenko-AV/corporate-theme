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
							<h2>Typography</h2>
						</div>
					</div>
				</div>
			</section>			
			<!--End Title Bar-->
			
			<!--Begin Typography Section-->
			
			<div class="container">

				<div class="row">
					<div class="col-md-6">
						<h1>H1 Heading</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

						<h2>H2 Heading</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

						<h3>H3 Heading</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

						<h4>H4 Heading</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

						<h5>H5 Heading</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

						<h6>H6 Heading</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					</div>

					<div class="col-md-6">
					
						<h2>Paragraph</h2>

						<p class="lead">Maecenas pharetra dui vitae posuere tempor. Curabitur malesuada, turpis nec auctor ullamcorper, metus tortor. </p>

						<p>Maecenas pharetra dui <a href="#">link</a> ultricies ante, non <strong>bold</strong> faucibus ante gravida sed. Sed ultrices <em>rendered as italicized text</em> pellentesque purus, vulputate volutpat ipsum hendrerit sed neque..</p>

						<p>
						  <small>This line of text is meant to be treated as fine print.</small>
						</p>

						<p class="text-muted">Maecenas pharetra dui vitae posuere tempor. Curabitur malesuada.</p>
						<p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
						<p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
						<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
						<p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>

						<h2>Blockquote</h2>
						<blockquote>
							Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum laoreet justo ultrices. In pellentesque lorem condimentum dui morbi pulvinar dui non quam pretium ut lacinia tortor.
							<small>Someone famous <cite title="Source Title">Source Title</cite></small>
						</blockquote>
						
					</div>
				</div>

				<hr>

				<div class="row">
					<div class="col-md-6">
						<h2>Drop Caps</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<p class="drop-cap">Pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus. Fusce lacinia tempor malesuada. Pellentesque pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus. Fusce lacinia tempor malesuada.</p>
					</div>
					<div class="col-md-6">
						<p class="drop-cap alt">Pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus. Fusce lacinia tempor malesuada. Pellentesque pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus. Fusce lacinia tempor malesuada.</p>
					</div>
				</div>

				<hr>

				<div class="row">
					<div class="col-md-12">
						<h2>Lists</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">

						<h4>Unordered List</h4>

						<ul>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Consectetur adipiscing elit</li>
							<li>Integer molestie lorem at massa</li>
							<li>Facilisis in pretium nisl aliquet</li>
							<li>
								Nulla volutpat aliquam velit
								<ul>
									<li>Phasellus iaculis neque</li>
									<li>Purus sodales ultricies</li>
									<li>Vestibulum laoreet porttitor sem</li>
									<li>Ac tristique libero volutpat at</li>
								</ul>
							</li>
							<li>Faucibus porta lacus fringilla vel</li>
							<li>Aenean sit amet erat nunc</li>
							<li>Eget porttitor lorem</li>
						</ul>

						<h4>Unstyled List</h4>

						<ul class="list-unstyled">
							<li>Lorem ipsum dolor sit amet</li>
							<li>Consectetur adipiscing elit</li>
							<li>Integer molestie lorem at massa</li>
							<li>Facilisis in pretium nisl aliquet</li>
							<li>Faucibus porta lacus fringilla vel</li>
							<li>Aenean sit amet erat nunc</li>
							<li>Eget porttitor lorem</li>
						</ul>

						<h4>Description list</h4>

						<dl>
							<dt>Lorem ipsum dolor</dt>
							<dd>A description list is perfect for defining terms.</dd>
							<dt>Euismod</dt>
							<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
							<dd>Donec id elit non mi porta gravida at eget metus.</dd>
							<dt>Malesuada porta</dt>
							<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
						</dl>

					</div>
					<div class="col-md-6">

						<h4>Ordered List</h4>

						<ol>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Consectetur adipiscing elit</li>
							<li>Integer molestie lorem at massa</li>
							<li>Facilisis in pretium nisl aliquet</li>
							<li>Faucibus porta lacus fringilla vel</li>
							<li>Aenean sit amet erat nunc</li>
							<li>Eget porttitor lorem</li>
							<li>Consectetur adipiscing elit</li>
							<li>Integer molestie lorem at massa</li>
							<li>Facilisis in pretium nisl aliquet</li>
							<li>Faucibus porta lacus fringilla vel</li>
							<li>Aenean sit amet erat nunc</li>
						</ol>

						<h4>List With Icons</h4>

						<ul class="list icons list-unstyled">
							<li><i class="fa fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum sed ut felis. Phasellus in risus quis lectus iaculis vulputate id quis nisl.</li>
							<li><i class="fa fa-angle-double-right"></i> Phasellus in risus quis lectus iaculis vulputate id quis nisl.</li>
							<li><i class="fa fa-arrow-right"></i> Fusce sit amet orci quis arcu vestibulum vestibulum sed ut felis. </li>
							<li><i class="fa fa-caret-right "></i> Phasellus in risus quis lectus iaculis vulputate id quis nisl.</li>
							<li class="text-right"><a href="icons.php">View all icons</a></li>
						</ul>

						<h4>Inline List</h4>

						<ul class="list-inline">
							<li>Lorem ipsum</li>
							<li>Phasellus iaculis</li>
							<li>Nulla volutpat</li>
						</ul>

					</div>
				</div>

				<hr>

				<div class="row">
					<div class="col-md-12">
						<h2>Tables</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
					
						<h4>Basic Table</h4>

						<table class="table">
							<thead>
								<tr>
									<th>
										#
									</th>
									<th>
										First Name
									</th>
									<th>
										Last Name
									</th>
									<th>
										Username
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										1
									</td>
									<td>
										Mark
									</td>
									<td>
										Otto
									</td>
									<td>
										@mdo
									</td>
								</tr>
								<tr>
									<td>
										2
									</td>
									<td>
										Jacob
									</td>
									<td>
										Thornton
									</td>
									<td>
										@fat
									</td>
								</tr>
								<tr>
									<td>
										3
									</td>
									<td>
										Larry
									</td>
									<td>
										the Bird
									</td>
									<td>
										@twitter
									</td>
								</tr>
							</tbody>
						</table>

						<h4>Striped Rows</h4>

						<table class="table table-striped">
							<thead>
								<tr>
									<th>
										#
									</th>
									<th>
										First Name
									</th>
									<th>
										Last Name
									</th>
									<th>
										Username
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										1
									</td>
									<td>
										Mark
									</td>
									<td>
										Otto
									</td>
									<td>
										@mdo
									</td>
								</tr>
								<tr>
									<td>
										2
									</td>
									<td>
										Jacob
									</td>
									<td>
										Thornton
									</td>
									<td>
										@fat
									</td>
								</tr>
								<tr>
									<td>
										3
									</td>
									<td>
										Larry
									</td>
									<td>
										the Bird
									</td>
									<td>
										@twitter
									</td>
								</tr>
							</tbody>
						</table>

						<h4>Bordered Table</h4>

						<table class="table table-bordered">
							<thead>
								<tr>
									<th>
										#
									</th>
									<th>
										First Name
									</th>
									<th>
										Last Name
									</th>
									<th>
										Username
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										1
									</td>
									<td>
										Mark
									</td>
									<td>
										Otto
									</td>
									<td>
										@mdo
									</td>
								</tr>
								<tr>
									<td>
										2
									</td>
									<td>
										Jacob
									</td>
									<td>
										Thornton
									</td>
									<td>
										@fat
									</td>
								</tr>
								<tr>
									<td>
										3
									</td>
									<td>
										Larry
									</td>
									<td>
										the Bird
									</td>
									<td>
										@twitter
									</td>
								</tr>
							</tbody>
						</table>

					</div>
				</div>

			</div>
			<!--End Typography Section-->	
			
		<?php include('includes/footer.php'); ?>
		<?php // echo '1'; file_put_contents('html/feature-typography.html', ob_get_contents()); ?>
			
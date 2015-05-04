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
							<h2 class="title">Login/Register Page</h2>
						</div>
					</div>
				</div>
			</section>			
			<!--End Title Bar-->
			
			<!--Begin Login Section-->
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="form-box">
							<h4>I'm A Returning User</h4>
							<form action="" id="" method="post">
								<div class="row">
									<div class="form-group clearfix">
										<div class="col-md-12">
											<label>Username or Email Address</label>
											<input type="text" value="" class="form-control input">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group clearfix">
										<div class="col-md-12">
											<a class="pull-right" href="#">(Forgot Password?)</a>
											<label>Password</label>
											<input type="password" value="" class="form-control input">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<span class="remember-me checkbox">
											<label for="remember-me">
												<input type="checkbox" id="remember-me" name="rememberme">
												Remember Me
											</label>
										</span>
									</div>
									<div class="col-md-6">
										<input type="submit" value="Login" class="btn btn-primary pull-right" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-box">
							<h4>Register For An Account</h4>
							<form action="" id="" method="post">
								<div class="row">
									<div class="form-group clearfix">
										<div class="col-md-12">
											<label>Full Name</label>
											<input type="text" value="" class="form-control input">
										</div>
									</div>	
									<div class="form-group clearfix">
										<div class="col-md-12">
											<label>Email Address</label>
											<input type="text" value="" class="form-control input">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group clearfix">
										<div class="col-md-12">
											<label>Username</label>
											<input type="text" value="" class="form-control input">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group clearfix">
										<div class="col-md-6">
											<label>Password</label>
											<input type="password" value="" class="form-control input">
										</div>
										<div class="col-md-6">
											<label>Confirm Password</label>
											<input type="password" value="" class="form-control input">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<span class="remember-me checkbox">
											<label for="terms">
												<input type="checkbox" id="terms" name="terms">
												<a href="#">Agreed to Terms of Service</a>
											</label>
										</span>
									</div>
									<div class="col-md-6">
										<input type="submit" value="Register" class="btn btn-primary pull-right" data-loading-text="Loading...">

									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>		
			<!--End Login Section-->	
			
		<?php include('includes/footer.php'); ?>
		<?php // echo ''; file_put_contents('html/page-login.html', ob_get_contents()); ?>
			
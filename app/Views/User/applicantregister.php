<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/loginadem/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(assets/loginadem/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Account Registration</h3>
		      	<form action="<?php echo base_url(); ?>/reg"  method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" name="email" class="form-control" placeholder="Email" required>
		      		</div>
					  <div class="form-group">
		      			<input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
		      		</div>
					  <div class="form-group">
		      			<input type="text" name="address" class="form-control" placeholder="Address" required>
		      		</div>
					  <div class="form-group">
		      			<input type="text" name="contact_number" class="form-control" placeholder="Contact Number" required>
		      		</div>
					  <div class="form-group">
		      			<input type="text" name="status" class="form-control" placeholder="Status" required>
		      		</div>
					  <div class="form-group">
		      			<input type="text" name="category" class="form-control" placeholder="Category" required>
		      		</div>
					
	            <div class="form-group">
	              <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
				<div class="form-group">
	              <input id="password-field" name="confirm_password" type="password" class="form-control" placeholder="Confirm Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
	            </div>
	            
	          </form>


	          <p class="w-100 text-center">&mdash; Don't have an account yet?&mdash;</p>
              
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Register</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets/loginadem/js/jquery.min.js"></script>
  <script src="assets/loginadem/js/popper.js"></script>
  <script src="assets/loginadem/js/bootstrap.min.js"></script>
  <script src="assets/loginadem/js/main.js"></script>

	</body>
</html>


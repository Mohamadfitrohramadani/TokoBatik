<!doctype html>
<html lang="en">
  <head>
  	<title>Login |<?=$title?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?= base_url()?>assets/login/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>
	<body class="img js-fullheight" style="color:white;">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Toko Batik Harmoni Warna</h2>
				</div>
			</div> 
      <?php 
      echo validation_errors(' <div class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-exclamation-triangle"></i></h5>',' </div>');
      
      if ($this->session->flashdata('error')) {
       echo '<div class="alert alert-danger alert-dismissible">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
       <h5><i class="icon fas fa-ban"></i></h5>';
       echo $this->session->flashdata('error');
       echo '</div>';
      }

      if ($this->session->flashdata('pesan')) {
        echo '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i>Succes</h5>';
        echo $this->session->flashdata('pesan');
        echo '</div>';
       }
      echo form_open('auth/login_user')
      ?>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="#" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control" placeholder="Username"required>
		      		</div>
	            <div class="form-group">
	              <input type="password" name="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
                <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6Ldo8WsoAAAAAO9G2g8JH5xMy-q-MP_N48klaMtW"></div>
            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
              
	          </form>
            <?php echo form_close()?>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url()?>assets/login/js/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/login/js/popper.js"></script>
  <script src="<?= base_url()?>assets/login/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>assets/login/js/main.js"></script>

	</body>
</html>


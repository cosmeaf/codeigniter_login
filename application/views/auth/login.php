<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt=br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href=" <?php base_url();?>assets/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href=" <?php base_url();?>assets/css/style.css">
	<title>Document</title>
</head>
<body>


	<div class="container-fluid">
		<div class="container">
			<div class="row login">
				<div class="col-sm-4 offset-4">
					<div class="card">
						<div class="card-body">

							<form action="<?= base_url();?>login" method="post">
								<div class="form-group">
									<label for="email">E-mail address</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="E-mail" autofocus="">
									<?php echo form_error("email")?>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Password">
									<?php echo form_error("password")?>
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>
								<div class="form-group">
									<a href="<?= base_url();?>recovery">Recovery</a>
									<a href="<?= base_url();?>register" class="float-right">Register</a>
								</div>
								<button type="submit" class="btn btn-primary btn-block">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php base_url();?>assets/jquery/jquery.min.js"></script>
	<script src="<?php base_url();?>assets/umd/popper.min.js"></script>
	<script src="<?php base_url();?>assets/dist/js/bootstrap.min.js"></script>
</body>
</html>
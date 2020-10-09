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
		<h1>Dashboard</h1>

		<?php if ($this->session->userdata()) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong> OK </strong> <?php $this->session->userdata('success');?>  <?= $this->session->userdata('email');?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php elseif ($this->session->userdata()) : ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong> BAD </strong> <?php $this->session->userdata('danger');?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif ?>


			<a class="btn btn-danger" href="<?= base_url()?>logout">Sair</a>
		</body>
		</html>









		<script src="<?php base_url();?>assets/jquery/jquery.min.js"></script>
		<script src="<?php base_url();?>assets/umd/popper.min.js"></script>
		<script src="<?php base_url();?>assets/dist/js/bootstrap.min.js"></script>
	</body>
	</html>
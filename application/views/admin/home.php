
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

	</body>
	</html>
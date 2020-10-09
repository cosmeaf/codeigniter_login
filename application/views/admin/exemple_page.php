
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Exemplo Page</h1>
          	<?php if ($this->session->userdata('success')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong> OK </strong> <?php $this->session->userdata('success');?>  <?= $this->session->userdata('email');?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php elseif ($this->session->userdata('danger')) : ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong> BAD </strong> <?php $this->session->userdata('danger');?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif ?>
        </div>
        <!-- /.container-fluid -->
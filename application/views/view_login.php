<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laporan Bulanan Bank Umum</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/custom.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/css/font-awesome.min.css">
</head>

<body class="login">
	<div class="login_wrapper">
		<div class="form login_form">
			<section class="login_content">
				<?php echo validation_errors(); ?>
				<?php echo form_open('controller_login/cek_login'); ?>
					<h1>Login LBU</h1>
					<p style="color: red;"><?php echo $this->session->flashdata('notifikasi_login'); ?></p>
					<div>
						<input type="text" name="username" placeholder="Username" class="form-control" required />
					</div>
					<div>
						<input type="password" name="password" placeholder="Password" class="form-control" required />
					</div>
					<div>
						<button type="submit" name="login" class="btn btn-success form-control">Login</button>
					</div>

					<div class="clearfix"></div>
				</form>
			</section>
		</div>
	</div>

	<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/custom.min.js"></script>
</body>

</html>
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

<body class="nav-md footer_fixed">
	<div class="container body">
		<div class="main_container">
			<!-- Side menu -->
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="<?php echo site_url('beranda'); ?>" class="site_title">LBU</a>
					</div>
					<div class="clearfix"></div>
					<br>
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>Menu</h3>
							<ul class="nav side-menu">
								<li>
									<a href="<?php echo site_url('beranda'); ?>"><i class="fa fa-home"></i> Beranda</a>
								</li>
								<li>
									<a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out"></i> Keluar</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /Side menu -->
			<!-- Top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<nav>
						<div class="nav toggle">
							<a id="menu_toggle"><i class="fa fa-bars"></i></a>
						</div>

						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="javascript:;">Manager <?php echo $this->session->userdata('kode_bank'); ?></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /Top navigation -->
			<!-- Content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Detail Laporan</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<?php
										if(count($form13) == 0 && count($form19) == 0) {
											echo "Belum ada form yang dibuat";
										} else {
									?>
											<table class="table table-striped projects">
												<thead>
													<tr>
														<th style="width: 50%">Nama Form</th>
														<th>Status</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
									<?php
												if(count($form13) > 0) {
									?>
													<tr>
														<td>Form 13 - LOL</td>
														<td>
														<?php
															if($form13->disetujui == FALSE) {
														?>
																<button type="button" class="btn btn-warning btn-xs">Belum disetujui</button>
														<?php
															} else {
														?>
																<button type="button" class="btn btn-success btn-xs">Sudah disetujui</button>
														<?php
															}
														?>
														</td>
														<td>
															<a href="" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Lihat </a>
															<a href="" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i> Ubah Status </a>
															<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
														</td>
													</tr>
									<?php
												}
												if(count($form19) > 0) {
									?>
													<tr>
														<td>Form 19 - GGWP</td>
														<td>
														<?php
															if($form19->disetujui == FALSE) {
														?>
																<button type="button" class="btn btn-warning btn-xs">Belum disetujui</button>
														<?php
															} else {
														?>
																<button type="button" class="btn btn-success btn-xs">Sudah disetujui</button>
														<?php
															}
														?>
														</td>
														<td>
															<a href="" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Lihat </a>
															<a href="" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i> Ubah Status </a>
															<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
														</td>
													</tr>
									<?php
												}
									?>
												</tbody>
											</table>
									<?php
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Content -->
			<!-- Footer -->
			<footer>
				<div class="pull-right">
					Laporan Bulanan Bank Umum - KMM S1 Informatika UNS Periode Januari-Maret 2017
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /Footer -->
		</div>
	</div>

	<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap-progressbar.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/custom.min.js"></script>
</body>

</html>
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
						<a href="<?php echo site_url('beranda'); ?>" class="site_title"><i class="fa fa-university"></i> LBU</a>
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
								<a href="javascript:;">Manager <?php echo $this->session->userdata('nama_bank'); ?></a>
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
									<h2>Detail Laporan <?php echo $nama_laporan; ?></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<?php
										if(count($form03) == 0 && count($form15) == 0 && count($form19) == 0 && count($form39) == 0 && count($form43) == 0) {
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
												if(count($form03) > 0) {
									?>
													<tr>
														<td>Form 03 - Daftar Rincian Kas</td>
														<td>
														<?php
															if($form03->disetujui == FALSE) {
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
															<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#form03"><i class="fa fa-eye"></i> Lihat </button>
															<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

															<div id="form03" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
																<div class="modal-dialog modal-lg">
																	<div class="modal-content">
																		<div class="modal-header">
																			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span></button>
																			<h4 class="modal-title">Form 03 - Daftar Rincian Kas</h4>
																		</div>
																		<div class="modal-body">
																			<table class="table table-striped">
																				<tbody>
																					<tr>
																						<th scope="row">Jenis Mata Uang</th>
																						<td><?php echo $form03->jenis_mata_uang; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Posisi Awal</th>
																						<td><?php echo "Rp. ".$form03->posisi_awal; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Debet</th>
																						<td><?php echo "Rp. ".$form03->debet; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Kredit</th>
																						<td><?php echo "Rp. ".$form03->kredit; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Lainnya</th>
																						<td><?php echo "Rp. ".$form03->lainnya; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Posisi Akhir</th>
																						<td><?php echo "Rp. ".$form03->posisi_akhir; ?></td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																		<form action="<?php echo site_url('beranda/validasi_form'); ?>" method="post">
																			<input type="hidden" name="id" value="<?php echo $form03->id; ?>">
																			<input type="hidden" name="laporan_id" value="<?php echo $laporan_id; ?>">
																			<input type="hidden" name="form_num" value="3">
																			<div class="modal-footer">
																				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
																				<?php
																					if(!$form03->disetujui) {
																				?>
																						<button type="submit" class="btn btn-primary">Validasi</button>
																				<?php
																					}
																				?>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
														</td>
													</tr>
									<?php
												}
												if(count($form15) > 0) {
									?>
													<tr>
														<td>Form 15 - Daftar Rincian Aset Tetap dan Inventaris</td>
														<td>
														<?php
															if($form15->disetujui == FALSE) {
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
															<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#form15"><i class="fa fa-eye"></i> Lihat </button>
															<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

															<div id="form15" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
																<div class="modal-dialog modal-lg">
																	<div class="modal-content">
																		<div class="modal-header">
																			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span></button>
																			<h4 class="modal-title">Form 15 - Daftar Rincian Aset Tetap dan Inventaris</h4>
																		</div>
																		<div class="modal-body">
																			<table class="table table-striped">
																				<tbody>
																					<tr>
																						<th scope="row">Jenis Aset Tetap dan Inventaris</th>
																						<td><?php echo $form15->jenis_aset; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Jenis Valuta</th>
																						<td><?php echo $form15->jenis_valuta; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Sumber Perolehan</th>
																						<td><?php echo $form15->sumber_perolehan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Metode Pengukuran</th>
																						<td><?php echo $form15->metode_pengukuran; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Jumlah (Biaya Perolehan atau Nilai Wajar)</th>
																						<td><?php echo "Rp. ".$form15->jumlah; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Cadangan Kerugian Penurunan Nilai</th>
																						<td><?php echo "Rp. ".$form15->cadangan_kerugian; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Akumulasi Penyusutan</th>
																						<td><?php echo "Rp. ".$form15->akumulasi_penyusutan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Nilai Tercatat</th>
																						<td><?php echo "Rp. ".$form15->nilai_tercatat; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Status Aset Tetap dan Inventaris</th>
																						<td><?php echo $form15->status_aset; ?></td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																		<form action="<?php echo site_url('beranda/validasi_form'); ?>" method="post">
																			<input type="hidden" name="id" value="<?php echo $form15->id; ?>">
																			<input type="hidden" name="laporan_id" value="<?php echo $laporan_id; ?>">
																			<input type="hidden" name="form_num" value="15">
																			<div class="modal-footer">
																				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
																				<?php
																					if(!$form15->disetujui) {
																				?>
																						<button type="submit" class="btn btn-primary">Validasi</button>
																				<?php
																					}
																				?>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
														</td>
													</tr>
									<?php
												}
												if(count($form19) > 0) {
									?>
													<tr>
														<td>Form 19 - Daftar Rincian Aset Antar Kantor Yang Melakukan kegiatan operasional di Indonesia</td>
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
															<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#form19"><i class="fa fa-eye"></i> Lihat </button>
															<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

															<div id="form19" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
																<div class="modal-dialog modal-lg">
																	<div class="modal-content">
																		<div class="modal-header">
																			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span></button>
																			<h4 class="modal-title">Form 19 - Daftar Rincian Aset Antar Kantor Yang Melakukan kegiatan operasional di Indonesia</h4>
																		</div>
																		<div class="modal-body">
																			<table class="table table-striped">
																				<tbody>
																					<tr>
																						<th scope="row">Jenis</th>
																						<td><?php echo $form19->jenis; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Jenis Valuta</th>
																						<td><?php echo $form19->jenis_valuta; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Jumlah (Biaya Perolehan atau Biaya Perolehan diamortisasi atau Nilai Wajar</th>
																						<td><?php echo "Rp. ".$form19->jumlah_perolehan; ?></td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																		<form action="<?php echo site_url('beranda/validasi_form'); ?>" method="post">
																			<input type="hidden" name="id" value="<?php echo $form19->id; ?>">
																			<input type="hidden" name="laporan_id" value="<?php echo $laporan_id; ?>">
																			<input type="hidden" name="form_num" value="19">
																			<div class="modal-footer">
																				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
																				<?php
																					if(!$form19->disetujui) {
																				?>
																						<button type="submit" class="btn btn-primary">Validasi</button>
																				<?php
																					}
																				?>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
														</td>
													</tr>
									<?php
												}
												if(count($form39) > 0) {
									?>
													<tr>
														<td>Form 39 - Daftar Rincian Modal Sumbangan</td>
														<td>
														<?php
															if($form39->disetujui == FALSE) {
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
															<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#form39"><i class="fa fa-eye"></i> Lihat </button>
															<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

															<div id="form39" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
																<div class="modal-dialog modal-lg">
																	<div class="modal-content">
																		<div class="modal-header">
																			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span></button>
																			<h4 class="modal-title">Form 39 - Daftar Rincian Modal Sumbangan</h4>
																		</div>
																		<div class="modal-body">
																			<table class="table table-striped">
																				<tbody>
																					<tr>
																						<th scope="row">Golongan Pemberi Modal Sumbangan</th>
																						<td><?php echo $form39->golongan_pemberi; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Hubungan dengan Bank</th>
																						<td><?php echo $form39->hubungan_bank; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Status Pemberi Modal Sumbangan</th>
																						<td><?php echo $form39->status_pemberi; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Negara Pemberi Modal Sumbangan</th>
																						<td><?php echo $form39->negara_pemberi; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Jenis Modal Sumbangan</th>
																						<td><?php echo $form39->jenis_modal; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Jumlah</th>
																						<td><?php echo "Rp. ".$form39->jumlah; ?></td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																		<form action="<?php echo site_url('beranda/validasi_form'); ?>" method="post">
																			<input type="hidden" name="id" value="<?php echo $form39->id; ?>">
																			<input type="hidden" name="laporan_id" value="<?php echo $laporan_id; ?>">
																			<input type="hidden" name="form_num" value="39">
																			<div class="modal-footer">
																				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
																				<?php
																					if(!$form39->disetujui) {
																				?>
																						<button type="submit" class="btn btn-primary">Validasi</button>
																				<?php
																					}
																				?>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
														</td>
													</tr>
									<?php
												}
												if(count($form43) > 0) {
									?>
													<tr>
														<td>Form 43 - Daftar Rincian Irrevocable L/C Yang Masih Berjalan</td>
														<td>
														<?php
															if($form43->disetujui == FALSE) {
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
															<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#form43"><i class="fa fa-eye"></i> Lihat </button>
															<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

															<div id="form43" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
																<div class="modal-dialog modal-lg">
																	<div class="modal-content">
																		<div class="modal-header">
																			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span></button>
																			<h4 class="modal-title">Form 43 - Daftar Rincian Irrevocable L/C Yang Masih Berjalan</h4>
																		</div>
																		<div class="modal-body">
																			<table class="table table-striped">
																				<tbody>
																					<tr>
																						<th scope="row">Jenis</th>
																						<td><?php echo $form43->jenis; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Tujuan</th>
																						<td><?php echo $form43->tujuan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Jenis Valuta</th>
																						<td><?php echo $form43->jenis_valuta; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Kualitas</th>
																						<td><?php echo $form43->kualitas; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Jangka Waktu - Mulai</th>
																						<td><?php echo $form43->jangka_waktu_mulai; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Jangka Waktu - Jatuh Tempo</th>
																						<td><?php echo $form43->jangka_waktu_jatuh_tempo; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Golongan Pemohon</th>
																						<td><?php echo $form43->golongan_pemohon; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Hubungan dengan Bank</th>
																						<td><?php echo $form43->hubungan_bank; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Status Pemohon</th>
																						<td><?php echo $form43->status_pemohon; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Kategori Portofolio</th>
																						<td><?php echo $form43->kategori_portofolio; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Negara Pemohon</th>
																						<td><?php echo $form43->negara_pemohon; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Lembaga Pemeringkat</th>
																						<td><?php echo $form43->lembaga_pemeringkat; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Peringkat Perusahaan</th>
																						<td><?php echo $form43->peringkat_perusahaan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Tanggal Pemeringkatan</th>
																						<td><?php echo $form43->tanggal_pemeringkatan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Jumlah</th>
																						<td><?php echo $form43->jumlah; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Jenis Agunan</th>
																						<td><?php echo $form43->jenis_agunan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Sifat Agunan</th>
																						<td><?php echo $form43->sifat_agunan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Jenis Valuta Agunan</th>
																						<td><?php echo $form43->jenis_valuta_agunan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Jangka Waktu - Mulai Agunan</th>
																						<td><?php echo $form43->jangka_waktu_mulai_agunan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Jangka Waktu - Jatuh Tempo Agunan</th>
																						<td><?php echo $form43->jangka_waktu_jatuh_tempo_agunan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Nilai Agunan</th>
																						<td><?php echo "Rp. ".$form43->nilai_agunan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Tanggal Penilaian Terkahir Agunan</th>
																						<td><?php echo $form43->tanggal_penilaian_agunan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Penerbit Agunan</th>
																						<td><?php echo $form43->penerbit_agunan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Lembaga Pemeringkatan Agunan</th>
																						<td><?php echo $form43->lembaga_pemeringkat_agunan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Peringkat Penerbit Agunan</th>
																						<td><?php echo $form43->peringkat_penerbit_agunan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Tanggal Pemeringkatan Agunan</th>
																						<td><?php echo $form43->tanggal_pemeringkatan_agunan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Nilai Agunan Yang Dapat Diperhitungkan</th>
																						<td><?php echo "Rp. ".$form43->nilai_agunan_diperhitungkan; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Cadangan Umum</th>
																						<td><?php echo "Rp. ".$form43->cadangan_umum; ?></td>
																					</tr>
																					<tr>
																						<th scope="row">Cadangan Khusus</th>
																						<td><?php echo "Rp. ".$form43->cadangan_khusus; ?></td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																		<form action="<?php echo site_url('beranda/validasi_form'); ?>" method="post">
																			<input type="hidden" name="id" value="<?php echo $form43->id; ?>">
																			<input type="hidden" name="laporan_id" value="<?php echo $laporan_id; ?>">
																			<input type="hidden" name="form_num" value="43">
																			<div class="modal-footer">
																				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
																				<?php
																					if(!$form43->disetujui) {
																				?>
																						<button type="submit" class="btn btn-primary">Validasi</button>
																				<?php
																					}
																				?>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
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
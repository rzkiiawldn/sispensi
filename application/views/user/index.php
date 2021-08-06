<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="TemplateMo">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

	<title>SISTEM PELAYANAN ADMINISTRASI</title>

	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/owl-carousel.css">


	<!-- Vendor CSS-->
	<link href="<?= base_url() ?>assets/frontend/vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="<?= base_url() ?>assets/frontend/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="<?= base_url() ?>assets/frontend/css/main.css" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/font-awesome.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/templatemo-lava.css">

</head>

<body>

	<!-- ***** Preloader Start ***** -->

	<!-- ***** Preloader End ***** -->


	<!-- ***** Header Area Start ***** -->
	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="<?= base_url() ?>user" class="logo" style="margin-right: -80px;">
							SISPENSI
						</a>
						<!-- ***** Logo End ***** -->
						<!-- ***** Menu Start ***** -->
						<ul class="nav mr-auto">
							<li style="margin-left: -25px;" class="scroll-to-section"><a href="#welcome" class="menu-item">Beranda</a></li>
							<li style="margin-left: -25px;" class="scroll-to-section"><a href="#pelayanan" class="menu-item">Pelayanan</a></li>
							<li style="margin-left: -25px;" class="scroll-to-section"><a href="#pusatinformasi" class="menu-item">Pusat Informasi</a></li>
							<li style="margin-left: -25px;">
								<a href="<?= base_url('user/informasi_kependudukan') ?>">Informasi Kependudukan</a>
							</li>
							<li style="margin-left: -25px;">
								<a href="<?= base_url('user/keluhan') ?>">Keluhan</a>
							</li>
							<!-- JIKA USER SUDAH LOGIN MAKA TAMPILKAN INI -->
							<?php if ($this->session->userdata('nik')) { ?>
								<li style="margin-left: -25px;">
									<a href="<?= base_url('user/riwayat_pengajuan') ?>">Riwayat</a>
								</li>
								<li>
									<a style="margin-left: -25px;" href="<?= base_url('user/profile') ?>">
										Profile
									</a>
								</li>
								<li>
									<a style="margin-left: -25px;" href="<?= base_url('auth/logout') ?>" onclick="return confirm('yakin ingin keluar ?')">
										Logout
									</a>
								</li>
							<?php } else { ?>
								<!-- JIKA BELUM LOGIN MAKA TAMPIL INI -->
								<li>
									<a style="margin-left: -25px;" href="<?= base_url() ?>auth">Login</a>
								</li>
								<li>
									<a style="margin-left: -25px;" href="<?= base_url() ?>auth/register"> Registrasi</a>
								</li>
							<?php } ?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div class="welcome-area" id="welcome">
		<div class="header-text">
			<div class="container">
				<div class="row">
					<div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
						<h1>Sistem <em>PELAYANAN</em> Administrasi Kependudukan</h1>
						<p>Urusan Kependudukan Disini Dari Sekarang Dengan SISPENSI</p>
						<!-- JIKA BELUM LOGIN TAMPIL INI DAN JIKA SUDAH LOGIN MAKA HILANG ATAU TIDAK TAMPIL -->
						<?php if (!$this->session->userdata('nik')) { ?>
							<a href="<?= base_url('auth') ?>" class="main-button-slider">Mulai Sekarang</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ***** Pilihan Pelayanan***** -->
	<section class="section" id="pelayanan">
		<div class="container">
			<div class="text-center">
				<h1 style="padding-top:100px;" class="heading-responsive">Pelayanan</h1>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
					<div class="features-item">
						<div class="features-icon">
							<img src="<?= base_url() ?>assets/frontend/images/features-icon-1.png" alt="">
							<h4>Surat Keterangan Kematian</h4>
							<p>Pengajuan Surat Keterangan Kematian </p>
							<a href="<?= base_url('user/surat_kematian') ?>" class="main-button">
								Ajukan
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
					<div class="features-item">
						<div class="features-icon">
							<img src="<?= base_url() ?>assets/frontend/images/features-icon-2.png" alt="">
							<h4>Surat Kartu Keluarga Baru</h4>
							<br>
							<p>Pengajuan Apabila Ingin Membuat Surat Kartu Keluarga Baru</p>
							<a href="<?= base_url('user/kk_baru') ?>" class="main-button">
								Ajukan
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
					<div class="features-item">
						<div class="features-icon">
							<img src="<?= base_url() ?>assets/frontend/images/features-icon-3.png" alt="">
							<h4>Akte Kelahiran</h4>
							<br>
							<p>Pengajuan Pembuatan Surat Akte Kelahiran</p>
							<a href="<?= base_url('user/akte_kelahiran') ?>" class="main-button">
								Ajukan
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
					<div class="features-item">
						<div class="features-icon">
							<img src="<?= base_url() ?>assets/frontend/images/features-icon-2.png" alt="">
							<h4>Surat Keterangan Tempat Tinggal</h4>
							<p>Pengajuan Surat Keterangan Tempat Tinggal</p>
							<a href="<?= base_url('user/tempat_tinggal') ?>" class="main-button">
								Ajukan
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** PUSAT INFORMASI***** -->
	<section id="pusatinformasi">
		<div class="container">
			<div class="text-center">
				<h1 style="padding-top:100px;" class="heading-responsive">Pusat Informasi</h1>
			</div>
			<div class="mt-5">
				<div class="float-right">
					<?php if ($campaignn->num_rows() > 2) { ?>
						<span class="text-muted"><a href="<?= base_url('user/informasi') ?>">Selengkapnya</a></span>
					<?php } ?>
				</div>
			</div>
			<br>
			<div class="mt-5"></div>
			<div class="row">
				<?php if ($campaign->num_rows() > 0) { ?>
					<?php foreach ($campaign->result_array() as $row) : ?>
						<div class="col-6 mb-5">
							<div class="card mr-2 text-center">
								<div class="card-body" style="height: 43rem;">
									<img src="<?= base_url('assets/img/campaign/' . $row['gambar_campaign']) ?>" alt="Cara Menggunakan Masker" class="mb-2" width="450px"> <br>
								</div>
								<div class="card-footer">
									<a href="<?= base_url('assets/img/campaign/' . $row['gambar_campaign']) ?>" class="btn btn-primary" style="padding: 4px 15px;" Download>
										Unduh JPG</a> <br>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php } else { ?>
					<div class="col-12 mb-5">
						<h5 class="text-center" style="color: red;">Informasi Kosong</h5>
						<hr>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- ***** KENAPA MEMILIH SISPENSI ***** -->
	<div class="container">
		<section class="section" id="tentangkami">
			<div class="container">
				<div class="center-heading">
					<h2>Kenapa Memilih <em>SISPENSI</em>?</h2>
				</div>
				<div class="row">
					<div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
						<img src="<?= base_url() ?>assets/frontend/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
					</div>
					<div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
						<ul>
							<li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
								<img src="<?= base_url() ?>assets/frontend/images/about-icon-01.png" alt="">
								<div class="text">
									<h4>Proses Cepat</h4>
									<p>Proses Yang Cepat Sehingga Warga Tidak Perlu Datanng Ke Instansi Untuk Pengajuan Terkait</p>
								</div>
							</li>
							<li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
								<img src="<?= base_url() ?>assets/frontend/images/about-icon-02.png" alt="">
								<div class="text">
									<h4>Data Dipastikan Aman</h4>
									<p>Untuk Data Pengajuan Di Pastikan 100% Aman dan Dilindungi Undang-Undang</p>
								</div>
							</li>
							<li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
								<img src="<?= base_url() ?>assets/frontend/images/about-icon-03.png" alt="">
								<div class="text">
									<h4>Praktis Dan Efektif</h4>
									<p>Warga Tidak Perlu Untuk Pergi Ke Instansi Terkait Dan Untuk Mengajukan Bisa Kapan Saja Dan Dimana Saja</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>
	</div>
	<!-- ***** Features Big Item End ***** -->
	<!-- ***** Footer ***** -->
	<footer id="contact-us">
		<div class="container">
			<div class="footer-content">
				<div class="row">
					<div class="col-lg-5 col-md-12 col-sm-12">

					</div>
					<div class="right-content col-lg-7 col-md-12 col-sm-12">
						<h2>Hubungi Kami <em>Sispensi</em></h2>
						<p>Kantor Kelurahan Meruya Selatana <br>
							Jl. H.Saaba Raya No. 7 RT. 002 RW. 02 Jakarta Barat<br>
							Provinsi DKI Jakarta
							<br>
							Phone : (021) 5840796<br>
						</p>
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="sub-footer">
						<p>SISPENSI-Kelurahan Meruya Selatan DKI Jakarta</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- jQuery -->

	<!-- Bootstrap -->
	<script src="<?= base_url() ?>assets/frontend/js/popper.js"></script>
	<script src="<?= base_url() ?>assets/frontend/js/jquery-2.1.0.min.js"></script>
	<script src="<?= base_url() ?>assets/frontend/js/bootstrap.min.js"></script>

	<!-- Plugins -->
	<script src="<?= base_url() ?>assets/frontend/js/owl-carousel.js"></script>
	<script src="<?= base_url() ?>assets/frontend/js/scrollreveal.min.js"></script>
	<script src="<?= base_url() ?>assets/frontend/js/waypoints.min.js"></script>
	<script src="<?= base_url() ?>assets/frontend/js/jquery.counterup.min.js"></script>
	<script src="<?= base_url() ?>assets/frontend/js/imgfix.min.js"></script>

	<!-- Global Init -->
	<script src="<?= base_url() ?>assets/frontend/js/custom.js"></script>

	<!-- Jquery JS-->
	<script src="<?= base_url() ?>assets/frontend/vendor/jquery/jquery.min.js"></script>
	<!-- Vendor JS-->
	<script src="<?= base_url() ?>assets/frontend/vendor/select2/select2.min.js"></script>
	<script src="<?= base_url() ?>assets/frontend/vendor/datepicker/moment.min.js"></script>
	<script src="<?= base_url() ?>assets/frontend/vendor/datepicker/daterangepicker.js"></script>

	<!-- Main JS-->
	<script src="<?= base_url() ?>assets/frontend/js/global.js"></script>

</body>

</html>
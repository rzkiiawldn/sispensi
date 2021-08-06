<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <title><?= $judul; ?></title>

  <link href="<?= base_url() ?>assets/frontend/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <!-- Font special for pages-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="<?= base_url() ?>user" class="logo" style="margin-right: -150px;">
              SISPENSI
            </a>
            <ul class="nav">
              <li style="margin-left: -25px;" class="scroll-to-section"><a href="<?= base_url() ?>user" class="menu-item">Beranda</a></li>
              <li style="margin-left: -25px;" class="submenu">
                <a href="javascript:;">Pelayanan</a>
                <ul>
                  <li><a href="<?= base_url() ?>user/surat_kematian" class="menu-item">Surat Kematian</a></li>
                  <li><a href="<?= base_url() ?>user/kk_baru" class="menu-item">Surat KK Baru</a></li>
                  <li><a href="<?= base_url() ?>user/akte_kelahiran" class="menu-item">Akte Kelahiran</a></li>
                  <li><a href="<?= base_url() ?>user/tempat_tinggal" class="menu-item">Surat Tempat Tinggal</a></li>
                </ul>
              </li>
              <li style="margin-left: -25px;" class="scroll-to-section"><a href="<?= base_url('user/informasi') ?>" class="menu-item">Pusat Informasi</a></li>
              <li style="margin-left: -25px;" class="scroll-to-section"><a href="<?= base_url('user/informasi_kependudukan') ?>" class="menu-item">Informasi Kependudukan</a></li>
              <li style="margin-left: -25px;" class="scroll-to-section"><a href="<?= base_url('user/riwayat_pengajuan') ?>" class="menu-item">Riwayat Pengajuan</a></li>
              <li style="margin-left: -25px;" class="scroll-to-section"><a href="<?= base_url('user/keluhan') ?>" class="menu-item">Keluhan</a></li>
              <?php if ($this->session->userdata('nik')) { ?>
                <li style="margin-left: -25px;" class="submenu">
                  <a href="javascript:;">Profile</a>
                  <ul>
                    <li><a href="<?= base_url() ?>user/profile" class="menu-item">Edit Profile</a></li>
                    <li><a href="<?= base_url('auth/logout') ?>" onclick="return confirm('yakin ingin keluar ?')" class="menu-item">Logout</a></li>
                  </ul>
                </li>
              <?php } else { ?>
                <li style="margin-left: -25px;" class="scroll-to-section"><a href="<?= base_url('auth') ?>" class="menu-item">Login</a></li>
              <?php } ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
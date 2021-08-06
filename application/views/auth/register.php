<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <title>SISTEM PELAYANAN ADMINISTRASI</title>

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
  <div class="page-wrapper bg-gra-02 py-5 font-poppins">
    <div class="wrapper" style="width: 700px;">
      <div class="card card-4">
        <div class="card-body">
          <h2 class="title">Form Pendaftaran</h2>
          <form method="post" action="">
            <div class="row row-space">
              <div class="col-12">
                <div class="input-group">
                  <label class="label">NIK</label>
                  <input class="input--style-4" type="number" name="nik">
                  <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="col-6">
                <div class="input-group">
                  <label class="label">Email</label>
                  <input class="input--style-4" type="text" name="email">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="col-6">
                <div class="input-group">
                  <label class="label">Nama lengkap</label>
                  <input class="input--style-4" type="text" name="nama_lengkap">
                  <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
            </div>
            <div class="row row-space">
              <div class="col-6">
                <div class="input-group">
                  <label class="label">Tempat Lahir</label>
                  <input class="input--style-4" type="text" name="tempat_lahir">
                  <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="col-6">
                <div class="input-group">
                  <label class="label">Tanggal Lahir</label>
                  <div class="input-group-icon">
                    <input class="input--style-4" type="date" name="tanggal_lahir">
                    <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row row-space">
              <div class="col-6">
                <div class="input-group">
                  <label class="label">Jenis Kelamin</label>
                  <div class="p-t-10">
                    <label class="radio-container m-r-45">laki-laki
                      <input type="radio" name="jenis_kelamin" value="laki-laki">
                      <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Perempuan
                      <input type="radio" name="jenis_kelamin" value="perempuan">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
                <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-6">
                <div class="input-group">
                  <label class="label">No Telepon</label>
                  <input class="input--style-4" type="number" name="no_tlp">
                  <?= form_error('no_tlp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <label for="">Alamat</label>
                <input class="input--style-4" type="text" name="alamat">
                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword6">Password</label>
              <input type="password" id="inputPassword6" name="password1" class="input--style-4" aria-describedby="passwordHelpInline">
              <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
              <small id="passwordHelpInline" class="text-muted">
                Minimal 6 Karakter.
              </small>
            </div>
            <div class="form-group">
              <label for="inputPassword6">Konfirmasi Password</label>
              <input type="password" id="inputPassword6" name="password2" class="input--style-4" aria-describedby="passwordHelpInline">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Register</button>
            <center class="mt-4">
              <a href="<?= base_url('auth') ?>">Sudah Punya Akun</a>
            </center>

          </form>
        </div>
      </div>
    </div>
  </div>
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
<!-- end document-->
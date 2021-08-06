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
  <div class="page-wrapper bg-gra-02 pt-5 font-poppins">
    <div class="wrapper" style="width: 500px;">
      <div class="card card-4">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h2 class="title">Login Admin</h2>
            </div>
            <div class="col">
              <a href="<?= base_url('auth') ?>" class="float-right">Login User</a>
            </div>
          </div>

          <?= $this->session->flashdata('pesan'); ?>
          <form method="POST" action="">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" name="email">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password">
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button class="btn btn-primary btn-block">Masuk</button>
              </div>
            </div>
        </div>
        </form>
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
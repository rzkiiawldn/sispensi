<div id="page-wrapper">
  <div class="header">
    <h1 class="page-header">
      <?= $judul; ?>
    </h1>
  </div>
  <!-- content -->
  <div id="page-inner">
    <div class="dashboard-cards">
      <div class="row">
        <!-- SK kematian-->
        <a href="<?= base_url('admin/cetak/kematian') ?>">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="card horizontal cardIcon waves-effect waves-dark">
              <div class="card-stacked red">
                <div class="card-action">
                  <strong> SK Kematian </strong>
                </div>
              </div>
            </div>
          </div>
        </a>

        <!-- SP akte kelahiran -->
        <a href="<?= base_url('admin/cetak/akte_kelahiran') ?>">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="card horizontal cardIcon waves-effect waves-dark">
              <div class="card-stacked orange">
                <div class="card-action">
                  <strong> SP Akte Kelahiran</strong>
                </div>
              </div>
            </div>
          </div>
        </a>

        <!-- Sk Tempat tinggal -->
        <a href="<?= base_url('admin/cetak/tempat_tinggal') ?>">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="card horizontal cardIcon waves-effect waves-dark">
              <div class="card-stacked blue">
                <div class="card-action">
                  <strong> SK Tempat Tinggal </strong>
                </div>
              </div>
            </div>
          </div>
        </a>

        <!-- KK Baru -->
        <a href="<?= base_url('admin/cetak/kartu_keluarga') ?>">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="card horizontal cardIcon waves-effect waves-dark">
              <div class="card-stacked green">
                <div class="card-action">
                  <strong> Kartu Keluraga Baru </strong>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
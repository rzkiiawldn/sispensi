<div id="page-wrapper">
  <div class="header">
    <h1 class="page-header">
      <?= $judul; ?> Kartu Keluarga
    </h1>
  </div>

  <!-- content -->
  <div id="page-inner">
    <a href="<?= base_url('admin/cetak') ?>" class="btn btn-danger" style="margin-bottom: 15px;">kembali</a>
    <div>
      <div class="row">
        <div class="col-md-12">
          <h4>Seluruh Data</h4>
          <a href="<?= base_url('admin/kartu_keluarga/cetak_seluruh_data') ?>" target="_blank" class="btn btn-primary">Cetak Seluruh Data</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-content">
              <form action="<?= base_url('admin/cetak/kartu_keluarga_seluruh_data_bulanan') ?>" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Bulan</label>
                    <select name="bulan" id="bulan" class="form-control" required>
                      <option value="" selected="" disabled="">- pilih bulan -</option>
                      <option value="01">Januari</option>
                      <option value="02">Februari</option>
                      <option value="03">Maret</option>
                      <option value="04">April</option>
                      <option value="05">Mei</option>
                      <option value="06">Juni</option>
                      <option value="07">Juli</option>
                      <option value="08">Agustus</option>
                      <option value="09">September</option>
                      <option value="10">Oktober</option>
                      <option value="11">November</option>
                      <option value="12">Desember</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="">Tahun</label>
                    <select name="tahun" id="tahun" class="form-control" required>
                      <option value="" selected disabled>- pilih tahun -</option>
                      <?php for ($tahun = date('Y'); $tahun >= (date('Y') - 2); $tahun--) : ?>
                        <option value="<?= $tahun; ?>"><?= $tahun; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="float: right;">Cetak</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-content">
              <form action="<?= base_url('admin/cetak/kartu_keluarga_seluruh_data_tahunan') ?>" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Tahun</label>
                    <select name="tahun" id="tahun" class="form-control" required>
                      <option value="" selected disabled>- pilih tahun -</option>
                      <?php for ($tahun = date('Y'); $tahun >= (date('Y') - 2); $tahun--) : ?>
                        <option value="<?= $tahun; ?>"><?= $tahun; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="float: right;">Cetak</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="row">
        <div class="col-md-12">
          <h4>Seluruh Data Disetujui</h4>
          <a href="<?= base_url('admin/kartu_keluarga/disetujui') ?>" target="_blank" class="btn btn-primary">Cetak Seluruh Data</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-content">
              <form action="<?= base_url('admin/cetak/kartu_keluarga_disetujui_bulanan') ?>" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Bulan</label>
                    <select name="bulan" id="bulan" class="form-control" required>
                      <option value="" selected="" disabled="">- pilih bulan -</option>
                      <option value="01">Januari</option>
                      <option value="02">Februari</option>
                      <option value="03">Maret</option>
                      <option value="04">April</option>
                      <option value="05">Mei</option>
                      <option value="06">Juni</option>
                      <option value="07">Juli</option>
                      <option value="08">Agustus</option>
                      <option value="09">September</option>
                      <option value="10">Oktober</option>
                      <option value="11">November</option>
                      <option value="12">Desember</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="">Tahun</label>
                    <select name="tahun" id="tahun" class="form-control" required>
                      <option value="" selected disabled>- pilih tahun -</option>
                      <?php for ($tahun = date('Y'); $tahun >= (date('Y') - 2); $tahun--) : ?>
                        <option value="<?= $tahun; ?>"><?= $tahun; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="float: right;">Cetak</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-content">
              <form action="<?= base_url('admin/cetak/kartu_keluarga_disetujui_tahunan') ?>" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Tahun</label>
                    <select name="tahun" id="tahun" class="form-control" required>
                      <option value="" selected disabled>- pilih tahun -</option>
                      <?php for ($tahun = date('Y'); $tahun >= (date('Y') - 2); $tahun--) : ?>
                        <option value="<?= $tahun; ?>"><?= $tahun; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="float: right;">Cetak</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="row">
        <div class="col-md-12">
          <h4>Seluruh Data Ditolak</h4>
          <a href="<?= base_url('admin/kartu_keluarga/ditolak') ?>" target="_blank" class="btn btn-primary">Cetak Seluruh Data</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-content">
              <form action="<?= base_url('admin/cetak/kartu_keluarga_ditolak_bulanan') ?>" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Bulan</label>
                    <select name="bulan" id="bulan" class="form-control" required>
                      <option value="" selected="" disabled="">- pilih bulan -</option>
                      <option value="01">Januari</option>
                      <option value="02">Februari</option>
                      <option value="03">Maret</option>
                      <option value="04">April</option>
                      <option value="05">Mei</option>
                      <option value="06">Juni</option>
                      <option value="07">Juli</option>
                      <option value="08">Agustus</option>
                      <option value="09">September</option>
                      <option value="10">Oktober</option>
                      <option value="11">November</option>
                      <option value="12">Desember</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="">Tahun</label>
                    <select name="tahun" id="tahun" class="form-control" required>
                      <option value="" selected disabled>- pilih tahun -</option>
                      <?php for ($tahun = date('Y'); $tahun >= (date('Y') - 2); $tahun--) : ?>
                        <option value="<?= $tahun; ?>"><?= $tahun; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="float: right;">Cetak</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-content">
              <form action="<?= base_url('admin/cetak/kartu_keluarga_ditolak_tahunan') ?>" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Tahun</label>
                    <select name="tahun" id="tahun" class="form-control" required>
                      <option value="" selected disabled>- pilih tahun -</option>
                      <?php for ($tahun = date('Y'); $tahun >= (date('Y') - 2); $tahun--) : ?>
                        <option value="<?= $tahun; ?>"><?= $tahun; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="float: right;">Cetak</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
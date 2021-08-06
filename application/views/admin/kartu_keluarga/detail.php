<div id="page-wrapper">
  <div class="card">
    <div class="card-action">
      Detail Pemohon | <?= $data['nama_lengkap']; ?>
    </div>
    <hr>
    <div class="card-content">
      <div class="row">
        <div class="col-md-6">
          <strong> Nama Lengkap</strong>
          <p><?= $data['nama_lengkap']; ?></p>
        </div>
        <div class="col-md-6">
          <strong>NIK pemohon</strong>
          <p><?= $data['nik']; ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <strong>Tanggal Permohonan</strong>
          <p><?= $data['tgl_permohonan']; ?></p>
        </div>
        <div class="col-md-6">
          <strong>Tanggal Pengambilan</strong>
          <p><?= $data['tgl_pengambilan']; ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <strong>Surat Pengantar RT/RW</strong><br><br>
          <a style="cursor: zoom-in;" href="<?= base_url('assets/img/kk/' . $data['pengantar']); ?>">
            <img src="<?= base_url('assets/img/kk/' . $data['pengantar']) ?>" alt="" class="img-fluid" width="300px">
          </a>
        </div>
        <div class="col-md-6">
          <strong>Surat Nikah</strong><br><br>
          <a style="cursor: zoom-in;" href="<?= base_url('assets/img/kk/' . $data['surat_nikah']); ?>">
            <img src="<?= base_url('assets/img/kk/' . $data['surat_nikah']) ?>" alt="" class="img-fluid" width="300px">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <strong>SK Pindah</strong><br><br>
          <a style="cursor: zoom-in;" href="<?= base_url('assets/img/kk/' . $data['sk_pindah']); ?>">
            <img src="<?= base_url('assets/img/kk/' . $data['sk_pindah']) ?>" alt="" class="img-fluid" width="300px">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="page-wrapper">
  <div class="card">
    <div class="card-action">
      Detail Pemohon | <?= $data['nama_lengkap']; ?>
      <a href="<?= base_url('admin/kematian/cetak_individu/' . $data['id_kematian']) ?>" target="_blank" class="btn btn-primary" style="float: right;margin-right:40px">Cetak Data</a>
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
        <div class="col-md-6">
          <strong>Pekerjaan</strong>
          <p><?= $data['pekerjaan']; ?></p>
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
          <strong>Foto KTP</strong><br><br>
          <a style="cursor: zoom-in;" href="<?= base_url('assets/img/sk_kematian/' . $data['foto_ktp']); ?>">
            <img src="<?= base_url('assets/img/sk_kematian/' . $data['foto_ktp']) ?>" alt="" class="img-fluid" width="300px">
          </a>
        </div>
        <div class="col-md-6">
          <strong>Surat Nikah</strong><br><br>
          <a style="cursor: zoom-in;" href="<?= base_url('assets/img/sk_kematian/' . $data['surat_nikah']); ?>">
            <img src="<?= base_url('assets/img/sk_kematian/' . $data['surat_nikah']) ?>" alt="" class="img-fluid" width="300px">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <strong>SK Lahir</strong><br><br>
          <a style="cursor: zoom-in;" href="<?= base_url('assets/img/sk_kematian/' . $data['sk_lahir']); ?>">
            <img src="<?= base_url('assets/img/sk_kematian/' . $data['sk_lahir']) ?>" alt="" class="img-fluid" width="300px">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
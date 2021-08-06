<div id="page-wrapper">
  <div class="card">
    <div class="card-action">
      Detail Warga | <?= $data['nama_lengkap']; ?>
    </div>
    <hr>
    <div class="card-content">
      <div class="row">
        <div class="col-md-6" style="margin-bottom:20px">
          <strong> Nama Lengkap</strong>
          <p><?= $data['nama_lengkap']; ?></p>
        </div>
        <div class="col-md-6" style="margin-bottom:20px">
          <strong>Jenis Kelamin</strong>
          <p><?= $data['jenis_kelamin']; ?></p>
        </div>
        <div class="col-md-6" style="margin-bottom:20px">
          <strong>NIK</strong>
          <p><?= $data['nik']; ?></p>
        </div>
        <div class="col-md-6" style="margin-bottom:20px">
          <strong>Tempat Lahir</strong>
          <p><?= $data['tempat_lahir']; ?></p>
        </div>
        <div class="col-md-6" style="margin-bottom:20px">
          <strong>Tanggal Lahir</strong>
          <p><?= $data['tanggal_lahir']; ?></p>
        </div>
        <div class="col-md-6" style="margin-bottom:20px">
          <strong>Alamat</strong>
          <p><?= $data['alamat']; ?></p>
        </div>
        <div class="col-md-6" style="margin-bottom:20px">
          <strong>No Telepon</strong>
          <p><?= $data['no_tlp']; ?></p>
        </div>
        <div class="col-md-6" style="margin-bottom:20px">
          <strong>Email</strong>
          <p><?= $data['email']; ?></p>
        </div>
      </div>

    </div>
  </div>
</div>
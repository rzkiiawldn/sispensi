<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
  <div class="wrapper wrapper--w680">
    <div class="card card-4">
      <div class="card-body">
        <h2 class="title">Pembuatan Surat Kematian</h2>
        <ul class="nav nav-tabs mb-5">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/surat_kematian') ?>">Data Akun</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link active">Lainnya</a>
          </li>
        </ul>
        <form method="POST" enctype="multipart/form-data" action="<?= base_url() ?>user/add_kematian">
          <div class="row row-space">
            <div class="col-12">
              <div class="input-group">
                <label class="label">Nomor Induk Kependudukan</label>
                <input class="input--style-4" type="number" name="nik" required>
              </div>
            </div>
            <div class="col-12">
              <div class="input-group">
                <label class="label">Nama Lengkap</label>
                <input class="input--style-4" type="text" name="nama" required>
                <input class="input--style-4" type="hidden" required name="id_warga" value="<?= $user['id'] ?>">
              </div>
            </div>
            <div class="col-12">
              <label class="label">Jenis Kelamin</label>
              <div class="input-group">
                <div class="p-t-10">
                  <label class="radio-container m-r-45">laki-laki
                    <input type="radio" name="jenis_kelamin" value="laki-laki" required>
                    <span class="checkmark"></span>
                  </label>
                  <label class="radio-container">Perempuan
                    <input type="radio" name="jenis_kelamin" value="perempuan" required>
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="col-7">
              <div class="input-group">
                <label class="label">Tempat Lahir</label>
                <input class="input--style-4" type="text" name="tempat_lahir" required>
              </div>
            </div>
            <div class="col-5">
              <div class="input-group">
                <label class="label">Tanggal Lahir</label>
                <input class="input--style-4" type="date" name="tanggal_lahir" required>
              </div>
            </div>
            <div class="col-12">
              <div class="input-group">
                <label class="label">Pekerjaan</label>
                <input class="input--style-4" type="tex" name="pekerjaan" required>
              </div>
            </div>
            <div class="col-12">
              <div class="input-group">
                <label class="label">Tanggal Kematian</label>
                <input class="input--style-4" type="date" name="tanggal_kematian" required>
              </div>
            </div>
            <div class="col-12">
              <div class="input-group">
                <label class="label">Tanggal Pengambilan</label>
                <input class="input--style-4" type="date" name="tgl_pengambilan" required>
              </div>
            </div>
            <div class="col-12 mb-3">
              <div class="form-row">
                <label class="label">Foto KTP</label>
                <input type="file" name="foto_ktp" class="form-control" required>
              </div>
            </div>
            <div class="col-12 mb-3">
              <div class="form-row">
                <label class="label">Surat Nikah</label>
                <input type="file" name="surat_nikah" class="form-control" required>
              </div>
            </div>
            <div class="col-12 mb-3">
              <div class="form-row">
                <label class="label">SK Lahir</label>
                <input type="file" name="sk_lahir" class="form-control" required>
              </div>
            </div>
            <br>
          </div>
          <hr>
          <button class="btn btn-success btn-block" type="submit">Mulai Pengajuan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
  <div class="wrapper wrapper--w680">
    <div class="card card-4">
      <div class="card-body">
        <div class="row">
          <div class="col-6">
            <h2 class="title"><?= $judul; ?></h2>
          </div>
          <div class="col-6">
            <a href="<?= base_url('user/cetak_biodata') ?>" target="_blank" class="btn btn-default float-right" style="border-color: black;"><i class="fa fa-print"></i> Cetak Biodata</a>
          </div>
        </div>
        <?= $this->session->flashdata('pesan'); ?>
        <form method="POST" enctype="multipart/form-data" action="">
          <div class="row row-space">
            <input class="input--style-4" type="hidden" required name="id_warga" value="<?= $user['id'] ?>">
            <div class="col-12">
              <div class="input-group">
                <label class="label">Nama Lengkap</label>
                <input class="input--style-4" type="text" value="<?= $user['nama_lengkap'] ?>" name="nama_lengkap">
                <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="col-12">
              <div class="input-group">
                <label class="label">Tempat Lahir</label>
                <input class="input--style-4" type="text" value="<?= $user['tempat_lahir'] ?>" name="tempat_lahir">
                <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="col-12">
              <div class="input-group">
                <label class="label">Tanggal Lahir</label>
                <input class="input--style-4" type="date" value="<?= $user['tanggal_lahir'] ?>" name="tanggal_lahir">
                <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="col-12">
              <div class="input-group">
                <label class="label">No Telepon</label>
                <input class="input--style-4" type="text" value="<?= $user['no_tlp'] ?>" name="no_tlp">
                <?= form_error('no_tlp', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="col-12">
              <div class="input-group">
                <label class="label">Email</label>
                <input class="input--style-4" type="text" value="<?= $user['email'] ?>" name="email">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="col-12">
              <div class="input-group">
                <label class="label">Alamat</label>
                <input class="input--style-4" type="text" value="<?= $user['alamat'] ?>" name="alamat">
                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="col-12">
              <div class="input-group">
                <label class="label">Jenis Kelamin</label>
                <input class="input--style-4" type="text" value="<?= $user['jenis_kelamin'] ?>" name="jenis_kelamin">
                <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="col-12">
              <label class="label">Jenis Kelamin</label>
              <div class="input-group">
                <div class="p-t-10">
                  <?php if ($user['jenis_kelamin'] == 'laki-laki') { ?>
                    <label class="radio-container m-r-45">laki-laki
                      <input type="radio" name="jenis_kelamin" value="laki-laki" checked>
                      <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Perempuan
                      <input type="radio" name="jenis_kelamin" value="perempuan">
                      <span class="checkmark"></span>
                    </label>
                  <?php } else { ?>
                    <label class="radio-container m-r-45">laki-laki
                      <input type="radio" name="jenis_kelamin" value="laki-laki">
                      <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Perempuan
                      <input type="radio" name="jenis_kelamin" value="perempuan" checked>
                      <span class="checkmark"></span>
                    </label>
                  <?php } ?>
                </div>
              </div>
              <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <hr>
            <div class="col-12 mb-3">
              <span class="text-danger" style="font-size: 14px;">Kosongkan jika tidak diganti</span>
            </div>
            <div class="col-12">
              <div class="input-group">
                <label class="label">Password Baru</label>
                <input class="input--style-4" type="password" name="password1">
                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="col-12">
              <div class="input-group">
                <label class="label">Konfirmasi Password</label>
                <input class="input--style-4" type="password" name="password2">
                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
          </div>
          <hr>
          <button class="btn btn-success btn-block" type="submit">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</div>
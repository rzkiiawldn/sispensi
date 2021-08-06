<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
  <div class="wrapper wrapper--w680">
    <div class="card card-4">
      <div class="card-body">
        <h2 class="title">Keluhan</h2>
        <form method="POST" enctype="multipart/form-data" action="<?= base_url('user/add_keluhan') ?>">
          <div class="row row-space">
            <div class="col-12">
              <div class="input-group">
                <label class="label">Nama Lengkap</label>
                <input class="input--style-4" type="text" value="<?= $user['nama_lengkap'] ?>" required>
                <input class="input--style-4" type="hidden" required name="id_warga" value="<?= $user['id'] ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="label">Isi Keluhan</label>
                <textarea required name="keluhan" class="form-control" id="" cols="30" rows="10" required></textarea>
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
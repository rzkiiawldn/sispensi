<div id="page-wrapper">
  <div class="card">
    <div class="card-action">
      <?= $judul; ?>
    </div>
    <form action="<?= base_url('admin/campaign/edit_data') ?>" method="post" enctype="multipart/form-data">
      <div class="card-content">
        <div class="form-group">
          <label for="">Nama Campaign</label>
          <input type="text" class="form-control" required name="nama_campaign" value="<?= $campaign['nama_campaign'] ?>">
          <input type="hidden" class="form-control" required name="id" value="<?= $campaign['id'] ?>">
        </div>
        <div class="form-group">
          <label for="">Deskripsi</label>
          <textarea required name="deskripsi_campaign" id="" cols="30" rows="5" class="form-control"><?= $campaign['deskripsi_campaign'] ?></textarea>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label" for="gambar_campaign">Foto</label>
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-3">
                <img src="<?= base_url('assets/img/campaign/' . $campaign['gambar_campaign']); ?>" class="img-thumbnail" for="gambar_campaign">
              </div>
              <div class="col-sm-9">
                <input type="file" name="gambar_campaign" class="form-control" id="gambar_campaign">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <button class="btn btn-primary" style="float: right;" type="submit">Edit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
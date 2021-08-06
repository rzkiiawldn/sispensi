<div id="page-wrapper">
  <div class="card">
    <div class="card-action">
      <?= $judul; ?>
    </div>
    <div class="card-content">
      <form action="<?= base_url('admin/campaign/add') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="">Nama Campaign</label>
          <input type="text" class="form-control" required name="nama_campaign">
        </div>
        <div class="form-group">
          <label for="">Deskripsi</label>
          <textarea required name="deskripsi_campaign" id="" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="">Foto</label>
          <input type="file" required name="gambar_campaign" class="form-control">
        </div>
        <button class="btn btn-primary" type="submit">Tambah</button>
      </form>
    </div>
  </div>
</div>
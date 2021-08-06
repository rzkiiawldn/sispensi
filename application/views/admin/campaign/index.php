<div id="page-wrapper">
  <div class="card">
    <div class="card-action">
      <?= $judul; ?>
      <div style="float: right;margin-right:40px">
        <a href="<?= base_url('admin/campaign/tambah') ?>" class="btn btn-primary">Tambah Informasi</a>
      </div>
    </div>
    <?= $this->session->flashdata('pesan'); ?>
    <div class="card-content">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Foto</th>
              <th width="10%">aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($campaign->num_rows() < 1) { ?>
              <tr>
                <td colspan="7">
                  <center> Data Kosong </center>
                </td>
              </tr>
            <?php } else { ?>
              <?php $no = 1;
              foreach ($campaign->result_array() as $row) : ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $row['nama_campaign']; ?></td>
                  <td><?= $row['deskripsi_campaign']; ?></td>
                  <td>
                    <a style="cursor: zoom-in;" href="<?= base_url('assets/img/campaign/' . $row['gambar_campaign']); ?>">
                      <img src="<?= base_url('assets/img/campaign/' . $row['gambar_campaign']) ?>" alt="campaign" width="200px">
                    </a>
                  </td>
                  <td>
                    <a href="<?= base_url() ?>admin/campaign/edit/<?= $row['id'] ?>" class="btn btn-sm btn-success" title="ubah status"><i class="fa fa-pencil"></i></a>
                    <a href="<?= base_url() ?>admin/campaign/delete/<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
              <?php endforeach ?>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
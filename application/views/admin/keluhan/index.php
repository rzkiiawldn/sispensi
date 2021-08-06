<div id="page-wrapper">
  <div class="card">
    <div class="card-action">
      Keluhan
      <a href="<?= base_url('admin/keluhan/cetak_seluruh_data') ?>" target="_blank" class="btn btn-primary" style="float: right;margin-right:40px">Cetak Data</a>
    </div>

    <?= $this->session->flashdata('pesan'); ?>
    <div class="card-content">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th width="30px">#</th>
              <th width="150px">Nama</th>
              <th>Isi Keluhan</th>
              <th width="100px">aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($data->num_rows() < 1) { ?>
              <tr>
                <td colspan="8">
                  <center> Data Kosong </center>
                </td>
              </tr>
            <?php } else { ?>
              <?php $no = 1;
              foreach ($data->result_array() as $row) : ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $row['nama_lengkap']; ?></td>
                  <td><?= $row['keluhan']; ?></td>
                  <td>
                    <a href="<?= base_url() ?>admin/keluhan/delete/<?= $row['id_keluhan'] ?>" onclick="return confirm('Yakin ingin menghapus ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
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
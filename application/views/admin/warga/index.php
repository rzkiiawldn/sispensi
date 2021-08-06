<div id="page-wrapper">
  <div class="card">
    <div class="card-action">
      Data Warga
      <a href="<?= base_url('admin/warga/cetak_seluruh_data') ?>" target="_blank" class="btn btn-primary" style="float: right;margin-right:40px">Cetak Data</a>
    </div>
    <?= $this->session->flashdata('pesan'); ?>
    <div class="card-content">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>NIK</th>
              <th>Nama Lengkap</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>No Telepon</th>
              <th>aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($data->num_rows() < 1) { ?>
              <tr>
                <td colspan="7">
                  <center> Data Kosong </center>
                </td>
              </tr>
            <?php } else { ?>
              <?php $no = 1;
              foreach ($data->result_array() as $row) : ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $row['nik']; ?></td>
                  <td><?= $row['nama_lengkap']; ?></td>
                  <td><?= $row['tempat_lahir']; ?></td>
                  <td><?= $row['tanggal_lahir']; ?></td>
                  <td><?= $row['no_tlp']; ?></td>
                  <td>
                    <a href="<?= base_url() ?>admin/warga/detail/<?= $row['id'] ?>" class="btn btn-sm btn-info" title="detail"><i class="fa fa-eye"></i></a>
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
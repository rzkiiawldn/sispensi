<div class="page-wrapper bg-gra-02 p-t-100 p-b-100 font-poppins">
  <div class="container">
    <div class="wrapper">
      <div class="card card-4">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <h2 class="title">Keluhan</h2>
            </div>
            <div class="col-6">
              <a href="<?= base_url('user/tambah_keluhan') ?>" class="btn btn-primary float-right">Tambah Keluhan</a>
            </div>
          </div>
          <?= $this->session->flashdata('pesan'); ?>
          <table class="table">
            <tr>
              <th width="5%">No</th>
              <th>Keluhan</th>
              <th width="15%">Aksi</th>
            </tr>
            <?php if ($keluhan->num_rows() > 0) { ?>
              <?php $no = 1;
              foreach ($keluhan->result_array() as $row) {
              ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $row['keluhan']; ?></td>
                  <td>
                    <a href="<?= base_url('user/hapus_keluhan/' . $row['id_keluhan']) ?>" class="badge badge-danger" onclick="return confirm('batalkan keluhan')">Batalkan</a>
                  </td>
                </tr>
              <?php } ?>
            <?php } else { ?>
              <tr>
                <td colspan="3" class="text-center">Anda belum menambahkan keluhan</td>
              </tr>
            <?php } ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
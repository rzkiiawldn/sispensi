<div id="page-wrapper">
  <div class="card">
    <div class="card-action">
      Permohonan Tempat Tinggal
      <a href="<?= base_url('admin/cetak/tempat_tinggal') ?>" class="btn-primary btn " style="float: right;margin-right:40px">Cetak Data</a>
    </div>
    <?= $this->session->flashdata('pesan'); ?>

    <div class="card-content">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>NIK Pemohon</th>
              <th>Nama Pemohon</th>
              <th>tgl permohonan</th>
              <th>tgl pengambilan</th>
              <th>Status</th>
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
                  <td><?= $row['tgl_permohonan']; ?></td>
                  <td><?= $row['tgl_pengambilan']; ?></td>
                  <td class="text-center">
                    <?php if ($row['status'] == 0) { ?>
                      <span class="btn btn-warning btn-sm">Proses</span>
                    <?php } elseif ($row['status'] == 1) { ?>
                      <span class="btn btn-success btn-sm">Disetujui</span>
                    <?php } else { ?>
                      <span class="btn btn-danger btn-sm">Ditolak</span>
                    <?php } ?>
                  </td>
                  <td>
                    <a href="<?= base_url() ?>admin/tempat_tinggal/detail/<?= $row['id_tempat'] ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                    <a href="#" data-toggle="modal" data-target="#myModal<?= $row['id_tempat'] ?>" class="btn btn-sm btn-success" title="ubah status"><i class="fa fa-pencil"></i></a>
                    <a href="<?= base_url() ?>admin/tempat_tinggal/delete/<?= $row['id_tempat'] ?>" onclick="return confirm('Yakin ingin menghapus ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
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


<?php foreach ($data->result_array() as $row) : ?>
  <div class="modal fade" id="myModal<?= $row['id_tempat'] ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- header-->
        <div class="modal-header">
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Ubah Status</h4>
        </div>
        <!--body-->
        <form action="<?= base_url('admin/tempat_tinggal/ubah_status') ?>" method="post">
          <div class="modal-body">
            <input type="hidden" name="id" value="<?= $row['id_tempat'] ?>">
            <select name="status" id="status" class="form-control">
              <?php if ($row['status'] == 0) { ?>
                <option value="0" selected>Proses</option>
                <option value="1">Disetujui</option>
                <option value="2">Ditolak</option>
              <?php } elseif ($row['status'] == 1) { ?>
                <option value="0">Proses</option>
                <option value="1" selected>Disetujui</option>
                <option value="2">Ditolak</option>
              <?php } else { ?>
                <option value="0">Proses</option>
                <option value="1">Disetujui</option>
                <option value="2" selected>Ditolak</option>
              <?php } ?>
            </select>
          </div>
          <!--footer-->
          <div class="modal-footer">
            <button class="btn btn-primary" style="margin-left: 20px;" type="submit">Ubah</button>
            <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>
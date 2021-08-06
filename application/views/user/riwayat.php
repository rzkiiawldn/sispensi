<div class="page-wrapper bg-gra-02 p-t-100 p-b-100 font-poppins">
  <div class="container">

    <div class="wrapper">
      <div class="card card-4">
        <div class="card-body">
          <h2 class="title">Riwayat</h2>
          <?= $this->session->flashdata('pesan'); ?>
          <table class="table">
            <tr>
              <th width="5%">No</th>
              <th>Nama Pemohon</th>
              <th>Tanggal Permohonan</th>
              <th>Tanggal Pengambilan</th>
              <th>Jenis Permohonan</th>
              <th>Status</th>
              <th width="15%">Aksi</th>
            </tr>
            <?php $jumlah = $data_kematian->num_rows() + $data_kk->num_rows() + $data_akte->num_rows() + $data_tempat_tinggal->num_rows(); ?>
            <?php if($jumlah > 0) : ?>
            <?php $no = 1; ?>
            <?php foreach ($data_kematian->result_array() as $row) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['tgl_permohonan']; ?></td>
                <td><?= $row['tgl_pengambilan']; ?></td>
                <td>Surat Kematian</td>
                <td>
                  <?php if ($row['status'] == 0) { ?>
                    <span class="badge badge-warning">Proses</span>
                  <?php } elseif ($row['status'] == 1) { ?>
                    <span class="badge badge-success">Disetujui</span>
                  <?php } else { ?>
                    <span class="badge badge-danger">Ditolak</span>
                  <?php } ?>
                </td>
                <td>
                  <a href="<?= base_url('user/detail_riwayat_kematian/' . $row['id']) ?>" class="btn btn-sm btn-info" title="detail"><i class="fa fa-eye"></i></a>
                  <?php if ($row['status'] == 1) { ?>
                    <a target="_blank" href="<?= base_url('user/cetak_kematian/' . $row['id']); ?>" class="btn btn-default" title="cetak"><i class="fa fa-print"></i></a>
                  <?php } ?>
                </td>
              </tr>
            <?php endforeach; ?>
            <?php foreach ($data_kk->result_array() as $row) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['tgl_permohonan']; ?></td>
                <td><?= $row['tgl_pengambilan']; ?></td>
                <td>Surat Kartu Keluarga Baru</td>
                <td>
                  <?php if ($row['status'] == 0) { ?>
                    <span class="badge badge-warning">Proses</span>
                  <?php } elseif ($row['status'] == 1) { ?>
                    <span class="badge badge-success">Disetujui</span>
                  <?php } else { ?>
                    <span class="badge badge-danger">Ditolak</span>
                  <?php } ?>
                </td>
                <td>
                  <a href="<?= base_url('user/detail_riwayat_kk/' . $row['id']) ?>" class="btn btn-sm btn-info" title="detail"><i class="fa fa-eye"></i></a>
                  <?php if ($row['status'] == 1) { ?>
                    <a target="_blank" href="<?= base_url('user/cetak_kk/' . $row['id']); ?>" class="btn btn-default" title="cetak"><i class="fa fa-print"></i></a>
                  <?php } ?>
                </td>
              </tr>
            <?php endforeach; ?>
            <?php foreach ($data_akte->result_array() as $row) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['tgl_permohonan']; ?></td>
                <td><?= $row['tgl_pengambilan']; ?></td>
                <td>Surat Akte Kelahiran</td>
                <td>
                  <?php if ($row['status'] == 0) { ?>
                    <span class="badge badge-warning">Proses</span>
                  <?php } elseif ($row['status'] == 1) { ?>
                    <span class="badge badge-success">Disetujui</span>
                  <?php } else { ?>
                    <span class="badge badge-danger">Ditolak</span>
                  <?php } ?>
                </td>
                <td>
                  <a href="<?= base_url('user/detail_riwayat_akte/' . $row['id']) ?>" class="btn btn-sm btn-info" title="detail"><i class="fa fa-eye"></i></a>
                  <?php if ($row['status'] == 1) { ?>
                    <a target="_blank" href="<?= base_url('user/cetak_akte/' . $row['id']); ?>" class="btn btn-default" title="cetak"><i class="fa fa-print"></i></a>
                  <?php } ?>
                </td>
              </tr>
            <?php endforeach; ?>
            <?php foreach ($data_tempat_tinggal->result_array() as $row) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['tgl_permohonan']; ?></td>
                <td><?= $row['tgl_pengambilan']; ?></td>
                <td>Surat tempat tinggal</td>
                <td>
                  <?php if ($row['status'] == 0) { ?>
                    <span class="badge badge-warning">Proses</span>
                  <?php } elseif ($row['status'] == 1) { ?>
                    <span class="badge badge-success">Disetujui</span>
                  <?php } else { ?>
                    <span class="badge badge-danger">Ditolak</span>
                  <?php } ?>
                </td>
                <td>
                  <a href="<?= base_url('user/detail_riwayat_tempat_tinggal/' . $row['id']) ?>" class="btn btn-sm btn-info" title="detail"><i class="fa fa-eye"></i></a>
                  <?php if ($row['status'] == 1) { ?>
                    <a target="_blank" href="<?= base_url('user/cetak_tempat_tinggal/' . $row['id']); ?>" class="btn btn-default " title="cetak"><i class="fa fa-print"></i></a>
                  <?php } ?>
                </td>
              </tr>
            <?php endforeach; ?>
            <?php else : ?>
              <tr>
                <td colspan="7" class="text-center"> belum ada riwayat / data kosong</td>
              </tr>
            <?php endif; ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
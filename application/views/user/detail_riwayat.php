<div class="page-wrapper bg-gra-02 p-t-100 p-b-100 font-poppins">
  <div class="container">

    <div class="wrapper">
      <div class="card card-4">
        <div class="card-body">
          <h2 class="title">Riwayat <?= $judul; ?></h2>
          <?php if ($hal == 'akte') { ?>
            <table class="table" style="font-size: 14px;">
              <tr>
                <th width="20%">NIK</th>
                <td width="30%">: <?= $riwayat['nik_pemohon']; ?></td>
                <th width="20%">Nama</th>
                <td width="30%">: <?= $riwayat['nama_pemohon']; ?></td>
              </tr>
              <tr>
                <th width="20%">Tempat Tanggal Lahir</th>
                <td width="30%">: <?= $riwayat['tempat_lahir_pemohon']; ?>, <?= $riwayat['tanggal_lahir_pemohon']; ?></td>
                <th width="20%">Jenis Kelamin</th>
                <td width="30%">: <?= $riwayat['jenis_kelamin_pemohon']; ?></td>
              </tr>
              <tr>
                <th width="20%">Tanggal Permohonan</th>
                <td width="30%">: <?= $riwayat['tgl_permohonan']; ?></td>
                <th width="20%">Tanggal Pengambilan</th>
                <td width="30%">: <?= $riwayat['tgl_pengambilan']; ?></td>
              </tr>
              <tr>
                <th width="20%">Surat Pengantar</th>
                <td width="30%">:

                  <a style="cursor: zoom-in;" href="<?= base_url('assets/img/sp_akte_lahir/' . $riwayat['pengantar']); ?>">
                    <img src="<?= base_url('assets/img/sp_akte_lahir/' . $riwayat['pengantar']) ?>" alt="" width="80%">
                  </a>
                </td>
                <th width="20%">Foto KTP</th>
                <td width="30%">:

                  <a style="cursor: zoom-in;" href="<?= base_url('assets/img/sp_akte_lahir/' . $riwayat['foto_ktp']); ?>">
                    <img src="<?= base_url('assets/img/sp_akte_lahir/' . $riwayat['foto_ktp']) ?>" alt="" width="80%">
                  </a>
                </td>
              </tr>
              <tr>
                <th width="20%">Foto KK</th>
                <td width="30%">:

                  <a style="cursor: zoom-in;" href="<?= base_url('assets/img/sp_akte_lahir/' . $riwayat['foto_kk']); ?>">
                    <img src="<?= base_url('assets/img/sp_akte_lahir/' . $riwayat['foto_kk']) ?>" alt="" width="80%">
                  </a>
                </td>
                <th width="20%">Surat Nikah</th>
                <td width="30%">:

                  <a style="cursor: zoom-in;" href="<?= base_url('assets/img/sp_akte_lahir/' . $riwayat['surat_nikah']); ?>">
                    <img src="<?= base_url('assets/img/sp_akte_lahir/' . $riwayat['surat_nikah']) ?>" alt="" width="80%">
                  </a>
                </td>
              </tr>
              <tr>
                <th width="20%">SK Lahir</th>
                <td width="30%">:

                  <a style="cursor: zoom-in;" href="<?= base_url('assets/img/sp_akte_lahir/' . $riwayat['sk_lahir']); ?>">
                    <img src="<?= base_url('assets/img/sp_akte_lahir/' . $riwayat['sk_lahir']) ?>" alt="" width="80%">
                  </a>
                </td>
                <th width="20%">Status</th>
                <td width="30%">:
                  <?php if ($riwayat['status'] == 1) {
                    echo "<span class='badge badge-success'>Disetujui</span>";
                  } elseif ($riwayat['status'] == 0) {
                    echo "<span class='badge badge-warning'>Proses</span>";
                  } else {
                    echo "<span class='badge badge-danger'>Ditolak</span>";
                  } ?></td>
              </tr>
            </table>
            <div class="row">
              <div class="col">
                <a href="<?= base_url('user/riwayat_pengajuan') ?>" class="btn btn-sm btn-primary float-right ml-3">Kembali</a>
                <?php if ($riwayat['status'] == 1) { ?>
                  <a href="<?= base_url('user/cetak_akte/' . $riwayat['id']) ?>" target="_blank" class="btn btn-sm btn-default float-right" style="border-color: black;"><i class="fa fa-print"></i> Print</a>
                <?php } ?>
              </div>
            </div>
          <?php } elseif ($hal == 'kk') { ?>
            <table class="table" style="font-size: 14px;">
              <tr>
                <th width="20%">NIK</th>
                <td width="30%">: <?= $riwayat['nik_pemohon']; ?></td>
                <th width="20%">Nama</th>
                <td width="30%">: <?= $riwayat['nama_pemohon']; ?></td>
              </tr>
              <tr>
                <th width="20%">Tempat Tanggal Lahir</th>
                <td width="30%">: <?= $riwayat['tempat_lahir_pemohon']; ?>, <?= $riwayat['tanggal_lahir_pemohon']; ?></td>
                <th width="20%">Jenis Kelamin</th>
                <td width="30%">: <?= $riwayat['jenis_kelamin_pemohon']; ?></td>
              </tr>
              <tr>
                <th width="20%">Tanggal Permohonan</th>
                <td width="30%">: <?= $riwayat['tgl_permohonan']; ?></td>
                <th width="20%">Tanggal Pengambilan</th>
                <td width="30%">: <?= $riwayat['tgl_pengambilan']; ?></td>
              </tr>
              <tr>
                <th width="20%">Surat Pengantar</th>
                <td width="30%">:

                  <a style="cursor: zoom-in;" href="<?= base_url('assets/img/kk/' . $riwayat['pengantar']); ?>">
                    <img src="<?= base_url('assets/img/kk/' . $riwayat['pengantar']) ?>" alt="" width="80%">
                  </a>
                </td>
                <th width="20%">Surat Nikah</th>
                <td width="30%">:

                  <a style="cursor: zoom-in;" href="<?= base_url('assets/img/kk/' . $riwayat['surat_nikah']); ?>">
                    <img src="<?= base_url('assets/img/kk/' . $riwayat['surat_nikah']) ?>" alt="" width="80%">
                  </a>
                </td>
              </tr>
              <tr>
                <th width="20%">SK Pindah</th>
                <td width="30%">:

                  <a style="cursor: zoom-in;" href="<?= base_url('assets/img/kk/' . $riwayat['sk_pindah']); ?>">
                    <img src="<?= base_url('assets/img/kk/' . $riwayat['sk_pindah']) ?>" alt="" width="80%">
                  </a>
                </td>
                <th width="20%">Status</th>
                <td width="30%">:
                  <?php if ($riwayat['status'] == 1) {
                    echo "<span class='badge badge-success'>Disetujui</span>";
                  } elseif ($riwayat['status'] == 0) {
                    echo "<span class='badge badge-warning'>Proses</span>";
                  } else {
                    echo "<span class='badge badge-danger'>Ditolak</span>";
                  } ?></td>
              </tr>
            </table>
            <div class="row">
              <div class="col">
                <a href="<?= base_url('user/riwayat_pengajuan') ?>" class="btn btn-sm btn-primary float-right ml-3">Kembali</a>
                <?php if ($riwayat['status'] == 1) { ?>
                  <a href="<?= base_url('user/cetak_kk/' . $riwayat['id']) ?>" target="_blank" class="btn btn-sm btn-default float-right" style="border-color: black;"><i class="fa fa-print"></i> Print</a>
                <?php } ?>
              </div>
            </div>
          <?php } elseif ($hal == 'kematian') { ?>
            <table class="table" style="font-size: 14px;">
              <tr>
                <th width="20%">NIK</th>
                <td width="30%">: <?= $riwayat['nik_pemohon']; ?></td>
                <th width="20%">Nama</th>
                <td width="30%">: <?= $riwayat['nama_pemohon']; ?></td>
              </tr>
              <tr>
                <th width="20%">Pekerjaan</th>
                <td width="30%" colspan="3">: <?= $riwayat['pekerjaan']; ?></td>
              </tr>
              <tr>
                <th width="20%">Tempat Tanggal Lahir</th>
                <td width="30%">: <?= $riwayat['tempat_lahir_pemohon']; ?>, <?= $riwayat['tanggal_lahir_pemohon']; ?></td>
                <th width="20%">Jenis Kelamin</th>
                <td width="30%">: <?= $riwayat['jenis_kelamin_pemohon']; ?></td>
              </tr>
              <tr>
                <th width="20%">Tanggal Permohonan</th>
                <td width="30%">: <?= $riwayat['tgl_permohonan']; ?></td>
                <th width="20%">Tanggal Pengambilan</th>
                <td width="30%">: <?= $riwayat['tgl_pengambilan']; ?></td>
              </tr>
              <tr>
                <th width="20%">Foto KTP</th>
                <td width="30%">:

                  <a style="cursor: zoom-in;" href="<?= base_url('assets/img/sk_kematian/' . $riwayat['foto_ktp']); ?>">
                    <img src="<?= base_url('assets/img/sk_kematian/' . $riwayat['foto_ktp']) ?>" width="80%" alt="">
                  </a>
                </td>
                <th width="20%">Surat Nikah</th>
                <td width="30%">:

                  <a style="cursor: zoom-in;" href="<?= base_url('assets/img/sk_kematian/' . $riwayat['surat_nikah']); ?>">
                    <img src="<?= base_url('assets/img/sk_kematian/' . $riwayat['surat_nikah']) ?>" width="80%" alt="">
                  </a>
                </td>
              </tr>
              <tr>
                <th width="20%">SK Lahir</th>
                <td width="30%">:

                  <a style="cursor: zoom-in;" href="<?= base_url('assets/img/sk_kematian/' . $riwayat['sk_lahir']); ?>">
                    <img src="<?= base_url('assets/img/sk_kematian/' . $riwayat['sk_lahir']) ?>" width="80%" alt="">
                  </a>
                </td>
                <th width="20%">Status</th>
                <td width="30%">:
                  <?php if ($riwayat['status'] == 1) {
                    echo "<span class='badge badge-success'>Disetujui</span>";
                  } elseif ($riwayat['status'] == 0) {
                    echo "<span class='badge badge-warning'>Proses</span>";
                  } else {
                    echo "<span class='badge badge-danger'>Ditolak</span>";
                  } ?></td>
              </tr>
            </table>
            <div class="row">
              <div class="col">
                <a href="<?= base_url('user/riwayat_pengajuan') ?>" class="btn btn-sm btn-primary float-right ml-3">Kembali</a>
                <?php if ($riwayat['status'] == 1) { ?>
                  <a href="<?= base_url('user/cetak_kematian/' . $riwayat['id']) ?>" target="_blank" class="btn btn-sm btn-default float-right" style="border-color: black;"><i class="fa fa-print"></i> Print</a>
                <?php } ?>
              </div>
            </div>
          <?php } elseif ($hal == 'tempat_tinggal') { ?>
            <table class="table" style="font-size: 14px;">
              <tr>
                <th width="20%">NIK</th>
                <td width="30%">: <?= $riwayat['nik_pemohon']; ?></td>
                <th width="20%">Nama</th>
                <td width="30%">: <?= $riwayat['nama_pemohon']; ?></td>
              </tr>
              <tr>
                <th width="20%">Tempat Tanggal Lahir</th>
                <td width="30%">: <?= $riwayat['tempat_lahir_pemohon']; ?>, <?= $riwayat['tanggal_lahir_pemohon']; ?></td>
                <th width="20%">Jenis Kelamin</th>
                <td width="30%">: <?= $riwayat['jenis_kelamin_pemohon']; ?></td>
              </tr>
              <tr>
                <th width="20%">Tanggal Permohonan</th>
                <td width="30%">: <?= $riwayat['tgl_permohonan']; ?></td>
                <th width="20%">Tanggal Pengambilan</th>
                <td width="30%">: <?= $riwayat['tgl_pengambilan']; ?></td>
              </tr>
              <tr>
                <th width="20%">Surat Pengantar</th>
                <td width="30%">:

                  <a style="cursor: zoom-in;" href="<?= base_url('assets/img/tempat_tinggal/' . $riwayat['pengantar']); ?>">
                    <img src="<?= base_url('assets/img/tempat_tinggal/' . $riwayat['pengantar']) ?>" width="80%" alt="">
                  </a>
                </td>
                <th width="20%">Foto KTP</th>
                <td width="30%">:

                  <a style="cursor: zoom-in;" href="<?= base_url('assets/img/tempat_tinggal/' . $riwayat['foto_ktp']); ?>">
                    <img src="<?= base_url('assets/img/tempat_tinggal/' . $riwayat['foto_ktp']) ?>" width="80%" alt="">
                  </a>
                </td>
              </tr>
              <tr>
                <th width="20%">Foto KK</th>
                <td width="30%">:

                  <a style="cursor: zoom-in;" href="<?= base_url('assets/img/tempat_tinggal/' . $riwayat['surat_penjamin']); ?>">
                    <img src="<?= base_url('assets/img/tempat_tinggal/' . $riwayat['foto_kk']) ?>" width="80%" alt="">
                  </a>
                </td>
                <th width="20%">Surat Penjamin</th>
                <td width="30%">:

                  <a style="cursor: zoom-in;" href="<?= base_url('assets/img/tempat_tinggal/' . $riwayat['surat_penjamin']); ?>">
                    <img src="<?= base_url('assets/img/tempat_tinggal/' . $riwayat['surat_penjamin']) ?>" width="80%" alt="">
                  </a>
                </td>
              </tr>
              <tr>
                <th width="20%">Status</th>
                <td width="30%">:
                  <?php if ($riwayat['status'] == 1) {
                    echo "<span class='badge badge-success'>Disetujui</span>";
                  } elseif ($riwayat['status'] == 0) {
                    echo "<span class='badge badge-warning'>Proses</span>";
                  } else {
                    echo "<span class='badge badge-danger'>Ditolak</span>";
                  } ?></td>
                <th width="20%"></th>
                <td width="30%"></td>
              </tr>
            </table>
            <div class="row">
              <div class="col">
                <a href="<?= base_url('user/riwayat_pengajuan') ?>" class="btn btn-sm btn-primary float-right ml-3">Kembali</a>
                <?php if ($riwayat['status'] == 1) { ?>
                  <a href="<?= base_url('user/cetak_tempat_tinggal/' . $riwayat['id']) ?>" target="_blank" class="btn btn-sm btn-default float-right" style="border-color: black;"><i class="fa fa-print"></i> Print</a>
                <?php } ?>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
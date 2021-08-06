<html><head>
<title><?= $judul; ?></title>

  <style type="text/css">
    table {
      border-style: double;
      border-width: 3px;
      border-color: white;
    }
    table tr .text2 {
      text-align: right;
      font-size: 14px;
    }
    table tr .text {
      text-align: center;
      font-size: 14px;
    }
    table tr td {
      font-size: 14px;
    }

    .besar{
        text-transform: uppercase;
      }

  </style>
</head><body>

  <center>
    <table width="530">
      <tr>
        <td width="30"><img src="<?= $gambar; ?>" width="70" height="70"></td>
        <td width="300">
          <font size="3" class="besar"><b>PEMERINTAH PROPINSI DAEARAH KHUSUS IBUKOTA JAKARTA</b></font><br>
          <table width="" style="font-size: 12px!important">
            <tr>
              <td width="105">KOTA ADMINISTRASI</td>
              <td width="140">: JAKARTA BARAT</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>KECAMATAN</td>
              <td>: KEMBANGAN</td>
              <td>MODEL</td>
              <td>: PMI WNI</td>
            </tr>
            <tr>
              <td>KELURAHAN</td>
              <td>: MERUYA SELATAN</td>
              <td width="90">KODE KELURAHAN</td>
              <td>: 09.05.07.3603 </td>
            </tr>
            <tr>
              <td>ALAMAT</td>
              <td>: JL. H.Saaba No.7 Rt.002 Rw.02 </td>
              <td>TELEPON</td>
              <td>: (021) 5840796</td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td colspan="2"><hr></td>
      </tr>
    </table>

    <table width="550" style="text-align: left;margin-top: 5px;">
      <tr style="margin-bottom: 5">
        <td width="50px"><b>No</b></td>
        <td><b>Nik</b></td>
        <td><b>Nama</b></td>
        <td><b>Tanggal Permohonan</b></td>
        <td><b>Tanggal Pengambilan</b></td>
        <td><b>Status</b></td>
      </tr>
      <?php $no=1; foreach ($data as $row): ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nik']; ?></td>
        <td><?= $row['nama_lengkap']; ?></td>
        <td><?= $row['tgl_permohonan']; ?></td>
        <td><?= $row['tgl_pengambilan']; ?></td>
        <td>
          <?php if($row['status'] == 0) {
            echo 'Proses';
          } elseif($row['status'] == 1) {
            echo "Diterima";
          } else {
            echo "Ditolak";
          } ?>
        </td>
      </tr>
      <?php endforeach ?>
    </table>
  </center>
</body></html>
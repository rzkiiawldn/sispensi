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

    <h4 style="margin-top:-5px">SURAT KETERANGAN KEMATIAN</h4>
    <h4 style="margin-top:-5px">NOMOR : <?php echo rand(100,10000000000);?></h4>
  </center>
  <p style="font-size:14px">Yang bertanda tangan dibawah ini kepala kelurahan meruya selatan menerangkan dengan sesungguhnya bahwa :</p>
  <table style="font-size: 14px!important;">
    <tr>
      <td>Nama</td>
      <td>: <?= $data['nama']; ?></td>
    </tr>
    <tr>
      <td>Umur</td>
      <td>: <?= $data['umur']; ?></td>
    </tr>
    <tr>
      <td width="100px">Jenis Kelamin</td>
      <td>: <?= $data['jenis_kelamin']; ?></td>
    </tr>
    <tr>
      <td width="100px">Pekerjaan</td>
      <td>: <?= $data['pekerjaan']; ?></td>
    </tr>
  </table>
  <p style="font-size:14px;margin-top: 20px">Benar warga tersebut diatas telah meninggal dunia pada tanggal <?= date('d', strtotime($data['tgl_permohonan'])); ?> Bulan  <?= date('F', strtotime($data['tgl_permohonan'])); ?> Tahun  <?= date('Y', strtotime($data['tgl_permohonan'])); ?> Surat keterangan ini dipergunakan untuk pengesahan tanda bukti diri </p>
  <p style="font-size:14px">Demikan surat keterangan ini kami buat dan diberikan kepada yang bersangkutan untuk digunakan seperlunya.</p>

<table width="100%" style="font-size:14px!important">
  <tr>
    <td style="text-align: left!important;">Yang bersangkutan</td>
    <td style="text-align: right!important;">Jakarta, <?= date('l, d F Y'); ?></td>
  </tr>
  <tr>
    <td></td>
    <td style="text-align: right!important;">Lurah kelurahan Meruya Selatan</td>
  </tr>
  <tr>
    <td><div style="margin-bottom: 50px!important;">.</div></td>
    <td></td>
  </tr>
  <tr>
    <td style="text-align: left!important;">nama</td>
    <td style="text-align: right!important;">Nama Lurah </td>
  </tr>
</table>



    
</body></html>
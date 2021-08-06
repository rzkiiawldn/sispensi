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
        <td><b>RT</b></td>
        <td><b>RW</b></td>
      </tr>
      <tr>
        <td>1</td>
        <td>RT 1</td>
        <td>Rw 1</td>
      </tr>
      <tr>
        <td>2</td>
        <td>RT 2</td>
        <td>Rw 2</td>
      </tr>
    </table>
  </center>
</body></html>
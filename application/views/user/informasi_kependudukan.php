<div class="page-wrapper bg-gra-02 p-t-100 p-b-100 font-poppins">
  <div class="container">

    <div class="wrapper">
      <div class="card card-4">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h2 class="title"><?= $judul; ?></h2>
            </div>
            <div class="col">
              <a href="<?= base_url('user/cetak_kependudukan') ?>" target="_blank" class="btn-primary btn mb-3" style="float: right;margin-right:40px">Cetak Informasi</a>
            </div>
          </div>

          <table class="table">
            <tr>
              <th width="10%">No</th>
              <th>RT</th>
              <th>RW</th>
            </tr>
            <tr>
              <td>1</td>
              <td>RT 1</td>
              <td>RW 1</td>
            </tr>
            <tr>
              <td>2</td>
              <td>RT 2</td>
              <td>RW 2</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<section id="pusatinformasi" class="">
  <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" s>
    <div class="container">
      <div class="text-center">
        <h1 class="heading-responsive">Pusat Informasi</h1>
      </div>
      <br>
      <div class="mt-5"></div>
      <?php if($campaign->num_rows() > 1) { ?>
      <div class="row">
        <?php foreach ($campaign->result_array() as $row) : ?>
          <div class="col-6 mb-5">
            <div class="card mr-2 text-center">
              <div class="card mr-2 text-center">
                <div class="card-body">
                  <h5>
                    <b><?= $row['nama_campaign']; ?></b>
                  </h5>
                  <p><?= $row['deskripsi_campaign']; ?></p>
                  <img src="<?= base_url('assets/img/campaign/' . $row['gambar_campaign']) ?>" alt="Cara Menggunakan Masker" class="mb-2" width="450px"> <br>
                </div>
                <div class="card-footer">
                  <a href="<?= base_url('assets/img/campaign/' . $row['gambar_campaign']) ?>" class="btn btn-primary" style="padding: 4px 15px;" Download>
                    Unduh JPG</a> <br>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <?php } else { ?>
        <div class="row">
          <div class="col-12">
            <div class="card mr-2 text-center">
              <div class="card mr-2 text-center">
                <div class="card-body">
                  Informasi belum tersedia
                </div>
              </div>
            </div>
          </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
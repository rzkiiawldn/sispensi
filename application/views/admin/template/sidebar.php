<nav class="navbar-default navbar-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
      <li class="<?= $this->uri->segment(2) == 'dashboard' ? 'active' : null ?>">
        <a class="waves-effect waves-dark" href="<?= base_url() ?>admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      <li class="<?= $this->uri->segment(2) == 'campaign' ? 'active' : null ?>">
        <a href="<?= base_url() ?>admin/campaign" class="waves-effect waves-dark"><i class="fa fa-picture-o"></i> Daftar Informasi </a>
      </li>
      <li class="<?= $this->uri->segment(2) == 'warga' ? 'active' : null ?>">
        <a href="<?= base_url() ?>admin/warga" class="waves-effect waves-dark"><i class="fa fa-users"></i> Data Warga </a>
      </li>
      <li class="<?= $this->uri->segment(2) == 'kematian' ? 'active' : null ?>">
        <a href="<?= base_url() ?>admin/kematian" class="waves-effect waves-dark"><i class="fa fa-fw fa-file"></i> SK Kematian </a>
      </li>
      <li class="<?= $this->uri->segment(2) == 'tempat_tinggal' ? 'active' : null ?>">
        <a href="<?= base_url() ?>admin/tempat_tinggal" class="waves-effect waves-dark"><i class="fa fa-fw fa-file"></i> SK Tempat Tinggal </a>
      </li>
      <li class="<?= $this->uri->segment(2) == 'kartu_keluarga' ? 'active' : null ?>">
        <a href="<?= base_url() ?>admin/kartu_keluarga" class="waves-effect waves-dark"><i class="fa fa-fw fa-file"></i> Kartu Keluarga Baru </a>
      </li>
      <li class="<?= $this->uri->segment(2) == 'akte_kelahiran' ? 'active' : null ?>">
        <a href="<?= base_url() ?>admin/akte_kelahiran" class="waves-effect waves-dark"><i class="fa fa-fw fa-file"></i> SP Akte Kelahiran </a>
      </li>
      <li class="<?= $this->uri->segment(2) == 'keluhan' ? 'active' : null ?>">
        <a href="<?= base_url() ?>admin/keluhan" class="waves-effect waves-dark"><i class="fa fa-fw fa-file"></i> Keluhan </a>
      </li>
      <li class="<?= $this->uri->segment(2) == 'cetak' ? 'active' : null ?>">
        <a href="<?= base_url() ?>admin/cetak" class="waves-effect waves-dark"><i class="fa fa-fw fa-print"></i> Cetak Data </a>
      </li>
      <li class="">
        <a href="<?= base_url('auth/logout_admin') ?>" class="waves-effect waves-dark"><i class="fa fa-sign-out fa-fw"></i> Logout </a>
      </li>
    </ul>
  </div>
</nav>
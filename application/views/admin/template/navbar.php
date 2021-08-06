<nav class="navbar navbar-default top-navbar" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
      <span class="sr-only">Toggle navigation</span>
    </button>

    <a class="navbar-brand waves-effect waves-dark" href="#"> <strong> Meruya Selatan </strong></a>
    <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
  </div>

  <ul class="nav navbar-top-links navbar-right">
    <li>
      <a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"> <b> <?= $user['nama']; ?> </b> <i class="material-icons right">arrow_drop_down</i></a>
    </li>
  </ul>
  <ul id="dropdown1" class="dropdown-content">
    <li>
      <a href="<?= base_url('auth/logout_admin') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
    </li>
  </ul>
</nav>
<nav class="main-header navbar navbar-expand-md navbar-dark navbar-info">
  <div class="container">
    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?php echo base_url('dashboard') ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('keluarga') ?>" class="nav-link">Data KK (C1)</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('warga') ?>" class="nav-link">Data Warga</a>
        </li>
      </ul>
    </div>

    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      <li class="nav-item">
        <a href="<?php echo base_url('user/logout') ?>" class="btn btn-primary">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('')?>assets/template/dist/img/rsud.jpg" alt="rsud Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">RSUD IBU & ANAK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('')?>assets/template/dist/img/lutfan.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Lutfan Nipon</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            
          <li class="nav-item">
            <a href="<?= base_url('dashboard')?>" class="nav-link <?php if($this->uri->segment(1) == 'dashboard') echo 'active' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('dokter')?>" class="nav-link <?php if($this->uri->segment(1) == 'dokter') echo 'active' ?>">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Dokter
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('pasien')?>" class="nav-link <?php if($this->uri->segment(1) == 'pasien') echo 'active' ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pasien
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('obat')?>" class="nav-link <?php if($this->uri->segment(1) == 'obat') echo 'active' ?>">
              <i class="nav-icon fas fa-pills"></i>
              <p>
                Obat
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('logout')?>" class="nav-link <?php if($this->uri->segment(1) == 'logout') echo 'active' ?>">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">     


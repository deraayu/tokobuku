<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-book-open"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Tables -->
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/data_buku') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Buku</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/data_user') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data User</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/data_request') ?>">
          <i class="fas fa-fw fa-file-invoice"></i>
          <span>Data Request</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/data_transaksi') ?>">
          <i class="fas fa-fw fa-file-invoice"></i>
          <span>Data Transaksi</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/invoice') ?>">
          <i class="fas fa-fw fa-file-invoice"></i>
          <span>Invoice</span></a>
      </li>
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

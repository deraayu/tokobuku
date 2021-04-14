    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-book-open"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Toko Buku</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider ">
       <!-- Heading -->
      <div class="sidebar-heading">
        Admin
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('welcome') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider">
       <!-- Heading -->
      <div class="sidebar-heading">
        Kategori Buku
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-book"></i>
          <span>Pendidikan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('kategori/matematika') ?>">Matematika</a>
            <a class="collapse-item" href="<?php echo base_url('kategori/sejarah') ?>">Sejarah</a>
            <a class="collapse-item" href="<?php echo base_url('kategori/teknologi_informasi') ?>">Teknologi Informasi</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/novel') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>novel</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/komik') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>comics</span></a>
      </li>
      
      
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->


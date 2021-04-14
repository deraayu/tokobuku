   <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
           <ul class="navbar-nav ml-auto">
             <div class="navbar">
              <ul class= "nav navbar-nav navbar-right">
                <li>
                  <?php 
                  $keranjang = 'keranjang Buku : '.$this->cart->total_items().  ' buku'
                  ?>

                  <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>

                </li>
              </ul>

            <div class="topbar-divider d-none d-sm-block"></div>
             <ul class="na navbar-nav navbar-right">
                <li><?php echo anchor('auth', 'Login'); ?></li>
              </a>
              </div>

          </ul>

        </nav>
        <!-- End of Topbar -->

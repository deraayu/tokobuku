<div class="container-fluid">
  <div class="panel-heading">
              <h3 class="panel-title">Hari Ini</h3>
              <p class="panel-subtitle"><?= date('l, d-m-Y'); ?></p>
            </div>
   <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="metric">
                    
                    <p>
                      <span class="number"><?= $countBuku; ?></span> <br>
                      <span class="title"><a href="<?php echo base_url('admin/data_buku') ?>">Data Buku</a></span>
                    </p>
                  </div>
                    </div>
                    <div class="col-auto">
                  <span class="icon"> <i class="fas fa-swatchbook fa-2x text-blue-300"></i></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="metric">
                    
                    <p>
                      <span class="number"><?= $countUser; ?></span> <br>
                      <span class="title"><a href="<?php echo base_url('admin/data_user') ?>">Data User</a></span>
                    </p>
                  </div>
                    </div>
                    <div class="col-auto">
                     <span class="icon"> <i class="fas fa-users fa-2x text-blue-300"></i></span>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="metric">                    
                    <p>
                      <span class="number"><?= $countRequest; ?></span> <br>
                      <span class="title"><a href="<?php echo base_url('admin/data_request') ?>">Data Request</a></span>
                    </p>
                  </div>
                    </div>
                    <div class="col-auto">
                     <span class="icon"><i class="fas fa-receipt fa-2x text-blue-300"></i></span>
                    </div>
                  </div>
                   
                  </div>
                </div>
              </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="metric">
                    
                    <p>
                      <span class="number"></span> <br>
                      <span class="title"><a href="<?php echo base_url('admin/data_transaksi') ?>">Data Transaksi</a></span>
                    </p>
                  </div>
                    </div>
                    <div class="col-auto">
                     <span class="icon"> <i class="fas fa-file-invoice fa-2x text-blue-300"></i></span>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

</div>
<div class="container-fluid">
	<div class="row text-center">
		<?php foreach ($buku as $bk) : ?>

			<div class="card ml-3 mb-3" style="width: 16rem;">
			  <img src="<?php echo base_url().'/assets/data_buku/'.$bk->gambar ?>" class="card-img-top" height="350px">
			  <div class="card-body">
			    <h5 class="card-title mb-1"><?php echo $bk->judul_buku ?></h5>
			    <small><?php echo $bk->tahun ?></small>
			    <small><?php echo $bk->pengarang ?></small> <br>
			    <span class="badge badge-pill badge-success mb-3">Rp.  <?php echo number_format($bk->harga, 0,',','.')  ?></span><br>
			    <?php echo anchor('dashboard/tambah_ke_keranjang/'. $bk->kd_buku, '<div class="btn btn-sm btn-primary">tambah ke keranjang</div>'); ?>
			     <?php echo anchor('dashboard/detail/'. $bk->kd_buku, '<div class="btn btn-sm btn-success">Detail</div>'); ?>
			  </div>
			</div>

		<?php endforeach; ?>

	</div>
</div>
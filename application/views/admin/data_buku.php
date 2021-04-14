<div class="container-fluid">	
	<h4 class="text-center">DATA BUKU</h4>
		<?php if ($this->session->flashdata('flash') ):?>
						<div class="alert alert-success alert-dismissible" role="alert">
							Buku <strong> berhasil </strong> <?= $this->session->flashdata('flash'); ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
						</div>
						<?php endif; ?>
		<a  href="<?php echo site_url('admin/data_buku/tambahbuku'); ?>"  class="btn btn-sm btn-primary mb-3" ><i class="fas fa-plus fa-sm">Tambah Buku</a></i>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>No</th>
			<th>Kode Buku</th>
			<th>Judul Buku</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stok</th>
			<th colspan="3">AKSI</th>
		</tr>
		<?php 
		$no=1;
		foreach($buku as $bk) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $bk->kd_buku ?></td>
				<td><?php echo $bk->judul_buku ?></td>
				<td><?php echo $bk->kategori ?></td>
				<td>Rp.  <?php echo number_format($bk->harga, 0,',','.') ?></td>
				<td><?php echo $bk->stok ?></td>
				<td><?php echo anchor('admin/data_buku/detail_buku/' .$bk->kd_buku, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>
				<td><?php echo anchor('admin/data_buku/edit/' .$bk->kd_buku, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('admin/data_buku/hapus/' .$bk->kd_buku,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>



			</tr>

		<?php endforeach; ?>
	</table>
</div>

<div class="container-fluid">
	<h3 class="text-center">DATA REQUEST</h3>
	<?php if ($this->session->flashdata('flash') ):?>
						<div class="alert alert-success alert-dismissible" role="alert">
							Request <strong> berhasil </strong> <?= $this->session->flashdata('flash'); ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
						</div>
						<?php endif; ?>
						
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>No</th>
			<th>Id Request</th>
			<th>Id User</th>
			<th>Kode Buku</th>
			<th>Jumlah</th>
		
			<th colspan="2">AKSI</th>
		</tr>
		<?php 
		$no=1;
		foreach($request as $req) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo  $req->id_request?></td>
				<td><?php echo $req->id_user ?></td>
				<td><?php echo $req->kd_buku ?></td>
				<td><?php echo $req->jumlah ?></td>

				
				<td><?php echo anchor('admin/data_request/verifikasi/' .$req->id_request, '<div class="btn btn-success btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
				
			</tr>

		<?php endforeach; ?>
	</table>
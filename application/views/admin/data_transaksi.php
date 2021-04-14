<div class="container-fluid">
	<h3 class="text-center">DATA TRANSAKSI</h3>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>No</th>
			<th>Id Request</th>
			<th>Id User</th>
			<th>Kode Buku</th>
			<th>Jumlah</th>
		
		</tr>
		<?php 
		$no=1;
		foreach($transaksi as $trans) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $trans->id_request ?></td>
				<td><?php echo $trans->id_user ?></td>
				<td><?php echo $trans->kd_buku ?></td>
				<td><?php echo $trans->jumlah ?></td>
				
				
			</tr>



		<?php endforeach; ?>
	</table>
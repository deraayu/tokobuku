<div class="container-fluid">
	<h4>Detail Pesanan <div class="btn btn-sm btn-success"> No. Invoice : <?php echo $invoice->id ?>
	</div></h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id Buku</th>
			<th>Judul Buku</th>
			<th>Jumlah Pesan</th>
			<th>Harga Satuan</th>
			<th>Sub-total</th>
		</tr>

		<?php 
		$total = 0;

		foreach($pesanan as $psn) :
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal; 
			?>

			<tr>
				<td><?php echo $psn->kd_buku ?></td>
				<td><?php echo $psn->judul_buku ?></td>
				<td><?php echo $psn->jumlah ?></td>
				<td><?php echo number_format($psn->harga, 0,',','.') ?></td>
				<td><?php echo number_format($subtotal, 0,',','.') ?></td>
			</tr>

		<?php endforeach; ?>

		<tr>
			<td colspan="4" align="right">Grand Total</td>
			<td align="right">Rp. <?php echo number_format($total, 0,',','.') ?></td>
		</tr>
	</table>

	<?php echo anchor('admin/invoice/index/','<div class="btn btn-sm btn-danger mb-3">kembali</div>') ?>
</div>
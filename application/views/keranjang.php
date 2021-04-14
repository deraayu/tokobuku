<div class="container-fluid">
	<h4>Keranjang Buku</h4>
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Judul Buku</th>
			<th>jumlah</th>
			<th>harga</th>
			<th>sub-total</th>
		</tr>
		<?php 
		$no=1;
		foreach ($this->cart->contents() as $bk) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $bk['name'] ?></td>
				<td><?php echo $bk['qty'] ?></td>
				<td align="right">Rp.  <?php echo number_format($bk['price'],0,',','.') ?></td>
				<td align="right">Rp.  <?php echo number_format($bk['subtotal'],0,',','.')  ?></td>
			</tr>

		<?php endforeach; ?>
		<tr>
				<td colspan="4"></td>
				<td align="right">Rp. <?php echo number_format($this->cart->total(),0,',','.') ?></td>
			</tr>

	</table>

	<div align="right">
		<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
		<a href="<?php echo base_url('welcome/index') ?>"><div class="btn btn-sm btn-primary">Lanjutkan belanja</div></a>
		<a href="<?php echo base_url('dashboard/pembayaran') ?>"><div class="btn btn-sm btn-success">Pembayaran</div></a>
	</div>
</div>
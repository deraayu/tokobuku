<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA BUKU</h3>

	<?php foreach ($buku as $bk) : ?>
		<form method="post" action="<?php echo base_url().'admin/data_buku/update' ?>">
			<div class="for-gorup" >
				<label>Judul Buku</label>
				<input type="hidden" name="kd_buku"  class="form-control" value="<?php echo $bk->kd_buku ?>">
				<input type="text" name="judul_buku"  class="form-control" value="<?php echo $bk->judul_buku ?>">
			</div>
			<div class="for-gorup" >
				<label>Kategori</label>
				<input type="text" name="kategori"  class="form-control" value="<?php echo $bk->kategori ?>">
			</div>
			<div class="for-gorup" >
				<label>Pengarang</label>
				<input type="text" name="pengarang"  class="form-control" value="<?php echo $bk->pengarang ?>">
			</div>
			<div class="for-gorup" >
				<label>Penerbit</label>
				<input type="text" name="penerbit"  class="form-control" value="<?php echo $bk->penerbit ?>">
			</div>

			<div class="for-gorup" >
				<label>Tahun</label>
				<input type="text" name="tahun"  class="form-control" value="<?php echo $bk->tahun ?>">
			</div>
			<div class="for-gorup" >
				<label>ISBN</label>
				<input type="text" name="isbn"  class="form-control" value="<?php echo $bk->isbn ?>">
			</div>
			<div class="for-group">
				<label>Gambar</label>
				<input type="file" name="gambar" class="form-control" value="<?php echo $bk->gambar ?>">
			</div>
			<div class="for-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $bk->harga ?>">
			</div>
			<div class="for-group">
				<label>Stok</label>
				<input type="text" name="stok" class="form-control" value="<?php echo $bk->stok ?>">
			</div>
			<button type="submit" class="btn btn-sm btn-primary mt-3">simpan</button>
		</form>

	<?php endforeach ; ?>
</div>
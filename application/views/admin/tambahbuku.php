<div class="container-fluid" >
	<h4><i class="fas fa-plus fa-sm"></i>TAMBAH BUKU</h4>
	<form action="<?php echo base_url().'admin/data_buku/tambah_aksi' ?>" method= "post" enctype="multipart/form-data">
		<div class="form-group">
		<label>Kode Buku</label>
		<input type="text" name="kd_buku" required class="form-control" value="<?= $kd ?>" readonly>
	</div>
	<div class="form-group">

						<label>Judul Buku</label>
						<input type="text" name="judul_buku" class="form-control">
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<select name="kategori" class="form-control">
							<option></option>
							<option value="matematika">Matematika</option>
							<option value="sejarah">Sejarah</option>
							<option value="teknologi_informasi">Teknologi Informasi</option>

							<option value="komik">komik</option>
							<option value="novel">novel</option>
						</select>
					</div>
					<div class="form-group">
						<label>Pengarang</label>
						<input type="text" name="pengarang" class="form-control">
					</div>
					<div class="form-group">
						<label>Penerbit</label>
						<input type="text" name="penerbit" class="form-control">
					</div>
					<div class="form-group">
						<label>Tahun</label>
						<input type="text" name="tahun" class="form-control">
					</div>
					<div class="form-group">
						<label>ISBN</label>
						<input type="text" name="isbn" class="form-control">
					</div>
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" name="gambar" class="form-control">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control">
					</div>
					<div class="form-group">
						<label>Stok</label>
						<input type="text" name="stok" class="form-control">
					</div> 
	<button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
	<button type="button" class="btn btn-sm btn-danger ">Close</button>
</form>


</div>
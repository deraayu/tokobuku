<div class="container-fluid" >
	<h4><i class="fas fa-plus fa-sm"></i>TAMBAH TRANSAKSI</h4>
	<form action="<?php echo base_url().'admin/data_transaksi/tambah_aksi' ?>" method= "post" enctype="multipart/form-data">
					<div class="form-group">
						<label>No Faktur</label>
						<input type="text" name="id" required class="form-control">
					</div>
					<div class="form-group">
						<label>Id Request</label>
						<input type="text" name="id_request" class="form-control" value="">
					</div>
					<div class="form-group">
						<label>Id User</label>
						<input type="text" name="id_user" class="form-control">
					</div>
					<div class="form-group">
						<label>Kode Buku</label>
						<input type="text" name="kd_buku" class="form-control">
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<input type="text" name="jumlah" class="form-control">
					</div>
						
	<button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
	<button type="button" class="btn btn-sm btn-danger ">Close</button>
</form>


</div>
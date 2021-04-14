<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA request</h3>

	<?php foreach ($request as $req) : ?>
		<form method="post" action="<?php echo base_url().'admin/data_request/update' ?>">
			<div class="for-gorup" >
				<label>Id User</label>
				<input type="hidden" name="id_request"  class="form-control" value="<?php echo $req->id_request ?>">
				<input type="text" name="id_user"  class="form-control" value="<?php echo $req->id_user ?>">
			</div>
			<div class="for-gorup" >
				<label>kode buku</label>
				<input type="text" name="kd_buku"  class="form-control" value="<?php echo $req->kd_buku ?>">
			</div>
			<div class="for-gorup" >
				<label>jumlah</label>
				<input type="text" name="jumlah"  class="form-control" value="<?php echo $req->jumlah ?>">
			</div>
			
			<button type="submit" class="btn btn-sm btn-primary mt-3">simpan</button>
		</form>

	<?php endforeach ; ?>
</div>
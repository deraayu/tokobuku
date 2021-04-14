<div class="container-fluid">
	<h3 class="text-center">DATA USER</h3>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>No</th>
			<th>Id</th>
			<th>Nama</th>
			<th>Email</th>
		
		</tr>
		<?php 
		$no=1;
		foreach($user as $pel) : ?>

			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $pel->id ?></td>
				<td><?php echo $pel->name ?></td>
				<td><?php echo $pel->email ?></td>
				
			</tr>



		<?php endforeach; ?>
	</table>
</div>

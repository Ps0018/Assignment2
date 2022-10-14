<div class="main-content">
	<table class="table table-bordered">
		<tr>
			<th>id</th>
			<th>Category Name</th>
			<th>Action</th>
		</tr>
		<?php
			foreach ($result as $value) {
			
			?>	
			<tr>
				<td><?= $value->id;?></td>
				<td><?= $value->category_name;?></td>
				<td>
					<a href="<?= base_url().'category_controller/category_update/'.$value->id?>" class="btn btn-success">Edit</a>
					<a href="<?= base_url().'category_controller/category_delete/'.$value->id?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
	<div align="center" class="col-lg-8">
		<a href = "<?= base_url().'category_controller/category_add'?>" class="btn btn-primary">Insert</a>
	</div>
</div>
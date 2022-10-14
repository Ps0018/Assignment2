<div class="main-content">
	<table class="table table-bordered">
		<tr>
			<th>id</th>
			<th>Category Name</th>
			<th>Sub Category Name</th>
			<th>Action</th>
		</tr>
		<?php
			foreach ($result as $value) {
			?>	
			<tr>
				<td><?= $value->sid;?></td>
				<td><?= $value->category_name;?></td>
				<td><?= $value->sub_category_name;?></td>
				<td>
					<a href="<?= base_url().'sub_category_controller/sub_category_update/'.$value->sid?>" class="btn btn-success">Edit</a>
					<a href="<?= base_url().'sub_category_controller/sub_category_delete/'.$value->sid?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
	<div align="center" class="col-lg-8">
		<a href = "<?= base_url().'sub_category_controller/sub_category_add'?>" class="btn btn-primary">Insert</a>
	</div>
</div>
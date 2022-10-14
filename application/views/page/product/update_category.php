<div class="main-content">
	<div align="center"><h2 class="text-dark">Add Category</h2></div>
	<form action="<?= base_url().'category_controller/category_update'?>" method="post">
		<div class="col-lg-12 form-group row">
			<div class="col-lg-3">
				<label class="control-label">Enter Name</label>
			</div>
			<div class="col-lg-9">
				<input type="hidden" name="id" value="<?= $result[0]->id?>">
				<input type="text" name="category" value="<?= $result[0]->category_name ?>" class="form-control">
			</div>
		</div>
		<div align="center">
			<input type="submit" name="update" value="UPDATE" class="btn btn-success">
		</div>
	</form>
</div>
<div class="main-content">
	<div align="center"><h2 class="text-dark">Add Category</h2></div>
	<form action="<?= base_url().'category_controller/category_add'?>" method="post">
		<div class="col-lg-12 form-group row">
			<div class="col-lg-3">
				<label class="control-label">Enter Name</label>
			</div>
			<div class="col-lg-9">
				<input type="text" name="category[]" value="" placeholder="Enter Category Name" class="form-control">
			</div>
		</div>
		<div class="append_category">
			
		</div>
		<div align="right">
			<button type="button" id="add_category" class="btn btn-dark">Add Category</button>
		</div>
		<div class="add_category" style="display: none;">
		<div class="col-lg-12 form-group row">
			<div class="col-lg-3">
				<label class="control-label">Enter Name</label>
			</div>
			<div class="col-lg-7">
				<input type="text" name="category[]" value="" placeholder="Enter Category Name" class="form-control">
			</div>
			<div class="col-lg-2">
				<button type="button" class="btn btn-danger remove">Remove</button>
			</div>
		</div>
		</div>
		<div align="center">
			<input type="submit" name="submit" value="SUBMIT" class="btn btn-primary"> 
		</div>
	</form>
</div>
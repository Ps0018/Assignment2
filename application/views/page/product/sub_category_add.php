<div class="main-content">
	<div align="center"><h2 class="text-dark">Add Sub Category</h2></div>
	<form action="<?= base_url().'Sub_category_controller/sub_category_add'?>" method="post">
		<div class="col-lg-12 form-group row">
			<div class="col-lg-3">
				<label class="control-label">Select Category</label>
			</div>
			<select class="col-lg-9 form-control" name="category_id">
				<?php
				foreach ($result as $value) {
				?>
				<option value="<?= $value->id?>"><?= $value->category_name?></option>
				<?php
				}
				?>
			</select>
		</div>
		<div class="col-lg-12 form-group row">
			<div class="col-lg-3">
				<label class="control-label">Enter Sub Category Name</label>
			</div>
			<div class="col-lg-9">
				<input type="text" name="sub_category" value="" placeholder="Enter Sub Category Name" class="form-control">
			</div>
		</div>	
		<div align="center">
			<input type="submit" name="submit" value="SUBMIT" class="btn btn-primary"> 
		</div>
	</form>
</div>
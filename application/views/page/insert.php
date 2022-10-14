<div class="main-content">
<form action="" method="post">
	<div class="container">
	<?php if(!empty($this->session->flashdata('success'))){?>
		<div class="alert alert-primary" role="alert">
			<?php echo $this->session->flashdata('success');?>
			<?php $this->session->unse?>
		</div>
	<?php } ?>
	<?php if(!empty($this->session->flashdata('error'))){?>
	<div class="alert alert-danger" role="alert">
		<?php echo $this->session->flashdata('error');?>
	</div>
	<?php } ?>
		<div align="center">
			<u><h2 class="text-dark">INSERT DETAILS</h2></u>
		</div>
		<form method="post" action="<?= base_url().'operation/insert_data'?>">
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Name</label>
				</div>
				<div class="col-lg-7">
					<input type="text" name="name" value="" placeholder="Enter Name" class="form-control">
				</div>
			</div>
			<div class="col-lg-12 form-group form-check-inline row">
				<div class="col-lg-3">
					<label class="control-label">Select Gender</label>
				</div>
				<div class="col-lg-7">
					<input type="radio" name="gender" value="male" class="form-check-input">
					<label class="form-check-label">Male</label>

					<input type="radio" name="gender" value="female" class="form-check-input">
					<label class="form-check-label">Female</label>
				</div>
			</div>
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter City</label>
				</div>
				<div class="col-lg-7">
					<input type="text" name="city" value="" placeholder="Enter City" class="form-control">
				</div>
			</div>
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Province</label>
				</div>
				<div class="col-lg-7">
					<input type="text" name="province" value="" placeholder="Enter Province" class="form-control">
				</div>
			</div>
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Phone number</label>
				</div>
				<div class="col-lg-7">
					<input type="number" name="phnumber" value="" placeholder="Enter Phone number" class="form-control">
				</div>
			</div>
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Chequing Balance</label>
				</div>
				<div class="col-lg-7">
					<input type="number" name="chequingBalance" value="" placeholder="Enter Chequing Balance" class="form-control">
				</div>
			</div>
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Saving Balance</label>
				</div>
				<div class="col-lg-7">
					<input type="number" name="savingBalance" value="" placeholder="Enter Saving Balance" class="form-control">
				</div>
			</div>
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Credit Card Balance</label>
				</div>
				<div class="col-lg-7">
					<input type="number" name="creditcardBalance" value="" placeholder="Enter Credit Card Balance" class="form-control">
				</div>
			</div>
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Email</label>
				</div>
				<div class="col-lg-7">
					<input type="email" name="email" value="" placeholder="Enter Email" class="form-control">
				</div>
			</div>
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Password</label>
				</div>
				<div class="col-lg-7">
					<input type="password" name="password" value="" placeholder="Enter Password" class="form-control">
				</div>
			</div>
			<div align="center">
				<input type="submit" name="submit" value="SUBMIT" class="btn btn-primary">
			</div>
		</form>
	</div>
</form>
</div>

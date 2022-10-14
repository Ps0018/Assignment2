
<div class="main-content">
<form action="" method="post">
	<div class="container">
		<div align="center">
			<u><h2 class="text-dark">INSERT DETAILS</h2></u>
		</div>
		<form method="post" action="<?= base_url().'operation/update_data'?>">
			<?php
			foreach ($result as $value){
			?>
			
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Name</label>
				</div>
				<div class="col-lg-7">
					<input type="text" name="name" value="<?= $value->name ?>" placeholder="Enter Name" class="form-control">
				</div>
			</div>
			<div class="col-lg-12 form-group form-check-inline row">
				<div class="col-lg-3">
					<label class="control-label">Select Gender</label>
				</div>
				<div class="col-lg-4 ">
					<input type="radio" name="gender" value="male" <?= ($value->gender == 'male')? 'checked': ''?> class="form-check-input">
					<label class="form-check-label">Male</label>
					<!-- <?=$value->gender;?> -->
				</div>
				<div class="col-lg-3 ">
					<input type="radio" name="gender" value="female" <?= ($value->gender == 'female')? 'checked': ''?> class="form-check-input">
					<label class="form-check-label">Female</label>
				</div>
			</div>
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter City</label>
				</div>
				<div class="col-lg-7">
					<input type="text" name="city" value="<?= $value->city ?>" placeholder="Enter City" class="form-control">
				</div>
			</div>
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Province</label>
				</div>
				<div class="col-lg-7">
					<input type="text" name="province" value="<?= $value->province ?>" placeholder="Enter Province" class="form-control">
				</div>
			</div>
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Phone number</label>
				</div>
				<div class="col-lg-7">
					<input type="number" name="phnumber" value="<?= $value->phnumber ?>" placeholder="Enter Phone number" class="form-control">
				</div>
			</div>
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Chequing Balance</label>
				</div>
				<div class="col-lg-7">
					<input type="number" name="chequingBalance" value="<?= $value->chequingBalance ?>" placeholder="Enter Chequing Balance" class="form-control">
				</div>
			</div>
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Saving Balance</label>
				</div>
				<div class="col-lg-7">
					<input type="number" name="savingBalance" value="<?= $value->savingBalance ?>" placeholder="Enter Saving Balance" class="form-control">
				</div>
			</div>
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Credit Card Balance</label>
				</div>
				<div class="col-lg-7">
					<input type="number" name="creditcardBalance" value="<?= $value->creditcardBalance ?>" placeholder="Enter Credit Card Balance" class="form-control">
				</div>
			</div>
			<div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Email</label>
				</div>
				<div class="col-lg-7">
					<input type="email" name="email" value="<?= $value->email ?>" placeholder="Enter Email" class="form-control">
				</div>
			</div>
			<!-- <div class="col-lg-12 form-group row">
				<div class="col-lg-3">
					<label class="control-label">Enter Password</label>
				</div>
				<div class="col-lg-7">
					<input type="password" name="password" value="<?= $value->password ?>" disabled placeholder="Enter Password" class="form-control">
				</div>
			</div> -->
			<?php
			}
			?>
			<div align="center">
				<input type="submit" name="update" value="UPDATE" class="btn btn-success">
			</div>
		</form>
	</div>
</form>
</div>

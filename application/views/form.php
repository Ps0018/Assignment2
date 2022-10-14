<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<?php if(!empty($this->session->flashdata('success'))){?>
        <div class="alert alert-primary" role="alert">
            <?php echo $this->session->flashdata('success');?>
            <?php $this->session->unset_userdata('success');?>
        </div>
        <?php } ?>
        <?php if(!empty($this->session->flashdata('error'))){?>
            <div class="alert alert-danger" role="alert">
                <?php echo $this->session->flashdata('error');?>
                <?php $this->session->unset_userdata('error');?>
            </div>
        <?php } ?>
		<div align="center">
			<h2 class="text-primary">Westcoat</h2>
		</div>
		<form method="post" action="<?= base_url().'login'?>">
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
</body>
</html>
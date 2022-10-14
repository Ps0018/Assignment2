<div class="main-content">
<?php if(!empty($this->session->flashdata('success'))){?>
	<div class="alert alert-primary" role="alert">
		<?= $this->session->flashdata('success');?>
		<?php $this->session->unset_userdata('success');?>
	</div>
<?php } ?>
<?php if(!empty($this->session->flashdata('error'))){?>
<div class="alert alert-danger" role="alert">
	<?= $this->session->flashdata('error');?>
	<?php $this->session->unset_userdata('error');?>
</div>
<?php } ?>
 <div align="center">
 	<u><h2 class="text-dark">DISPLAY DATA</h2></u>
 </div>
<table class="table bordered">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Action</th>
	</tr>
	<?php
		foreach ($result as $value) {
	?>
	<tr>
		<td><?= $value->id?></td>
		<td><?= $value->name?></td>
		<td><?= $value->gender?></td>
		<td><?= $value->email?></td>
		<td>
			<a href="<?= base_url().'Operation/update_data/'.$value->id ?>" class="btn btn-success">Edit</a>
			<a href="<?= base_url().'Operation/delete_data/'.$value->id ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>
	<div align="center">
		<a href="<?= base_url().'Operation/insert_data'?>" class="btn btn-primary">SIGN-UP</a>
	</div>
</div>
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
<u><h2 class="text-dark">e-Transfer Records</h2></u>
<div align="right">
	<a href="<?= base_url().'dashboard/etransfer'?>" class="btn btn-primary">Transfer</a>
</div>
</div>
<table class="table bordered">
	<tr>
		<th>Id</th>
		<th>Payee name</th>
		<th>Email</th>
		<th>Phone number</th>
		<th>Amount</th>
		<th>Interac Question</th>
		<th>Interac Answer</th>
		<th>Action</th>
	</tr>
	<?php
		foreach ($result as $value) {
	?>
	<tr>
		<td><?= $value->etransferid?></td>
		<td><?= $value->payeename?></td>
		<td><?= $value->email?></td>
		<td><?= $value->phnumber?></td>
		<td><?= $value->amount?></td>
		<td><?= $value->interac_question?></td>
		<td><?= $value->interac_answer?></td>
		<td>
			<a href="<?= base_url().'etransfer/update_data/'.$value->etransferid ?>" class="btn btn-success">Edit</a>
			<a href="<?= base_url().'etransfer/delete_data/'.$value->etransferid ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>
	<?php
	}
	if(empty($result)){ ?>
	<tr>
		<td class='text-center' colspan='9'>No Record Found.</td>
	</tr>
	<?php }
	?>
</table>
</div>
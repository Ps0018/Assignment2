<style>
    th{
        min-width: 130px!important;
    }
</style>
<?php 
date_default_timezone_set('America/Toronto'); // or wherever you are
$time = time();
$canadaTime = date('H:i', $time);
$canadaTimeSlot = date('A', $time);
$username = $this->session->userdata('username');
if($canadaTimeSlot == 'AM'){
	if($canadaTime >= '00:00' && $canadaTime <= '03:59'){
		$message = 'Good Morning';
	}
	if($canadaTime >= '04:00' && $canadaTime <= '11:59'){
		$message = 'Good Morning';
	}
}else{
	if($canadaTime >= '12:00' && $canadaTime <= '14:59'){
		$message = 'Good Afternoon';
	}
	if($canadaTime >= '15:00' && $canadaTime <= '23:59'){
		$message = 'Good Evening';
	}
}
?>
<div class="main-content">
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
    <section>
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-info"><?= $message; ?></h3>
                    </div>
                    <div class="card-header">
                        <h6 class="text-dark"><?= $username; ?></h6>
                    </div>
                    <div class="card-body">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            Chequing  <br> $500,000 
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th style="width:35%;">Customer Name</th>
                                                    <th style="width:35%;">Address</th>
                                                    <th style="width:35%;">Status</th>
                                                    <th style="width:35%;">Mobile No</th>
                                                    <th style="width:35%;">Account No</th>
                                                    <th>Amount</th>
                                                    <th>Details</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-1.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Cara Stevens</div>
                                                                <div class="text-job text-muted">cara.stevens@outlook.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Kitchener</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">30%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-orange" data-width="30%"></div>
                                                        </div>
                                                    </td>
                                                    <td>226-220-3333</td>
                                                    <td>XXXX743</td>
                                                    <td>$955</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Gaju Bhai</div>
                                                                <div class="text-job text-muted">gaju.bhai@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Waterloo</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>245-456-7895</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Prashant Gajera</div>
                                                                <div class="text-job text-muted">Rgajera@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Cambridge</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>647-555-1212</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Raj Popat</div>
                                                                <div class="text-job text-muted">Rajpopat@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Kitchener</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>646-555-1234</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Nikunj</div>
                                                                <div class="text-job text-muted">Nikunj@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Waterloo</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>647-123-5656</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Parth G</div>
                                                                <div class="text-job text-muted">ParthG@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Adelaide</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>467-666-7878</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Sultan Mirza</div>
                                                                <div class="text-job text-muted">SultanMirza@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Kitchener</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>646-464-9898</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Tiku Sutan</div>
                                                                <div class="text-job text-muted">tiku@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Brampton</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Lalbhai</div>
                                                                <div class="text-job text-muted">lala@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Toronto</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-222-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Raju</div>
                                                                <div class="text-job text-muted">Raju@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Paldi</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Tushar</div>
                                                                <div class="text-job text-muted">Tushar@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Vadodara</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Savings  <br> $20,000
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th style="width:35%;">Customer Name</th>
                                                    <th style="width:35%;">Address</th>
                                                    <th style="width:35%;">Status</th>
                                                    <th style="width:35%;">Transit No</th>
                                                    <th style="width:35%;">Account No</th>
                                                    <th>Amount</th>
                                                    <th>Details</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-1.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Parshwa Shah</div>
                                                                <div class="text-job text-muted">parshwa@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Kitchener</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">30%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-orange" data-width="30%"></div>
                                                        </div>
                                                    </td>
                                                    <td>232-555-9999</td>
                                                    <td>XXXX743</td>
                                                    <td>$955</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Pilli</div>
                                                                <div class="text-job text-muted">pilli@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Montreal</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>222-227-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Devansh</div>
                                                                <div class="text-job text-muted">Devansh@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Vancovuer</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>233-227-1211</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Nehal</div>
                                                                <div class="text-job text-muted">Nehal@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Waterloo</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>213-227-1221</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Chitabhai</div>
                                                                <div class="text-job text-muted">chita@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ahmedabad</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>233-227-1133</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Jenish</div>
                                                                <div class="text-job text-muted">Jenish@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Surat</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>299-227-1441</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Dhrumin</div>
                                                                <div class="text-job text-muted">Dhrumin@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Bharuch</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>623-227-6666</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Radha </div>
                                                                <div class="text-job text-muted">Radha@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Dehradun</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>423-227-7777</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Kalpan</div>
                                                                <div class="text-job text-muted">kalpz@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ahmedabad</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>566-227-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Master card  <br> $500
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th style="width:35%;">Customer Name</th>
                                                    <th style="width:35%;">Address</th>
                                                    <th style="width:35%;">Status</th>
                                                    <th style="width:35%;">Transit No</th>
                                                    <th style="width:35%;">Master Card No </th>
                                                    <th>Amount</th>
                                                    <th>Details</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-1.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Amal Roy</div>
                                                                <div class="text-job text-muted">amal@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Kitchener</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">30%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-orange" data-width="30%"></div>
                                                        </div>
                                                    </td>
                                                    <td>989-666-9898</td>
                                                    <td>XXXXXXXXXXXXX743</td>
                                                    <td>$955</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Ali</div>
                                                                <div class="text-job text-muted">ali@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Rajkot</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>323-227-1111</td>
                                                    <td>XXXXXXXXXXXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXXXXXXXXXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXXXXXXXXXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Rajesh</div>
                                                                <div class="text-job text-muted">Rajesh@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Kosamba</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>757-227-1111</td>
                                                    <td>XXXXXXXXXXXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXXXXXXXXXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Chirag</div>
                                                                <div class="text-job text-muted">chirag@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Kutch</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>221-222-1111</td>
                                                    <td>XXXXXXXXXXXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXXXXXXXXXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXXXXXXXXXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXXXXXXXXXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXXXXXXXXXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXXXXXXXXXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXXXXXXXXXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXXXXXXXXXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40"
                                                                src="assets/img/users/user-3.png">
                                                            <div class="media-body">
                                                                <div class="media-title">Mayabhai</div>
                                                                <div class="text-job text-muted">abc@gmail.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ontario</td>
                                                    <td class="align-middle">
                                                        <div class="progress-text">50%</div>
                                                        <div class="progress" data-height="6">
                                                            <div class="progress-bar bg-indigo" data-width="50%"></div>
                                                        </div>
                                                    </td>
                                                    <td>223-227-1111</td>
                                                    <td>XXXXXXXXXXXXX743</td>
                                                    <td>$2346</td>
                                                    <td>
                                                        <div class="media-cta">
                                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
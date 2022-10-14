<div class="main-content">
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
            <center>
                <h1 class="text-dark">e-Transfer</h1>
            </center>
            <form action="<?= !empty($result)?base_url().'Etransfer/etransfer_update':base_url().'Etransfer/etransfer_add';?>" method="post">
            <div class="container">
                <div class="form-group">
                    <label for=""><b>Amount</b></label>
                    <input type="number" name="amount" id="amount" value="<?= $result[0]->amount; ?>" class="form-control" placeholder="$" required="">
                    <input type="hidden" name="etransferid" id="etransferidamount" value="<?= $result[0]->etransferid; ?>" class="form-control" >
                  </div>
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="payeename" id="" class="form-control" value="<?= $result[0]->payeename; ?>" placeholder="Name Of Payee" required="">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" name="email" id="" class="form-control" value="<?= $result[0]->email; ?>" placeholder="Enter Email Address" required="">
                </div>
                <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="number" name="phnumber" id="" value="<?= $result[0]->phnumber; ?>" class="form-control" maxlength="13" minlength="10" placeholder="Enter Phone Number" required="">
                </div>

                <fieldset>
                    <legend>Security</legend>
                    <div class="form-group">
                        <label for="">Interac Question</label>
                        <input type="text" name="interac_question" id="" class="form-control" value="<?= $result[0]->interac_question; ?>" placeholder="Enter Interac Question" required="">
                    </div>
                    <div class="form-group">
                        <label for="">Interac Answer</label>
                        <input type="text" name="interac_answer" id="" class="form-control" value="<?= $result[0]->interac_answer; ?>" placeholder="Enter Answer of Question" required="">
                    </div>
                </fieldset>
                <center>
                <button class="btn btn-dark" type="submit">Send Money</button>
                </center>
            </div>
            </form>
    </div>
</div>
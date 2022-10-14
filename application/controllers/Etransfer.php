<?php
class Etransfer extends MY_Controller
	{	
		function __construct()
		{
			parent::__construct();
			$session = $this->session->userdata('email');
			if (!isset($session)) {
				redirect(base_url());
			}
            $this->load->model('Etransfer_model');
		}

        public function index(){
            $data['result'] = $this->Etransfer_model->get_all_data();
            $data['page'] = 'page/dispaly_etransfer';
            $this->load->view('main_view',$data);
        }
        
		public function etransfer_add(){
            $data['amount'] = $this->input->post('amount');
            $data['payeename'] = $this->input->post('payeename');
            $data['email'] = $this->input->post('email');
            $data['phnumber'] = $this->input->post('phnumber');
            $data['interac_question'] = $this->input->post('interac_question');
            $data['interac_answer'] = $this->input->post('interac_answer');
            $data['userid'] = $this->session->userdata('id');
            $userid = $this->session->userdata('id');
            $userData = $this->Account_model->get_user_data($userid);
            if($data['amount'] >= $userData->creditcardBalance){
                $this->session->set_flashdata('error','Not enogh credit.');
                redirect(base_url().'etransfer');
            }else{
                $result = $this->Etransfer_model->add($data);
                if(!empty($result)){
                    $this->session->set_flashdata('success','Amount transfer send successfully.');
                }else{
                    $this->session->set_flashdata('error','Something went wrong occure.');
                }
            }
            redirect(base_url().'etransfer');
		}

        public function update_data($id){
            $data['result'] = $this->Etransfer_model->get_all_data($id);
            $data['page'] = 'page/etransfer';
			$this->load->view('main_view',$data);
        }

        public function etransfer_update(){
            $data['amount'] = $this->input->post('amount');
            $data['payeename'] = $this->input->post('payeename');
            $data['email'] = $this->input->post('email');
            $data['phnumber'] = $this->input->post('phnumber');
            $data['interac_question'] = $this->input->post('interac_question');
            $data['interac_answer'] = $this->input->post('interac_answer');
            $userid = $this->session->userdata('id');
            $userData = $this->Account_model->get_user_data($userid);
            if($data['amount'] >= $userData->creditcardBalance){
                $this->session->set_flashdata('error','Not enogh credit.');
                redirect(base_url().'etransfer');
            }else{
                $id = $this->input->post('etransferid');
                $result = $this->Etransfer_model->update($data,$id);
                if(!empty($result)){
                    $this->session->set_flashdata('success','eTransfer Edit Successfully.');
                }else{
                    $this->session->set_flashdata('error','Something went wrong occure.');
                }
                redirect(base_url().'etransfer');
            }
        }

        public function delete_data($id=''){
            $result = $this->Etransfer_model->delete($id);
            if(!empty($result)){
                $this->session->set_flashdata('success','eTransfer Removed successfully.');
            }else{
                $this->session->set_flashdata('error','Something went wrong occure.');
            }
            redirect(base_url().'etransfer');
        }
	}
?>
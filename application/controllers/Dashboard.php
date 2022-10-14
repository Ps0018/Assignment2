<?php
class Dashboard extends MY_Controller
	{	
		function __construct()
		{
			parent::__construct();
			$session = $this->session->userdata('email');
			if (!isset($session)) {
				redirect(base_url());
			}
		}

		public function index(){
			$email = $this->session->userdata('email');
			$data['email'] = $this->Account_model->dashboard_data($email);

			$data['page'] = 'page/dashboard';
			$this->load->view('main_view',$data);
		}

		public function etransfer(){
			$data['page'] = 'page/etransfer';
			$this->load->view('main_view',$data);	
		}
	}
?>
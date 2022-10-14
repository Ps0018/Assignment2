<?php

	class Account extends MY_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$session = $this->session->userdata('email');
			if (isset($session)) {
				redirect(base_url().'operation/display_data');
			}
		}

		public function index(){
			$this->load->view('include/header');
			$this->load->view('form');
		}
		
	}
?>
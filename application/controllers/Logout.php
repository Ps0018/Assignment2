<?php

	class Logout extends MY_Controller
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
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('password');
			redirect(base_url());
		}
	}
?>
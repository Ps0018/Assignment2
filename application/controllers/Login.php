<?php

	class Login extends MY_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index(){
			// echo "<pre>";print_r($_POST);die();
			$this->Account_model->login_data($this->input->post());
		}
	}
?>
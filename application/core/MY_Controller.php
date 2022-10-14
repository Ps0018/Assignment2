<?php
	class MY_Controller extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('Account_model');
			$this->load->model('Category_model');
			$this->load->model('Sub_category_model');
			error_reporting(0);
		}
	}
	
?>
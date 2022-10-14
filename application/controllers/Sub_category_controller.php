<?php

class Sub_category_controller extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function sub_category_add(){
		$data['result'] = $this->Category_model->sub_category();
		$data['page'] = 'page/product/sub_category_add';
		$this->load->view('main_view',$data);
		print_r($this->input->post());
		if ($this->input->post()) {
			$this->Sub_category_model->sub_category_insert($this->input->post());
			redirect(base_url().'Sub_category_controller/sub_category_display');
		}
	}

	public function sub_category_display(){
		$data['result'] = $this->Sub_category_model->sub_category_display();
		$data['page'] = 'page/product/display_sub_category';
		$this->load->view('main_view',$data);
	}

	public function sub_category_delete($id){
		$this->Sub_category_model->sub_category_delete($id);
		redirect(base_url().'Sub_category_controller/sub_category_display');
	}
	public function sub_category_update($id){
		echo $id;
		$data['result'] = $this->Category_model->category_edit($id);
		$data['page'] = 'page/product/update_category';
		$this->load->view('main_view',$data);
		if ($this->input->post()) {
			$this->Category_model->category_update($id);
			redirect(base_url().'sub_Category_controller/display_sub_category');	
		}
	}
}
?>
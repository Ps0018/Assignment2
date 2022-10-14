<?php

class Category_controller extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function category_add(){
		$data['page'] = 'page/product/category';
		$this->load->view('main_view',$data);
		$this->Category_model->category($this->input->post());
		if ($this->input->post()) {
			redirect(base_url().'category_controller/display_category');
		}
	}
	public function display_category(){
		$data['result'] = $this->Category_model->sub_category();
		$data['page'] = 'page/product/display_category';
		$this->load->view('main_view',$data);
	}
	public function category_delete($id){
		echo $id;
		$this->Category_model->category_delete($id);
		redirect(base_url().'Category_controller/display_category');
	}
	public function category_update($id){
		echo $id;
		$data['result'] = $this->Category_model->category_edit($id);
		$data['page'] = 'page/product/update_category';
		$this->load->view('main_view',$data);
		if ($this->input->post()) {
			$this->Category_model->category_update($id);
			redirect(base_url().'Category_controller/display_category');		
		}
	}
}
?>
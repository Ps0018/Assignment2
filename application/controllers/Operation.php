<?php

class Operation extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function insert_data(){
		$data['page'] = 'page/insert';
		$this->load->view('main_view',$data);
		if ($this->input->post()) {
			$result = $this->Account_model->insert_data($this->input->post());
			if(!empty($result)){
				$this->session->set_flashdata('success',"User created successfully.");
			}else{
				$this->session->set_flashdata('error',"Something went wrong.");
			}
			redirect(base_url().'operation/display_data');
		}
	}

	public function display_data(){
		$data['result'] = $this->Account_model->display_data();
		$data['page'] = 'page/display';
		$this->load->view('main_view',$data);
	} 
	public function update_data($id){
		$data['result'] = $this->Account_model->edit_data($id);
		$data['page'] = 'page/update';
		$this->load->view('main_view',$data);
		if ($this->input->post()) {
			$result = $this->Account_model->update_data($id);
			if(!empty($result)){
				$this->session->set_flashdata('success',"User updated successfully.");
			}else{
				$this->session->set_flashdata('error',"Something went wrong.");
			}
			redirect(base_url().'operation/display_data');		
		}
	}

	public function delete_data($id){
		echo $id;
		$this->Account_model->delete_data($id);
		redirect(base_url().'operation/display_data');		
	}
}
?>
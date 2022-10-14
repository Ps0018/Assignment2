<?php
	
	class Sub_category_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		//display sub category
		public function sub_category_display(){

		    $this->db->select('category.*,sub_category.*,category.id as cid,sub_category.id as sid'); 
		    $this->db->from('sub_category');
		    $this->db->join('category', 'category.id = sub_category.category_id'); 
		    $query = $this->db->get();
		    return $query->result();

		}

		public function sub_category_insert(){
			/*print_r($this->input->post());*/
			$data = array(
				'category_id' => $this->input->post('category_id'),
				'sub_category_name' => $this->input->post('sub_category')
			);
			$this->db->insert('sub_category',$data);
		}

		public function sub_category_edit($id){
			$this->db->where('id', $id);
			$query = $this->db->get('category');
			$data = $query->result();
			return $data;
		}
		
		public function sub_category_update($id){
			$id = $this->input->post('id');
			echo $id;
			/*$data['category_name'] = $this->input->post('category');		
				$this->db->where('id', $id);
			$this->db->update('category',$data);*/
		}

		public function sub_category_delete($id){
			echo $id;
			$this->db->where('id', $id);
    		$query = $this->db->delete('sub_category');
			echo $this->db->last_query();
		}

	}
?>
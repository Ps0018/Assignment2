<?php
	
	class Category_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
	
		public function category(){
			if(!empty($this->input->post('category'))){
				$count = count($this->input->post('category'));	
			}else{
				$count = 0;
			}
			
			for ($i=0; $i < $count-1; $i++) { 
				$catagory_name = $this->input->post('category')[$i];
				$data['category_name'] = $catagory_name;
				$this->db->insert('category',$data);
			}
		}
		public function category_edit($id){
			$this->db->where('id', $id);
			$query = $this->db->get('category');
			$data = $query->result();
			return $data;
		}
		
		public function category_update($id){
			$id = $this->input->post('id');
			$data['category_name'] = $this->input->post('category');		
				$this->db->where('id', $id);
			$this->db->update('category',$data);
		}

		public function category_delete($id){
			$this->db->where('id', $id);
    		$query = $this->db->delete('category');
			return $query;
		}
		public function sub_category(){
			$query = $this->db->get('category');
			$data = $query->result();;
			return $data;
		}
	}
?>
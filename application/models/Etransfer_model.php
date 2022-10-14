<?php
	
	class Etransfer_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

        public function get_all_data($id=""){
			$query = $this->db->get('etransfer');
            if(!empty($id)){
                $this->db->where('etransferid',$id);
            }
			$data = $query->result();;
			return $data;
		}

		public function add($data=''){
            return $this->db->insert('etransfer',$data);
		}
		
		public function update($data,$id){
			$this->db->where('etransferid', $id);
			return $this->db->update('etransfer',$data);
		}

		public function delete($id){
			$this->db->where('etransferid', $id);
    		$query = $this->db->delete('etransfer');
			return $query;
		}
		
	}
?>
<?php
	
	class Account_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
			public function login_data(){
				$this->db->where('email',$this->input->post('email'));
				$this->db->where('password',md5($this->input->post('password')));
				$query = $this->db->get('login');
				/*echo $this->db->last_query();die();*/
				if ($query->num_rows() > 0) 
				{
					$data = array(
							'email' => $this->input->post('email'),
							'password' => md5($this->input->post('password')),
							'id' => $query->row()->id,
							'username' => $query->row()->name,
							'creditcardBalance' => $query->row()->creditcardBalance,
					); 
					$this->session->set_userdata($data);
					$this->session->set_flashdata('success',$query->row()->name.' Login Successfully');
					redirect(base_url().'dashboard');		
				}
				else
				{
					$this->session->set_flashdata('error','Please Enter Correct Details');
					redirect(base_url());
				}
		}
		public function insert_data(){
			$data = array(
				'name' => $this->input->post('name'),
				'gender' => $this->input->post('gender'),
				'province' => $this->input->post('province'),
				'city' => $this->input->post('city'),
				'phnumber' => $this->input->post('phnumber'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'chequingBalance' => $this->input->post('chequingBalance'),
				'savingBalance' => $this->input->post('savingBalance'),
				'creditcardBalance' => $this->input->post('creditcardBalance'),
			);			
			return $this->db->insert('login',$data);
		}
		
		public function get_user_data($id=""){
			$query = $this->db->get('login');
            $this->db->where('id',$id);
			$data = $query->row();
			return $data;
		}

		public function display_data(){
			$query = $this->db->get('login');
			$data = $query->result();;
			return $data;
		}

		public function edit_data($id){
			$this->db->where('id', $id);
			$query = $this->db->get('login');
			$data = $query->result();
			return $data;
		}

		public function update_data($id){

			$data = array(
				'name' => $this->input->post('name'),
				'gender' => $this->input->post('gender'),
				'province' => $this->input->post('province'),
				'city' => $this->input->post('city'),
				'phnumber' => $this->input->post('phnumber'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'chequingBalance' => $this->input->post('chequingBalance'),
				'savingBalance' => $this->input->post('savingBalance'),
				'creditcardBalance' => $this->input->post('creditcardBalance'),
			);			
				$this->db->where('id', $id);
			return $this->db->update('login',$data);
		}

		public function delete_data($id){
				$this->db->where('id', $id);
    		$query = $this->db->delete('login');
			return $query;
		}

		public function dashboard_data($email){
			$this->db->where('email', $email);
			$query = $this->db->get('login');
			$data = $query->result();
			return $data[0]->name;	
		}	
	}
?>
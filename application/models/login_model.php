<?php
	 class Login_model extends CI_Model{
		
		 function __construct()
    		{
       			//$this->DB = $this->load->database('default',TRUE);
      			  parent::__construct();
				  $this->load->database();  
    		}
		function check_user($username)
			{
				$this->db->select('*');
				$this->db->from('users');
				$this->db->where('username',$username);
				$query=$this->db->get();
				return $query->result_array(); 
			}
}
?>
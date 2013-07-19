<?php
	 class Login_model extends CI_Model{
		
		 function __construct()
    		{
       			//$this->DB = $this->load->database('default',TRUE);
      			  parent::__construct();
				  $this->load->database();  
    		}
		function check_username($username)
		{
			$this->db->where('username',$username);
			return $this->db->count_all_results('users');
		}	
		function check_pw($username,$password)
		{
			$data=array(
				'username'=>$username,
				'password'=>md5($password),
				);
			$this->db->where($data);
			return $this->db->count_all_results('users');
		}			
		function get_user($username,$password)
			{
				$data=array(
				'username'=>$username,
				'password'=>md5($password),
				);
				$this->db->select('*');
				$this->db->from('users');
				$this->db->where($data);
				$query=$this->db->get();
				return $query->result_array();
			}
			
}
?>
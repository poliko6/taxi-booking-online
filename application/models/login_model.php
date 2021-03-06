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
		function check_driver($username)
		{
			$this->db->where('username',$username);
			return $this->db->count_all_results('driver');
		}		
		function check_driver_pw($username,$password)
		{
			$data=array(
				'username'=>$username,
				'password'=>md5($password),
				);
			$this->db->where($data);
			return $this->db->count_all_results('driver');
		}
		function check_customer($username)
		{
			$this->db->where('username',$username);
			return $this->db->count_all_results('customers');
		}		
		function check_customer_pw($username,$password)
		{
			$data=array(
				'username'=>$username,
				'password'=>md5($password),
				);
			$this->db->where($data);
			return $this->db->count_all_results('customers');
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
		function get_driver($username,$password)
			{
				$data=array(
				'username'=>$username,
				'password'=>md5($password),
				);
				$this->db->select('*');
				$this->db->from('driver');
				$this->db->where($data);
				$query=$this->db->get();
				return $query->result_array();
			}	
		function get_customer($username,$password)
			{
				$data=array(
				'username'=>$username,
				'password'=>md5($password),
				);
				$this->db->select('*');
				$this->db->from('customers');
				$this->db->where($data);
				$query=$this->db->get();
				return $query->result_array();
			}	
}
?>
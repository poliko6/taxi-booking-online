<?php
	 class Register_model extends CI_Model{
		
		 function __construct()
    		{
      			  parent::__construct();
				  $this->load->database();  
    		}
		function addcustomer($inform)
		{
			$this->db->insert('customers',$inform);
		}
		function checkusername($username)
		{
			$this->db->select('username');
			$this->db->from('customers');
			$this->db->where('username',$username);
			$query=$this->db->get();
			if ($query->num_rows() > 0)
			return 1;
			else {
				return 0;
				}
		}
		function count_customers()
		{
			return $this->db->count_all('customers');
		}
	}

?>
<?php
	 class Register_model extends CI_Model{
		
		 function __construct()
    		{
       			//$this->DB = $this->load->database('default',TRUE);
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
		function getsuburb()
		{
			$query=$this->db->get('suburb');
			return $query->result();
			/*if ($query->num_rows() > 0)
        {
            //create this array for view loop
            $suburb = $query->result();
        } */
		}
		function getstreet($suburb)
		{
			$this->db->select('*');
			$this->db->from('street');
			$this->db->where('suburb',$suburb);
			$query=$this->db->get();
			return $query->result_array();
		}
		function count_customers()
		{
			return $this->db->count_all('customers');
		}
	}

?>
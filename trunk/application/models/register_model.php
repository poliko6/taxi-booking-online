<?php
	 class Register_model extends CI_Model{
		
		 function __construct()
    		{
       			//$this->DB = $this->load->database('default',TRUE);
      			  parent::__construct();
				  $this->load->database();  
    		}
		function booking($object)
    		{
    			$this->db->insert('order_temp',$object);    			
    		}
		function addcustomer($inform)
		{
			$this->db->insert('customers',$inform);
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
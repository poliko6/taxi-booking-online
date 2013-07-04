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
        		//$query =  $this->DB->get('user');  
				//return $query->result_array();
        		//$data['query'] =  $query->result(); 	
				//$this->load->view('userview', $data);
    		}
		function addcustomer_temp($inform)
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
		function count_order_temp()
		{
			return $this->db->count_all('order_temp');
		}
	}

?>
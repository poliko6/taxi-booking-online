<?php
	 class Bookingtaxi_model extends CI_Model{
		
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
		function addcustomer_temp($inform)
		{
			$this->db->insert('customers_temp',$inform);
		}
		function count_order_temp()
		{
			return $this->db->count_all('order_temp');
		}
		function infocompany()
		{
			$query=$this->db->get('company');
			return $query->result_array();
		}
		function getbooking_history($customer_id)
		{
			$this->db->where('customer_id',$customer_id);
			return $this->db->get('orders')->result_array();
			
		}
	}

?>
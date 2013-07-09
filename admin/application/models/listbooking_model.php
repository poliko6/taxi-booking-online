<?php
	 class Listbooking_model extends CI_Model{
		
		 function __construct()
    		{
       			//$this->DB = $this->load->database('default',TRUE);
      			  parent::__construct();
				  $this->load->database();  
    		}
		
		function getlistbooking($num,$p)
		{
			
			//$this->db->select($a,$num,$p);
			$this->db->select('id,name,contact_number');
			$this->db->from('order_temp');
			$this->db->limit($num,$p);			
			$query=$this->db->get();
			return $query->result_array();
		}
		function count_order_temp()
		{
			return $this->db->count_all('order_temp');
		}
		function getbooking_detail($id)
		{
			
			//$this->db->select($a,$num,$p);
			$this->db->select('*');
			$this->db->from('order_temp');
			$this->db->where('id',$id);			
			$query=$this->db->get();
			return $query->result_array();
		}
	}

?>
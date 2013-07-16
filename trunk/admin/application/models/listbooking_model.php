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
			$this->db->select('order_id,name,contact_number,status_id');
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
			$this->db->join('order_status','order_temp.status_id=order_status.id','inner');
			$this->db->where('order_temp.order_id',$id);			
			$query=$this->db->get();
			return $query->result_array();
		}
		function getstatus()
		{
			$this->db->select('*');
			$this->db->from('order_status');
			$query=$this->db->get();
			return $query->result();
		}
		function update_status($id,$stt)
		{
			$object=array(
			'status_id'=>$stt,
			);
			$this->db->where('order_id',$id);
			$this->db->update('order_temp',$object);
		}
	}

?>
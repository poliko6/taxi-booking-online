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
			$this->db->select('*');
			$this->db->from('order_temp');
			$this->db->join('driver','order_temp.driver=driver.driver_id','left');
			$this->db->join('order_status','order_temp.status_id=order_status.id','inner');
			$this->db->limit($num,$p);			
			$query=$this->db->get();
			return $query->result_array();
		}
		function count_order_temp()
		{
			return $this->db->count_all('order_temp');
		}
	
		function getstatus()
		{
			$this->db->select('*');
			$this->db->from('order_status');
			$query=$this->db->get();
			return $query->result();
		}
		function getdriver()
		{
			$this->db->select('*');
			$this->db->from('driver');
			$query=$this->db->get();
			return $query->result();
		}
		function update($id,$stt,$driver)
		{
			$object=array(
			'status_id'=>$stt,
			'driver'=>$driver,
			);
			$this->db->where('order_id',$id);
			$this->db->update('order_temp',$object);
		}
	}

?>
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
			$this->db->order_by('order_id','asc');	
			$query=$this->db->get();
			return $query->result_array();
		}
		function get_detail_booking($id)
		{
			$this->db->select('*');
			$this->db->from('order_temp');
			$this->db->join('driver','order_temp.driver=driver.driver_id','left');
			$this->db->join('order_status','order_temp.status_id=order_status.id','inner');	
			$this->db->where('order_id',$id);
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
			$this->db->where('driver_status','1');
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
		function update_status_driver1($id)
		{
			$object=array(
			'driver_status'=>'2',
			);
			$this->db->where('driver_id',$id);
			$this->db->update('driver',$object);
		}
		function update_status_driver2($id)
		{
			$object=array(
			'driver_status'=>'1',
			);
			$this->db->where('driver_id',$id);
			$this->db->update('driver',$object);
		}
	}

?>
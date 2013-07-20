<?php
	 class Driver_model extends CI_Model{
		
		 function __construct()
    		{
       			//$this->DB = $this->load->database('default',TRUE);
      			  parent::__construct();
				  $this->load->database();  
    		}		
		
		function get_detail_order($id)
		{
			$this->db->select('*');
			$this->db->from('order_temp');
			$this->db->join('driver','order_temp.driver=driver.driver_id','left');
			$this->db->join('order_status','order_temp.status_id=order_status.id','inner');
			$this->db->join('status','driver.driver_status=status.id','inner');	
			$this->db->where('driver',$id);
			$query=$this->db->get();
			return $query->result_array();
		}
		function getstatus()
		{
			$this->db->select('*');
			$this->db->from('status');
			$query=$this->db->get();
			return $query->result();
		}
		function update_status($id)
		{
			$object=array(
			'driver_status'=>'1',
			);
			$this->db->where('driver_id',$id);
			$this->db->update('driver',$object);
		}
	}

?>
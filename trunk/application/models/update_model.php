<?php
	 class Update_model extends CI_Model{
		
		function __construct()
    	{
      		parent::__construct();
			$this->load->database();  
    	}
			
		function update_customer($customer_id,$inform)
		{
			$this->db->where('customer_id',$customer_id);
			$this->db->update('customers',$inform);
		}
		function customer_info($customer_id)
		{
			$this->db->where('customer_id',$customer_id);
			$query=$this->db->get('customers');
			return $query->result_array();
		}
		function change_pw($customer_id,$pw)
		{
			$obj=array(
			'password'=>$pw,
			);
			$this->db->where('customer_id',$customer_id);
			$this->db->update('customers',$obj);
		}
	}

?>
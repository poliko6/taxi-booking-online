<?php
class InfoCO_model extends CI_Model{
	function __construct()
    		{
       			//$this->DB = $this->load->database('default',TRUE);
      			  parent::__construct();
				  $this->load->database();  
    		}
	function get_info(){
		$query=$this->db->get('company');
		return $query->result_array();
	}		
	function update($name,$phone,$address,$email,$note,$time){
		$object=array(
		'Company_Name'=>$name,
		'Phone'=>$phone,
		'address'=>$address,
		'Email'=>$email,
		'Note'=>$note,
		'Time_Work'=>$time,
		);
		$this->db->where('Company_Id','2');
		if($this->db->update('company',$object)){
			
		}
		else {
			return 1;
			
		}
		
	}
	
}

?>
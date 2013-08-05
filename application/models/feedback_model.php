<?php
	 class Feedback_model extends CI_Model{
		
		 function __construct()
    		{
       			//$this->DB = $this->load->database('default',TRUE);
      			  parent::__construct();
				  $this->load->database();  
    		}
		function add_feedback($inform)
		{
			$this->db->insert('feedback',$inform);
		}
		function count_feedback()
		{
			return $this->db->count_all('feedback');
		}
	}

?>
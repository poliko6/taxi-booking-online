<?php

class Bookingtaxi extends CI_Controller {

	  function __construct()
    {
        parent::__construct();
		$this->load->helper("url");
		$this->load->library('javascript');
		$this->load->helper('form');
		
    }
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt_Name','Name','required');
		$this->form_validation->set_rules('txt_Contact_Number','Contact Number','required');
		$this->form_validation->set_rules('txt_Start_Address','Start Address','required');
		$this->form_validation->set_rules('txt_Unit_or_Flat','Unit or Flat','required');
		if($this->input->post("rad_Building_Type")=="Business")
		$this->form_validation->set_rules('txt_Business_name','Business','required');
		$this->form_validation->set_rules('txt_End_Address','End Address','required');
		$this->form_validation->set_rules('txt_Distance','Distance','required'); 
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');  
		if($this->form_validation->run()==TRUE)
		{
			require_once('recaptchalib.php');
	  		$privatekey = "6LdEweMSAAAAAGI1hyasxa4pPu_Fd_HP0QXU9rEY";
	  		$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

	  	   if (!$resp->is_valid) 
	  	   {
	       		 echo '<script>alert("loi")</script>';				
	  	   } 
	  	   else	
	  	   {
				$this->load->model("bookingtaxi_model");
				$precount=$this->bookingtaxi_model->count_order_temp();
				if($this->input->post('rad_Ready_to_go')=='Now')
				{
					$string=date('Y-m-d h:m:s A');
				}
				else
				{
					$select_date=$this->input->post("ddl_Select_Date");
					$am=$this->input->post("ddl_AM");
					$hours=$this->input->post("ddl_hours");
					$minutes=$this->input->post("ddl_minutes");
					$string=$select_date." ".$hours.":".$minutes.":".'00'.' '.$am;
				}
				
				$object=array(
				"passenger"=>$this->input->post("rad_passenger"),
				"name"=>$this->input->post("txt_Name"),
				"contact_number"=>$this->input->post("txt_Contact_Number"),
				"start_address"=>$this->input->post("txt_Start_Address"),
				"unit_or_flat"=>$this->input->post("txt_Unit_or_Flat"),
				"building_type"=>$this->input->post("rad_Building_Type"),
				"business_name"=>$this->input->post("txt_Business_name"),
				"remember_detail"=>$this->input->post("chk_Remember_Details"),
				"end_address"=>$this->input->post("txt_End_Address"),
				"distance"=>$this->input->post("txt_Distance"),
				"car_type"=>$this->input->post("rad_Car_Type"),
				"node_for_driver"=>$this->input->post("ddl_Notes"),
				"time_to_go"=>$string,
				"price"=>floatval($this->input->post("txt_Distance"))*'1.617',
				"status_id"=>"1",
				"payment"=>$this->input->post("rad_Payment"),
				"driver"=>"null",
				);
				$inform=array(
				"passenger"=>$this->input->post("rad_passenger"),
				"name"=>$this->input->post("txt_Name"),
				"contact_number"=>$this->input->post("txt_Contact_Number"),
				"address"=>$this->input->post("txt_Start_Address"),
				"unit_or_flat"=>$this->input->post("txt_Unit_or_Flat"),
				"building_type"=>$this->input->post("rad_Building_Type"),
				"business_name"=>$this->input->post("txt_Business_name"),
				);
				$this->bookingtaxi_model->booking($object);
				$lastcount=$this->bookingtaxi_model->count_order_temp();
				if($lastcount>$precount)
				{
					echo ('booking success!!!');
					echo '<meta http-equiv="refresh" content="2;'.base_url().'" />';
				}
				else 
				{
					echo ('bookingfail!!!');
					break;
				}
				if($this->input->post("chk_Remember_Details")=='1')
				{
				 	$this->bookingtaxi_model->addcustomer_temp($inform);
				}    
	  	  }
		}
	else{
			$this->load->view('header');
			$this->load->view('bookingtaxi_view');
			$this->load->view('footer');
			
		}
		function checkuser()
		{
			
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
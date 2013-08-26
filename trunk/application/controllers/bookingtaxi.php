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
		$this->load->view('header');
		$this->load->view('bookingtaxi_view');        	
		$this->load->view('footer');
	}
	public function book()
	{		
			require_once('recaptchalib.php');
		  	$privatekey = "6LdEweMSAAAAAGI1hyasxa4pPu_Fd_HP0QXU9rEY";
		  	$resp = recaptcha_check_answer ($privatekey,
	                            $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
			if (!$resp->is_valid) {
	   			 echo 'ERROR CAPCHA!!!';
				 echo '<meta http-equiv="refresh" content="1;'.base_url().'bookingtaxi" />';
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
				$payment["id"]=$this->bookingtaxi_model->booking($object);
				$lastcount=$this->bookingtaxi_model->count_order_temp();
				if($lastcount>$precount)
				{
					
					if($this->input->post('rad_Payment')=='paypal_payment')    
					{
						$payment['price']=floatval($this->input->post("txt_Distance"))*'1.617';
						
						
							$this->load->view('header');
							$this->load->view('paypalonline',$payment); 						
							$this->load->view('footer');
							
					}
					else {
						echo ('booking success!!!');
						echo '<meta http-equiv="refresh" content="2;'.base_url().'" />';
					}
					
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
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
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
		
			$this->load->model("bookingtaxi_model");
			$data['suburb']=$this->bookingtaxi_model->getsuburb();
			$this->load->view('header');
			$this->load->view('bookingtaxi_view',$data);
			$this->load->view('footer');
			if(isset($_POST['ddl_Address_from']))
			{
				$this->load->model("bookingtaxi_model");
				$data['suburb']=$this->bookingtaxi_model->getsuburb();
				$data['street']=$this->bookingtaxi_model->getstreet($_POST['ddl_Address_from']);
				$this->load->view('bookingtaxi_view2',$data);
			}
	}
	public function getstreet()
	{
	
		$this->load->model("bookingtaxi_model");
		$suburb_id = $this->input->post('suburb_id');
		$data['streets']=$this->bookingtaxi_model->getstreet($suburb_id);
		$this->load->view('liststreet',$data);
	}
	public function book()
	{
		 
  		require_once('recaptchalib.php');
  		$privatekey = "6LdEweMSAAAAAGI1hyasxa4pPu_Fd_HP0QXU9rEY";
  		$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  	   if (!$resp->is_valid) 
  	   {
       		 echo 'Capcha Error!!!';
			 echo '<meta http-equiv="refresh" content="1; http://localhost:8888/bookingtaxi/bookingtaxi" />';
  	   } 
  	   else	
  	   {
			$this->load->model("bookingtaxi_model");
			$precount=$this->bookingtaxi_model->count_order_temp();
			$day=$this->input->post("ddl_day");
			$month=$this->input->post("ddl_month");
			$year=$this->input->post("ddl_year");
			$hours=$this->input->post("ddl_hours");
			$minutes=$this->input->post("ddl_minutes");
			$seconds=$this->input->post("ddl_seconds");
			$string=$year.":".$month.":".$day." ".$hours.":".$minutes.":".$seconds;
			$object=array(
			"passenger"=>$this->input->post("rad_passenger"),
			"name"=>$this->input->post("txt_Name"),
			"contact_number"=>$this->input->post("txt_Contact_Number"),
			"address_from"=>$this->input->post("ddl_Address_from"),
			"unit_or_flat"=>$this->input->post("txt_Unit_or_Flat"),
			"street_number"=>$this->input->post("txt_Street"),
			"street"=>$this->input->post("street"),
			"building_type"=>$this->input->post("rad_Building_Type"),
			"business_name"=>$this->input->post("txt_Business_name"),
			"remember_detail"=>$this->input->post("chk_Remember_Details"),
			"address_to"=>$this->input->post("ddl_Address_to"),
			"car_type"=>$this->input->post("rad_Car_Type"),
			"node_for_driver"=>$this->input->post("ddl_Notes"),
			"ready_to_go"=>$this->input->post("rad_Ready_to_go"),
			"time_to_go"=>$string,
			);
			$inform=array(
			"passenger"=>$this->input->post("rad_passenger"),
			"name"=>$this->input->post("txt_Name"),
			"contact_number"=>$this->input->post("txt_Contact_Number"),
			"suburb"=>$this->input->post("ddl_Address_from"),
			"unit_or_flat"=>$this->input->post("txt_Unit_or_Flat"),
			"street_number"=>$this->input->post("txt_Street"),
			"street"=>$this->input->post("ddl_Street"),
			"building_type"=>$this->input->post("rad_Building_Type"),
			);
			$this->bookingtaxi_model->booking($object);
			$lastcount=$this->bookingtaxi_model->count_order_temp();
			if($lastcount>$precount)
			{
				echo ('booking success!!!');
				echo '<meta http-equiv="refresh" content="2;http://localhost:8888/bookingtaxi/bookingtaxi" />';
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
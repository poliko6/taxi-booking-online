<?php

class Register extends CI_Controller {

	  function __construct()
    {
        parent::__construct();
		$this->load->helper("url");
		$this->load->library('javascript');
		$this->load->helper('form');
		$this->load->model('register_model');
    }
	public function index()
	{
		$data['suburb']=$this->register_model->getsuburb();
		$this->load->view('header');
		$this->load->view('register_view',$data);
		$this->load->view('footer');	
	}
	public function getstreet()
	{
		$suburb_id=$this->input->post('suburb_id');
		$data['streets']=$this->register_model->getstreet($suburb_id);
		$this->load->view('liststreet',$data);
	}
	public function signup()
	{
		$username=$this->input->post('txt_Username');
		$email=$this->input->post('txt_Email');
		if($this->register_model->checkusername($username)==1)
		{
			echo 'Someone already has that username';
		}
		elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
					echo "Địa chỉ mail không hợp lệ";
		else 
		{
			$fullname=$this->input->post("txt_Fname").' '.$this->input->post("txt_Lname");
			$object=array(
			"title"=>$this->input->post("ddl_Title"),
			"fullname"=>$fullname,
			"username"=>$this->input->post("txt_Username"),
			"password"=>md5($this->input->post("txt_PW")),
			"email"=>$email,
			"suburb"=>$this->input->post("ddl_Suburb"),
			"unit_or_flat"=>$this->input->post("txt_Unit"),
			"street_number"=>$this->input->post("txt_Snumber"),
			"street"=>$this->input->post("ddl_Street"),
			"phone"=>$this->input->post("txt_Pnumber"),
			"mobile"=>$this->input->post("txt_Mnumber"),
			"usertype"=>"4",
		);
		$precount=$this->register_model->count_customers();
		$this->register_model->addcustomer($object);
		$lastcount=$this->register_model->count_customers();
		if($lastcount>$precount)
		{
			echo 'register success!!!';	
			echo '<meta http-equiv="refresh" content="2;http://localhost:8888/bookingtaxi/register" />';
		}
		else
		{
			echo 'register fail!!!';
			echo '<meta http-equiv="refresh" content="2;http://localhost:8888/bookingtaxi/register" />';
		}
		}
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
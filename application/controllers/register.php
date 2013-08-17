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
		$this->load->view('header');
		$this->load->view('register_view');
		$this->load->view('footer');	
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
			"unit_or_flat"=>$this->input->post("txt_Unit"),
			"address"=>$this->input->post("txt_Address"),
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
			echo '<meta http-equiv="refresh" content="2;'.base_url().'" />';
		}
		else
		{
			echo 'register fail!!!';
			echo '<meta http-equiv="refresh" content="2;'.base_url().'register" />';
		}
		}
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
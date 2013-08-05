<?php

class Email extends CI_Controller {

	  function __construct()
    {
        parent::__construct();
		$this->load->helper("url");
		$this->load->library('javascript');
		$this->load->model('feedback_model');
    }
	public function index()
	{
		$config=array(
		'protocol'=>'smtp',
		'smtp_host'=>'ssl://smtp.googlemail.com',
		'smtp_port'=>'465',
		'smtp_user'=>'testbookingtaxi@gmail.com',
		'smtp_pass'=>'qweasd123456'
		);
		if(isset($_POST['btnOK']))
		{
			if(!isset($_POST['txt_Name'])||!isset($_POST['txt_Email'])||!isset($_POST['txt_Message']))
			{
				echo "can't not continue!!";
				echo '<meta http-equiv="refresh" content="1;'.base_url().'" />';	
			}
			else 
			{
				$name=$_POST['txt_Name'];
				$email=$_POST['txt_Email'];
				$subject="customer's idea";
				$message=$_POST['txt_Message'];
				$this->load->library('email',$config);
				$this->email->set_newline("\r\n");
				$this->email->from($email,$name);
				$this->email->to('testbookingtaxi@gmail.com');
				$this->email->subject($subject);
				$this->email->message($message);
				if($this->email->send())
				{
					echo $email;
					echo "send mail success!!!";
					echo '<meta http-equiv="refresh" content="1;'.base_url().'" />';		
				}
				else
				{
					 show_error($this->email->print_debugger());
				}	
			}
		}
		else {
			echo "can't not continue!!";
				echo '<meta http-equiv="refresh" content="1;'.base_url().'" />';	
			}
	}
}


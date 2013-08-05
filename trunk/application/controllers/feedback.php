<?php

class Feedback extends CI_Controller {

	  function __construct()
    {
        parent::__construct();
		$this->load->helper("url");
		$this->load->library('javascript');
		$this->load->helper('form');
		$this->load->model('feedback_model');
    }
	
	public function index()
	{
		if(isset($_POST['btnOK']))
		{
			if(!isset($_POST['txt_Name'])||!isset($_POST['txt_Email'])||!isset($_POST['txt_Message']))
			{
				echo "can't not continue!!";
				echo '<meta http-equiv="refresh" content="1;'.base_url().'" />';	
			}
			else 
			{
				$config=array(
				'protocol'=>'smtp',
				'smtp_host'=>'ssl://smtp.googlemail.com',
				'smtp_port'=>'465',
				'smtp_user'=>'testbookingtaxi@gmail.com',
				'smtp_pass'=>'qweasd123456'
				);
				$name=$_POST['txt_Name'];
				$e_mail=$_POST['txt_Email'];
				$subject="customer's idea";
				$message=$_POST['txt_Message'];
				$this->load->library('email',$config);
				$this->email->set_newline("\r\n");
				$this->email->from($e_mail,$e_mail);
				$this->email->to('testbookingtaxi@gmail.com');
				$this->email->subject($subject);
				$this->email->message($message);
				if($this->email->send())
				{
					$date=date('Y-m-d h:m:s A');
					$object=array(
					"name"=>$name,
					"email"=>$e_mail,
					"subject"=>$subject,
					"message"=>$message,
					"date"=>$date
					);
					$precount=$this->feedback_model->count_feedback();
					$this->feedback_model->add_feedback($object);
					$lastcount=$this->feedback_model->count_feedback();
					if($lastcount>$precount)
					{
						echo 'send mail success!!!';	
						echo '<meta http-equiv="refresh" content="2;'.base_url().'" />';
					}
					else
					{
						echo 'send mail fail!!!';
						echo '<meta http-equiv="refresh" content="2;'.base_url().'" />';
					}
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

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
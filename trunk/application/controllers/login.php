<?php

class Login extends CI_Controller {

	  function __construct()
    {
        parent::__construct();
		$this->load->helper("url");
		$this->load->library('javascript');
		$this->load->helper('form');
		$this->load->model("login_model");
		
    }
	public function index()
	{
			$this->load->view('header');
			$this->load->view('login_view');
			$this->load->view('footer');		
	}
	function check_user()
	{
		if(isset($_POST['txt_UN'])&&(isset($_POST['txt_PW'])))
		{
			$username=$this->input->post('txt_UN');
			$a=$this->login_model->check_username($username);
			if($a=='1')
			{
				$password=$this->input->post('txt_PW');
				$b=$this->login_model->check_pw($username,$password);
				if($b=='1')
				{
					$data['query']=$this->login_model->get_user($username,$password);
					$this->load->view('login_process_view',$data);
				}
				else {
					echo 'wrong password!!!';
					echo '<meta http-equiv="refresh" content="1; http://localhost:8888/bookingtaxi/login" />';								
				}
			}
			else 
			{
				echo "username not valid!!!";
				echo '<meta http-equiv="refresh" content="1; http://localhost:8888/bookingtaxi/login" />';								
			}			
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
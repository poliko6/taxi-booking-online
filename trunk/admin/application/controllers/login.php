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
			$this->session->sess_destroy();
			$this->load->view('header');
			$this->load->view('login_view');
			$this->load->view('footer');		
	}
	function check_user()
	{
		if(isset($_POST['txt_UN'])&&(isset($_POST['txt_PW'])))
		{
			$username=$this->input->post('txt_UN');
			$check_un=$this->login_model->check_username($username);
			if($check_un=='1')
			{
				$password=$this->input->post('txt_PW');
				$check_pw=$this->login_model->check_pw($username,$password);
				if($check_pw=='1')
				{
					$data['query']=$this->login_model->get_user($username,$password);
					$this->load->view('login_process_view',$data);
				}
				else {
					echo 'wrong password!!!';
					echo '<meta http-equiv="refresh" content="1;'.base_url('login').'" />';								
					
				}
			}
			else 
			{
				$check_driver=$this->login_model->check_driver($username);
				if($check_driver=='1')
					{
						$password=$this->input->post('txt_PW');
						$check_pw=$this->login_model->check_driver_pw($username,$password);
						if($check_pw=='1')
						{
							$data['query']=$this->login_model->get_driver($username,$password);
							$this->load->view('login_process_view',$data);
						}
					else {
						echo 'wrong password!!!';
						echo '<meta http-equiv="refresh" content="1;'.base_url('login').'" />';								
				}	
			}						
			}			
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
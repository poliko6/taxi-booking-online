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
		if(isset($_POST['txt_UN']))
		{
			$username=$this->input->post('txt_UN');
			$data['query']=$this->login_model->check_user($username);
			$this->load->view('process_login',$data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
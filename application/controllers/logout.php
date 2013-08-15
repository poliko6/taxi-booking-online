<?php

class Logout extends CI_Controller {

	  function __construct()
    {
        parent::__construct();		
    }
	public function index()
	{
		$this->session->sess_destroy();
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
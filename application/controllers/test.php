<?php

class Test extends CI_Controller {

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
		$this->load->view('content2');
		$this->load->view('footer');				
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
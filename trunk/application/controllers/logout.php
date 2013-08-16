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
		 $this->load->model('bookingtaxi_model');
		$data['query']=$this->bookingtaxi_model->infocompany();		
		
		$this->load->view('footer',$data);	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
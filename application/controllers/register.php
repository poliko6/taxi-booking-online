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
		$this->load->view('register/register_view',$data);
		$this->load->view('footer');	
	}
	public function getstreet()
	{
		$suburb_id=$this->input->post('suburb_id');
		$data['streets']=$this->register_model->getstreet($suburb_id);
		$this->load->view('liststreet',$data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
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
		$this->load->view('header');
		$this->load->view('feedback_view');
		$this->load->view('footer');	
	}
	public function add_feedback()
	{
		$object=array(
		"name"=>$this->input->post("txt_Name"),
		"email"=>$this->input->post("txt_Email"),
		"subject"=>$this->input->post("txt_Subject"),
		"message"=>$this->input->post("txt_Message")
		);
		$precount=$this->feedback_model->count_feedback();
		$this->feedback_model->add_feedback($object);
		$lastcount=$this->feedback_model->count_feedback();
		if($lastcount>$precount)
		{
			echo 'register success!!!';	
			echo '<meta http-equiv="refresh" content="2;'.base_url().'feedback" />';
		}
		else
		{
			echo 'register fail!!!';
			echo '<meta http-equiv="refresh" content="2;'.base_url().'feedback" />';
		}
	}
		
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
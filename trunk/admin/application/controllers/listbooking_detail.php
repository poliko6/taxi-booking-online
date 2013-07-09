<?php

class Listbooking_detail extends CI_Controller {

	  function __construct()
    {
        parent::__construct();
		$this->load->helper("url");
		$this->load->library('javascript');
		$this->load->helper('form');
		
    }
	public function index()
	{
			$id=$_GET['id'];
			$this->load->model("listbooking_model");			
			$data['query']=$this->listbooking_model->getbooking_detail($id);
			$this->load->view('header');
			$this->load->view('listbooking_detail_view',$data);
			$this->load->view('footer');	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
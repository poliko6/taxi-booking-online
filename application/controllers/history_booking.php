<?php

class History_booking extends CI_Controller {

	  function __construct()
    {
        parent::__construct();		
    }
	public function index()
	{
		$this->load->model('bookingtaxi_model');
		$customer_id=$this->session->userdata('customer_id');
		$data['query']=$this->bookingtaxi_model->getbooking_history($customer_id);
		$this->load->view('header');
		$this->load->view('history_booking_view',$data);
        $this->load->view('footer');
		
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
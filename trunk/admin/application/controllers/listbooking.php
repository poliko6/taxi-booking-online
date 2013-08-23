<?php

class Listbooking extends CI_Controller {

	  function __construct()
    {
        parent::__construct();
		$this->load->helper("url");
		$this->load->library('javascript');
		$this->load->helper('form');
		
    }
	public function index()
	{
		if($this->session->userdata('usertype')=='1'||$this->session->userdata('usertype')=='2')
		{
			$this->load->model("listbooking_model");
			$this->load->library('pagination');
			$this->load->library('table');
			$config['base_url']=base_url('listbooking');
			$config['total_rows']=$this->listbooking_model->count_order_temp();
			$config['per_page']=5;
			$config['uri_segment']=2;
			$this->pagination->initialize($config);
			//$this->table->set_heading('id','name','contact number');
			$data['query']=$this->listbooking_model->getlistbooking($config['per_page'],$this->uri->segment(2));
			
			$this->load->view('header');
			$this->load->view('listbooking_view',$data);
			$this->load->view('footer');
		}
		else {
			echo 'please login to continue!!!';
			echo '<meta http-equiv="refresh" content="1;'.base_url().'login" />';
		}	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
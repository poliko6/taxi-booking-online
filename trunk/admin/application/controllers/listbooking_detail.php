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
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$this->load->model("listbooking_model");			
			$data['query']=$this->listbooking_model->getbooking_detail($id);
			$this->load->view('header');
			$this->load->view('listbooking_detail_view',$data);
			$this->load->view('footer');
		}	
	}
	public function getstatus()
	{
		$this->load->model("listbooking_model");
		$data['query']=$this->listbooking_model->getstatus();
		$this->load->view('header');
		$this->load->view('listbooking_update_status',$data);
		$this->load->view('footer');	
	}
	public function update_status()
	{
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			if(isset($_POST['ddl_Status']))
			{	
				$stt=$this->input->post('ddl_Status');
				$this->load->model("listbooking_model");
				$this->listbooking_model->update_status($id,$stt);
				echo 'update success';
				echo '<meta http-equiv="refresh" content="2;http://localhost:8888/bookingtaxi/admin/listbooking_detail?id='.$id.'" />';
			}
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
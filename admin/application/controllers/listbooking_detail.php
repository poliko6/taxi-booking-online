<?php

class Listbooking_detail extends CI_Controller {

	  function __construct()
    {
        parent::__construct();
		$this->load->helper("url");
		$this->load->library('javascript');
		$this->load->helper('form');
		$this->load->model("listbooking_model");
    }
	public function index()
	{
		if($this->session->userdata('usertype')=='1'||$this->session->userdata('usertype')=='2')
		{
			if(isset($_GET['id']))
			{
				$data['stt']=$this->listbooking_model->getstatus();
				$data['drivers']=$this->listbooking_model->getdriver();
				$this->load->view('header');
				$this->load->view('listbooking_update_view',$data);
				$this->load->view('footer');	
			}	
		}
		else {
			echo '<meta http-equiv="refresh" content="0;'.base_url('login').'" />';
		}
	}
	public function get_detail_booking()
	{
		if($this->session->userdata('usertype')=='1'||$this->session->userdata('usertype')=='2')
		{
			if(isset($_GET['id']))
			{
				$id=$_GET['id'];
				$data['query']=$this->listbooking_model->get_detail_booking($id);
				$this->load->view('header');
				$this->load->view('listbooking_detail_view',$data);
				$this->load->view('footer');						
			}
		}
		else{
			echo '<meta http-equiv="refresh" content="0;'.base_url('login').'" />';	
		}
	}
	public function update_booking()
	{
		if($this->session->userdata('usertype')=='1'||$this->session->userdata('usertype')=='2')
		{
			if(isset($_GET['id']))
			{
				$id=$_GET['id'];
				if(!isset($_POST['ddl_Status'])||!isset($_POST['ddl_Driver'])||$this->input->post('ddl_Status')==0)
				{
					echo 'update fail';
					echo '<meta http-equiv="refresh" content="1;'.base_url('listbooking_detail?id='.$id).'" />';
				}
				else
				{
					if($this->session->userdata('driver')!=0)
					{
						$this->listbooking_model->update_status_driver2($this->session->userdata('driver'));
						$this->session->unset_userdata('driver');
					}
					$stt=$this->input->post('ddl_Status');
					$driver=$this->input->post('ddl_Driver');
					$this->load->model("listbooking_model");
					$this->listbooking_model->update($id,$stt,$driver);
					$this->listbooking_model->update_status_driver1($driver);
					echo 'update success';
					echo '<meta http-equiv="refresh" content="1;'.base_url('listbooking_detail/get_detail_booking?id='.$id).'" />';
				}	
			}
		}else{
			echo '<meta http-equiv="refresh" content="0;'.base_url('login').'" />';	
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
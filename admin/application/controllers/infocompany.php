<?php

class Infocompany extends CI_Controller {

	  function __construct()
    {
        parent::__construct();
		$this->load->helper("url");
		$this->load->library('javascript');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
    }
	public function index()
	{			
		if($this->session->userdata('usertype')=='1'||$this->session->userdata('usertype')=='2')
		{
			$this->load->model("InfoCO_model");
			$this->load->library('pagination');
			$this->load->library('table');
			$config['base_url']=base_url('infocompany');	
			
			$data['query']=$this->InfoCO_model->get_info();
			$this->load->view('header');
			$this->load->view('infocompany_view',$data);
			$this->load->view('footer');
		}
		else {
			echo 'please login to continue!!!';
			echo '<meta http-equiv="refresh" content="1;'.base_url().'login" />';
		}	
	}
	function updateinfo()
	{
		if(isset($_POST['btnOK']))
		{
			
			$name=$this->input->post('name');
			$phone=$this->input->post('phone');
			$address=$this->input->post('address');
			$email=$this->input->post('email');
			$note=$this->input->post('note');
			$this->load->model('InfoCO_model');
			$time=$this->input->post('time');
			
			$result=$this->InfoCO_model->update($name,$phone,$address,$email,$note,$time);
			if($result==0)
			{
				$data['query']=$this->InfoCO_model->get_info();
				$this->load->view('header');
				$this->load->view('infocompany_view',$data);
				$this->load->view('footer');
			}
			else if($result==1) {
				echo '<script>alert("error")</script>';
			}
			 
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
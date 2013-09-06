<?php
class Driver_order extends CI_Controller {

	  function __construct()
    {
        parent::__construct();
		$this->load->helper("url");
		$this->load->library('javascript');
		$this->load->helper('form');
		$this->load->model("driver_model");
    }
	public function index()
	{
		if(isset($_GET['id']))
		{
			if($this->session->userdata('usertype')=='3'&&$this->session->userdata('driver_id')==$_GET['id'])
			{
				$id=$_GET['id'];
				$data['query']=$this->driver_model->get_detail_order($id);
				$this->load->view('header');
				$this->load->view('driver_order_detail_view',$data);
				$this->load->view('footer');
			}
			else {
				echo '<meta http-equiv="refresh" content="0;'.base_url('login').'" />';
			}
		}
		else 
			{
				echo '<meta http-equiv="refresh" content="0;'.base_url('login').'" />';
			}
	}
	public function update_status()
	{
		if(isset($_GET['id']))
		{
			if($this->session->userdata('usertype')=='3'&&$this->session->userdata('driver_id')==$_GET['id'])
			{
				$id=$_GET['id'];
				$this->driver_model->update_status($id);
				$data['query']=$this->driver_model->get_detail_order($id);
				$order_id=$this->driver_model->get_order_id($id);
				$this->driver_model->update_driver_of_order($order_id);				
				echo '<meta http-equiv="refresh" content="0;'.base_url('driver_order?id='.$id).'" />';
			}
			else 
			{
				echo '<meta http-equiv="refresh" content="0;'.base_url('login').'" />';
			}
		}
		else{
				echo '<meta http-equiv="refresh" content="0;'.base_url('login').'" />';
		}
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
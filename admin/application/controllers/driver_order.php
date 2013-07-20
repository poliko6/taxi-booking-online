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
				echo 'please login to continue';
				echo '<meta http-equiv="refresh" content="1;http://localhost:8888/bookingtaxi/login" />';
			}
		}
		else 
			{
				echo 'please login to continue';
				echo '<meta http-equiv="refresh" content="1;http://localhost:8888/bookingtaxi/login" />';
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
				echo '<script type="text/javascript">
				window.onload = function(){
				alert("update success!!!");}</script>';
				$this->load->view('header');
				$this->load->view('driver_order_detail_view',$data);
				$this->load->view('footer');
			}
			else 
			{
				echo 'please login before';
				echo '<meta http-equiv="refresh" content="1;http://localhost:8888/bookingtaxi/login" />';
			}
		}
		else{
			echo 'please login before';
				echo '<meta http-equiv="refresh" content="1;http://localhost:8888/bookingtaxi/login" />';
		}
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
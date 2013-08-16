<?php

class Update extends CI_Controller {

	  function __construct()
    {
        parent::__construct();
		$this->load->model('update_model');
		$this->load->helper('form');
    }
	public function index()
	{
		$customer_id=$this->session->userdata('customer_id');	
		$data['query']=$this->update_model->customer_info($customer_id);
		$this->load->view('header');
		$this->load->view('update_view',$data);
		$this->load->view('footer');	
	}	
	public function update_customer()
	{
		if(isset($_POST['btnUPDATE']))
		{
			$customer_id=$this->session->userdata('customer_id');
			$fullname=$this->input->post("txt_Fname").' '.$this->input->post("txt_Lname");
			$inform=array(
				"title"=>$this->input->post("ddl_Title"),
				"fullname"=>$fullname,
				"email"=>$this->input->post("txt_Email"),
				"unit_or_flat"=>$this->input->post("txt_Unit"),
				"address"=>$this->input->post("txt_Address"),
				"phone"=>$this->input->post("txt_Pnumber"),
				"mobile"=>$this->input->post("txt_Mnumber"),
			);
			$this->update_model->update_customer($customer_id,$inform);
			echo 'update success';
			echo '<meta http-equiv="refresh" content="1;'.base_url().'" />';	
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
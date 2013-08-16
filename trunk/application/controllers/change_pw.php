<?php

class Change_pw extends CI_Controller {

	  function __construct()
    {
        parent::__construct();
		$this->load->model('update_model');
		$this->load->helper('form');
    }
	public function index()
	{		
		$this->load->view('header');
		$this->load->view('change_pw_view');
		$this->load->view('footer');		
	}	
	public function change_password()
	{
		if(isset($_POST['btnUPDATE']))
		{
			$c_id=$this->session->userdata('customer_id');
			$pw=md5($this->input->post('txt_PW'));
			$this->update_model->change_pw($c_id,$pw);
			echo 'change password success';
			echo '<meta http-equiv="refresh" content="1;'.base_url().'" />';
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
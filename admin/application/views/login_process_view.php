<?php
foreach($query as $key  => $value)
{	
	if($value['usertype']=='1'||$value['usertype']=='2')
	{
		$data=array(
		'user_id'=>$value['user_id'],
		'username'=>$value['username'],
		'usertype'=>$value['usertype'],
		'fullname'=>$value['fullname'],
		);
	}
	elseif($value['usertype']=='3')
	{
		$data=array(
		'driver_id'=>$value['driver_id'],
		'username'=>$value['username'],
		'usertype'=>$value['usertype'],
		'fullname'=>$value['fullname'],
		);
	}
}
$this->session->set_userdata($data);
if($this->session->userdata('usertype')=='1'||$this->session->userdata('usertype')=='2'||$this->session->userdata('usertype')=='3')
	echo '<meta http-equiv="refresh" content="0; '.base_url().'" />';
else {
	echo '<meta http-equiv="refresh" content="0; '.base_url('login').'" />';	
}
?>
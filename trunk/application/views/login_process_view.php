<?php

foreach($query as $key  => $value)
$data=array(
'user_id'=>$value['user_id'],
'username'=>$value['username'],
'usertype'=>$value['usertype'],
'fullname'=>$value['fullname'],
);
$this->session->set_userdata($data);
echo 'login success';
if($this->session->userdata('usertype')=='1'||$this->session->userdata('usertype')=='2')
echo '<meta http-equiv="refresh" content="1; http://localhost:8888/bookingtaxi/admin/listbooking" />';	
?>
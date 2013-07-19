<?php
session_start();
?>
<?php
foreach ($query as $value) {
	if($value['usertype']=='1')
	{
		$_SESSION['id']=$value['user_id'];
		$_SESSION['user']=$value['username'];
		$_SESSION['uname']=$value['fullname'];
		$_SESSION['permission']=$value['usertype'];
		header("Location:http://localhost:8888/bookingtaxi/admin/listbooking");
	}
}
?>
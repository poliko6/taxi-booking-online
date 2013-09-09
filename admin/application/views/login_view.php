<?php
$this->session->sess_destroy(); 
?>
<style type="text/css">
	span{
		color:red;
	}
	#admin_login{
		width:500px;
		margin:0 auto;	
		padding: 10px 0 0 100px;
		background: url('images/BOOKING_TAXI_1024/bg_formDangKi.png') no-repeat top center;
	}
	#admin_login input[type="text"],input[type="password"]
	{
		width: 200px;
	}
	#admin_login input[type="submit"]
	{
		background-image: url('images/BOOKING_TAXI_1024/bg3.png');
		font-weight: bold;
	}

</style>
<script type="text/javascript">
	function checkform()
	{		
		var username=document.frm_login.txt_UN.value;
		var password=document.frm_login.txt_PW.value;		
		if(username=="" ||username==null)
		{
			 document.getElementById('err_username').innerHTML='Username not empty!!!';
			 return false;
		}
		else  document.getElementById('err_username').innerHTML='';
		if(password=="" ||password==null)
		{
			 document.getElementById('err_password').innerHTML='password not empty!!!';
			 return false;
		}
		 document.getElementById('err_password').innerHTML='';
	}
		</script> 
<div id="content">
        
            <!-- ============================================
                Page Title
            ============================================= -->
            <div id="page-title">
            
            
                <div class="container clearfix">
                
                    <h1><span>LOGIN</span></h1>
                    
                </div>
            
            
            </div>
        
            
            <div class="content-wrap">
            
            
                <div class="container clearfix">
                
                <!-- ============================================
                    Page Content Start
                ============================================= -->
<div id="admin_login">
	<?php		
		$form=array(
		'name'=>'frm_login',
		);		
		$submit='onclick="return checkform()"';
		$username=array(
		"name"=>"txt_UN",
		"id"=>"txt_UN"
		);
		$password=array(
		"name"=>"txt_PW",
		"id"=>"txt_PW"
		);
		echo form_open('login/check_user',$form);
		echo '<div id="username">'.form_label('Username','txt_UN').'</td><td>'.form_input($username).'<span id="err_username"></span>'.'</div>';
		echo '<div id="password">'.form_label('Password','txt_UN').'</td><td>'.form_password($password).'<span id="err_password"></span>'.'</div>';
		echo '<div id="remember">Remember  '.form_checkbox('chk_Remember','1',FALSE).'</td></tr>';
		echo '<div id="btn_login">'.form_submit('btnLogin','Login',$submit).'</td></tr>';
		echo form_close('');
		/* echo '<table width="800px">';
		echo form_open('login/check_user',$form).'<br>';
		echo '<tr><td width="70px">'.form_label('Username').'</td><td>'.form_input('').'<span id="err_username"></span></td></tr>';
		echo '<tr><td width="70px">'.form_label('Password').'</td><td>'.form_password('txt_PW').'<span id="err_password"></span></td></tr>';
		echo '<tr><td colspan="2">Remember  '.form_checkbox('chk_Remember','1',FALSE).'</td></tr>';
		echo '<tr><td colspan="2">'.form_submit('btnLogin','Login',$submit).'</td></tr>';
		echo form_close('');
		echo '</table>';
		 */
	?>                   	 
</div>
                <!-- ============================================
                    Page Content End
                ============================================= -->
                </div>
            
            
            </div>
        
        
        </div>
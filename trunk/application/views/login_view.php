<?php
$this->session->sess_destroy(); 
?>
<script type="text/javascript">
	function checkform()
	{		
		var username=document.frm_login.txt_UN.value;
		var password=document.frm_login.txt_PW.value;		
		if(username=="" ||username==null)
		{
			 alert('Username not empty!!!');
			 return false;
		}
		if(password=="" ||password==null)
		{
			 alert('password not empty!!!');
			 return false;
		}
	}
		</script> 
<div id="content">
        
            <!-- ============================================
                Page Title
            ============================================= -->
            <div id="page-title">
            
            
                <div class="container clearfix">
                
                    <h1>Login<span>|</span></h1>
                    
                </div>
            
            
            </div>
        
         
                
                <!-- ============================================
                    Page Content Start
                ============================================= -->
<div id="login" >
<h2 style="font:bold">Login</h2>
	<?php		
		$submitid=array(
					  'id'=>'submitlogin',
					  'name'=>'btnLogin',
					  );
		$form=array(
		'name'=>'frm_login',
		);		
		$submit='onclick="return checkform()"';
		if(isset($_SESSION['user'])) echo $_SESSION['user'];
		echo '<table>';
		echo form_open('login/check_user',$form).'<br>';
		echo '<tr><td>'.form_label('Username').'</td><td>'.form_input('txt_UN').'</td></tr>';
		echo '<tr><td>'.form_label('Password').'</td><td>'.form_password('txt_PW').'</td></tr>';
		echo '<tr><td colspan="2">Remember  '.form_checkbox('chk_Remember','1',FALSE).'</td></tr>';
		echo '<tr><center><td colspan="2" align="center">'.form_submit($submitid,'Login',$submit).'</td></center></tr>';
		echo form_close('');
		echo '</table>';
	?>                   	 
</div>
                <!-- ============================================
                    Page Content End
                ============================================= -->
            
        
        
        </div>
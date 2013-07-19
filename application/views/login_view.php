<?php
$this->session->sess_destroy(); 
?>
<script>
	$(document).ready(function(){
		$('#getstreet').change(function(){
			$('#street').load('register/getstreet',{suburb_id:$(this).val()});
		});
});
</script>
<script type="text/javascript">
	function checkform()
	{		
		
		var dangmail= /^[\w.-]+@[\w.-]+\.[A-Za-z]{2,4}$/;
		var username=document.frm_register.txt_UN.value;
		var password=document.frm_register.txt_PW.value;		
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
        
            
            <div class="content-wrap">
            
            
                <div class="container clearfix">
                
                <!-- ============================================
                    Page Content Start
                ============================================= -->
<div id="register">
	<?php		
		$form=array(
		'name'=>'frm_register',
		);		
		$submit='onclick="return checkform()"';
		if(isset($_SESSION['user'])) echo $_SESSION['user'];
		echo '<table>';
		echo form_open('login/check_user',$form).'<br>';
		echo '<tr><td>'.form_label('Username').'</td><td>'.form_input('txt_UN').'</td></tr>';
		echo '<tr><td>'.form_label('Password').'</td><td>'.form_password('txt_PW').'</td></tr>';
		echo '<tr><td colspan="2">Remember  '.form_checkbox('chk_Remember','1',FALSE).'</td></tr>';
		echo '<tr><td colspan="2">'.form_submit('btnLogin','Login',$submit).'</td></tr>';
		echo form_close('');
		echo '</table>';
	?>                   	 
</div>
                <!-- ============================================
                    Page Content End
                ============================================= -->
                </div>
            
            
            </div>
        
        
        </div>
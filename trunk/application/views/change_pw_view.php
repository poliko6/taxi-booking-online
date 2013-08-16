<script>
	$(document).ready(function(){
		$("span[id]").css("color","red");
});
</script>
<script type="text/javascript">
	function checkform()
	{		
		var password=document.frm_update.txt_PW.value;
		var c_password=document.frm_update.txt_CPW.value;			
		if(password=="" ||password==null)
		{
			 document.getElementById('error_PW').innerHTML=' Password not empty!!!';
			 document.frm_update.txt_PW.focus();
			 return false;
		}
		else  document.getElementById('error_PW').innerHTML='';
		if(c_password=="" ||c_password==null)
		{
			 document.getElementById('error_CPW').innerHTML=' Confirm password not empty!!!';
			 document.frm_update.txt_CPW.focus();
			 return false;
		}
		else if(c_password != password )
		{
			 document.getElementById('error_CPW').innerHTML=' 2 password do not match !!!';
			 document.frm_update.txt_CPW.focus();
			 return false;
		}
		else  document.getElementById('error_CPW').innerHTML='';
	}
</script> 

<div id="content">
        
            <!-- ============================================
                Page Title
            ============================================= -->
            <div id="page-title">
            
            
                <div class="container clearfix">
                
                    <h1>Change password</h1>
                    
                </div>
            
            
            </div>
        
            
            <div class="content-wrap">
            
            
                <div class="container clearfix">
                
                <!-- ============================================
                    Page Content Start
                ============================================= -->
<div id="register">
	<?php
		$title=array(
		'Mr'=>"Mr",
		'Ms'=>"Ms",
		'Mrs'=>"Mrs",
		'Dr'=>"Dr",
		);		
		$form='name="frm_update"';
		$submit='onclick="return checkform()"';
		echo form_open('change_pw/change_password',$form).'<br>';
		echo form_fieldset('');
		echo form_label('Password').form_password("txt_PW").'<span id="error_PW"></span>'.'<br>';
		echo form_label('Confirm password').form_password("txt_CPW").'<span id="error_CPW"></span>'.'<br>';
		echo form_fieldset_close(); 
		echo form_submit('btnUPDATE','Update',$submit);
		echo form_close('');
	?>                   	 
</div>
                <!-- ============================================
                    Page Content End
                ============================================= -->
                </div>
            
            
            </div>
        
        
        </div>
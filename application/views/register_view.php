<script>
	$(document).ready(function(){
		$("span[id]").css("color","red");
});
</script>
<script type="text/javascript">
	function checkform()
	{		
		var dangmail= /^[\w.-]+@[\w.-]+\.[A-Za-z]{2,4}$/;
		var username=document.frm_register.txt_Username.value;
		var fname=document.frm_register.txt_Fname.value;
		var lname=document.frm_register.txt_Lname.value;
		var email=document.frm_register.txt_Email.value;
		var password=document.frm_register.txt_PW.value;
		var c_password=document.frm_register.txt_CPW.value;
		var pnumber=document.frm_register.txt_Pnumber.value;
		var mnumber=document.frm_register.txt_Mnumber.value;
		var unit=document.frm_register.txt_Unit.value;
		var address=document.frm_register.txt_Address.value;		
		if(username=="" ||username==null)
		{
			 document.getElementById('error_Username').innerHTML=' Username not empty!!!';
			 document.frm_register.txt_Username.focus();
			 return false;
		}
		else  document.getElementById('error_Username').innerHTML='';
		if(fname=="" ||fname==null)
		{
		     document.getElementById('error_Fname').innerHTML=' First name not empty!!!';
		     document.frm_register.txt_Fname.focus();
			 return false;
		}
		else  document.getElementById('error_Fname').innerHTML='';
		if(lname=="" ||lname==null)
		{
			 document.getElementById('error_Lname').innerHTML=' Last name not empty!!!';
			 document.frm_register.txt_Lname.focus();
			 return false;
		}		
		else  document.getElementById('error_Lname').innerHTML='';
		if(email=="" ||email==null)
		{
			 document.getElementById('error_Email').innerHTML=' Email not empty!!!';
			 document.frm_register.txt_Email.focus();
			 return false;	
		}
		else if(dangmail.test(email)==false)
		{
			document.getElementById('error_Email').innerHTML=' Wrong mail format!!!!!!';
			document.frm_register.txt_Email.focus();
			return false;
		}
		else  document.getElementById('error_Email').innerHTML='';
		if(password=="" ||password==null)
		{
			 document.getElementById('error_PW').innerHTML=' Password not empty!!!';
			 return false;
		}
		else  document.getElementById('error_PW').innerHTML='';
		if(c_password=="" ||c_password==null)
		{
			 document.getElementById('error_CPW').innerHTML=' Confirm password not empty!!!';
			 return false;
		}
		else if(c_password != password )
		{
			 document.getElementById('error_CPW').innerHTML=' 2 password do not match !!!';
			 return false;
		}
		else  document.getElementById('error_CPW').innerHTML='';
		if(pnumber=="" ||pnumber==null)
		{
			 document.getElementById('error_Pnumber').innerHTML=' Phone number not empty!!!';
			 return false;
			 
		}
		else  document.getElementById('error_Pnumber').innerHTML='';
		if(mnumber=="" ||mnumber==null)
		{
			 document.getElementById('error_Mnumber').innerHTML=' Mobile number not empty!!!';
			 return false; 			 
		}
		else  document.getElementById('error_Mnumber').innerHTML='';
		if(unit=="" ||unit==null)
		{
			 document.getElementById('error_Unit').innerHTML=' Unit not empty!!!';
			 return false;
		}
		else  document.getElementById('error_Unit').innerHTML='';
		if(address=="" ||address==null)
		{
			 document.getElementById('error_Address').innerHTML=' Address not empty!!!';
			 return false;	
		}
		else  document.getElementById('error_Address').innerHTML='';
	}
</script> 

<div id="content">
        
            <!-- ============================================
                Page Title
            ============================================= -->
            <div id="page-title">
            
            
                <div class="container clearfix">
                
                    <h1>Register<span>|</span></h1>
                    
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
		$form='name="frm_register"';
		$submit='onclick="return checkform()"';
		echo form_open('register/signup',$form).'<br>';
		echo form_fieldset('');
		echo form_label('Personal Details').'<br>';
		echo form_label('Title').form_dropdown('ddl_Title',$title).'<br>'; 
		echo form_label('Username').form_input("txt_Username").'<span id="error_Username"></span>'.'<br>';
		echo form_label('First Name').form_input("txt_Fname").'<span id="error_Fname"></span>'.'<br>';
		echo form_label('Last Name').form_input("txt_Lname").'<span id="error_Lname"></span>'.'<br>';
		echo form_label('Email Address').form_input("txt_Email").'<span id="error_Email"></span>'.'<br>';
		echo form_label('Password').form_password("txt_PW").'<span id="error_PW"></span>'.'<br>';
		echo form_label('Confirm password').form_password("txt_CPW").'<span id="error_CPW"></span>'.'<br>';
		echo form_label('Phone Number').form_input("txt_Pnumber").'<span id="error_Pnumber"></span>'.'<br>';
		echo form_label('Mobile Number').form_input("txt_Mnumber").'<span id="error_Mnumber"></span>'.'<br>';
		echo form_label('Your Address Details').'<br>';
		echo form_label('Address').form_input("txt_Address").'<span id="error_Address"></span>'.'<br>';
		echo form_label('Unit or Flat').form_input("txt_Unit").'<span id="error_Unit"></span>'.'<br>';
		echo form_fieldset_close(); 
		echo form_submit('btnOK','Register',$submit);
		echo form_close('');
	?>                   	 
</div>
                <!-- ============================================
                    Page Content End
                ============================================= -->
                </div>
            
            
            </div>
        
        
        </div>
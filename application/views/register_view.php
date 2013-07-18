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
		var username=document.frm_register.txt_Username.value;
		var fname=document.frm_register.txt_Fname.value;
		var lname=document.frm_register.txt_Lname.value;
		var email=document.frm_register.txt_Email.value;
		var password=document.frm_register.txt_PW.value;
		var pnumber=document.frm_register.txt_Pnumber.value;
		var mnumber=document.frm_register.txt_Mnumber.value;
		var unit=document.frm_register.txt_Unit.value;
		var snumber=document.frm_register.txt_Snumber.value;		
		if(username=="" ||username==null)
		{
			 alert('Username not empty!!!');
			 return false;
		}
		if(fname=="" ||fname==null)
		{
		     alert('First name not empty!!!');
			 return false;
		}
		if(lname=="" ||lname==null)
		{
			 alert('Last name not empty!!!');
			 return false;
		}		
		if(email=="" ||email==null)
		{
			 alert('Last name not empty!!!');
			 return false;	
		}
		else if(dangmail.test(email)==false)
		{
			alert('mail format invalid!!!');
			return false;
		}
		if(password=="" ||password==null)
		{
			 alert('password not empty!!!');
			 return false;
		}
		if(pnumber=="" ||pnumber==null)
		{
			 alert('phone number not empty!!!');
			 return false;
			 
		}
		if(mnumber=="" ||mnumber==null)
		{
			 alert('mobile number not empty!!!');
			 return false; 			 
		}
		if(unit=="" ||unit==null)
		{
			 alert('unit or flat not empty!!!');
			 return false;
		}
		if(snumber=="" ||snumber==null)
		{
			 alert('stress number not empty!!!');
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
		'null'=>"No Title",
		'Mr'=>"Mr",
		'Ms'=>"Ms",
		'Mrs'=>"Mrs",
		'Dr'=>"Dr",
		);
		$getstreet="id='getstreet'";
		$listsuburb=array();
		foreach ($suburb as $row) {
			$listsuburb[$row->id]=$row->name;
		}
		$form=array(
		'name'=>'frm_register',
	
		);		
		$submit='onclick="return checkform()"';
		echo form_open('register/signup',$form).'<br>';
		echo form_fieldset('');
		echo form_label('Personal Details').'<br>';
		echo form_label('Title').form_dropdown('ddl_Title',$title).'<br>'; 
		echo form_label('Username').form_input("txt_Username").'<br>';
		echo '<span id="err_Username"></span><br>';
		echo form_label('First Name').form_input("txt_Fname").'<br>';
		echo '<span id="err_Fname"></span><br>';
		echo form_label('Last Name').form_input("txt_Lname").'<br>';
		echo '<span id="err_Lname"></span><br>';
		echo form_label('Email Address').form_input("txt_Email").'<br>';
		echo '<span id="err_Email"></span><br>';
		echo form_label('Password').form_password("txt_PW").'<br>';
		echo '<span id="err_PW"></span><br>';
		echo form_label('Phone Number').form_input("txt_Pnumber").'<br>';
		echo '<span id="err_Pnumber"></span><br>';
		echo form_label('Mobile Number').form_input("txt_Mnumber").'<br>';
		echo '<span id="err_Mnumber"></span><br>';
		echo form_label('Your Address Details').'<br>';
		echo form_label('Suburb').form_dropdown('ddl_Suburb',$listsuburb,FALSE,$getstreet).'<br>';
		echo form_label('Unit or Flat').form_input("txt_Unit").'<br>';
		echo '<span id="err_Unit"></span><br>';
		echo form_label('Street Number').form_input("txt_Snumber").'<br>';
		echo '<span id="err_Snumber"></span><br>';
		echo '<div id="street"><select name="ddl_Street"><option>Select Suburb First</option></select></div>';
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
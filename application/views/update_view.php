<script>
	$(document).ready(function(){
		$("span[id]").css("color","red");
});
</script>
<script type="text/javascript">
	function checkform()
	{		
		var dangmail= /^[\w.-]+@[\w.-]+\.[A-Za-z]{2,4}$/;
		var fname=document.frm_update.txt_Fname.value;
		var lname=document.frm_update.txt_Lname.value;
		var email=document.frm_update.txt_Email.value;		
		var pnumber=document.frm_update.txt_Pnumber.value;
		var mnumber=document.frm_update.txt_Mnumber.value;
		var unit=document.frm_update.txt_Unit.value;
		var address=document.frm_update.txt_Address.value;				
		if(fname=="" ||fname==null)
		{
		     document.getElementById('error_Fname').innerHTML=' First name not empty!!!';
		     document.frm_update.txt_Fname.focus();
			 return false;
		}
		else  document.getElementById('error_Fname').innerHTML='';
		if(lname=="" ||lname==null)
		{
			 document.getElementById('error_Lname').innerHTML=' Last name not empty!!!';
			 document.frm_update.txt_Lname.focus();
			 return false;
		}		
		else  document.getElementById('error_Lname').innerHTML='';
		if(email=="" ||email==null)
		{
			 document.getElementById('error_Email').innerHTML=' Email not empty!!!';
			 document.frm_update.txt_Email.focus();
			 return false;	
		}
		else if(dangmail.test(email)==false)
		{
			document.getElementById('error_Email').innerHTML=' Wrong mail format!!!!!!';
			document.frm_update.txt_Email.focus();
			return false;
		}
		else  document.getElementById('error_Email').innerHTML='';		
		if(pnumber=="" ||pnumber==null)
		{
			 document.getElementById('error_Pnumber').innerHTML=' Phone number not empty!!!';
			 document.frm_update.txt_Email.focus();
			 return false;
		}
		else  document.getElementById('error_Pnumber').innerHTML='';
		if(mnumber=="" ||mnumber==null)
		{
			 document.getElementById('error_Mnumber').innerHTML=' Mobile number not empty!!!';
			 document.frm_update.txt_Mnumber.focus();
			 return false; 			 
		}
		else  document.getElementById('error_Mnumber').innerHTML='';
		if(unit=="" ||unit==null)
		{
			 document.getElementById('error_Unit').innerHTML=' Unit not empty!!!';
			 document.frm_update.txt_Unit.focus();
			 return false;
		}
		else  document.getElementById('error_Unit').innerHTML='';
		if(address=="" ||address==null)
		{
			 document.getElementById('error_Address').innerHTML=' Address not empty!!!';
			 document.frm_update.txt_Address.focus();
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
                
                    <h1>Update<span>
                    <?php 
                    	foreach($query as $row) 
						{
							$fullname=$row['fullname'];
							$name=explode(" ", $fullname);
							$fname=$name[0];
							$lname=$name[1];
							$email=$row['email'];
							$phone=$row['phone'];
							$mobile=$row['mobile'];
							$address=$row['address'];
							$unit_or_flat=$row['unit_or_flat'];
						}
                    ?></span></h1>
                    
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
		echo form_open('update/update_customer',$form).'<br>';
		echo form_fieldset('');
		echo form_label('Personal Details').'<br>';
		echo form_label('Title').form_dropdown('ddl_Title',$title).'<br>'; 
		echo form_label('First Name').form_input("txt_Fname",$fname).'<span id="error_Fname"></span>'.'<br>';
		echo form_label('Last Name').form_input("txt_Lname",$lname).'<span id="error_Lname"></span>'.'<br>';
		echo form_label('Email Address').form_input("txt_Email",$email).'<span id="error_Email"></span>'.'<br>';
		echo form_label('Phone Number').form_input("txt_Pnumber",$phone).'<span id="error_Pnumber"></span>'.'<br>';
		echo form_label('Mobile Number').form_input("txt_Mnumber",$mobile).'<span id="error_Mnumber"></span>'.'<br>';
		echo form_label('Your Address Details').'<br>';
		echo form_label('Address').form_input("txt_Address",$address).'<span id="error_Address"></span>'.'<br>';
		echo form_label('Unit or Flat').form_input("txt_Unit",$unit_or_flat).'<span id="error_Unit"></span>'.'<br>';
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
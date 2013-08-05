<script type="text/javascript">
	function checkform()
	{		
		var dangmail= /^[\w.-]+@[\w.-]+\.[A-Za-z]{2,4}$/;
		var name=document.frm_feedback.txt_Name.value;
		var email=document.frm_feedback.txt_Email.value;
		var subject=document.frm_feedback.txt_Subject.value;
		var message=document.frm_feedback.txt_Message.value;
		if(name=="" ||name==null)
		{
			 document.getElementById('error_Name').innerHTML=' Name not empty!!!';
			 document.frm_feedback.txt_Name.focus();
			 return false;
		}
		else  document.getElementById('error_Name').innerHTML='';
		
		if(email=="" ||email==null)
		{
			 document.getElementById('error_Email').innerHTML=' Email not empty!!!';
			 document.frm_feedback.txt_Email.focus();
			 return false;	
		}
		else if(dangmail.test(email)==false)
		{
			document.getElementById('error_Email').innerHTML=' Wrong mail format!!!!!!';
			document.frm_feedback.txt_Email.focus();
			return false;
		}
		else  document.getElementById('error_Email').innerHTML='';
		
		if(subject=="" ||subject==null)
		{
			 document.getElementById('error_Subject').innerHTML=' Subject not empty!!!';
			 document.frm_feedback.txt_Subject.focus();
			 return false;
		}
		else  document.getElementById('error_Subject').innerHTML='';
		
		if(message=="" ||message==null)
		{
			 document.getElementById('error_Message').innerHTML=' Message not empty!!!';
			 document.frm_feedback.txt_Message.focus();
			 return false;
		}
		else  document.getElementById('error_Message').innerHTML='';
	}
</script> 
<script type="text/javascript">
	$(document).ready(function(){
		$('span[id]').css('color','red');
	});
</script>
<div id="content">
        
            <!-- ============================================
                Page Title
            ============================================= -->
            <div id="page-title">
            
            
                <div class="container clearfix">
                
                    <h1>Feedback<span>|</span></h1>
                    
                </div>
            
            
            </div>
        
            
            <div class="content-wrap">
            
            
                <div class="container clearfix">
                
                <!-- ============================================
                    Page Content Start
                ============================================= -->
<div id="feedback">
	<?php		
		$form='name="frm_feedback"';
		$message=array(
		'name'=>'txt_Message',
		'cols'=>'2',
		'rows'=>'1',
		);
		$submit='onclick="return checkform()"';
		echo form_open('feedback/add_feedback',$form).'<br>';
		echo form_fieldset('');
		echo form_label('Feedback ').'<br>';
		echo form_label('Name ').form_input("txt_Name").'<span id="error_Name"></span>'.'<br>';
		echo form_label('Email Address ').form_input("txt_Email").'<span id="error_Email"></span>'.'<br>';
		echo form_label('Subject ').form_input("txt_Subject").'<span id="error_Subject"></span>'.'<br>';
		echo form_label('Message ').form_textarea($message).'<span id="error_Message"></span>'.'<br>';
		echo form_fieldset_close(); 
		echo form_submit('btnOK','Feedback',$submit);
		echo form_close('');
	?>                   	 
</div>
                <!-- ============================================
                    Page Content End
                ============================================= -->
                </div>
            
            
            </div>
        
        
        </div>
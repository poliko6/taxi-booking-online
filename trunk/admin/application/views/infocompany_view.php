<script type="text/javascript">
	function checkform()
	{		
		
		var dangmail= /^[\w.-]+@[\w.-]+\.[A-Za-z]{2,4}$/;
		var name=document.frm_info.name.value;
		var note=document.frm_info.note.value;
		var address=document.frm_info.address.value;
		var email=document.frm_info.email.value;
		var time=document.frm_info.time.value;
		var phone=document.frm_info.phone.value;
				
		if(name=="" ||name==null)
		{
			 alert('Username not empty!!!');
			 return false;
		}
		if(note=="" ||note==null)
		{
		     alert('First name not empty!!!');
			 return false;
		}
		if(address=="" ||address==null)
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
		if(time=="" ||time==null)
		{
			 alert('password not empty!!!');
			 return false;
		}
		if(phone=="" ||phone==null)
		{
			 alert('confirm password not empty!!!');
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
                
                    <h1>Manage booking</span></h1>
                    
                </div>
            
            
            </div>
        
            
            <div class="content-wrap">
            
             
                <div class="container clearfix">
                
                <!-- ============================================
                    Page Content Start
                ============================================= -->
               
  <table border="1" width="1200px" >
	
<?php
foreach($query as $row){

	$name=array(
	'name'=>'name',	
	'id'=>'name',
	'value'=>$row['Company_Name'],
	);
	$address=array(
	'id'=>'address',
	'name'=>'address',
	'value'=>$row['Address'],
	);
	$note=array(
	'name'=>'note',
	'id'=>'note',
	'value'=>$row['Note']
	);
	$phone=array(
	'name'=>'phone',
	'id'=>'phone',
	'value'=>$row['Phone'],
	);
	$email=array(
	'name'=>'email',
	'id'=>'email',
	'value'=>$row['Email'],
	);
	$timework=array(
	'name'=>'time',
	'id'=>'time',
	'value'=>$row['Time_Work'],
	);
}
echo "Xin chào ".$this->session->userdata('fullname');
$frm='name="frm_info"';
$submit='onclick="return checkform()"';
echo form_open('Infocompany/updateinfo',$frm);
echo '<table border="1" width="1200px" >';
foreach($query as $row)
{	
	
	
	echo '<tr><td>Company Name</td><td>'.form_input($name).'</td></tr>';
	echo '<tr><td>Address</td><td>'.form_input($address).'</td></tr>';
	echo '<tr><td>Infomation</td><td>'.form_input($note).'</td></tr>';
	echo '<tr><td>Phone</td><td>'.form_input($phone).'</td></tr>';
	echo '<tr><td>Email</td><td>'.form_input($email).'</td></tr>';
	echo '<tr><td>Time_Work</td><td>'.form_input($timework).'</tr>	';	
	echo '<tr><td colspan=2>'.form_submit('btnOK','Update',$submit).'</td></tr>	';	
	echo '';
}

echo '</table>';
echo form_close();
?>	
</table>
 
                <!-- ============================================
                    Page Content End
                ============================================= -->
                </div>
            
            
            </div>
        
        
        </div>


<script>
$(document).ready(function(){
	$('.business_name').hide();
	$('.now').show();
	$('.later').hide();
$('.rad_now').click(function(){
		$('.now').show();
		$('.later').hide();
});
$('.rad_later').click(function(){
		$('.now').hide();
		$('.later').show();
});	
$('.rad_unit').click(function(){
		$('.business_name').hide();
});
$('.rad_business').click(function(){
		$('.business_name').show();
});
$('.anytype').click(function(){
		$('.vans').fadeTo('fast','9999');
});
$('.wagon').click(function(){
		$('.vans').fadeTo('fast','0.001');
});
});
</script>

<div id="content">
        
            <!-- ============================================
                Page Title
            ============================================= -->
            <div id="page-title">
            
            
                <div class="container clearfix">
                
                    <h1>Booking <span> taxi</span></h1>
                    
                </div>
            
            
            </div>
        
            
            <div class="content-wrap">
            
            
                <div class="container clearfix">
                
                <!-- ============================================
                    Page Content Start
                ============================================= -->
                
                
<?php
		
		$now=array(
		'name'=>'rad_Ready_to_go',
		'value'=>'Now',
		'class'=>'rad_now',
		'checked'=>'TRUE',
		);
		$later=array(
		'name'=>'rad_Ready_to_go',
		'value'=>'Later',
		'class'=>'rad_later',
		);
		$unit=array(
		'name'=>'rad_Building_Type',
		'value'=>'Unit',
		'class'=>'rad_unit',
		'checked'=>'TRUE',
		);
		$business=array(
		'name'=>'rad_Building_Type',
		'value'=>'Business',
		'class'=>'rad_business',
		);
		$anytype=array(
		'name'=>'rad_Car_Type',
		'value'=>'AnyType',
		'class'=>'anytype',
		'checked'=>'TRUE',
		);
		$wagon=array(
		'name'=>'rad_Car_Type',
		'value'=>'Wagon',
		'class'=>'wagon',
		);
		$start_address=array(
		'name'=>'txt_Start_Address',
		'id'=>'start',
		);
		$end_address=array(
		'name'=>'txt_End_Address',
		'id'=>'end',
		);
		
		$node=array(
		'No Notes'=>'No Notes',
		'Waiting Out Front'=>'Waiting Out Front',
					);
		$hours=array(
		'01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06',
		'07'=>'07','08'=>'08','09'=>'09','10'=>'10','11'=>'11','12'=>'12',
		);
		$minutes=array(
		'00'=>'00','05'=>'05','10'=>'10','15'=>'15','20'=>'20','25'=>'25',
		'30'=>'30','35'=>'35','40'=>'40','45'=>'45','50'=>'50','55'=>'55',
		);
		$am=array(
		'AM'=>'AM',
		'PM'=>'PM',
		);
		
		
		
		$str = date('Ymd');
		$tts = strtotime($str);
		$select_date=array(
			date("Y-m-d", $tts)=>date("D, d M Y", $tts),
			date("Y-m-d", $tts+'86400')=>date("D, d M Y", $tts+'86400'),
			date("Y-m-d", $tts+'172800')=>date("D, d M Y", $tts+'172800'),
			date("Y-m-d", $tts+'259200')=>date("D, d M Y", $tts+'259200'),
			date("Y-m-d", $tts+'345600')=>date("D, d M Y", $tts+'345600'),
			date("Y-m-d", $tts+'432000')=>date("D, d M Y", $tts+'432000'),
			date("Y-m-d", $tts+'518400')=>date("D, d M Y", $tts+'518400'),
		);
		
		
		echo form_open('bookingtaxi/book');
		echo '<table width="500" id="left_table">'; 
		echo '<tr><td colspan="2">'.form_label('How many passengers?').'</td></tr>';
		echo '<tr><td>Number of People'.'</td><td>'.form_radio('rad_passenger','4',TRUE).'1-4'.form_radio('rad_passenger','5',TRUE).'more'.'</td></tr>';
		echo '<tr><td colspan="2"><strong>'.form_label('Your Name & Contact Number').'</strong></td></tr> ';
		echo '<tr><td>Name</td><td>'.form_input("txt_Name").'</td></tr>';
		echo '<tr><td>Contact Number</td><td>'.form_input("txt_Contact_Number").'</td></tr>';
		echo '<tr><td colspan="2"><strong>'.form_label('Your Pickup Address').'</strong></td></tr>';
		echo '<tr><td>Your Address</td><td>'.form_input($start_address).'</td></tr>';	
		echo '<tr><td>Unit or Flat</td><td>'.form_input("txt_Unit_or_Flat").'</td></tr>';
		echo '<tr><td>Building Type</td><td>'.form_radio($unit).'Unit/House'.form_radio($business).'Business'.'</td></tr>';
		echo '<tr class="business_name"><td>Business Name</td><td>'.form_input("txt_Business_name").'</td></tr>';
		echo '<tr><td>Remember My Details</td><td>'.form_checkbox('chk_Remember_Details', '1', FALSE).'</td></tr>';
		echo '<tr><td colspan="2"><strong>Where Are You Going?</strong></td></tr>';
		echo '<tr><td>Address</td><td>'.form_input($end_address).'</td></tr>';
		echo '<tr><td colspan="2"><strong>Order Details</strong></td></tr>';
		echo '<tr><td>Car Type</td><td>'.form_radio($anytype).'AnyType'.form_radio($wagon).'Wagon'.'</td></tr>';
		echo '<tr><td><div class="vans">No Vans Please</div></td><td><div class="vans">'.form_checkbox('chk_No_Vans', '1', FALSE).'</div></td></tr>';
		echo '<tr><td>Notes For Driver </td><td>'.form_dropdown('ddl_Notes',$node,'No Notes').'</td></tr>';
		echo '<tr><td colspan="2"><strong>Ready To Go?</strong></td></tr>';
		echo '<tr><td>When</td><td>'.form_radio($now).'Now'.form_radio($later).'Later'.'</td></tr>';
		echo '<tr class="later"><td>Select Date</td><td>'.form_dropdown('ddl_Select_Date',$select_date).'</td></tr>';
		echo '<tr class="later"><td>Time</td><td>'.form_dropdown('ddl_hours',$hours).':'.form_dropdown('ddl_minutes',$minutes).' '.form_dropdown('ddl_AM',$am).'</td></tr>';
		echo '<tr class="now"><td colspan="2">You request will be processed immediately. The first available taxi will be sent to your pickup address. </td></tr>';
		echo '<tr><td><strong>Security Code</strong></td><td>';
		require_once('recaptchalib.php');
  		$publickey = "6LdEweMSAAAAANK_k0Gl9-OkMnHobf3Ohhp42Xid"; // you got this from the signup page
  		echo recaptcha_get_html($publickey);
		echo '</td></tr>';
		echo '<tr><td colspan="2">'.form_submit('btnOK','Book Now').'</td></tr>';
		echo form_close('');
		echo '</table>';
		
		
?>							 
  
                <!-- =========a===================================
                    Page Content End
                ============================================= -->
                </div>
            
            
            </div>
        
        
        </div>
        
        
        
        


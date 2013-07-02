<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="/css/style.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	
<script>
$(document).ready(function(){
$('.anytype').click(function(){
		$('.vans').fadeTo('fast','9999');
});
$('.wagon').click(function(){
		$('.vans').fadeTo('fast','0.001');
});
$('.airport').click(function(){
	{
		//document.getElementById('get_address_from').text="Melbourne Airport";
		document.getElementById('get_address_from').value="3";
	}
});
$('.mcg').click(function(){
	{
		//document.getElementById('get_address_from').text="East Melbourne";
		document.getElementById('get_address_from').value="4";
	}
});
$('.city').click(function(){
	{
		//document.getElementById('get_address_from').text="Melbourne";
		document.getElementById('get_address_from').value="5";
	}
});
$('.docklands').click(function(){
	{
		//document.getElementById('get_address_from').text="Docklands";
		document.getElementById('get_address_from').value="6";
	}
});

$('#getstreet').bind("change",function(){
	 $("#ddl_street").load("bookingtaxi/getstreet", {suburb_id: $(this).val()} );
	/*var dataString="ddl_Address_from="+$(this).val();
	$.ajax(
    {
    url: "bookingtaxi/getstreet",
    type: "POST",//Mặc định là GET
    data:dataString,
    success:function(result){
    	var getData=$.parseJSON(result);   
    		
     	var id=getData.id;
     	var name=getData.name;
    	var data="<select name='ddl_Street'><option value="+id+">"+name+"</option></select>";
     $('#street').html(data);
    $('#test').html(result);
    }  
    });*/
});
});
</script>
</head>
<body>
<div id="wrapper">
<?php
		$get_address_from='id="get_address_from"';
		$getstreet='id="getstreet"';
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
		$airport=array(
		'name'=>'rad_Por_Places',
		'value'=>'airport',
		'class'=>'airport',
		);
		$mcg=array(
		'name'=>'rad_Por_Places',
		'value'=>'mcg',
		'class'=>'mcg',
		);
		$city=array(
		'name'=>'rad_Por_Places',
		'value'=>'city',
		'class'=>'city',
		);
		$docklands=array(
		'name'=>'rad_Por_Places',
		'value'=>'docklands',
		'class'=>'docklands',
		);
		
		$node=array(
		'1'=>'No Notes',
		'2'=>'Waiting Out Front',
					);
		$liststreet=array();
		if(isset($street)){
		foreach ($street as $row) 
			{				
				$liststreet[$row->id]=$row->name;
			}
		}
		$listsuburb=array();
		foreach ($suburb as $row) 
			{				
				$listsuburb[$row->id]=$row->name;
			}			
		
		echo '<div id="left">';
		echo form_open('bookingtaxi/book');
		echo '<table width="400">';
		echo '<tr><td colspan="2"><strong>'.form_label('How many passengers?').'</strong></td></tr>';
		echo '<tr><td>'.form_label('Number of People').'</td><td>'.form_radio('rad_passenger','4',TRUE).'1-4'.form_radio('rad_passenger','5',TRUE).'more'.'</td></tr>';
		echo '<tr><td colspan="2"><strong>'.form_label('Your Name & Contact Number').'</strong></td></tr> ';
		echo '<tr><td>Name</td><td>'.form_input("txt_Name").'</td></tr>';
		echo '<tr><td>Contact Number</td><td>'.form_input("txt_Contact_Number").'</td></tr>';
		echo '<tr><td colspan="2"><strong>'.form_label('Your Pickup Address').'</strong></td></tr>';
		echo '<tr><td>Suburb</td><td>';
		echo form_dropdown('ddl_Address_from',$listsuburb,FALSE,$getstreet);
		echo '</td></tr>';
		echo '<tr><td>Unit or Flat</td><td>'.form_input("txt_Unit_or_Flat").'</td></tr>';
		echo '<tr><td>Street Number</td><td>'.form_input("txt_Street").'</td></tr>';	
		echo '<tr><td>Street</td><td><div id="ddl_street"><select name="street"><option value="">Select state</option></select></div></td></tr>';
		echo '<tr><td>Building Type</td><td>'.form_radio('rad_Building_Type','Unit',TRUE).'Unit'.'1-4'.form_radio('rad_Building_Type','Business').'Unit'.'</td></tr>';
		echo '<tr><td>Remember My Details</td><td>'.form_checkbox('chk_Remember_Details', '1', FALSE).'</td></tr>';
		echo '</table></div>';
		echo '<div id="right">';
		echo '<table width="400">';
		echo '<tr><td colspan="2"><strong>Where Are You Going?</strong></td></tr>';
		echo '<tr><td>Suburb</td><td>'.form_dropdown('ddl_Address_to',$listsuburb,FALSE,$get_address_from).'</td></tr>';
		echo '<tr><td>OR</td><td>'.form_radio($airport).'AIRPORT'.form_radio($mcg).'MCG'.'</td></tr>';
		echo '<tr><td>Popular Places</td><td>'.form_radio($city).'CITY'.form_radio($docklands).'DOCKLANDS'.'</td></tr>';
		echo '<tr><td colspan="2"><strong>Order Details</strong></td></tr>';
		echo '<tr><td>Car Type</td><td>'.form_radio($anytype).'AnyType'.form_radio($wagon).'Wagon'.'</td></tr>';
		echo '<tr><td><div class="vans">No Vans Please</div></td><td><div class="vans">'.form_checkbox('chk_No_Vans', '1', FALSE).'</div></td></tr>';
		echo '<tr><td>Notes For Driver </td><td>'.form_dropdown('ddl_Notes',$node,'No Notes').'</td></tr>';
		echo '<tr><td colspan="2"><strong>Ready To Go?</strong></td></tr>';
		echo '<tr><td>When</td><td>'.form_radio('rad_Ready_to_go','Now',TRUE).'Now'.'1-4'.form_radio('rad_Ready_to_go','Later').'Later'.'</td></tr>';
		echo '<tr><td colspan="2">You request will be processed immediately. The first available taxi will be sent to your pickup address. </td></tr>';
		echo '<tr><td colspan="2"><strong>Security Cod</strong></td></tr>
		<tr><td>Please enter the 2 characters below(not case sensitive)</td><td><input type="text" name="txtCode" /></td></tr>
		<tr><td colspan="2">Reload Image <img src="images.jpg" width="50" height="50" ></td></tr>
		<tr><td colspan="2">Your IP Address will be stored for booking security 113.173.255.160</td></tr>';
		echo '</table>';
		echo form_submit('btnOK','Book Now');
		echo form_fieldset_close();
		echo form_close('bookingtaxi');
?>							 
	</div>
</div>
</body>
</html>
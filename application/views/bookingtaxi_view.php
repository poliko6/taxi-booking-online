	<!-- <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link href="http://code.google.com/apis/maps/documentation/javascript/examples/default.css" rel="stylesheet">-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <style>
 #directions-panel {
        height: 100%;
        float: right;
        width: 200px;
        overflow: auto;
      }
      #map-canvas {
      	
        margin-left: 10px;
        width: 600px;
        height:500px;
      }

     

      @media print {
        #map-canvas {
          height: 500px;
          width:600px;
          margin: 0;
        }

        
      
    </style>
    <script type="text/javascript">
    function checkform()
	{
		var a=document.frm_booking.recaptcha_challenge_field.value;
		var b=document.frm_booking.recaptcha_response_field.value;
		var name=document.frm_booking.txt_Name.value;
		var cnumber=document.frm_booking.txt_Contact_Number.value;
		var startaddress=document.frm_booking.txt_Start_Address.value;
		var unit=document.frm_booking.txt_Unit_or_Flat.value;
		var endaddress=document.frm_booking.txt_End_Address.value;
		var distance=document.frm_booking.txt_Distance.value;		
		if(name=="" ||name==null)
		{
			 document.getElementById('error_Name').innerHTML=' Name not empty!!!';
			 document.frm_booking.txt_Name.focus();
			 return false;
		}
		else  document.getElementById('error_Name').innerHTML='';
		if(cnumber=="" ||cnumber==null)
		{
		     document.getElementById('error_Contact_Number').innerHTML=' Contact number not empty!!!';
		     document.frm_booking.txt_Contact_Number.focus();
			 return false;
		}
		else  document.getElementById('error_Contact_Number').innerHTML='';
		if(startaddress=="" ||startaddress==null)
		{
			 document.getElementById('error_Start_Address').innerHTML=' Start Address not empty!!!';
			 document.frm_booking.txt_Start_Address.focus();
			 return false;
		}		
		else  document.getElementById('error_Start_Address').innerHTML='';
		if(unit=="" ||unit==null)
		{
			 document.getElementById('error_Unit').innerHTML=' Unit or Flat not empty!!!';
			 document.frm_booking.txt_Unit_or_Flat.focus();
			 return false;	
		}
		else  document.getElementById('error_Unit').innerHTML='';
		
		if(endaddress=="" ||endaddress==null)
		{
			 document.getElementById('error_End_Address').innerHTML=' End Address not empty!!!';
			 document.frm_booking.txt_End_Address.focus();
			 return false;
		}
		else  document.getElementById('error_End_Address').innerHTML='';
		if(distance=="" ||distance==null)
		{
			 document.getElementById('error_Distance').innerHTML=' Distance not empty!!!';
			 document.frm_booking.txt_Distance.focus();
			 return false;
		}
		else  document.getElementById('error_Distance').innerHTML='';
		if(b=="" ||b==null)
		{
			 document.getElementById('error_capcha').innerHTML=' please input capcha!!!';
			 document.frm_booking.recaptcha_response_field.focus();
			 return false;
		}
		else  document.getElementById('error_capcha').innerHTML='';
	}
    </script>
      <script>

var mysite='images/icons/mysite.png';
var flag='images/icons/flag.jpg';
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;
var markers = [];
var s=0;

var pos;
function initialize() {
	geocoder = new google.maps.Geocoder();
	var rendererOptions = {
  			map: map,
  			suppressMarkers : true
			}
	directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
	
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(-34.397, 150.644),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);


	directionsDisplay.setMap(map);
  
  
  
  	google.maps.event.addListener(map, 'click', function(event) {
    addMarker(event.latLng);
  	});
  // Try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
       pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);
  
      var infowindow = new google.maps.Marker({
        map: map,
        position: pos,       
        icon: mysite
      });
 

      map.setCenter(pos);
    if(geocoder){
	geocoder.geocode({'latLng': pos}, function(results, status) {
		
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[0]) {
       
         $("#start").val(results[0].formatted_address);
      
        
      } else {
        alert('No results found');
      }
    } else {
      alert('Geocoder failed due to: ' + status);
    }
  });
 
 
 }
   
  
    },
    
    
    
     function() {
      handleNoGeolocation(true);
    });
    
    
     
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
  
}
function setAllMap(map) { 
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
   
  }
  	directionsDisplay.setMap(map);
}

function clearOverlays() {
	
  setAllMap(null);
}
function deleteOverlays() {
	$("#end").val("");
	s=0;
	
  clearOverlays();
  markers = [];
  
}


function addMarker(location) {
	if(s<1)
  {

  		var marker = new google.maps.Marker({
    		position: location,
    		map: map,
    		draggable: false,
    		animation: google.maps.Animation.DROP
  		});
    	markers.push(marker);
    
    //lay address theo position
    		geocoder.geocode({'latLng': markers[0].position}, function(results, status) {
		
    			if (status == google.maps.GeocoderStatus.OK) {
      				if (results[0]) {
       
         				$("#end").val(results[0].formatted_address);
			      
			        	
  		
  						calcRoute();
      				} else {
        				alert('No results found');
      				}
   			 } else {
      				alert('Geocoder failed due to: ' + status);
    			}
 			 });
 			 
  			
  		}
  		s++;
  }
  function changend()
  {
  	s=0;
  	clearOverlays();
  	markers = [];
      	var address = document.getElementById("end").value;
      geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
          draggable: false,
    	animation: google.maps.Animation.DROP
      });
		markers.push(marker);
  		}
  		});
    	
    	
    	s=1;
    	
  		
    calcRoute();
  }
function calcRoute() {

	 var start = document.getElementById("start").value;
  	 var end = document.getElementById("end").value;

  var request = {
    origin: start,
    destination: end,
    travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    $("#distance").val(response.routes[0].legs[0].distance.text);
    directionsDisplay.setMap(map)
    }
    else{
    	alert("Error: address not be empty ");
    }
  });

}


function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);

}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
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
$('span[id]').css("color","red");
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
		$direct_payment=array(
		'name'=>'rad_Payment',
		'value'=>'direct_payment',
		'class'=>'direct_payment',
		'checked'=>'TRUE',
		);
		
		$start_address=array(
		'name'=>'txt_Start_Address',
		'id'=>'start',
		);
		$end_address=array(
		'name'=>'txt_End_Address',
		'id'=>'end',
		);
		$end_address_event='onChange="changend()"';
		$distance=array(
		'name'=>'txt_Distance',
		'id'=>'distance',
		'readonly'=>'readonly',
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
		$submit='onclick="return checkform()"';
		$frm='name="frm_booking"';
		echo form_open('bookingtaxi',$frm);
		echo '<table width="450" id="left_table">'; 
		echo '<tr><td colspan="2">'.form_label('How many passengers?').'</td></tr>';
		echo '<tr><td>Number of People'.'</td><td>'.form_radio('rad_passenger','4',TRUE).'1-4'.form_radio('rad_passenger','5',FALSE).'more'.'</td></tr>';
		echo '<tr><td colspan="2"><strong>'.form_label('Your Name & Contact Number').'</strong></td></tr> ';
		echo '<tr><td>Name</td><td>'.form_input("txt_Name").'<span id="error_Name"></span>'.'</td></tr>';
		echo '<tr><td>Contact Number</td><td>'.form_input("txt_Contact_Number").'<span id="error_Contact_Number"></span>'.'</td></tr>';
		echo '<tr><td colspan="2"><strong>'.form_label('Your Pickup Address').'</strong></td></tr>';
		echo '<tr><td>Your Address</td><td>'.form_input($start_address).'<span id="error_Start_Address"></span>'.'</td></tr>';
		echo '<tr><td>Unit or Flat</td><td>'.form_input("txt_Unit_or_Flat").'<span id="error_Unit"></span>'.'</td></tr>';
		echo '<tr><td>Building Type</td><td>'.form_radio($unit).'Unit/House'.form_radio($business).'Business'.'</td></tr>';
		echo '<tr class="business_name"><td>Business Name</td><td>'.form_input("txt_Business_name").'</td></tr>';
		echo '<tr><td>Remember My Details</td><td>'.form_checkbox('chk_Remember_Details', '1', FALSE).'</td></tr>';
		echo '<tr><td colspan="2"><strong>Where Are You Going?</strong></td></tr>';
		echo '<tr><td>Address</td><td>'.form_input($end_address,'',$end_address_event).'<span id="error_End_Address"></span>'.'</td></tr>';
		echo '<tr><td>Distance (km)</td><td>'.form_input($distance).'<span id="error_Distance"></span>'.'</td></tr>';
		echo '<tr><td>Payment option</td><td>'.form_radio($direct_payment).'Direct Payment'.'</td></tr>';
		echo '<tr><td colspan="2"><strong>Order Details</strong></td></tr>';
		echo '<tr><td>Car Type</td><td>'.form_radio($anytype).'AnyType'.form_radio($wagon).'Wagon'.'</td></tr>';
		echo '<tr><td><div class="vans">No Vans Please</div></td><td><div class="vans">'.form_checkbox('chk_No_Vans', '1', FALSE).'</div></td></tr>';
		echo '<tr><td>Notes For Driver </td><td>'.form_dropdown('ddl_Notes',$node,'No Notes').'</td></tr>';
		echo '<tr><td colspan="2"><strong> Ready To Go?</strong></td></tr>';
		echo '<tr><td>When</td><td>'.form_radio($now).'Now'.form_radio($later).'Later'.'</td></tr>';
		echo '<tr class="later"><td>Select Date</td><td>'.form_dropdown('ddl_Select_Date',$select_date).'</td></tr>';
		echo '<tr class="later"><td>Time</td><td>'.form_dropdown('ddl_hours',$hours).':'.form_dropdown('ddl_minutes',$minutes).' '.form_dropdown('ddl_AM',$am).'</td></tr>';
		echo '<tr class="now"><td colspan="2">You request will be processed immediately. The first available taxi will be sent to your pickup address. </td></tr>';
		echo '<tr><td><strong>Security Code</strong></td><td>';
		require_once('recaptchalib.php');
  		$publickey = "6LdEweMSAAAAANK_k0Gl9-OkMnHobf3Ohhp42Xid"; // you got this from the signup page
  		echo recaptcha_get_html($publickey);
		echo '<span id="error_capcha"></span>';
		echo '</td></tr>';
		echo '<tr><td colspan="2">'.form_submit('btnOK','Book Now',$submit).'</td></tr>';
		echo form_close('');
		echo '</table>';		
		?>	
							 
		<div id="map-canvas"></div>		
		<div id="panel">
    
      		<input onclick="deleteOverlays();" type=button value="Delete Overlays">
    	</div>		

                <!-- ============================================
                    Page Content End
                ============================================= -->
                </div>
            
            
            </div>
        
        
        </div>
        

        


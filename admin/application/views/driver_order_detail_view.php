<div id="content">
            <!-- ============================================
                Page Title
            ============================================= -->
            <div id="page-title">
            
            
                <div class="container clearfix">
                
                    <h1>Booking Details</span></h1>
                    
                </div>
            
            
            </div>
        
            
            <div class="content-wrap">
            
            
                <div class="container clearfix">
                
                <!-- ============================================
                    Page Content Start
                ============================================= -->

<table border="1" width="550px">
<?php
foreach($query as $row)
{
	echo form_open('driver_order/update_status?id='.$row['driver_id']).'<br>';
	echo '<tr><td>order id</td><td>'.$row['order_id'].'</td></tr>';
	echo '<tr><td>passenger</td><td>'.$row['passenger'].'</td></tr>';
	echo '<tr><td>name</td><td>'.$row['name'].'</td></tr>';
	echo '<tr><td>contact number</td><td>'.$row['contact_number'].'</td></tr>';	
	echo '<tr><td>Start Address</td><td>'.$row['start_address'].'</td></tr>';
	echo '<tr><td>Builing Type</td><td>'.$row['building_type'].'</td></tr>';
	if($row['business_name']!="") echo '<tr><td>Builing Name</td><td>'.$row['business_name'].'</td></tr>';
	echo '<tr><td>End Address</td><td>'.$row['end_address'].'</td></tr>';
	echo '<tr><td>Distance</td><td>'.$row['distance'].'</td></tr>';
	echo '<tr><td>car type</td><td>'.$row['car_type'].'</td></tr>';
	echo '<tr><td>node for driver</td><td>'.$row['node_for_driver'].'</td></tr>';
	echo '<tr><td>time to go</td><td>'.$row['time_to_go'].'</td></tr>';
	echo '<tr><td>booking status</td><td>'.$row['status'].'</td></tr>';
	echo '<tr><td>driver status</td><td>'.$row['detail'].'</td></tr>';
	echo '<tr><td>price</td><td>'.$row['price'].'</td></tr>';
	echo '<tr><td>payment</td><td>'.$row['payment'].'</td></tr>';
	echo '<tr><td>driver</td><td>'.$row['fullname'].'</td></tr>';
	echo '<tr><td colspan="2">'.form_submit('btnComplete','Completed').'</td></tr>';
	echo form_close('');
}
?>	
</table>
                <!-- ============================================
                    Page Content End
                ============================================= -->
                </div>
            
            
            </div>
        
        
        </div>
<div id="content">
        
            <!-- ============================================
                Page Title
            ============================================= -->
            <div id="page-title">
            
            
                <div class="container clearfix">
                
                    <h1>LIST BOOKING</span></h1>
                    
                </div>
            
            
            </div>
        
            
            <div class="content-wrap">
            
            
                <div class="container clearfix">
                
                <!-- ============================================
                    Page Content Start
                ============================================= -->
              
                 
  <table border="1" width="1200px" style="color:#FFF; font-size:14px ; width:1024px ; border:1px solid " >
	<tr id="info" style="background:url(images/BOOKING_TAXI_1024/bg1.png); font-size:18px" align="center">
	<td>ORDER ID</td>
	<td>PASSENGER</td>
	<td>NAME</td>
	<td>CONTACT NUMBER</td>
	<td>START ADDRESS</td>
	<td>UNIT/FLAT</td>
	<td>BUILDING TYPE</td>
	<td>BUSINESSNAME</td>
	<td>END ADDRESS</td>
	<td>DISTANCE</td>
	<td>CAR TYPE</td>
	<td>NODE FOR DRIVER</td>
	<td>TIME TO GO</td>
	<td>PRICE</td>
	<td>STATUS</td>
	<td>PAYMENT</td>
	<td>DRIVER</td>
	
	
	</tr>
<?php
echo "Xin chào ".$this->session->userdata('fullname');
foreach($query as $row)
{	
	echo '<tr align="center">';
	echo '<td><a href="'.base_url('listbooking_detail/get_detail_booking?id='.$row['order_id']).'">'.$row['order_id'].'</td>';
	echo '<td>'.$row['passenger'].'</td>';
	echo '<td>'.$row['name'].'</td>';
	echo '<td>'.$row['contact_number'].'</td>';
	echo '<td>'.$row['start_address'].'</td>';
	echo '<td>'.$row['unit_or_flat'].'</td>';
	echo '<td>'.$row['building_type'].'</td>';
	echo '<td>'.$row['business_name'].'</td>';
	echo '<td>'.$row['end_address'].'</td>';
	echo '<td>'.$row['distance'].'</td>';								
	echo '<td>'.$row['car_type'].'</td>';
	echo '<td>'.$row['node_for_driver'].'</td>';
	echo '<td>'.$row['time_to_go'].'</td>';
	echo '<td>'.$row['price'].'</td>';
	echo '<td>'.$row['status'].'</td>';
	echo '<td>'.$row['payment'].'</td>';
	echo '<td>'.$row['fullname'].'</td>';
	echo '</tr>';
}
?>	
</table>
<?php echo $this->pagination->create_links(); // tạo link phân trang ?>
                <!-- ============================================
                    Page Content End
                ============================================= -->
                </div>
            
            
            </div>
        
        
        </div>


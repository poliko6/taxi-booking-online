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
                  
  <table border="1" width="1000">
	<tr>
	<td>order id</td>
	<td>passenger</td>
	<td>name</td>
	<td>contact number</td>
	<td>Start Address</td>
	<td>End Address</td>
	<td>car type</td>
	<td>node for driver</td>
	<td>time to go</td>
	<td>status</td>
	<td>price</td>
	<td>payment</td>
	<td>driver</td>
	
	</tr>
<?php
echo "Xin chào ".$this->session->userdata('fullname');
foreach($query as $row)
{	
	echo '<tr>';
	echo '<td><a href="http://localhost:8888/bookingtaxi/admin/listbooking_detail?id='.$row['order_id'].'">'.$row['order_id'].'</td>';
	echo '<td>'.$row['passenger'].'</td>';
	echo '<td>'.$row['name'].'</td>';
	echo '<td>'.$row['contact_number'].'</td>';	
	echo '<td>'.$row['start_address'].'</td>';
	echo '<td>'.$row['end_address'].'</td>';
	echo '<td>'.$row['car_type'].'</td>';
	echo '<td>'.$row['node_for_driver'].'</td>';
	echo '<td>'.$row['time_to_go'].'</td>';
	echo '<td>'.$row['status'].'</td>';
	echo '<td>'.$row['price'].'</td>';
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


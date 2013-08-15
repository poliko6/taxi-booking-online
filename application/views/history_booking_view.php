	
         
            <!-- ============================================
                Page Title
            ============================================= -->
           
            <div id="page-title">
             	History Booking
            </div>
            <div class="content-wrap">
                <div class="container clearfix">
                
                <!-- ============================================
                    Page Content Start
                ============================================= -->
		<table border="1" width="100%">
			<tr>
				<td>order id</td>
				<td>customer id</td>
				<td>end address</td>
				<td>distance</td>
				<td>car type</td>
				<td>node for driver</td>
				<td>time to go</td>
				<td>price</td>
				<td>status id</td>
				<td>payment</td>
				<td>driver</td>
			</tr>
		<?php
 			foreach($query as $value)
			{
				echo '<tr>';
				echo '<td>'.$value['order_id'].'</td>';
				echo '<td>'.$value['customer_id'].'</td>';
				echo '<td>'.$value['end_address'].'</td>';
				echo '<td>'.$value['distance'].'</td>';
				echo '<td>'.$value['car_type'].'</td>';
				echo '<td>'.$value['node_for_driver'].'</td>';
				echo '<td>'.$value['time_to_go'].'</td>';
				echo '<td>'.$value['price'].'</td>';
				echo '<td>'.$value['status_id'].'</td>';
				echo '<td>'.$value['payment'].'</td>';
				echo '<td>'.$value['driver'].'</td>';
				echo '</tr>';
			}
		?>
		</table>     
                <!-- ============================================
                    Page Content End
                ============================================= -->
                </div>
            	
            </div>
        
        
        </div>
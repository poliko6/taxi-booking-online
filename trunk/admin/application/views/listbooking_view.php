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
                  
 <table border="1" width="500px">
	<tr>
		<td>id</td>
		<td>name</td>
		<td>contact number</td>
		<td>status</td>
	</tr>
	
<?php
	foreach ($query as $row) {
		echo '<tr>';
		echo '<td><a href="http://localhost:8888/bookingtaxi/admin/listbooking_detail?id='.$row['order_id'].'">'.$row['order_id'].'</a></td>';
		echo '<td>'.$row['name'].'</td>';
		echo '<td>'.$row['contact_number'].'</td>';
		echo '<td>'.$row['status_id'].'</td>';
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


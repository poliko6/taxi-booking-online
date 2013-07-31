<div id="content">
        
            <!-- ============================================
                Page Title
            ============================================= -->
            <div id="page-title">
            
            
                <div class="container clearfix">
                
                    <h1>Update booking order</span></h1>
                    
                </div>
            
            
            </div>
        
            
            <div class="content-wrap">
            
            
                <div class="container clearfix">
                
                <!-- ============================================
                    Page Content Start
                ============================================= -->
                <table border="1" width="1200px">
	<tr>
	<td>id</td>
	<td>driver</td>
	<td>status</td>
	</tr>
<?php
$status=array();
$driver=array();
foreach($stt as $row)
{
	$status[$row->id]=$row->status;
}
foreach($drivers as $row)
{
	$driver[$row->driver_id]=$row->fullname;
}
	echo form_open('listbooking_detail/update_booking?id='.$_GET['id']);
	echo '<tr>';
	echo '<td>'.$_GET['id'].'</td>';
	echo '<td>'.form_dropdown('ddl_Driver',$driver);
	echo '<td>'.form_dropdown('ddl_Status',$status).form_submit('btnOk','Update').'</td>';
	echo '</tr>';
	echo form_close();

?>	
</table>
                <!-- ============================================
                    Page Content End
                ============================================= -->
                </div>
            
            
            </div>
        
        
        </div>

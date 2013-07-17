<div id="content">
        
            <!-- ============================================
                Page Title
            ============================================= -->
            <div id="page-title">
            
            
                <div class="container clearfix">
                
                    <h1>Update Status</span></h1>
                    
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
	<td>status</td>
	</tr>
<?php
$stt=array();
foreach($query as $row)
{
	$stt[$row->id]=$row->status;
}
	echo form_open('listbooking_detail/update_status?id='.$_GET['id']);
	echo '<tr>';
	echo '<td>'.$_GET['id'].'</td>';
	echo '<td>'.form_dropdown('ddl_Status',$stt).form_submit('btnOk','Update').'</td>';
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

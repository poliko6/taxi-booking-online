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
                  
 Welcome to home page
 <br/>
 <?php
 if($this->session->userdata('usertype')=='1'||$this->session->userdata('usertype')=='2')
 echo '<a href="'.base_url().'listbooking">Listbooking</a>';
 if($this->session->userdata('usertype')=='3')
 echo '<a href="'.base_url().'driver_order?id='.$this->session->userdata('driver_id').'">View my order</a>'; 
 ?>
                <!-- ============================================
                    Page Content End
                ============================================= -->
                </div>
            
            
            </div>
        
        
        </div>

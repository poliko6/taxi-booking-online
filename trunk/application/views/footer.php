
<div id="footer" class="footer-dark">
        
            
            <div class="container clearfix">
        
        
                <div class="footer-widgets-wrap clearfix">
                
                
                    <div class="col_one_fourth">
                    
                    
                        <div class="widget portfolio-widget clearfix">
                        
                        
                            <h4>About <span>Co</span>Worker</h4>
                            
                            <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh.</p>
                            
                            <div style="background: url('images/world_map.png') no-repeat center center; height: 100px;">
                            
                                <ul style="font-size: 13px;">
                                
                                    <li class="icon-map-marker">13/2 Elizabeth Street <br />Melbourne VIC 3000<br /> Australia</li>
                                    <li class="icon-phone">+91-22-21144113</li>
                                    <li class="icon-envelope-alt">info@coworker.com</li>
                                
                                </ul>
                            
                            </div>
                        
                        
                        </div>
                    
                    
                    </div>
                    
                    
                    <div class="col_one_fourth">
                    
                    
                        <div id="linkcat-2" class="widget widget_links clearfix">
                        
                            <h4 class="widget-title">Blogroll</h4>
                        	
                            <ul class='xoxo blogroll'>
                                
                                <li><a href="http://codex.wordpress.org/">Documentation</a></li>
                                <li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
                                <li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
                                <li><a href="http://wordpress.org/support/">Support Forums</a></li>
                                <li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
                                <li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
                                <li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
                        
                        	</ul>
                            
                        </div>
                    
                    
                    </div>
                    
                    
                    <div class="col_one_fourth">
                    
                    
                        <div id="flickr_widget-1" class="widget flickr-widget clearfix">
                        
                            <h4 class="widget-title">Flickr Photostream</h4>
                            
                            <div id="flickr_widget" class="flickrfeed" data-id="52617155@N08" data-count="9" data-type="user"></div>
                        
                        </div>
                    
                    
                    </div>
                    
                    
                    <div class="col_one_fourth">
                    
                    
                        <div class="widget clearfix">
                        
                            <h4>Quick Contact</h4>
                          
                            <!--<form id="quick-contact-form" name="quick-contact-form" action="<?php echo base_url(); ?>email" method="post" class="quick-contact-form nobottommargin">
                            
                                <input type="text" class="required input-block-level" id="quick-contact-form-name" name="txt_Name" value="" placeholder="Full Name" />
                                
                                <input type="text" class="required email input-block-level" id="quick-contact-form-email" name="txt_Email" value="" placeholder="Email Address" />
                                
                                <textarea class="required input-block-level short-textarea" id="quick-contact-form-message" name="txt_Message" rows="30" cols="10" placeholder="Message"></textarea>
                                
                                <button type="submit" id="quick-contact-form-submit" name="btnOk" class="btn btn-small btn-inverse nomargin" value="submit">Send Email</button>
                            
                            
                            </form>-->
                            <script type="text/javascript">
	function checkform()
	{		
		var dangmail= /^[\w.-]+@[\w.-]+\.[A-Za-z]{2,4}$/;
		var name=document.frm_quick_contact.txt_Name.value;
		var email=document.frm_quick_contact.txt_Email.value;
		var message=document.frm_quick_contact.txt_Message.value;
		if(name=="" ||name==null)
		{
			 document.getElementById('error_Name').innerHTML=' Name not empty!!!';
			 document.frm_quick_contact.txt_Name.focus();
			 return false;
		}
		else  document.getElementById('error_Name').innerHTML='';
		
		if(email=="" ||email==null)
		{
			 document.getElementById('error_Email').innerHTML=' Email not empty!!!';
			 document.frm_quick_contact.txt_Email.focus();
			 return false;	
		}
		else if(dangmail.test(email)==false)
		{
			document.getElementById('error_Email').innerHTML=' Wrong mail format!!!!!!';
			document.frm_quick_contact.txt_Email.focus();
			return false;
		}
		else  document.getElementById('error_Email').innerHTML='';		
		if(message=="" ||message==null)
		{
			 document.getElementById('error_Message').innerHTML=' Message not empty!!!';
			 document.frm_quick_contact.txt_Message.focus();
			 return false;
		}
		else  document.getElementById('error_Message').innerHTML='';
	}
</script> 
<script type="text/javascript">
	$(document).ready(function(){
		$('span[id]').css('color','red');
	});
</script>
                            <?php
                            $submit='onclick="return checkform()"';
                          	$this->load->helper('form');
                            $form=array(
                            "id"=>"quick-contact-form",
                            "name"=>"frm_quick_contact",
							); 
							$txtname=array(
							"class"=>"required input-block-level",
							"id"=>"quick-contact-form-name",
							"name"=>"txt_Name",
							"placeholder"=>"Full Name"
							);
							$txtemail=array(
							"class"=>"required email input-block-level",
							"id"=>"quick-contact-form-email",
							"name"=>"txt_Email",
							"placeholder"=>"Full Name"
							);
							$txtmessage=array(
							"class"=>"required input-block-level short-textarea",
							"id"=>"quick-contact-form-message",
							"name"=>"txt_Message",
							"rows"=>"30", 
							"cols"=>"10",
							"placeholder"=>"Message"
							);
							echo form_open('email',$form).'<br>';
							echo form_fieldset('');
							echo form_label('Name ').form_input($txtname).'<span id="error_Name"></span>'.'<br>';
							echo form_label('Email Address ').form_input($txtemail).'<span id="error_Email"></span>'.'<br>';
							echo form_label('Message ').form_textarea($txtmessage).'<span id="error_Message"></span>'.'<br>';
							echo form_fieldset_close(); 
							echo form_submit('btnOK','Send mail',$submit);
							echo form_close('');
                            ?>
                        </div>
                    
                    
                    </div>
                
                
                </div>
            
            
            </div>
        
        
        </div>
        
        
        <div class="clear"></div>
        
        
        <!-- ============================================
            Copyrights
        ============================================= -->
        <div id="copyrights" class="copyrights-dark">
        
            <div class="container clearfix">
        
            
                <div class="col_half">
                
                    Copyrights &copy; 2012 &amp; All Rights Reserved by CoWorker Inc.
                
                </div>
                
                <div class="col_half col_last tright">
                
                    <a href="#">Privacy Policy</a><span class="link-divider">/</span><a href="#">Terms of Service</a><span class="link-divider">/</span><a href="#">FAQs</a>
                
                </div>
            
            
            </div>
        
        </div>


    </div>
    
    
    <div id="gotoTop" class="icon-angle-up"></div>


    <script type="text/javascript" src="js/custom.js"></script>


</body>

</html>
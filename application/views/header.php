<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

   
    <!-- ============================================
        Stylesheets
    ============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic|Open+Sans:400,300,600,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>" type="text/css" />
    <link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css" href="<?php echo base_url('css/retina.css');?>" />
	<link rel="stylesheet" href="<?php echo base_url('css/colors.php');?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url('css/tipsy.css');?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css');?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.css');?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('css/prettyPhoto.css');?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('css/responsive.css');?>" type="text/css" />
    <!--<link href="http://code.google.com/apis/maps/documentation/javascript/examples/default.css" rel="stylesheet">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
	
	
    <!-- ============================================
        External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/plugins.js');?>"></script>
    
    
    <!-- ============================================
        Document Title
    ============================================= -->
	
        <title>Booking Taxi</title>
    
</head>

<body class="stretched">

    <div id="wrapper" class="clearfix">
    
    
        <!-- ============================================
            Sticky Header
        ============================================= -->
        
        <div id="sticky-menu" class="clearfix">
        
            <div class="container clearfix">
           
                <div class="sticky-logo">
                
                    <a href="index.php"><img src="images/stickylogo.png" alt="CoWorker" title="CoWorker" /></a>
                
                </div>
                
                <div class="sticky-search-trigger">
                
                    <a href="#"><i class="icon-search">search</i></a>
                
                </div>
                
                <div class="sticky-menu-wrap">
                
                    <ul>
                    	<li><a href="<?php echo base_url();?>"><div>Home</div><span>Get in Touch</span></a></li>
                        <li><a href="<?php echo base_url();?>bookingtaxi"><div>Booking</div><span>Let's Start here</span></a>
    
                            <ul>
                            
                                <li><a href="#"><div>Sliders</div></a>
                                
                                    <ul>
                                    
                                        <li><a href="index-layer.html"><div>Layer Slider</div></a></li>
                                        <li><a href="index-revolution.html"><div>Revolution Slider</div></a></li>
                                        <li><a href="index-3d.html"><div>3D Slider</div></a></li>
                                        <li><a href="index-camera.html"><div>Camera Slider</div></a></li>
                                        <li><a href="index-elastic.html"><div>Elastic Slider</div></a></li>
                                        <li><a href="index-refine.html"><div>Refine Slider</div></a></li>
                                        <li><a href="index-refine-thumbs.html"><div>Refine Slider - Thumbs</div></a></li>
                                        <li><a href="index-flex.html"><div>Flex Slider</div></a></li>
                                        <li><a href="index-flex-thumbs.html"><div>Flex Slider - Thumbs</div></a></li>
                                        <li><a href="index-accordion.html"><div>Accordion Slider</div></a></li>
                                        <li><a href="index-nivo.html"><div>Nivo Slider</div></a></li>
                                        <li><a href="index-image.html"><div>Static Image</div></a></li>
                                        <li><a href="index-video.html"><div>Static Video</div></a></li>
                                    
                                    </ul>
                                
                                </li>
                                <li><a href="#"><div>Layouts</div></a>
                                
                                    <ul>
                                    
                                        <li><a href="index-minimal.html"><div>Home - Minimal</div></a></li>
                                        <li><a href="index-layout2.html"><div>Home - Layout 2</div></a></li>
                                        <li><a href="index-layout3.html"><div>Home - Layout 3</div></a></li>
                                        <li><a href="index-portfolio.html"><div>Home - Portfolio</div></a></li>
                                        <li><a href="index-blog.html"><div>Home - Blog</div></a></li>
                                        <li><a href="index-sidebar.html"><div>Home - Sidebar</div></a></li>
                                    
                                    </ul>
                                
                                </li>
                                <li><a href="#"><div>Headers</div></a>
                                
                                    <ul>
                                    
                                        <li><a href="index-flex.html"><div>Header 1</div></a></li>
                                        <li><a href="header-2.html"><div>Header 2</div></a></li>
                                        <li><a href="header-3.html"><div>Header 3</div></a></li>
                                        <li><a href="header-4.html"><div>Header 4</div></a></li>
                                        <li><a href="header-5.html"><div>Header 5</div></a></li>
                                        <li><a href="header-6.html"><div>Header 6</div></a></li>
                                        <li><a href="header-7.html"><div>Header 7</div></a></li>
                                    
                                    </ul>
                                
                                </li>
                            
                            </ul>
                         </li>                       
                        <?php 
                        if($this->session->userdata('usertype')=='4')
							{
								echo '<li><a href="'.base_url().'history_booking"><div>booking history</div><span>Get in Touch</span></a></li>';	
								echo '<li><a href="'.base_url().'update"><div>update info</div></a></li>';
								echo '<li><a href="'.base_url().'change_pw"><div>change password</div></a></li>';
								echo '<li><a href="'.base_url().'logout"><div>Logout</div></a></li>';
							}
							else 
							{
								echo '<li><a href="'.base_url().'register"><div>Register</div><span>Latest News</span></a></li>';
								echo '<li><a href="'.base_url().'login"><div>Login</div><span>Get in Touch</span></a></li>';
							}
							?>
                    
                    </ul>
                
                </div>
                
                <div class="sticky-search-area">
                
                    <form id="sticky-search" action="search-results.html" method="get">
                    
                        <input type="text" id="sticky-search-input" name="q" placeholder="Type &amp; Hit Enter" value="" />
                    
                    </form>
                    
                    <div class="sticky-search-area-close">
                    
                        <a href="#"><i class="icon-remove"></i></a>
                    
                    </div>
                
                </div>
            
            </div>
        
        </div>
        
        
        <!-- ============================================
            Top Bar
        ============================================= -->
        <div id="top-bar">
            
            <div class="container clearfix">
        
                <div id="top-menu">
                
                    <ul>
                    
                        <li><span>/</span><a href="<?php echo base_url();?>bookingtaxi">Booking</a></li>
                        <li><span>/</span><a href="faqs.html">FAQs</a></li>
                        <li><span>/</span><a href="contact.html">Contact</a></li>
                        <li class="top-menu-em"><span>/</span><a href="http://themes.semicolonweb.com/buy/coworker"><i class="icon-shopping-cart"></i> Buy Now</a></li>
                    
                    </ul>
                
                </div>
            
            
                <div id="top-social">
                
                    <ul>
                    
                        <li class="ts-facebook"><a href="#"><div class="ts-icon"></div><div class="ts-text">Facebook</div></a></li>
                        <li class="ts-twitter"><a href="#"><div class="ts-icon"></div><div class="ts-text">Twitter</div></a></li>
                        <li class="ts-gplus"><a href="#"><div class="ts-icon"></div><div class="ts-text">Google+</div></a></li>
                        <li class="ts-dribbble"><a href="#"><div class="ts-icon"></div><div class="ts-text">Dribbble</div></a></li>
                        <li class="ts-pinterest"><a href="#"><div class="ts-icon"></div><div class="ts-text">Pinterest</div></a></li>
                        <li class="ts-forrst"><a href="#"><div class="ts-icon"></div><div class="ts-text">Forrst</div></a></li>
                        <li class="ts-rss"><a href="#"><div class="ts-icon"></div><div class="ts-text">RSS</div></a></li>
                        <li class="ts-vimeo"><a href="#"><div class="ts-icon"></div><div class="ts-text">Vimeo</div></a></li>
                        <li class="ts-phone"><a href="tel:+913326789234"><div class="ts-icon"></div><div class="ts-text">+91.33.26789234</div></a></li>
                        <li class="ts-mail"><a href="mailto:coworker@abc.com"><div class="ts-icon"></div><div class="ts-text">coworker@abc.com</div></a></li>
                        
                    </ul>
                
                </div>
            
            </div>
        
        </div>
            
        <!-- ============================================
            Header
        ============================================= -->
         <div id="logo2" style="position:relative">
            <img src="images/BOOKING_TAXI_CUT/bg_banner.jpg"  width="100%" >
          <div id="header">
        
            
            <div class="container clearfix">
            
                <!-- ============================================
                    Logo
                ============================================= -->
              
                
                <!-- ============================================
                    Menu
                ============================================= -->
             
                <div id="primary-menu">
                
                
                    <ul id="main-menu">
                    <li><a href="<?php echo base_url();?>"><div>Home</div><span>Get in Touch</span></a></li>
                        <li><a href="<?php echo base_url();?>bookingtaxi"><div>Booking</div><span>Let's Start here</span></a>
    
                            <ul>
                            
                                <li><a href="#"><div>Sliders</div></a>
                                
                                    <ul>
                                    
                                        <li><a href="index-layer.html"><div>Layer Slider</div></a></li>
                                        <li><a href="index-revolution.html"><div>Revolution Slider</div></a></li>
                                        <li><a href="index-3d.html"><div>3D Slider</div></a></li>
                                        <li><a href="index-camera.html"><div>Camera Slider</div></a></li>
                                        <li><a href="index-elastic.html"><div>Elastic Slider</div></a></li>
                                        <li><a href="index-refine.html"><div>Refine Slider</div></a></li>
                                        <li><a href="index-refine-thumbs.html"><div>Refine Slider - Thumbs</div></a></li>
                                        <li><a href="index-flex.html"><div>Flex Slider</div></a></li>
                                        <li><a href="index-flex-thumbs.html"><div>Flex Slider - Thumbs</div></a></li>
                                        <li><a href="index-accordion.html"><div>Accordion Slider</div></a></li>
                                        <li><a href="index-nivo.html"><div>Nivo Slider</div></a></li>
                                        <li><a href="index-image.html"><div>Static Image</div></a></li>
                                        <li><a href="index-video.html"><div>Static Video</div></a></li>
                                    
                                    </ul>
                                
                                </li>
                                <li><a href="#"><div>Layouts</div></a>
                                
                                    <ul>
                                    
                                        <li><a href="index-minimal.html"><div>Home - Minimal</div></a></li>
                                        <li><a href="index-layout2.html"><div>Home - Layout 2</div></a></li>
                                        <li><a href="index-layout3.html"><div>Home - Layout 3</div></a></li>
                                        <li><a href="index-portfolio.html"><div>Home - Portfolio</div></a></li>
                                        <li><a href="index-blog.html"><div>Home - Blog</div></a></li>
                                        <li><a href="index-sidebar.html"><div>Home - Sidebar</div></a></li>
                                    
                                    </ul>
                                
                                </li>
                                <li><a href="#"><div>Headers</div></a>
                                
                                    <ul>
                                    
                                        <li><a href="index-flex.html"><div>Header 1</div></a></li>
                                        <li><a href="header-2.html"><div>Header 2</div></a></li>
                                        <li><a href="header-3.html"><div>Header 3</div></a></li>
                                        <li><a href="header-4.html"><div>Header 4</div></a></li>
                                        <li><a href="header-5.html"><div>Header 5</div></a></li>
                                        <li><a href="header-6.html"><div>Header 6</div></a></li>
                                        <li><a href="header-7.html"><div>Header 7</div></a></li>
                                    
                                    </ul>
                                
                                </li>
                            
                            </ul>
    
                        </li>                        
                        
                        
                        <?php
                        	if($this->session->userdata('usertype')=='4')
							{
								echo '<li><a href="'.base_url().'history_booking"><div>booking history</div><span>Get in Touch</span></a></li>';	
								echo '<li><a href="'.base_url().'update"><div>update info</div></a></li>';
								echo '<li><a href="'.base_url().'change_pw"><div>change password</div></a></li>';
								echo '<li><a href="'.base_url().'logout"><div>Logout</div><span>Hello '.$this->session->userdata('fullname').'</span></a></li>';
							}
							else 
							{
								echo '<li><a href="'.base_url().'register"><div>Register</div><span>Latest News</span></a></li>';
								echo '<li><a href="'.base_url().'login"><div>Login</div><span>Get in Touch</span></a></li>';
							}
                        ?>
                    
                    </ul>
                
                
                </div>
                
                
            </div>
    
       
        </div>
         </div>
      
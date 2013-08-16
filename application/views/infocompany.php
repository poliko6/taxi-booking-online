<?php
                		foreach($query as $row)
					
                	{
                        echo '<div class="widget portfolio-widget clearfix">';
                        
                        
                            echo '<h4>About <span>Co</span>'.$row['Company_Name'].'</h4>';
                            
                            echo '<p>'.$row['Note'].'</p>';
                            
                            echo '<div style="background: url(\'images/world_map.png\') no-repeat center center; height: 100px;">';
                            
                                echo '<ul style="font-size: 13px;">';
                                
                                    echo '<li class="icon-map-marker">13/2 Elizabeth Street <br />Melbourne VIC 3000<br /> Australia</li>';
                                   echo ' <li class="icon-phone">'.$row['Phone'].'</li>';
                                    echo '<li class="icon-envelope-alt">'.$row['Email'].'</li>';
                                
                                echo '</ul>';
                            
                            echo  '</div>';
                        
                        
                        echo '</div>';
               }
      ?>   
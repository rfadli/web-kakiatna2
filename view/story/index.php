<!--Grid Top Area Start-->
        <section class="container">
        	<div class="grid-half left">

                <!--Feature Image Start-->
            	<div class="half-feature-image">
            		<?php
            		$curl = new Curl();
            		$db = Db::init();
					
					$con = $db->category_content;
					$ar = array(
						'_id' => new MongoId(ABOUTUS_ID)
					);
					$mcon = $con->findOne($ar);
					
					if(isset($mcon['_id']))
					{
						$q = array(
							'id' => trim($mcon['_id']),
							'height' => 502,
							'width' => 502
						);
						
						$curl->get('http://admin.cms.deboxs.com:8055/api/getimagecategorycontent', $q);
						$rest = $curl->response;
						
						$json = json_decode($rest, TRUE);
						
						$url = '';
						if($json['status'] == "OK")
						{
							$url = $json['url'];
						}
						
						echo '<figure>';
                        echo '<img src="'.$url.'" alt="image" />';
                    	echo '</figure>';
					}
            		?>
                    
                </div>
                <!--Feature Image End-->
            
            </div>
            <div class="grid-half right">
            	<ul class="small-grid">
                	
                    <!--proud-->
                	<li class="flip icon">
                        <a href="#proud">
                        	<?php
                        	$content = $db->content;
							$q = array(
								'_id' => new MongoId(PROUD_ID)
							);
							$proud = $content->findOne($q);
							
							if(isset($proud['_id']))
							{
								$q = array(
									'id' => trim($proud['_id']),
									'height' => 150,
									'width' => 150
								);
								
								$curl->get('http://admin.cms.deboxs.com:8055/api/getimagecontent', $q);
								$rest = $curl->response;
								
								$json = json_decode($rest, TRUE);
								
								$url = '';
								if($json['status'] == "OK")
								{
									$url = $json['url'];
								}
								
								echo '<div class="flip-front">';
								echo '<div style="margin-top: -40px;" class="service-icon">';
                                echo '<img src="'.$url.'" alt="service" />';
                            	echo '</div>';
								echo '<h2 class="grid-title">'.$proud['title'].'</h2>';
								echo '</div>';
                        		echo '<div class="flip-back active-details">';
                            	echo '<h2 class="title-back">'.$proud['title'].'</h2>';
								$isi = substr($proud['content'], 0,130);
                            	echo '<p class="description-back">'.$isi.' ...</p>';
                            	echo '<div class="more-details">';
                                echo 'MORE DETAILS';
                           	 	echo '</div>';
                        		echo '</div>';
							}
                        	?>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--passion-->
                    <li class="flip icon">
                        <a href="#passion">
                        	<?php
                        	$content = $db->content;
							$q = array(
								'_id' => new MongoId(PASSION_ID)
							);
							$passion = $content->findOne($q);
							
							if(isset($passion['_id']))
							{
								$q = array(
									'id' => trim($passion['_id']),
									'height' => 150,
									'width' => 150
								);
								
								$curl->get('http://admin.cms.deboxs.com:8055/api/getimagecontent', $q);
								$rest = $curl->response;
								
								$json = json_decode($rest, TRUE);
								
								$url = '';
								if($json['status'] == "OK")
								{
									$url = $json['url'];
								}
								
								echo '<div class="flip-front icon-light">';
								echo '<div style="margin-top: -40px;" class="service-icon">';
                                echo '<img src="'.$url.'" alt="service" />';
                            	echo '</div>';
								echo '<h2 class="grid-title text-white">'.$passion['title'].'</h2>';
								
								echo '</div>';
                        		echo '<div class="flip-back active-details gray">';
                            	echo '<h2 class="title-back text-gray">'.$passion['title'].'</h2>';
								$isi = substr($passion['content'], 0,130);
                            	echo '<p class="description-back text-dark">'.$isi.' ...</p>';
                            	echo '<div class="more-details">';
                                echo 'MORE DETAILS';
                            	echo '</div>';
                        		echo '</div>';
							}
                        	?>
                            
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--art craft-->
                    <li class="flip icon">
                        <a href="#artcraft">
                            <?php
                        	$content = $db->content;
							$q = array(
								'_id' => new MongoId(ARTCRAFT_ID)
							);
							$artcraft = $content->findOne($q);
							
							if(isset($artcraft['_id']))
							{
								$q = array(
									'id' => trim($artcraft['_id']),
									'height' => 150,
									'width' => 150
								);
								
								$curl->get('http://admin.cms.deboxs.com:8055/api/getimagecontent', $q);
								$rest = $curl->response;
								
								$json = json_decode($rest, TRUE);
								
								$url = '';
								if($json['status'] == "OK")
								{
									$url = $json['url'];
								}
								
								echo '<div class="flip-front icon-light">';
								echo '<div style="margin-top: -40px;" class="service-icon">';
                                echo '<img src="'.$url.'" alt="service" />';
                            	echo '</div>';
								echo '<h2 class="grid-title text-white">'.$artcraft['title'].'</h2>';
								
								echo '</div>';
                        		echo '<div class="flip-back active-details gray">';
                            	echo '<h2 class="title-back text-gray">'.$artcraft['title'].'</h2>';
								$isi = substr($artcraft['content'], 0,130);
                            	echo '<p class="description-back text-dark">'.$isi.' ...</p>';
                            	echo '<div class="more-details">';
                                echo 'MORE DETAILS';
                            	echo '</div>';
                        		echo '</div>';
							}
                        	?>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--consistency-->
                    <li class="flip icon">
                        <a href="#consis">
                            <?php
                        	$content = $db->content;
							$q = array(
								'_id' => new MongoId(CONSISTENSI_ID)
							);
							$consis = $content->findOne($q);
							
							if(isset($consis['_id']))
							{
								$q = array(
									'id' => trim($consis['_id']),
									'height' => 150,
									'width' => 150
								);
								
								$curl->get('http://admin.cms.deboxs.com:8055/api/getimagecontent', $q);
								$rest = $curl->response;
								
								$json = json_decode($rest, TRUE);
								
								$url = '';
								if($json['status'] == "OK")
								{
									$url = $json['url'];
								}
								
								echo '<div class="flip-front">';
								echo '<div style="margin-top: -40px;" class="service-icon">';
                                echo '<img src="'.$url.'" alt="service" />';
                            	echo '</div>';
								echo '<h2 class="grid-title">'.$consis['title'].'</h2>';
								
								echo '</div>';
                        		echo '<div class="flip-back active-details">';
                            	echo '<h2 class="title-back">'.$consis['title'].'</h2>';
								$isi = substr($consis['content'], 0,130);
                            	echo '<p class="description-back">'.$isi.' ...</p>';
                            	echo '<div class="more-details">';
                                echo 'MORE DETAILS';
                            	echo '</div>';
                        		echo '</div>';
							}
                        	?>
                        </a>
                    </li>
                    <!--End-->
                    
                </ul>
            </div>
        </section>
        <!--Grid Top Area End-->
        
        <div class="clearfix"></div>
        
        <!--Details Content Start-->
        <section class="container details">
        
        	<!--Title Start-->
        	<div class="content-header">
            	<h1>ABOUT US</h1>
                <nav>
                	<ul>
                    	<li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </nav>
            </div>
            <!--End-->
            
            <!--Details Start-->
            <div id="proud" class="content-body">
            	<?php
            	echo '<h2>'.$proud['title'].'</h2><br />';
				echo '<p>'.$proud['content'].'</p>';
            	?>
            </div>
            <div id="passion" class="content-body">
            	<?php
            	echo '<h2>'.$passion['title'].'</h2><br />';
				echo '<p>'.$passion['content'].'</p>';
            	?>  
            </div>
            <div id="artcraft" class="content-body">
            	<?php
            	echo '<h2>'.$artcraft['title'].'</h2><br />';
				echo '<p>'.$artcraft['content'].'</p>';
            	?>     
            </div>
            <div id="consis" class="content-body">
            	<?php
            	echo '<h2>'.$consis['title'].'</h2><br />';
				echo '<p>'.$consis['content'].'</p>';
            	?>                
            </div>
            <!--End-->
            
        </section>
        <!--Details Content End-->
        
        <div class="clearfix"></div>
        
        <!--Our Team Start-->
        <section class="container team">
        	<ul>
            	<li class="item">
                    <div class="box-title">
                        <div class="icon">
                            <img src="/public/images/service-icon/service-icon-6.png" alt="service" />
                        </div>
                        <h2>OUR TEAM</h2>
                    </div>
                </li>
                
                <!--Team 1-->
                <li class="flip">
                    <div class="flip-front">
                        <a href="#">
                            <figure>
                                <img src="/public/images/upload/team1.jpg" alt="image" />
                            </figure>
                        </a>
                    </div>
                    <a href="#">
                        <div class="flip-back active-details gray">
                            <h2 class="title-back text-gray">John Doe</h2>
                            <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                            <div class="more-details">
                                MORE DETAILS
                            </div>
                        </div>
                    </a>
                </li>
                <!--End-->
                
                <!--Team 2-->
                <li class="flip">
                    <div class="flip-front">
                        <a href="#">
                            <figure>
                                <img src="/public/images/upload/team2.jpg" alt="image" />
                            </figure>
                        </a>
                    </div>
                    <a href="#">
                        <div class="flip-back active-details">
                            <h2 class="title-back">Jack Carlton</h2>
                            <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                            <div class="more-details">
                                MORE DETAILS
                            </div>
                        </div>
                    </a>
                </li>
                <!--End-->
                
                <!--Team 3-->
                <li class="flip">
                    <div class="flip-front">
                        <a href="#">
                            <figure>
                                <img src="/public/images/upload/team3.jpg" alt="image" />
                            </figure>
                        </a>
                    </div>
                    <a href="#">
                        <div class="flip-back active-details gray">
                            <h2 class="title-back text-gray">Jane Conroy</h2>
                            <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                            <div class="more-details">
                                MORE DETAILS
                            </div>
                        </div>
                    </a>
                </li>
                <!--End-->
                
                <!--Team 4-->
                <li class="flip">
                    <div class="flip-front">
                        <a href="#">
                            <figure>
                                <img src="/public/images/upload/team4.jpg" alt="image" />
                            </figure>
                        </a>
                    </div>
                    <a href="#">
                        <div class="flip-back active-details gray">
                            <h2 class="title-back text-gray">Jimmy Shelby</h2>
                            <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                            <div class="more-details">
                                MORE DETAILS
                            </div>
                        </div>
                    </a>
                </li>
                <!--End-->
                
                <!--Team 5-->
                <li class="flip">
                    <div class="flip-front">
                        <a href="#">
                            <figure>
                                <img src="/public/images/upload/team5.jpg" alt="image" />
                            </figure>
                        </a>
                    </div>
                    <a href="#">
                        <div class="flip-back active-details">
                            <h2 class="title-back">Amanda Cruz</h2>
                            <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                            <div class="more-details">
                                MORE DETAILS
                            </div>
                        </div>
                    </a>
                </li>
                <!--End-->
                
                <!--Team 6-->
                <li class="flip">
                    <div class="flip-front">
                        <a href="#">
                            <figure>
                                <img src="/public/images/upload/team6.jpg" alt="image" />
                            </figure>
                        </a>
                    </div>
                    <a href="#">
                        <div class="flip-back active-details gray">
                            <h2 class="title-back text-gray">Charles Chesser</h2>
                            <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                            <div class="more-details">
                                MORE DETAILS
                            </div>
                        </div>
                    </a>
                </li>
                <!--End-->

            </ul>
        </section>
        <!--Our Team End-->

<div class="clearfix"></div>
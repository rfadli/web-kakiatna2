 <!--Feature Image Start-->
    <section class="container fullwidth-feature">
    	<?php
    	$curl = new Curl();
		
		if(isset($data['_id']))
		{
			$q = array(
				'id' => trim($data['_id']),
				'height' => 502,
				'width' => 1024,
				'type' => 'satu'
			);
			
			$curl->get('http://admin.cms.deboxs.com:8055/api/getimageproduct', $q);
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
    </section>
    <!--Feature Image End-->
                
                <br />
                
    <!--slide1-->
        	<div class="grid-half left">
            	<div class="half-feature-image">
                    <figure>
                    <?php
			    	$curl = new Curl();
					
					if(isset($data['_id']))
					{
						$q = array(
							'id' => trim($data['_id']),
							'height' => 502,
							'width' => 502,
							'type' => 'dua'
						);
						
						$curl->get('http://admin.cms.deboxs.com:8055/api/getimageproduct', $q);
						$rest = $curl->response;
						
						$json = json_decode($rest, TRUE);
						
						$url = '';
						if($json['status'] == "OK")
						{
							$url = $json['url'];
						}
						
					}
			    	?>
                    <?php echo '<img src="'.$url.'" alt="image" />'; ?>	
                    </figure>
                </div>
            </div>
            <!--slide1 end-->
            
            <!--grid-half right-->    
            <div class="grid-half right">
            	<ul class="small-grid">
            		
            		<!--quotes 1-->
            		<!--Small Grid 1-->
                	<li class="small-thumb dark">
                    	<h2 class="text-gray"><center>
                    		<?php
                    		if(isset($data['quote_youtube']))
							{
								echo $data['quote_youtube'];
							}
                    		?>
                    	</center></h2>
                    </li>
                        <!--End-->

                    
                    <!--youtube player-->
                    <li class="flip icon">
                    	<?php
                    		$youtube_url = "";
                    		if(isset($data['youtube_url']))
							{
								$youtube_url = $data['youtube_url'];
							}
                    	?>
                    	<iframe width="241" height="240" src="<?php echo $youtube_url; ?>"></iframe>                        
                        
                    </li>
                    <!--youtube player end-->
                    
                    <!--soundcloud player-->
                    <li class="flip icon">
                    	<?php
                    		$soundcloud_url = "";
                    		if(isset($data['soundcloud_url']))
							{
								$soundcloud_url = $data['soundcloud_url'];
							}
                    	?>
                    	<iframe width="241" height="240" scrolling="no" frameborder="no" src="<?php echo $soundcloud_url; ?>"></iframe>                        
                    </li>
                    <!--soundcloud player end-->
                    
                    <!--quotes 2-->
                    <li class="small-thumb dark">
                    	<h2 class="text-gray"><center><?php
                    		if(isset($data['quote_soundcloud']))
							{
								echo $data['quote_soundcloud'];
							}
                    		?>
                    		</center></h2>
                    </li>

                </ul>
            </div>
            <!--grid-half right end-->
        </section>
        <!--Grid Top Area End-->
        
        <div class="clearfix"></div>
                    
    <!--Details Content Start-->
    <section class="container details">
    
    	
    	
        <!--Portfolio Details Start-->
        <div class="portfolio-detail">
        
            <!--Title Start-->
            <div class="content-header">
                <h1><?php echo $data['title'] ?></h1>
            </div>
            <!--End-->
            
            <!--Details Start-->
            <div class="content-body">
                <p><?php echo $data['content'] ?></p>
            </div>
            <!--End-->
            
            <!--Social Share Button-->
            <?php
            $url = $_SERVER['REQUEST_URI'];
			echo '<div id="social-share">';
            echo '<div id="shareme" data-url="http://dev2.sugaramps.com'.$url.'" data-text="'.$data['title'].'"></div>';
            echo '</div>';
            ?>
            
            <!--End-->
            
        </div>
        <!--Portfolio Details End-->
        
    </section>
    <!--Details Content End-->
    
    <div class="clearfix"></div>
    
    <!--Related Work Start-->
    <section class="container related">
    	<ul>
        	<li class="item">
                <div class="box-title">
                    <div class="icon">
                        <img src="/public/images/service-icon/service-icon-11.png" alt="service" />
                    </div>
                    <h2>RELATED PRODUCT</h2>
                </div>
            </li>
            
            <!--Related Work 1-->
            <?php
            $curl = new Curl();
			
            foreach ($related_product as $key) 
            {
            	$q = array(
					'id' => trim($key['_id']),
					'height' => 241,
					'width' => 241,
					'type' => 'dua'
				);
				
				$curl->get('http://admin.cms.deboxs.com:8055/api/getimageproduct', $q);
				$rest = $curl->response;
				
				$json = json_decode($rest, TRUE);
				
				$url = '';
				if($json['status'] == "OK")
				{
					$url = $json['url'];
				}
				
                echo '<li class="flip">';
                echo '<div class="flip-front">';
                echo '<a href="/productdetil/index?id='.$key['_id'].'">';
                echo '<figure>';
                echo '<img src="'.$url.'" alt="image" />';
                echo '</figure>';
                echo '</a>';
                echo '</div>';
                echo '<a href="/productdetil/index?id='.$key['_id'].'">';
                echo '<div class="flip-back active-details">';
                echo '<h2 class="title-back">'.$key['title'].'</h2>';
                echo '<p class="description-back">'.$key['content'].'</p>';
                echo '<div class="more-details">';
                echo 'MORE DETAILS';
                echo '</div>';
                echo '</div>';
                echo '</a>';
            	echo '</li>';
            }
            ?>
            <!--End-->
        </ul>
    </section>
    <!--Related Work End-->

<div class="clearfix"></div>
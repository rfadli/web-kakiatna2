<!--Page Header Start-->
            <section class="page-header">
            	<div class="content">
                	
                    <!--Title Start-->
                	<div class="header-title">
                        <h1>contact us</h1>
                        <div class="sub-title">
                            <p>At vero eos et accusam et justo duo</p>
                        </div>
                    </div>
                    <!--Title End-->
                    
                    <!--Page Navigation Start-->
                    <nav class="page-navigation">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </nav>
                    <!--Page Navigation End-->
                    
                </div>
            </section>
            <!--Page Header End-->
                        
            <!--Map Start-->
            <section class="container">
            	<div class="map">
                	<div id="map-canvas"></div>
                </div>
            </section>
            <!--Map End-->
            
            <section class="container contact">
            	
                <!--Send Message Start-->
                <?php
                if(isset($contact))
				{
					if($contact == 'yes')
					{
						 echo '<div class="sidebar-title">';
                         echo '<h2>Pesan anda sudah kami terima, terima kasih</h2>';
                         echo '</div>';
					}
				}
                ?>
               
                <div class="send-message">
            		<div class="leave-comment message">
                    	<h2>send a message</h2>
                        <form id="form_contact" method="post" action="<?php echo $link; ?>">
                            <input id="name" class="input-name" type="text" name="name" placeholder="Your name *" required />
                            <input id="email" class="input-email" type="text" name="email" placeholder="Your email *" required />
                            <input id="mysubject" class="input-subject" type="text" name="mysubject" placeholder="Subject *" required />
                            <textarea id="comments" class="input-textarea" name="comments" placeholder="Your message *" required></textarea>
                            <div class="comment-active">
                                <span>All fields are mandatory.</span>
                                <input id="email_submit" class="submit-button" type="submit" value="SEND MESSAGE"/>
                            </div>
                            <div class="email_success">
                            	<div id="reply_message" class="email_loading" ></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--Send Message End-->
                
                <!--Contact Info Start-->
                <div class="contact-info">
                	<div class="blog-single-details info-box">
                        
                        <!--Title Start-->
                        <h2>contact information</h2>
                        <ul class="blog-meta blog-single">
                        	<?php
                        	$db = Db::init();
                        	$prf = $db->client;
							$a = array(
								'_id' => new mongoId(CLIENT_ID)
							);
							$mprfs = $prf->findOne($a);
                        	
							echo '<li class="status">Address<span class="contact-meta">'.$mprfs['address'].'</span></li>';
                            echo '<li class="status">Phone<span class="contact-meta">'.$mprfs['phone'].'</span></li>';
                            echo '<li class="status">Email<span class="contact-meta">'.$mprfs['email'].'</span></li>';
                        	?>
                        </ul>
                        <!--Title End-->
                        
                        <!--Content Start-->
                        <div class="blog-single-content">
                        	<?php
                        	$curl = new Curl();
							$content = $db->content;
							$array = array(
								'category_content' => new MongoId(CONTACT_INFORMATION_ID)
							);
							$mcontent = $content->findOne($array);
							if(isset($mcontent['_id']))
							{
								$q = array(
									'id' => trim($mcontent['_id']),
									'height' => 37,
									'width' => 108
								);
								
								$curl->get('http://admin.cms.deboxs.com:8055/api/getimagecontent', $q);
								$rest = $curl->response;
								
								$json = json_decode($rest, TRUE);
								
								$url = '';
								if($json['status'] == "OK")
								{
									$url = $json['url'];
								}
								
								echo '<figure>';
                            	echo '<img src="'.$url.'" alt="contact info" />';
                            	echo '</figure>';
								
								echo '<p>';
								echo $mcontent['content'];
								echo '</p>';
							}
                        	?>
                        </div>
                        <!--Content End-->
                        
                    </div>
                </div>
                <!--Contact Info End-->
                
            </section>
	<div id="mfn-rev-slider" style="background-color: #FFFFFF">
		<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullscreen-container pd0">
		<!-- START REVOLUTION SLIDER 4.6.9 fullscreen mode -->
			<div id="rev_slider_4_1" class="rev_slider fullscreenbanner dnone">
				<ul>	
					<!-- SLIDE  -->
					<?php
					$curl = new Curl();
					
					foreach ($mslider as $key) 
					{
						$q = array(
							'id' => trim($key['_id']),
							'height' => 750,
							'width' => 1500
						);
						
						$curl->get('http://admin.cms.deboxs.com:8055/api/getimagecontent', $q);
						$rest = $curl->response;
						
						$json = json_decode($rest, TRUE);
						
						$url = '';
						if($json['status'] == "OK")
						{
							$url = $json['url'];
						}
					
						echo '<li data-transition="notransition" data-slotamount="1" data-masterspeed="1"  data-saveperformance="off" >';
						echo '<div class="tp-caption tp-fade" data-speed="20" data-start="600" data-easing="Power3.easeInOut" data-elementdelay="0" data-endelementdelay="0" data-end="0" data-endspeed="20">';
						echo '<img width="1500" height="750" src="'.$url.'" alt="">';
						echo '</div>';
						echo '</li>';
					}
					?>
					
					<!-- SLIDE  -->
					
					
					
					
					
					
					
					
				</ul>
				
				<div class="tp-bannertimer tp-bottom" ></div>	
			</div>
			
		</div>
		<!-- END REVOLUTION SLIDER -->
	</div>
</header>

<div id="Content">
		<div class="content_wrapper clearfix">
			<!-- .sections_group -->
			<div class="sections_group">

				<div class="section dark center">
					<div class="section_wrapper clearfix">
						<div class="items_group clearfix">
							<div class="column one column_column">
								<br /><br />
								<h3 style="color: #CD171E">Commitment for A <span class="highlight highlight_image">Change</span>
								</h3>
							</div>
						</div>
					</div>
				</div>
				
				<br />
				<div class="section pad0" >
					<div class="section_wrapper clearfix">
						<div class="items_group ">
							<div class="column one column_column">
								<!--h4></h4-->
								<span class="dropcap">K</span>
								Akiatna Group is a conglomerate of companies whose range of operations span in various industries such as
								Energy, Food & Beverages, IT, Mobile Applications, Healthcare, Independent Power Producer, Engineering and
								Construction and Logistic. Kakiatna Group is managed under the parent company of PT. Kakiatna Indonesia, a
								Jakarta based company. PT. Kakiatna Indonesia was founded in 2009 under a different name, PT. Gizania Group.
								In 2014, we decided to change our name into PT. Kakiatna Indonesia. kakiatna itself means strong and solid in
								Sundanese. Therefore, we hope our business will grow as strong and solid as ever.
							</div>
						</div>
					</div>
				</div>
				
				<!-- About, latest, contact -->
				<div class="section aboutcorporate">
					<div class="section_wrapper clearfix">
						<div class="items_group clearfix">
							<!--div class="colum one-third column_column" style="width: 10%"></div-->
							<?php
							foreach ($mblog as $key) 
							{
								echo '<div class="column one-second column_column">';
								//echo '<img width="100" height="100" src="/public/media/Blog.png">';
								echo '<h3>Blog</h3>';
								echo '<hr class="hr_left">';
								echo '<h6>'.$key['title'].'</h6>';
								echo '<p>';
								echo $key['content'];
								echo '</p>';
								echo '<a href="/contentdetil/index?id='.$key['_id'].'">Read more ...</a>';
								echo '</div>';
							}
							?>
							
							<?php
							foreach ($mnews as $key) 
							{
								echo '<div class="column one-second column_column">';
								//echo '<img width="100" height="100" src="/public/media/News.png">';
								echo '<h3>News</h3>';
								echo '<hr class="hr_left">';
								echo '<h6>'.$key['title'].'</h6>';
								echo '<p>';
								echo $key['content'];
								echo '</p>';
								echo '<a href="/contentdetil/index?id='.$key['_id'].'">Read more ...</a>';
								echo '</div>';
							}
							?>
							<!--div class="colum one-third column_column" style="width: 10%"></div-->
						</div>
					</div>
				</div>
				
				<!-- clients -->
				<div class="section center">
					<div class="section_wrapper clearfix">
						<div class="items_group clearfix">
							<div class="column one column_column">
								<h2 class="mb0">SUBSIDIARIES</h2>
							</div>
							<div class="column one column_clients">
								<div class="clients parallaxclients">
									<ul>
										<li class=" last_row">
										<div class="client_wrapper">
											<a target="_blank" href="http://digitama.com/" title="PT.Digita Media Utama"><img width="500" height="500" src="/public/subsidiaries/digitama500.png" class="scale-with-grid wp-post-image" alt="client_1"/></a>
										</div>
										</li>
										<li class=" last_row">
										<div class="client_wrapper">
											<a target="_blank" href="http://rise.biz.id/" title="PT.Rise Infobisnis Semesta Ekasolusi"><img width="155" height="80" src="/public/subsidiaries/fwdlogorevisi/Kakiatna-02.png" class="scale-with-grid wp-post-image" alt="client_2"/></a>
										</div>
										</li>
										<li class=" last_row">
										<div class="client_wrapper">
											<a target="_blank" href="http://www.kakiatnaenergi.co.id/" title="PT.Kakiatna Energi"><img width="500" height="500" src="/public/subsidiaries/energi500.png" class="scale-with-grid wp-post-image" alt="client_3"/></a>
										</div>
										</li>
										<li class=" last_row">
										<div class="client_wrapper">
											<a target="_blank" href="http://www.kakiatnalogistik.co.id/" title="PT.Kakiatna Logistik"><img width="500" height="500" src="/public/subsidiaries/logistik500.png" class="scale-with-grid wp-post-image" alt="client_4"/></a>
										</div>
										</li>
										<li class=" last_row last_row_mobile">
										<div class="client_wrapper">
											<a target="_blank" href="#" title="PT.Nusantara Energi Mandiri"><img width="500" height="500" src="/public/subsidiaries/nusantara500.png" class="scale-with-grid wp-post-image" alt="client_5"/></a>
										</div>
										</li>
										<li class="last_in_row last_row last_row_mobile">
										<div class="client_wrapper">
											<a target="_blank" href="http://www.rumindonesia.com/" title="PT.Retail Usaha Mandiri"><img width="500" height="500" src="/public/subsidiaries/usaha500.png" class="scale-with-grid wp-post-image" alt="client_6"/></a>
										</div>
										</li>
										<div class="column one-one column_column"></div>
										<div class="column one-one column_column"></div>
										<!--div class="column one-fourth column_column"></div-->
										<li class="last_in_row last_row last_row_mobile">
										<div class="client_wrapper">
											<a target="_blank" href="http://www.rumindonesia.com/" title="PT.Retail Usaha Mandiri"><img width="500" height="500" src="/public/subsidiaries/usaha500.png" class="scale-with-grid wp-post-image" alt="client_6"/></a>
										</div>
										</li>
										<li class="last_in_row last_row last_row_mobile">
										<div class="client_wrapper">
											<a target="_blank" href="http://www.thedjakartaclinic.com/" title="PT.Energi Penta Medika"><img width="500" height="500" src="/public/subsidiaries/medika500.png" class="scale-with-grid wp-post-image" alt="client_6"/></a>
										</div>
										</li>
										<li class="last_in_row last_row last_row_mobile">
										<div class="client_wrapper">
											<a target="_blank" href="http://www.kaningapictures.com/" title="PT.Kaninga Sinema Indonesia"><img width="500" height="500" src="/public/subsidiaries/kaninga500.png" class="scale-with-grid wp-post-image" alt="client_6"/></a>
										</div>
										</li>
										
										<li class="last_in_row last_row last_row_mobile">
										<div class="client_wrapper">
											<a target="_blank" href="http://www.thedjakartaclinic.com/" title="PT.Energi Penta Medika"><img width="500" height="500" src="/public/subsidiaries/medika500.png" class="scale-with-grid wp-post-image" alt="client_6"/></a>
										</div>
										</li>
										<li class="last_in_row last_row last_row_mobile">
										<div class="client_wrapper">
											<a target="_blank" href="http://www.kaningapictures.com/" title="PT.Kaninga Sinema Indonesia"><img width="500" height="500" src="/public/subsidiaries/kaninga500.png" class="scale-with-grid wp-post-image" alt="client_6"/></a>
										</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section the_content">
					<div class="section_wrapper">
						<div class="the_content_wrapper">
						</div>
					</div>
				</div>
			</div>
			<!-- .four-columns - sidebar -->
		</div>
	</div>
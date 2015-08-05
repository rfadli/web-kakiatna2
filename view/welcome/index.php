	<div id="mfn-rev-slider">
		
		<!-- START REVOLUTION SLIDER 4.6.9 fullscreen mode -->
			<div id="rev_slider_9_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:818px;">
													<!-- START REVOLUTION SLIDER 4.6.9 fullwidth mode -->
				<div id="rev_slider_9_2" class="rev_slider fullwidthabanner" style="display:none;max-height:818px;height:818px;">
					<ul>
						<!-- SLIDE  -->
						<li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
						<!-- MAIN IMAGE -->
						<img src="/public/upload/3.jpg" alt="3" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYERS -->
						</li>
						<!-- SLIDE  -->
						<li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
						<!-- MAIN IMAGE -->
						<img src="/public/upload/heart_motion.jpg" alt="heart_motion" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYERS -->
						</li>
					</ul>
					<div class="tp-bannertimer tp-bottom" >
					</div>
				</div>
			</div>
			
		
		<!-- END REVOLUTION SLIDER -->
	</div>
</header>

<div id="Content">
		<div class="content_wrapper clearfix">
			<!-- .sections_group -->
			<div class="sections_group">

				<div class="section dark center grey-bg">
					<div class="section_wrapper clearfix">
						<div class="items_group clearfix">
							<div class="column one column_column">
								<h3>YOUR BUSINESS WILL <span class="highlight highlight_image">GROW FASTER</span>
								</h3>
							</div>
						</div>
					</div>
				</div>
				
				<br />
				<div class="section pad0" >
					<div class="section_wrapper clearfix">
						<div class="items_group clearfix">
							<div class="column one column_column">
								<?php
								foreach ($mcontent as $key ) 
								{
									echo '<h4>';
									echo $key['title'];
									echo '</h4>';	
								}
								?>
								
								<span class="dropcap">L</span>
								Kakiatna Group is a conglomerate of companies whose range of operations span in various industries such as
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
							<div class="column one-third column_column">
								<h3>Blog</h3>
								<hr class="hr_left">
								<h6>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum vdio sit amet nibh vulputate cursus a sit amet.</h6>
								<p>
									Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo mullam. Sed non mauris vitae erat consequat auctor eu in elit.
								</p>
								<a href="#">Read more ...</a>
							</div>
							<div class="column one-third column_column">
								
							</div>
							<div class="column one-third column_column">
								<h3>News</h3>
								<hr class="hr_left">
								<h6>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum vdio sit amet nibh vulputate cursus a sit amet.</h6>
								<p>
									Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo mullam. Sed non mauris vitae erat consequat auctor eu in elit.
								</p>
								<a href="#">Read more ...</a>
							</div>
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
										<?php
					                 	$curl = new Curl();
										
										foreach ($msubsidiaries as $key) 
										{
											$q = array(
												'id' => trim($key['_id']),
												'height' => 120,
												'width' => 120
											);
											
											$curl->get('http://admin.cms.deboxs.com:8055/api/getimagecontent', $q);
											$rest = $curl->response;
											
											$json = json_decode($rest, TRUE);
											
											$url = '';
											if($json['status'] == "OK")
											{
												$url = $json['url'];
											}
											
											echo '<li class=" last_row">';
											echo '<div class="client_wrapper">';
											echo '<a target="_blank" href="#" title="'.$key['title'].'"><img src="'.$url.'" class="scale-with-grid wp-post-image" alt="client_1"/></a>';
											echo '</div>';
											echo '</li>';
										
										}
					                    ?>
										
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
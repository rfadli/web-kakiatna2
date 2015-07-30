<div id="Content">
		<div class="content_wrapper clearfix">
			<!-- .sections_group -->
			<div class="sections">
				<div class="section pad0" >
					<div class="section_wrapper clearfix">
						<div class="items_group clearfix">
							<div class="column one column_tabs">
								<div class="jq-tabs tabs_wrapper tabs_vertical">
									<ul>
										<h5>CAREER</h5>
										<li><a href="#-4"><i class="icon-map"></i>Why Work With Us ?</a></li>
										<li><a href="#-5"><i class="icon-quote"></i>Job Vacancy</a></li>
									</ul>
									<div id="-4">
										<?php
										foreach ($mwhywork as $key) 
										{
											echo $key['content'];
										}
										?>
									</div>
									<div id="-5">
										<div class="column one column_accordion">
											<div class="accordion">
												<h4 class="title">Job Vacancy</h4>
												<div class="mfn-acc accordion_wrapper open1st">
													<?php
													$curl = new Curl();
													
													foreach ($mjobs as $key) 
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
														
														echo '<div class="question">';
														echo '<h5><span class="icon"><i class="icon-right-open"></i></span>'.$key['title'].'</h5>';
														echo '<div class="answer">';
														if(isset($url))
														{
															echo '<img src="'.$url.'" alt="">';
														}
														else
														{
															echo '<img src="/public/upload/pic_about_cake_small.png" alt="">';
														}
														
														echo $key['content'];
														echo '</div>';
														echo '</div>';
													}
													?>
													
													
													<div class="question">
														<h5><span class="icon"><i class="icon-right-open"></i></span>Marketing Management</h5>
														<div class="answer">
															Fusce lacus tellus, accumsan at vehicula et, vulputate non quam. Pellentesque egestas, velit a tristique tristique, ligula mi viverra enim, sagittis accumsan sapien odio vel arcu. <br/><br/>
															Mauris adipiscing massa eget mauris accumsan non posuere dolor semper. In hac habitasse platea dictumst. In interdum placerat iaculis. Mauris arcu ligula, convallis non semper sed, imperdiet non est.
														</div>
													</div>
													<div class="question">
														<h5><span class="icon"><i class="icon-right-open"></i></span>Cras arcu ipsum, ornare in vestibulum ut, cursus et quam</h5>
														<div class="answer">
															Cras arcu ipsum, ornare in vestibulum ut, cursus et quam. Nulla hendrerit fringilla mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non risus leo, at vestibulum ante. <br/><br/>
															Suspendisse euismod convallis mi, vitae scelerisque tortor porttitor fermentum. Nam aliquet aliquet elit ut elementum. Nam posuere, nunc vitae placerat tristique, orci dui volutpat lacus, ac aliquam enim est gravida urna.
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
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
			
		</div>
	</div>
	<br /><br /><br /><br /><br />
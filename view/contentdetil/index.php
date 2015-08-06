</header>
<div id="Content">
		<div class="content_wrapper clearfix">
			<!-- .sections_group -->
			<div class="sections_group">
				<div id="post-519" class="post-519 post type-post status-publish format-standard has-post-thumbnail hentry category-motion tag-css3 tag-framework tag-wordpress">
					<div class="section section-post-header">
						<div class="section_wrapper clearfix">
							<div class="column one portfolio-meta">

								<ul class="next-prev-nav">
									<li class="prev"><a class="button button_icon" href="#"><i class="icon-left-open"></i></a></li>
									<li class="list"><a class="button button_icon" href="#"><i class="icon-menu"></i></a></li>
								</ul>
							</div>
							<div class="column one post-photo-wrapper">
								<?php
						    	$curl = new Curl();
								if(isset($data['_id']))
								{
									$q = array(
										'id' => trim($data['_id']),
										'height' => 570,
										'width' => 1200,
										
									);
									$curl->get('http://admin.cms.deboxs.com:8055/api/getimagecontent', $q);
									$rest = $curl->response;
									$json = json_decode($rest, TRUE);
									
									$url = '';
									if($json['status'] == "OK")
									{
										$url = $json['url'];
									}
									
									echo '<div class="post-photo">';
									echo '<img src="'.$url.'" class="scale-with-grid wp-post-image" alt="1">';
									echo '</div>';
								}
						    	?>
								
							</div>
						</div>
					</div>
					<div class="post-wrapper-content">
						<div class="section section-post-meta">
							<div class="section_wrapper clearfix">
								<div class="column one post-meta">
									<div class="author">
										By <a href="#">Admin</a>
									</div>
									<div class="date">
										February 18, 2014
									</div>
									<hr class="hr_narrow hr_left">
								</div>
							</div>
						</div>
						<?php
						echo '<div class="section the_content">';
						echo '<div class="section_wrapper">';
						echo '<div class="the_content_wrapper">';
						echo '<h5>'.$data['title'].'</h5>';
						echo $data['content'];
						echo '</div>';
						echo '</div>';
						echo '</div>';
						?>
						<div class="section section-post-footer">
							<div class="section_wrapper clearfix">
								<div class="column one post-pager">
								</div>
							</div>
						</div>
						<div class="section section-post-about">
							<div class="section_wrapper clearfix">
								<div class="column one author-box">
									<div class="author-box-wrapper">
										<div class="avatar-wrapper">
											<img alt="Max Themes" src="upload/gravatar.png"  class="avatar avatar-64 photo" height="64" width="64">
										</div>
										<div class="desc-wrapper">
											<h6><a href="#">Max Themes</a></h6>
											<div class="desc">
												We are an experienced team creating great, unique and easy to set up templates for WordPress. We are also creating websites and web applications. In our work we use the latest technologies, and our heads are always full of ideas. Our domain is creativity, experience and openness to new horizons.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="section section-post-related">
						<div class="section_wrapper clearfix">
							<div class="section-related-adjustment">
								<div class="column one-third post-related post-10284 post type-post status-publish format-video has-post-thumbnail hentry category-jquery category-motion post_format-post-format-video">
									<a class="photo_mask" href="#">
									<div class="mask">
									</div>
									<span class="button_image more"><i class="icon-link"></i></span><img width="600" height="400" src="upload/6-600x400.jpg" class="scale-with-grid wp-post-image" alt="6"></a>
									<div class="desc">
										<span class="date"><i class="fa fa-clock-o"></i> January 23, 2014</span>
										<h6><a href="#">Post format HTML5 Video</a></h6>
									</div>
								</div>
								<div class="column one-third post-related post-379 post type-post status-publish format-video has-post-thumbnail hentry category-javascript category-motion tag-mysql post_format-post-format-video">
									<a class="photo_mask" href="#">
									<div class="mask">
									</div>
									<span class="button_image more"><i class="icon-link"></i></span><img width="600" height="400" src="upload/1-600x400.jpg" class="scale-with-grid wp-post-image" alt="1"></a>
									<div class="desc">
										<span class="date"><i class="fa fa-clock-o"></i> August 13, 2013</span>
										<h6><a href="#">Vimeo with right sidebar</a></h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="section section-post-comments">
						<div class="section_wrapper clearfix">
							<div class="column one comments">
								<div id="comments">
									<h3 id="comments-title">
									4 Comments </h3>
									<ol class="commentlist">
										<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent" id="comment-12">
										<div id="div-comment-12" class="comment-body">
											<div class="comment-author vcard">
												<img alt="" src="upload/gravatar.png"  class="avatar avatar-64 photo" height="64" width="64"><cite class="fn">admin</cite><span class="says">says:</span>
											</div>
											<div class="comment-meta commentmetadata">
												<a href="#">
												October 4, 2012 at 1:36 pm</a>
											</div>
											<p>
												The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
											</p>
										</div>
										<ul class="children">
											<li class="comment odd alt depth-2 parent" id="comment-14">
											<div id="div-comment-14" class="comment-body">
												<div class="comment-author vcard">
													<img alt="" src="upload/gravatar2.png" class="avatar avatar-64 photo" height="64" width="64"><cite class="fn">Karboniusz</cite><span class="says">says:</span>
												</div>
												<div class="comment-meta commentmetadata">
													<a href="#">
													January 30, 2014 at 12:43 pm</a>
												</div>
												<p>
													Maecenas nec iaculis turpis, eget congue massa. Ut ultrices consectetur eleifend. Nullam nisl dui, congue in mi non, dapibus adipiscing metus. Donec mollis semper rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed euismod neque. Aliquam eget malesuada enim, eu interdum elit. Sed sagittis ornare velit a congue.
												</p>
											</div>
											<ul class="children">
												<li class="comment even depth-3" id="comment-15">
												<div id="div-comment-15" class="comment-body">
													<div class="comment-author vcard">
														<img alt="" src="upload/gravatar2.png" class="avatar avatar-64 photo" height="64" width="64"><cite class="fn">Szejk</cite><span class="says">says:</span>
													</div>
													<div class="comment-meta commentmetadata">
														<a href="#">
														January 30, 2014 at 12:44 pm</a>
													</div>
													<p>
														Maecenas nec iaculis turpis, eget congue massa. Ut ultrices consectetur eleifend. Nullam nisl dui, congue in mi non, dapibus adipiscing metus.
													</p>
												</div>
												</li>
												<!-- #comment-## -->
											</ul>
											<!-- .children -->
											</li>
											<!-- #comment-## -->
										</ul>
										<!-- .children -->
										</li>
										<!-- #comment-## -->
										<li class="comment byuser comment-author-admin bypostauthor odd alt thread-odd thread-alt depth-1" id="comment-13">
										<div id="div-comment-13" class="comment-body">
											<div class="comment-author vcard">
												<img alt="" src="upload/gravatar.png"  class="avatar avatar-64 photo" height="64" width="64"><cite class="fn">admin</cite><span class="says">says:</span>
											</div>
											<div class="comment-meta commentmetadata">
												<a href="#">
												October 4, 2012 at 1:36 pm</a>
											</div>
											<p>
												Sections 1.10.32 and 1.10.33 from “de Finibus Bonorum et Malorum” by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
											</p>
										</div>
										</li>
										<!-- #comment-## -->
									</ol>
								</div>
								<!-- #comments -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .four-columns - sidebar -->
		</div>
	</div>
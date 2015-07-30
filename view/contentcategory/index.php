<div id="Content">
		<div class="content_wrapper clearfix">

			<!-- .sections_group -->
			<div class="sections_group">
				<div class="section">
					<div class="section_wrapper clearfix">
						<div class="column one column_blog">
							<div class="blog_wrapper isotope_wrapper modern">
								<div class="posts_group">

									<!-- blog Item -->
									<?php
									$curl = new Curl();
									
									foreach ($mcontent as $key) 
									{
										$q = array(
											'id' => trim($key['_id']),
											'height' => 520,
											'width' => 1064
										);
										
										$curl->get('http://admin.cms.deboxs.com:8055/api/getimagecontent', $q);
										$rest = $curl->response;
										
										$json = json_decode($rest, TRUE);
										
										$url = '';
										if($json['status'] == "OK")
										{
											$url = $json['url'];
										}
										
										echo '<div class="post-item isotope-item clearfix post-519 post type-post status-publish format-standard has-post-thumbnail hentry category-motion tag-css3 tag-framework tag-wordpress">';
										echo '<div class="post-meta-modern">';
										echo '<div class="date">';
										//date("d-m-Y",$ddt['time_created'])
										echo '<span class="day">'.date("d",$key['time_created']).'</span><span class="month">'.date("M",$key['time_created']).'</span><span class="year">2014</span>';
										echo '</div>';
										echo '<div class="button-comments">';
										echo '<a href="#"><span class="icons-wrapper"><i class="icon-comment-empty-fa"></i><i class="icon-comment-fa"></i></span><span class="label">4</span></a>';
										echo '</div>';
											
										echo '</div>';
										echo '<div class="post-photo-wrapper">';
										echo '<div class="post-photo">';
										echo '<img src="'.$url.'" class="scale-with-grid wp-post-image" alt="1"/>';
										echo '</div>';
										echo '</div>';
										echo '<div class="post-desc-wrapper">';
										echo '<div class="post-desc">';
										echo '<div class="post-title">';
										echo '<h4><a href="#">Content Builder for posts</a></h4>';
										echo '</div>';
										echo '<div class="post-meta">';
										echo '<div class="author">';
										echo 'By <a href="#">Admin</a>';
										echo '</div>';
										echo '<div class="category">';
										echo 'In <a href="#" rel="category tag">Motion</a>';
										echo '</div>';
										echo '<div class="date">';
										echo 'February 18, 2014';
										echo '</div>';
										echo '<hr class="hr_narrow hr_left"/>';
										echo '</div>';
										echo '<div class="post-excerpt">';
										echo $key['content'];
										//echo '<h6>Now you can use Content Builder for posts also! Read more for simple example.</h6>';
										//echo '<audio class="wp-audio-shortcode" id="audio-519-1" preload="none" style="width: 100%; visibility: hidden;" controls="controls"><source type="audio/mpeg" src="upload/audio230a.mp3?_=1"/><a href="upload/audio.mp3">http://themes.muffingroup.com/cake/upload/audio.mp3</a></audio>';
										//echo '<br/>';
										//echo '<p>';
										//echo 'Suspendisse turpis et odio. Vestibulum aliquam odio. Nunc at sapien. Aliquam eleifend, ligula. Integer nibh consectetuer tincidunt enim. Aliquam ultricies ante. Nullam eleifend in, vulputate adipiscing.';
										//echo '</p>';
										echo '</div>';
										echo '<div class="post-footer">';
										echo '<a href="/contentdetil/index?id='.$key['_id'].'"" class="post-more">Read more</a>';
										echo '<div class="button-comments">';
										echo '<a href="#"><span class="icons-wrapper"><i class="icon-comment-empty-fa"></i><i class="icon-comment-fa"></i></span><span class="label">4</span></a>';
										echo '</div>';
													
										echo '</div>';
										echo '</div>';
										echo '</div>';
										echo '</div>';
									}
									?>
									
									

									<!-- blog Item -->
									

									<!-- blog Item -->
									

									<!-- blog Item -->
									

									<!-- blog Item -->
									
									
									<!-- blog Item -->
									
								</div>
								<?php echo $pagination;?>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
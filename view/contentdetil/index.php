<div id="Content">
		<div class="content_wrapper clearfix">

			<!-- .sections_group -->
			<div class="sections_group">
				<div id="post-379" class="post-379 post type-post status-publish format-video has-post-thumbnail hentry category-javascript category-motion tag-mysql post_format-post-format-video">
					<div class="section section-post-header">
						<div class="section_wrapper clearfix">
							
							<?php
					    	$curl = new Curl();
							
							if(isset($data['_id']))
							{
								$q = array(
									'id' => trim($data['_id']),
									'height' => 570,
									'width' => 1200,
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
								
						        echo '<div class="column one post-photo-wrapper">';
								echo '<div class="post-photo">';
								echo '<img width="1200" height="570" src="upload/1-1200x570.jpg" class="scale-with-grid wp-post-image" alt="1" style="height: 413.6px;">';
								echo '</div>';
								echo '</div>';
							}
					    	?>
							
						</div>
					</div>
					<div class="post-wrapper-content">
						<div class="section section-post-meta">
							<div class="section_wrapper clearfix">
								<div class="column one post-meta">
									<div class="author">
										By <a href="#">Max Themes</a>
									</div>
									<div class="category">
										In <a href="#" rel="category tag">Javascript</a>, <a href="#" rel="category tag">Motion</a>
									</div>
									<div class="date">
										August 13, 2013
									</div>
									<hr class="hr_narrow hr_left">
								</div>
							</div>
						</div>
						<div class="section the_content">
							<div class="section_wrapper">
								<div class="the_content_wrapper">
									<h5>Lorem ipsum dolor sit amet purus consectetuer vulputate vitae, congue tristique. Donec condimentum, pulvinar.</h5>
									<p>
										Suspendisse turpis et odio. Vestibulum aliquam odio. Nunc at sapien. Aliquam eleifend, ligula. Etiam rutrum, enim ac imperdiet sagittis, elit. Sed ut odio sit amet, tortor. Proin at quam. Phasellus fermentum, metus at sagittis sed, tempus nulla. Integer nibh consectetuer tincidunt enim. Aliquam ultricies ante. Nullam eleifend in, vulputate adipiscing. Nunc tristique lorem. Mauris id nisl. Morbi tellus et ultrices velit eleifend sollicitudin posuere, tempor scelerisque, dui porta ac, felis.
									</p>
									<h6>Curabitur arcu sit amet libero hendrerit dolor sit amet tellus. Praesent quis wisi curabitu anso thank:</h6>
									<ul class="list">
										<li>Nunc tristique lorem</li>
										<li>Sed ipsum primis in augue</li>
									</ul>
									<p>
										Aenean scelerisque, diam. Nullam vitae wisi placerat sodales. Phasellus pulvinar felis, ullamcorper quam. Nam aliquet quis, convallis nec, eros. Sed ipsum primis in augue.Phasellus ornare non, nulla. Morbi augue ac ornare dolor sit amet, accumsan quam, dictum ante. Donec non enim. Cras orci. Mauris euismod. Ut molestie justo ipsum dolor sapien pede id nunc. Praesent tortor venenatis consequat. Morbi nibh malesuada ultricies.
									</p>
									<p>
										Ut a nunc. Vivamus est. Suspendisse potenti. In id felis. Vestibulum et magnis dis parturient montes, nascetur ridiculus mus. Nam libero quis felis augue imperdiet sed, ornare lorem. Sed nec odio. Suspendisse eu ante. Quisque neque mauris, consectetuer tellus tincidunt dictum faucibus vestibulum. Cras turpis at nulla. Etiam blandit sed, ornare eu, ullamcorper fringilla, justo nibh rutrum ut, eleifend at, accumsan augue id purus laoreet iaculis scelerisque.
									</p>
									<p>
										Integer faucibus et, congue ac, mattis at, vulputate vitae, velit. Pellentesque eget sapien id lectus. Ut eu nulla in faucibus arcu turpis et magnis dis parturient montes, nascetur ridiculus mus. Mauris aliquet elit. Sed quam ultrices posuere ante eget dolor leo sodales tempor. Quisque at arcu nec elit porta tellus hendrerit feugiat lectus at turpis.
									</p>
								</div>
							</div>
						</div>
						<div class="section section-post-footer">
							<div class="section_wrapper clearfix">
								<div class="column one post-pager">
									<div class="pager-single">
										<span>1</span><a href="#"><span>2</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="section section-post-about">
							<div class="section_wrapper clearfix">
								<div class="column one author-box">
									<div class="author-box-wrapper">
										<div class="avatar-wrapper">
											<img alt="Max Themes" src="upload/gravatar.png" class="avatar avatar-64 photo" height="64" width="64">
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
								<div class="column one-third post-related post-519 post type-post status-publish format-standard has-post-thumbnail hentry category-motion tag-css3 tag-framework tag-wordpress">
									<a class="photo_mask" href="#">
									<div class="mask">
									</div>
									<span class="button_image more"><i class="icon-link"></i></span><img width="600" height="400" src="upload/1-600x400.jpg" class="scale-with-grid wp-post-image" alt="1"></a>
									<div class="desc">
										<span class="date"><i class="fa fa-clock-o"></i> February 18, 2014</span>
										<h6><a href="#">Content Builder for posts</a></h6>
									</div>
								</div>
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
								<div class="column one-third post-related post-10270 post type-post status-publish format-image has-post-thumbnail hentry category-javascript category-print post_format-post-format-image">
									<a class="photo_mask" href="#">
									<div class="mask">
									</div>
									<span class="button_image more"><i class="icon-link"></i></span><img width="600" height="400" src="upload/8-600x400.jpg" class="scale-with-grid wp-post-image" alt="8"></a>
									<div class="desc">
										<span class="date"><i class="fa fa-clock-o"></i> January 22, 2014</span>
										<h6><a href="#">Post format Image. Especially for vertical images.</a></h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="section section-post-comments">
						<div class="section_wrapper clearfix">
							<div class="column one comments">
								<div id="comments">
									<p class="nocomments">
										Comments are closed.
									</p>
								</div>
								<!-- #comments -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .four-columns - sidebar -->
			<div class="four columns">
				<div class="widget-area clearfix">
					<aside id="search-2" class="widget widget_search">
					<form method="get"  action="#">
						<input type="text" class="field" name="s"  placeholder="Enter your search"/>
						<input type="submit" class="submit" value="Search"/>
					</form>
					</aside>
					<aside id="text-4" class="widget widget_text">
					<h3>About the blog</h3>
					<div class="textwidget">
						Lorem ipsum dolor sit amet, consectetur elit porta. Vestibulum ante justo, volutpat quis porta non, vulputate id diam.
					</div>
					</aside>
					<aside id="widget_mfn_recent_posts-3" class="widget widget_mfn_recent_posts">
					<h3>Latest posts</h3>
					<div class="Recent_posts">
						<ul>
							<li class="post-519 post type-post status-publish format-standard has-post-thumbnail hentry category-motion tag-css3 tag-framework tag-wordpress">
							<div class="photo">
								<img width="80" height="60" src="upload/1-80x60.jpg" class="scale-with-grid wp-post-image" alt="1"/>
							</div>
							<div class="desc ">
								<h6><a class="title" href="#">Content Builder for posts</a></h6>
								<p>
									<span class="date">February 18, 2014</span> | <span class="comments">comments off</span>
								</p>
							</div>
							</li>
							<li class="post-507 post type-post status-publish format-standard has-post-thumbnail hentry category-jquery tag-themeforest">
							<div class="photo">
								<img width="80" height="60" src="upload/3-80x60.jpg" class="scale-with-grid wp-post-image" alt="3"/>
							</div>
							<div class="desc ">
								<h6><a class="title" href="j#">Revolution Slider left sidebar</a></h6>
								<p>
									<span class="date">February 17, 2014</span> | <span class="comments">comments off</span>
								</p>
							</div>
							</li>
							<li class="post-10268 post type-post status-publish format-quote hentry category-print post_format-post-format-quote">
							<div class="desc no_img">
								<h6><a class="title" href="#">Post format Quote. Sed eu quam justo. Duis condimentum dui id massa dapibus, eget pellentesque est ultricies.</a></h6>
								<p>
									<span class="date">February 16, 2014</span> | <span class="comments">comments off</span>
								</p>
							</div>
							</li>
						</ul>
					</div>
					</aside>
					<aside id="categories-2" class="widget widget_categories">
					<h3>Categories</h3>
					<ul>
						<li class="cat-item cat-item-13"><a href="#">Javascript</a>
						</li>
						<li class="cat-item cat-item-14"><a href="#">jQuery</a>
						</li>
						<li class="cat-item cat-item-15"><a href="#">Motion</a>
						</li>
						<li class="cat-item cat-item-16"><a href="#">Print</a>
						</li>
					</ul>
					</aside><aside id="tp_widget_recent_tweets-2" class="widget widget_tp_widget_recent_tweets">
					<h3>Recent Tweets</h3>
					<div class="tp_recent_tweets">
						<div id="example2"></div>
					</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
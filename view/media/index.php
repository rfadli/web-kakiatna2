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
										<h5>MEDIA</h5>
										<li><a href="#-4"><i class="icon-map"></i>News</a></li>
										<li><a href="#-5"><i class="icon-quote"></i>Blog</a></li>
										<li><a href="#-6"><i class="icon-user-add"></i>Press Release</a></li>
										<li><a href="#-7"><i class="icon-quote"></i>Press Kit</a></li>
									</ul>
									<div id="-4">
										<?php
										echo 'dari admin';
										echo $mnews['content'];
										?>
										<div class="post-footer">
										<?php
										echo '<a href="/contentcategory/index?id='.NEWS .'" class="post-more">Read more</a>';
										?>	
												<div class="button-comments">
														<a href="#"><span class="icons-wrapper"><i class="icon-comment-empty-fa"></i></span></a>
												</div>
													
										</div>
										
									</div>
									<div id="-5">
										<?php
										echo 'BLOG dari admin';
										echo $mblog['content'];
										?>
										<div class="post-footer">
										<?php
										echo '<a href="/contentcategory/index?id='.BLOG.'" class="post-more">Read more</a>';
										?>
												<div class="button-comments">
													<a href="#"><span class="icons-wrapper"><i class="icon-comment-empty-fa"></i></span></a>
												</div>
										</div>
									
									</div>
									<div id="-6">
										<?php
										echo 'BLOG dari admin';
										echo $mpress_release['content'];
										?>
									</div>
									<div id="-7">
										<?php
										echo 'BLOG dari admin';
										echo $mpress_kit['content'];
										?>
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
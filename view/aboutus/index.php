</header>
<div id="Content">
		<div class="content_wrapper clearfix">
			<!-- .sections_group -->
			<div class="sections">
				
				<div class="section pad0" >
					<div class="section_wrapper clearfix">
						<div class="items_group clearfix">
							
							<div class="column one column_tabs" style="border:0">
								<div class="jq-tabs tabs_wrapper tabs_vertical tabs_big_icon" style="border:0">
									<ul>
										<li><a href="#-12"><img width="50" height="50" src="/public/media/Value.png"><br />Vision, Mission and Values</a></li>
										<li><a href="#-11"><img width="50" height="50" src="/public/media/Words_from_CEO.png"><br />Words from Our CEO</i></a></li>
										<li><a href="#-10"><img width="50" height="50" src="/public/media/History.png"><br />History</a></li>
										<div class="items_group clearfix">
										</div>
									</ul>
									<div id="-10" style="border:0">
										<?php
										foreach ($mhistory as $key) 
										{
											echo '<h3 style="color:#CD171E">'.$key['title'].'</h3><br/>';
											echo '<img src="http://admin.cms.deboxs.com:8055/public/media/2812584C4AEDBFE855C6B78001824DC63240977C210A28F6E966F52DF0B08D60.1500x750.jpg" width="200" height="60"><br/><br/>';
											echo $key['content'];
										}
										?>
									</div>
									
									<div id="-11" style="border:0">
										<?php
										foreach ($mwordsceo as $key) 
										{
											echo '<h3 style="color:#CD171E">'.$key['title'].'</h3>';
											echo $key['content'];
										}
										?>
									</div>
									
									<div id="-12" style="border:0">
										<?php
										foreach ($mvision as $key) 
										{
											
											//echo '<h5 style="color:#CD171E">'.$key['title'].'</h5>';
											echo $key['content'];
										}
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
			<!-- .four-columns - sidebar -->
		</div>
	</div>
	<br /><br /><br /><br />
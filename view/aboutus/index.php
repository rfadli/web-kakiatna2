<div id="Content">
		<div class="content_wrapper clearfix">
			<!-- .sections_group -->
			<div class="sections">
				
				<div class="section pad0" >
					<div class="section_wrapper clearfix">
						<div class="items_group clearfix">
							
							<div class="column one column_tabs">
								<div class="jq-tabs tabs_wrapper tabs_vertical tabs_big_icon">
									<ul>
										<li><a href="#-10"><i class="icon-map"></i>HISTORY</a></li>
										<li><a href="#-11"><i class="icon-quote"><br />WORDS FROM OUR CEO</i></a></li>
										<li><a href="#-12"><i class="icon-user-add"></i>VISION, MISSION AND VALUES</a></li>
									</ul>
									<div id="-10">
										<?php
										foreach ($mhistory as $key) 
										{
											echo 'dari admin <br />';
											echo $key['content'];
										}
										?>
									</div>
									<div id="-11">
										<h5>WORDS FROM OUR CEO</h5>
										 Ut vestibulum bibendum magna eget varius. Phasellus et urna in justo vestibulum fermentum in non enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin a felis pharetra, aliquam purus vitae, tristique mauris. Ut consectetur nibh posuere dolor sagittis, id lacinia purus luctus. Nunc tempor neque vitae eros imperdiet cursus. Maecenas consequat diam eget porta tincidunt. <br/><br/>
										Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam non erat in nibh dignissim porttitor. Proin vestibulum molestie feugiat. Aliquam tincidunt a mi et luctus. Pellentesque egestas lobortis mollis. Curabitur ut nulla sit amet massa consequat dignissim vel in orci. Morbi mollis eros eget arcu rutrum consequat. <br/><br/>
									</div>
									<div id="-12">
										
										<?php
										foreach ($mvision as $key) 
										{
											echo 'dari admin <br />';
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
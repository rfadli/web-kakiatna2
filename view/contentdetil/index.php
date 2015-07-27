
<!--Feature Image Start-->
<section class="container fullwidth-feature">
	<?php
	$curl = new Curl();
	if(isset($data['_id']))
	{
		$q = array(
			'id' => trim($data['_id']),
			'height' => 502,
			'width' => 1024
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
        echo '<img src="'.$url.'" alt="image" />';
    	echo '</figure>';
	}
	?>
</section>
<!--Feature Image End-->

<!--Container Start-->
<section class="container blog">
	
    <!--Blog Content Start-->
    <div class="blog-content">
    	
        <!--Content Area Start-->
        <section class="blog-single-details">
            
            <!--Title Start-->
            <h1><?php echo $data['title'] ?></h1>
            <nav class="blog-meta blog-single">
                <span class="status">Date</span><a href="#"><span class="blog-meta-details"><?php echo date("d-m-Y", $data['time_created']) ?></span></a>
                <span class="status">Post in</span><a href="#"><span class="blog-meta-details">Photography</span></a>
                <span class="status">By</span><a href="#"><span class="blog-meta-details">Admin</span></a>
            </nav>
            <!--Title End-->
            
            <!--Content Start-->
            <div class="blog-single-content">
            	<p><?php echo $data['content'] ?></p>
            </div>
            <!--Content End-->
            
            <!--Social Share Button-->
            <?php
            $url = $_SERVER['REQUEST_URI'];
			echo '<div id="social-share">';
            echo '<div id="shareme" data-url="http://dev2.sugaramps.com'.$url.'" data-text="'.$data['title'].'"></div>';
            echo '</div>';
            ?>
            <!--End-->
            
        </section>
        <!--Content Area End-->
        
        <!--Related News Start-->
        <section class="blog-related">
        	<ul>
            	
                <!--Related Title-->
                <li>
                    <div class="box-title tiny-grid">
                        <div class="icon">
                            <img src="/public/images/related-news-icon.png" alt="related news" />
                        </div>
                        <h2>RELATED NEWS</h2>
                    </div>
                </li>
                <!--End-->
                
                <!--Related 1-->
                <li class="flip">
                    <div class="flip-front">
                        <a href="blog-single.html">
                            <figure>
                                <img src="/public/images/upload/related-news-thumbnail1.jpg" alt="image" />
                            </figure>
                        </a>
                    </div>
                    <a href="blog-single.html">
                        <div class="flip-back active-details">
                            <h2 class="description-back tiny-title">At vero eos et accusam et justo</h2>
                            <div class="more-details tiny-active">
                                READ MORE
                            </div>
                        </div>
                    </a>
                </li>
                <!--End-->
                
                <!--Related 2-->
                <li class="flip">
                    <div class="flip-front">
                        <a href="blog-single.html">
                            <figure>
                                <img src="/public/images/upload/related-news-thumbnail2.jpg" alt="image" />
                            </figure>
                        </a>
                    </div>
                    <a href="blog-single.html">
                        <div class="flip-back active-details">
                            <h2 class="description-back tiny-title">Lorem ipsum dolor sit amet</h2>
                            <div class="more-details tiny-active">
                                READ MORE
                            </div>
                        </div>
                    </a>
                </li>
                <!--End-->
                
                <!--Related 3-->
                <li class="flip">
                    <div class="flip-front">
                        <a href="blog-single.html">
                            <figure>
                                <img src="/public/images/upload/related-news-thumbnail3.jpg" alt="image" />
                            </figure>
                        </a>
                    </div>
                    <a href="blog-single.html">
                        <div class="flip-back active-details">
                            <h2 class="description-back tiny-title">Consetetur sadipscing elitr</h2>
                            <div class="more-details tiny-active">
                                READ MORE
                            </div>
                        </div>
                    </a>
                </li>
                <!--End-->
                
                <!--Related 4-->
                <li class="flip">
                    <div class="flip-front">
                        <a href="blog-single.html">
                            <figure>
                                <img src="/public/images/upload/related-news-thumbnail4.jpg" alt="image" />
                            </figure>
                        </a>
                    </div>
                    <a href="blog-single.html">
                        <div class="flip-back active-details">
                            <h2 class="description-back tiny-title">Diam nonumy eirmod tempor</h2>
                            <div class="more-details tiny-active">
                                READ MORE
                            </div>
                        </div>
                    </a>
                </li>
                <!--End-->
                
                <!--Related 5-->
                <li class="flip">
                    <div class="flip-front">
                        <a href="blog-single.html">
                            <figure>
                                <img src="/public/images/upload/related-news-thumbnail5.jpg" alt="image" />
                            </figure>
                        </a>
                    </div>
                    <a href="blog-single.html">
                        <div class="flip-back active-details">
                            <h2 class="description-back tiny-title">Invidunt ut labore et dolore</h2>
                            <div class="more-details tiny-active">
                                READ MORE
                            </div>
                        </div>
                    </a>
                </li>
                <!--End-->
                
                <!--Related 6-->
                <li class="flip">
                    <div class="flip-front">
                        <a href="blog-single.html">
                            <figure>
                                <img src="/public/images/upload/related-news-thumbnail6.jpg" alt="image" />
                            </figure>
                        </a>
                    </div>
                    <a href="blog-single.html">
                        <div class="flip-back active-details">
                            <h2 class="description-back tiny-title">Magna aliquyam erat sed diam</h2>
                            <div class="more-details tiny-active">
                                READ MORE
                            </div>
                        </div>
                    </a>
                </li>
                <!--End-->
                
                <!--Related 7-->
                <li class="flip">
                    <div class="flip-front">
                        <a href="blog-single.html">
                            <figure>
                                <img src="/public/images/upload/related-news-thumbnail7.jpg" alt="image" />
                            </figure>
                        </a>
                    </div>
                    <a href="blog-single.html">
                        <div class="flip-back active-details">
                            <h2 class="description-back tiny-title">Accusam et justo duo dolores</h2>
                            <div class="more-details tiny-active">
                                READ MORE
                            </div>
                        </div>
                    </a>
                </li>
                <!--End-->
                
            </ul>
        </section>
        <!--Related News End-->
        
        <div class="clearfix"></div>
        
        <!--Comments Start-->
        <section class="comment-area">
        	<h1>comments<span class="comment-number"><?php echo $count; ?></span></h1>
            <ul>
                <?php
                foreach ($view_comment as $key) 
                {
                    echo '<li class="comment-list">';
                	echo '<div class="avatar-table">';
                    echo '<figure>';
                    echo '<img src="/public/images/upload/comment-avatar2.jpg" alt="avatar" />';
                    echo '</figure>';
                    echo '</div>';
                    echo '<div class="comment-table">';
                  	echo '<div class="comment-top">';
                    echo '<div class="name-date">';	
					$time = $key['time'];
                    echo  $key['name'].'<span class="comment-date">'.date("d-m-Y",$time).'</span>';
                    echo '</div>';
                    echo '<div class="reply">';
                    echo '<a href="#">Reply</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '<p>'. $key['comment'].'</p>';
                    echo '</div>';
                	echo '</li>';	
                }
                ?>
            </ul>
        </section>
        <!--Comments End-->
        
        <!--Leave a Comment Start-->
        <section class="comment-area">
        	<h1>leave a comment</h1>
            <div class="leave-comment">
            	
            	<form action="<?php echo $link ?>" role="form" method="post" enctype="multipart/form-data">
                    <input class="input-name" type="text" name="name" placeholder="Your name *" required />
                    <?php
					if(isset($error['name']))
						{
							echo '<div class="error">';
							foreach($error['name'] as $message){
								echo $message.' ';
							}
	                        echo '</div>';
						}
					?>
                    <input class="input-email" type="text" name="email" placeholder="Your email *" required />
                    <?php
					if(isset($error['email']))
						{
							echo '<div class="error">';
							foreach($error['email'] as $message){
								echo $message.' ';
							}
	                        echo '</div>';
						}
					?>
                    <textarea class="input-textarea" name="comment" placeholder="Comment *" required></textarea>
                    <?php
					if(isset($error['comment']))
						{
							echo '<div class="error">';
							foreach($error['comment'] as $message){
								echo $message.' ';
							}
	                        echo '</div>';
						}
					?>
                    <div class="comment-active">
                    	<span>All fields are mandatory.</span>
                    	<input class="submit-button" type="submit" value="SUBMIT COMMENT"/>
                    </div>
                </form>
            </div>
        </section>
        <!--Leave a Comment End-->
        
    </div>
    <!--Blog Content End-->
    
    <!--Sidebar Start-->
    <aside class="sidebar">
    
    	<!--Recent News Start-->
    	<div class="sidebar-box">
        	<div class="sidebar-title">
            	<h2>recent news</h2>
            </div>
            <div class="sidebar-details">
            	<ul class="recent">
                	
                    <!--Recent 1 Start-->
                    <?php
                    $curl = new Curl();
					
                    foreach ($recent as $key) 
                    {
	                   $q = array(
							'id' => trim($key['_id']),
							'height' => 65,
							'width' => 65
						);
						
						$curl->get('http://admin.cms.deboxs.com:8055/api/getimagecontent', $q);
						$rest = $curl->response;
						
						$json = json_decode($rest, TRUE);
						
						$url = '';
						if($json['status'] == "OK")
						{
							$url = $json['url'];
						}
						
                       echo '<li>';
                       echo '<div class="recent-list">';
                       echo '<figure>';
                       echo '<a href="/contentdetil/index?id='.$key['_id'].'">';
                       echo '<div class="cover sidebar-cover">';
                       echo '<div class="cover-background"></div>';
                       echo '</div>';
                       echo '<img src="'.$url.'" alt="thumbnail" />';
                       echo '</a>';
                       echo '</figure>';
                       echo '<div class="recent-details">';
                       echo '<h4><a href="/contentdetil/index?id='.$key['_id'].'">'.$key['title'].'</a></h4>';
                       echo '<a href="/contentdetil/index?id='.$key['_id'].'">';
                       echo '<div class="readmore">';
                       echo 'read more';
                       echo '</div>';
                       echo '</a>';
                       echo '</div>';
                       echo '</div>';
                       echo '</li>';
                    }
                    ?>
                    <!--End-->
                </ul>
            </div>
        </div>
        <!--Recent News End-->
        
        <!--Categories Start-->
    	<div class="sidebar-box">
        	<div class="sidebar-title">
            	<h2>categories</h2>
            </div>
            <div class="sidebar-details">
            	<ul class="category">
                	<li>
                    	<div class="category-list">
                            <a href="#">
                                <span>Consetetur sadipscing</span>
                            </a>
                        </div>
                    </li>
                    <li>
                    	<div class="category-list">
                            <a href="#">
                                <span>Lorem ipsum dolor</span>
                            </a>
                        </div>
                    </li>
                    <li>
                    	<div class="category-list">
                            <a href="#">
                                <span>Sed diam nonumy</span>
                            </a>
                        </div>
                    </li>
                    <li>
                    	<div class="category-list">
                            <a href="#">
                                <span>Magna aliquyam erat</span>
                            </a>
                        </div>
                    </li>
                    <li>
                    	<div class="category-list">
                            <a href="#">
                                <span>At vero eos et accusam</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--Categories End-->
        
        <!--Gallery Start-->
    	<div class="sidebar-box">
        	<div class="sidebar-title">
            	<h2>gallery</h2>
            </div>
            <ul class="gallery">
            	<li>
                	<div class="gallery-list">
                        <figure>
                            <a href="/public/images/fullscreen/full-screen17.jpg" rel="prettyPhoto" title="Image description">
                                <div class="cover sidebar-cover">
                                    <div class="cover-background"></div>
                                </div>
                                <img src="/public/images/upload/gallery-thumbnail-small1.jpg" alt="Image Title" />
                            </a>
                        </figure>
                    </div>
                </li>
                <li>
                	<div class="gallery-list">
                        <figure>
                            <a href="/public/images/fullscreen/full-screen18.jpg" rel="prettyPhoto" title="Image description">
                                <div class="cover sidebar-cover">
                                    <div class="cover-background"></div>
                                </div>
                                <img src="/public/images/upload/gallery-thumbnail-small2.jpg" alt="Image Title" />
                            </a>
                        </figure>
                    </div>
                </li>
                <li>
                	<div class="gallery-list">
                        <figure>
                            <a href="/public/images/fullscreen/full-screen11.jpg" rel="prettyPhoto" title="Image description">
                                <div class="cover sidebar-cover">
                                    <div class="cover-background"></div>
                                </div>
                                <img src="/public/images/upload/gallery-thumbnail-small3.jpg" alt="Image Title" />
                            </a>
                        </figure>
                    </div>
                </li>
                <li>
                	<div class="gallery-list">
                        <figure>
                            <a href="/public/images/fullscreen/full-screen7.jpg" rel="prettyPhoto" title="Image description">
                                <div class="cover sidebar-cover">
                                    <div class="cover-background"></div>
                                </div>
                                <img src="/public/images/upload/gallery-thumbnail-small4.jpg" alt="Image Title" />
                            </a>
                        </figure>
                    </div>
                </li>
                <li>
                	<div class="gallery-list">
                        <figure>
                            <a href="/public/images/fullscreen/full-screen1.jpg" rel="prettyPhoto" title="Image description">
                                <div class="cover sidebar-cover">
                                    <div class="cover-background"></div>
                                </div>
                                <img src="/public/images/upload/gallery-thumbnail-small5.jpg" alt="Image Title" />
                            </a>
                        </figure>
                    </div>
                </li>
                <li>
                	<div class="gallery-list">
                        <figure>
                            <a href="/public/images/fullscreen/full-screen10.jpg" rel="prettyPhoto" title="Image description">
                                <div class="cover sidebar-cover">
                                    <div class="cover-background"></div>
                                </div>
                                <img src="/public/images/upload/gallery-thumbnail-small6.jpg" alt="Image Title" />
                            </a>
                        </figure>
                    </div>
                </li>
                <li>
                	<div class="gallery-list">
                        <figure>
                            <a href="/public/images/fullscreen/full-screen13.jpg" rel="prettyPhoto" title="Image description">
                                <div class="cover sidebar-cover">
                                    <div class="cover-background"></div>
                                </div>
                                <img src="/public/images/upload/gallery-thumbnail-small7.jpg" alt="Image Title" />
                            </a>
                        </figure>
                    </div>
                </li>
                <li>
                	<div class="gallery-list">
                        <figure>
                            <a href="/public/images/fullscreen/full-screen3.jpg" rel="prettyPhoto" title="Image description">
                                <div class="cover sidebar-cover">
                                    <div class="cover-background"></div>
                                </div>
                                <img src="/public/images/upload/gallery-thumbnail-small8.jpg" alt="Image Title" />
                            </a>
                        </figure>
                    </div>
                </li>
                <li>
                	<div class="gallery-list">
                        <figure>
                            <a href="/public/images/fullscreen/full-screen8.jpg" rel="prettyPhoto" title="Image description">
                                <div class="cover sidebar-cover">
                                    <div class="cover-background"></div>
                                </div>
                                <img src="/public/images/upload/gallery-thumbnail-small9.jpg" alt="Image Title" />
                            </a>
                        </figure>
                    </div>
                </li>
                <li>
                	<div class="gallery-list">
                        <figure>
                            <a href="/public/images/fullscreen/full-screen9.jpg" rel="prettyPhoto" title="Image description">
                                <div class="cover sidebar-cover">
                                    <div class="cover-background"></div>
                                </div>
                                <img src="/public/images/upload/gallery-thumbnail-small10.jpg" alt="Image Title" />
                            </a>
                        </figure>
                    </div>
                </li>
                <li>
                	<div class="gallery-list">
                        <figure>
                            <a href="/public/images/fullscreen/full-screen16.jpg" rel="prettyPhoto" title="Image description">
                                <div class="cover sidebar-cover">
                                    <div class="cover-background"></div>
                                </div>
                                <img src="/public/images/upload/gallery-thumbnail-small11.jpg" alt="Image Title" />
                            </a>
                        </figure>
                    </div>
                </li>
                <li>
                	<div class="gallery-list">
                        <figure>
                            <a href="/public/images/fullscreen/full-screen4.jpg" rel="prettyPhoto" title="Image description">
                                <div class="cover sidebar-cover">
                                    <div class="cover-background"></div>
                                </div>
                                <img src="/public/images/upload/gallery-thumbnail-small12.jpg" alt="Image Title" />
                            </a>
                        </figure>
                    </div>
                </li>
            </ul>
        </div>
        <!--Gallery End-->
        
        <!--Archive Start-->
    	<div class="sidebar-box">
        	<div class="sidebar-title">
            	<h2>archive</h2>
            </div>
            <div class="sidebar-details">
            	<ul class="category">
                	<li>
                    	<div class="category-list">
                            <a href="#">
                                <span>November 2013 (5)</span>
                            </a>
                        </div>
                    </li>
                    <li>
                    	<div class="category-list">
                            <a href="#">
                                <span>October 2013 (15)</span>
                            </a>
                        </div>
                    </li>
                    <li>
                    	<div class="category-list">
                            <a href="#">
                                <span>September 2013 (12)</span>
                            </a>
                        </div>
                    </li>
                    <li>
                    	<div class="category-list">
                            <a href="#">
                                <span>August 2013 (10)</span>
                            </a>
                        </div>
                    </li>
                    <li>
                    	<div class="category-list">
                            <a href="#">
                                <span>July 2013 (22)</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--Archive End-->
        
        <!--Tags Start-->
    	<div class="sidebar-box">
        	<div class="sidebar-title">
            	<h2>popular tags</h2>
            </div>
            <ul class="sidebar-tags">
            	<a href="#">
                    <li>
                        <div class="tags-list">
                            lorem ipsum
                        </div>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <div class="tags-list">
                            takimata
                        </div>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <div class="tags-list">
                            justo
                        </div>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <div class="tags-list">
                            eirm
                        </div>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <div class="tags-list">
                            aliquyam
                        </div>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <div class="tags-list">
                            vero
                        </div>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <div class="tags-list">
                            ipsum
                        </div>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <div class="tags-list">
                            voluptua
                        </div>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <div class="tags-list">
                            et justo
                        </div>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <div class="tags-list">
                            aliquyam
                        </div>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <div class="tags-list">
                            vero
                        </div>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <div class="tags-list">
                            aliquyam
                        </div>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <div class="tags-list">
                            ipsum
                        </div>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <div class="tags-list">
                            justo
                        </div>
                    </li>
                </a>
            </ul>
        </div>
        <!--Tags End-->
        
    </aside>
    <!--Sidebar End-->
    
</section>
<!--Container End-->


<div class="clearfix"></div>
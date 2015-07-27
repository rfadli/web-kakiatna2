      <!--Page Header Start-->
        <section class="page-header">
        	<div class="content">
            	
                <!--Title Start-->
            	<div class="header-title">
            		<?php
            		$db = Db::init();
            		$judul = $db->category_content;
					$q = array(
						'_id' => new MongoId($mdata['category_content']),
					);
					$mjudul = $judul->findOne($q);
					echo '<h1>'.$mjudul['name'].'</h1>';
					
					echo '<div class="sub-title">';
                    echo '<p>'.$mjudul['description'].'</p>';
                    echo '</div>';
            		?>
                </div>
                <!--Title End-->
                
                <!--Page Navigation Start-->
                <nav class="page-navigation">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </nav>
                <!--Page Navigation End-->
                
            </div>
        </section>
        <!--Page Header End-->
        
        <!--Container Start-->
        <section class="container blog">
        	
            <!--Blog Content Start-->
            <div class="blog-content">
            	<ul class="content-list">
                	
                    <!--Blog Start-->
                    <?php
                    $curl = new Curl();
					
                    foreach ($data as $ddt) 
                    {
                    	$q = array(
							'id' => trim($ddt['_id']),
							'height' => 502,
							'width' => 704
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
                    	echo '<div class="thumb-hover">';
                        echo '<figure>';
                        echo '<a href="/contentdetil/index?id='.$ddt['_id'].'">';
                        echo '<div class="cover">';
                        echo '<div class="plus-hover"></div>';
                        echo '<div class="cover-background"></div>';
                        echo '</div>';
                        echo '<img src="'.$url.'" alt="blog thumbnail" />';
                        echo '</a>';
                        echo '</figure>';
                        echo '</div>';
                        echo '<div class="blog-details">';
                        echo '<h2><a href="/contentdetil/index?id='.$ddt['_id'].'">'.$ddt['title'].'</a></h2>';
                        echo '<p>'.$ddt['content'].'</p>';
                        echo '<div class="bottom-active">';
                        echo '<nav class="blog-meta">';
                        echo '<span class="status">Date</span><a href="#"><span class="blog-meta-details">'.date("d-m-Y",$ddt['time_created']).'</span></a>';
                        echo '<span class="status">Post in</span><a href="#"><span class="blog-meta-details">Photography</span></a>';
                        echo '<span class="status">By</span><a href="#"><span class="blog-meta-details">Admin</span></a>';
                        echo '</nav>';
                        echo '<a href="/contentdetil/index?id='.$ddt['_id'].'">';
                        echo '<div class="readmore-button">';
                        echo '<span>READ MORE</span>';
                        echo '</div>';
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';
                    	echo '</li>';
                    }
                    ?>
                    <!--Blog End-->
                    
                </ul>
                
                <!--Next page Start-->
               <?php echo $pagination;?>
                <!--Next page End-->
                
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
                                echo '<h4><a href=/contentdetil/index?id='.$key['_id'].'">'.$key['title'].'</a></h4>';
                                echo '<a href=/contentdetil/index?id='.$key['_id'].'">';
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
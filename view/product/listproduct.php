 <!--Page Header Start-->
        <section class="page-header">
        	<div class="content">
            	
                <!--Title Start-->
            	<div class="header-title">
            		<?php
            		$db = Db::init();
            		$judul = $db->category_product;
					$q = array(
						'_id' => new MongoId($mdata['category_product']),
					);
					$mjudul = $judul->findOne($q);
					echo '<h1>'.$mjudul['name'].'</h1>';
					
					$type = $db->type_product;
					$q = array(
						'type' => new MongoId($mdata['category_product']),
					);
					$datatype = $type->find($q);
					echo '<div class="category-filter">';
                    echo '<ul>';
					echo '<li class="filter active" data-filter="all">All</li>';
					foreach($datatype as $typ)
					{
                    	echo '<li class="filter" data-filter="'.trim($typ['_id']).'">'.$typ['name'].'</li>';
					}
					echo '</ul>';
                    echo '</div>';
            		?>
                    
                        	
                        
                    
                </div>
                <!--Title End-->
                
                <!--Page Navigation Start-->
                <nav class="page-navigation">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Product</a></li>
                    </ul>
                </nav>
                <!--Page Navigation End-->
                
            </div>
        </section>
        <!--Page Header End-->
        
        <!--Portfolio Start-->
        <section class="container portfolio">
        	<ul class="grid">
                
                <!--Portfolio 1-->
                <?php
                 $curl = new Curl();
				 foreach ($data as $ddt)
				 {
				 	$q = array(
							'id' => trim($ddt['_id']),
							'height' => 241,
							'width' => 241,
							'type' => 'dua'
						);
						
						$curl->get('http://admin.cms.deboxs.com:8055/api/getimageproduct', $q); //getimageproduct
						$rest = $curl->response;
						
						$json = json_decode($rest, TRUE);
						
						$url = '';
						if($json['status'] == "OK")
						{
							$url = $json['url'];
						}
					
					$type_product = "";
					if(isset($ddt['type_product']))
						$type_product = $ddt['type_product'];
				 	echo '<li class="flip mix '.$type_product.'" data-name="name1">';
                    echo '<div class="flip-front">';
                    echo '<a href="/productdetil/index?id='.$ddt['_id'].'">';
                    echo '<figure>';
                    echo '<img src="'.$url.'" alt="image" />';
                    echo '</figure>';
                    echo '</a>';
                    echo '</div>';
                    echo '<a href="/productdetil/index?id='.$ddt['_id'].'">';
                    echo '<div class="flip-back active-details">';
                    echo '<h2 class="title-back">'.$ddt['title'].'</h2>';
                    echo '<p class="description-back">'.util::limitString($ddt['content']) .'</p>';
                    echo '<div class="more-details">';
                    echo 'MORE DETAILS';
                    echo '</div>';
                    echo '</div>';
                    echo '</a>';
                	echo '</li>';
				 }
                ?>
                <!--End-->
                
            </ul>
        </section>
        <!--Portfolio End-->

<div class="clearfix"></div>

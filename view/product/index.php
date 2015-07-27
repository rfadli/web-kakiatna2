 <!--Page Header Start-->
    <section class="page-header">
    	<div class="content">
        	
            <!--Title Start-->
        	<div class="header-title">
                <h1><?php echo $page_header; ?></h1>
                <div class="sub-title">
                    <p><?php echo $page_description; ?></p>
                </div>
            </div>
            <!--Title End-->
            
            <!--Page Navigation Start-->
            <nav class="page-navigation">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#"><?php echo $page_header; ?></a></li>
                </ul>
            </nav>
            <!--Page Navigation End-->
            
        </div>
    </section>
    <!--Page Header End-->
    
    <!--Portfolio Start-->
    <section class="container service">
		<?php
		foreach ($data as $ddt) 
		{
			echo '<ul>';
			echo '<li class="flip">';
			echo '<a href="/product/productlist?id='.$ddt['_id'].'">';
	        echo '<div class="flip-front">';
	        echo '<div class="service-icon">';
	        echo '<br /><br />';
	        echo '<h2 style="color: #FFFFFF">'.$ddt['name'].'</h1>';
	        echo '</div><br />';
	       
	        echo '</div>';
	        echo '<div class="flip-back active-details">';
	        echo '<h2 class="title-back">'.$ddt['name'].'</h2>';
	        echo '<p class="description-back">'.$ddt['name'].'</p>';
	        echo '<div class="more-details">';
	    	echo 'MORE DETAILS';
	        echo '</div>';
	        echo '</div>';
	        echo '</a>';
	    	echo '</li>';
			echo '</ul>';
		}
		?>
    </section>
    <!--Service End-->

<div class="clearfix"></div>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title><?php echo $webtitle; ?></title>

<?php echo $css; ?>

<!--[if lte IE 8]>
<meta HTTP-EQUIV="REFRESH" content="0; url=/welcome/lteie8">
<![endif]-->

</head>

<body>

	<!--Main Menu Start-->
    <header class="header-section">
    	
        <!--Navigation Menu-->
        <nav class="main-menu">
        	<ul>
        		<?php
        		$db = Db::init();
				$mn = $db->menu;
				$q = array(
					'contributor_id' => CLIENT_ID
				);
				$dd = $mn->find($q);
				foreach($dd as $ddt)
				{
					
				}
        		?>
            	
            	<?php echo $sidebarmenu; ?>
            </ul>
        </nav>
        
        <div id="navbtn">
            <a href="#">
                <img src="/public/images/hide-menu.png" alt="responsive menu" />
            </a>
        </div>
        <!--Navigation Menu End-->
        
        <!--Logo-->
        <div class="logo">
        	<a href="/"><img src="/public/media/logo2.png" height="61" alt="logo" /></a>
        </div>
        <!--Logo End-->
        
        <!--Social Media-->
        <nav class="social-main">
        	<ul>
        		<?php
        		$db = Db::init();
				$pre = $db->preference;
				$array = array(
					'contributor_id' => CLIENT_ID
				);
				$b = $pre->findOne($array);	
				$facebook = "#";
				$twitter = "#";
				$google = "#";
				if(isset($b['_id']))
				{
					if(isset($b['twitter']))
						$twitter = $b['twitter'];
					if(isset($b['facebook']))
						$facebook = $b['facebook'];
					if(isset($b['google']))
						$google = $b['google'];
				}
        		?>
            	<li><a href="<?php echo $facebook; ?>"><img src="/public/images/social-icon/social-icon-facebook.png" alt="Facebook" onMouseOver="this.src='/public/images/social-icon/social-icon-facebook-hover.png';" onMouseOut="this.src='/public/images/social-icon/social-icon-facebook.png';" /></a></li>
                <li><a href="<?php echo $twitter; ?>"><img src="/public/images/social-icon/social-icon-twitter.png" alt="Twitter" onMouseOver="this.src='/public/images/social-icon/social-icon-twitter-hover.png';" onMouseOut="this.src='/public/images/social-icon/social-icon-twitter.png';" /></a></li>
                <li><a href="<?php echo $google; ?>"><img src="/public/images/social-icon/social-icon-google-plus.png" alt="Google Plus" onMouseOver="this.src='/public/images/social-icon/social-icon-google-plus-hover.png';" onMouseOut="this.src='/public/images/social-icon/social-icon-google-plus.png';" /></a></li>
            </ul>
        </nav>
        <!--Social Media End-->
        
    </header>
    <!--Main Menu End-->
    
    <!--All Content Start-->
    <div class="wrapper">
            
           <?php echo $content; ?>
            
    </div>
    <!--All Content End-->
    
    <div class="clearfix"></div>
    
    <!--Footer Start-->
    <footer class="footer-section">
    
    	<!--Footer About Us-->
    	<section class="footer-about">
        	<div class="footer-content">
                <figure>
                    <img src="/public/media/LOGO_SUGAR_white.png" width="108" alt="footer logo" />
                </figure>
                <div class="footer-text">
                	<?php
                	$prefer = $db->preference;
					$query = array(
						'contributor_id' => CLIENT_ID
					);
					$mprefer = $prefer->findOne($query);
					
					echo '<br />';
					echo '<p>'.$mprefer['description'].'</p>';
                	?>
                   
                </div>
            </div>
        </section>
        <!--Footer About Us End-->
        
        <!--Footer Contact-->
        <section class="footer-contact">
        	<h2 class="footer-title">CONTACT INFO</h2>
        	<div class="footer-content">
            	<ul>
                	<li>
                		<?php
                		$client = $db->client;
						$array = array(
							"_id" => new mongoId(CLIENT_ID)
						);
						$mcli = $client->findOne($array);
						
						echo '<div class="contact-list footer-text">';
                        echo '<span>'.$mcli['company'].'</span>';
                        echo '</div>';
                		?>
                    </li>
                    <li>
                    	<?php
                    	echo '<div class="contact-list footer-text email">';
                        echo '<span>'.$mcli['email'].'</span>';
                        echo '</div>';
                    	?>
                    </li>
                    <li>
                    	<?php
                    	echo '<div class="contact-list footer-text phone">';
                        echo '<span>'.$mcli['phone'].'</span>';
                        echo '</div>';
                    	?>
                    </li>
                </ul>
            </div>
        </section>
        <!--Footer Contact End-->
        
        <!--Footer Subscribe-->
        <section class="footer-subscribe">
        	<h2 class="footer-title">NEWSLETTER</h2>
        	<div class="footer-content">
            	<div class="footer-text">
                	<p>Subscribe now for free tips, update item and our promotion.</p>
                </div>
                <div class="subscribe-box">
                	<form>
                    	<input class="first-name" type="text" name="firstname" placeholder="First name *" required />
                        <input class="last-name" type="text" name="lastname" placeholder="Last name *" required />
                        <input class="email" type="text" name="email" placeholder="Your email address *" required />
                        <input class="subscribe-button" type="submit" value="SUBSCRIBE"/>
                    </form>
                </div>
            </div>
        </section>
        <!--Footer Subscribe End-->
        
        <div class="clearfix"></div>
        
        <!--Footer Bottom-->
        <section class="footer-bottom">
        	<div class="copyright">
            	Copyright © All Rights Reserved. <a href="#">yourdomain.com</a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>
        </section>
        <!--Footer Bottom End-->
        
        <!--Go To Top-->
        <a href="#" class="back-to-top"></a>
        <!--End-->
        
    </footer>
    <!--Footer End-->

	<?php echo $js; ?>
    <?php echo $tambahan; ?>
    

</body>
</html>

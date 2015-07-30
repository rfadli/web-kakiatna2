<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->

<html lang="en-US" style="background:url(/public/images/patterns/9.png) 50% 50% repeat;">
 <!--<![endif]-->

<!-- head -->
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<!-- meta -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Cake</title>

<meta name="description" content="Cake works with every business. No matter if you are cooker, blogger, designer or an astronaut - this wordpress theme is for everyone!" />
<meta name="keywords" content="cake, wordpress, muffingroup, muffin builder, muffin options, page builder, theme, template, parallax, contact form 7, mega menu" />

<link rel="shortcut icon" href="/public/images/favicon.ico" type="image/x-icon" />	


<script>
//<![CDATA[
window.mfn_slider_vertical	= { autoplay:0 	};
window.mfn_slider_portfolio 	= { autoPlay:0 };
//]]>
</script>

<?php echo $css;?>

	
<style>
.page-id-3716 h2 { word-wrap: break-word; }
.page-id-4311 .icon_box .desc_wrapper .desc { padding: 0 40px; }
.page-id-10459 .icon_box h4.title { word-wrap: break-word; }
.page-id-10756 #Footer { display:none;}
.page-id-10772 #Content { padding-top:0 !important;}
#Top_bar.is-sticky #logo img { max-height:40px; width:auto !important;}
</style>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


</head>

<!-- body -->
<body class="page page-child parent-pageid-4311 page-template-default template-slider  color-custom layout-boxed sticky-header">
<!-- #Wrapper -->
<div id="Wrapper">
	<!-- #Action_bar -->
	<div id="Action_bar">
		<ul id="menu-action-menu" class="top-bar-menu">
			<li class="menu-item  current-menu-item page_item current_page_item "><a href="index.html">Home</a></li>
			<li class="menu-item  "><a href="help.html">Help Center</a></li>
			<li class="menu-item  "><a href="about-us.html">About us</a></li>
			<li class="menu-item  "><a href="contact.html">Contact</a></li>
			<li class="menu-item  menu-item-10792"><a href="#">Buy it</a></li>
		</ul>
		<div class="contact_info">
			<p class="phone">
				<i class="icon-phone"></i><a href="#">+61 (0) 3 8376 6284</a>
			</p>
			<p class="mail">
				<i class="icon-mail-line"></i><a href="#">noreply@envato.com</a>
			</p>
		</div>
	</div>
	<!-- #Header -->
	<header id="Header">
	<!-- .header_placeholder 4sticky  -->
	<div class="header_placeholder">
	</div>
	<div id="Top_bar">
		<div class="container">
			<div class="column one">
				<!-- .logo -->
				<div class="logo">
					<h1><a id="logo" href="home-corporate.html" title="Cake"><img class="scale-with-grid" src="/public/upload/gambar/logo_dark.png" alt="Cake"/></a></h1>
				</div>
				<!-- .menu_wrapper -->
				<div class="menu_wrapper">
					<!-- .header_action_button -->
					
					<!-- .header_cart -->
					
					<!-- #searchform -->
					

					<!-- #menu -->
					<nav id="menu" class="menu-main-menu-container">
					<ul id="menu-main-menu" class="menu">
						<?php
	                	if($_SERVER['REQUEST_URI'] == '/')
						{
							echo '<li class="menu-item  current-menu-item page_item page-item-4311 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children"><a href="/"><b><span>Home</span></b></a></li>';
						}
						else
						{
							echo '<li class="menu-item"><a href="/"><b><span style="color: #3C191A">Home</span></b></a></li>';
						}
	                	?>
	                	
	                	<?php
	                	if($_SERVER['REQUEST_URI'] == '/aboutus/index/')
						{
							echo '<li class="menu-item  current-menu-item page_item page-item-4311 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children"><a href="/aboutus/index/"><b><span">About Us</span></b></a></li>';
						}
						else
						{
							echo '<li class="menu-item"><a href="/aboutus/index/"><b><span style="color: #3C191A">About Us</span></b></a></li>';
						}
	                	?>
	                	
	                	<?php
	                	if($_SERVER['REQUEST_URI'] == '/career/index/')
						{
							echo '<li class="menu-item  current-menu-item page_item page-item-4311 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children"><a href="/career/index/"><b><span>Career</span></b></a></li>';
						}
						else
						{
							echo '<li class="menu-item"><a href="/career/index/"><b><span style="color: #3C191A">Career</span></b></a></li>';
						}
	                	?>
	                	
	                	<?php
	                	//if(($_SERVER['REQUEST_URI'] == '/category/index') || (substr($_SERVER['REQUEST_URI'],1,9 ) == 'category/' ))
	                	if(($_SERVER['REQUEST_URI'] == '/media/index/') || (substr($_SERVER['REQUEST_URI'],1,13 ) == 'contentdetil/' ) || (substr($_SERVER['REQUEST_URI'],1,16 ) == 'contentcategory/' ))
						{
							echo '<li class="menu-item  current-menu-item page_item page-item-4311 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children"><a href="/media/index/"><b><span>Media</span></b></a></li>';
						}
						else
						{
							echo '<li class="menu-item"><a href="/media/index/"><b><span style="color: #3C191A">Media</span></b></a></li>';
						}
	                	?>
	                	
	                	<?php
	                	if($_SERVER['REQUEST_URI'] == '/contact/index/')
						{
							echo '<li class="menu-item  current-menu-item page_item page-item-4311 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children"><a href="/contact/index/"><b><span>Contact</span></b></a></li>';
						}
						else
						{
							echo '<li class="menu-item"><a href="/contact/index/"><b><span style="color: #3C191A">Contact</span></b></a></li>';
						}
	                	?>
	                	
						<!--li class="menu-item  current-menu-item page_item page-item-4311 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children"><a href="home-corporate.html"><b><span>Home</span></b></a></li-->
						<!--li class="menu-item  "><a href="/aboutus/index/"><b><span style="color: #3C191A">About Us</span></b></a></li-->
						<!--li class="menu-item  "><a href="/business/index/"><b><span style="color: #3C191A">Business</span></b></a></li-->
						<!--li class="menu-item  "><a href="/career/index/"><b><span style="color: #3C191A">Career</span></b></a></li-->
						<!--li class="menu-item  "><a href="med.html"><b><span style="color: #3C191A">Media</span></b></a></li-->
						<!--li class="menu-item  "><a href="contact.html"><b><span style="color: #3C191A">Contact</span></b></a></li-->
						
					</ul>
					</nav><a class="responsive-menu-toggle" href="#"><i class='icon-menu'></i></a>
				</div>
			</div>
		</div>
	</div>

		
	</header>


	<!-- #Content -->
	<?php echo $content; ?>

	<!-- #Footer -->
	<footer id="Footer" class="clearfix">

	<div class="footer_copy">
		<div class="container">
			<div class="column one">
				<a id="back_to_top" href="#"><i class="icon-up-open-big"></i></a>
				<!-- Copyrights -->
				<div class="copyright">
					 &copy; 2015 Cake. All Rights Reserved. <a target="_blank" rel="nofollow" href="#">Max Themes</a>
				</div>
				<!-- Social -->
				
			</div>
		</div>
	</div>
	</footer>
</div>





<script type='text/javascript' src='/public/js/jquery/jquery.js'></script>
<script type='text/javascript' src='/public/js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='/public/rs-plugin/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='/public/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>

<script>
//<![CDATA[
jQuery(window).load(function(){
var retina = window.devicePixelRatio > 1 ? true : false;if(retina){var retinaEl = jQuery("#logo img");var retinaLogoW = retinaEl.width();var retinaLogoH = retinaEl.height();retinaEl.attr("src","upload/logo_retina.png").width(retinaLogoW).height(retinaLogoH)}});
//]]>
</script>
	

<script type="text/javascript">

	/******************************************
		-	PREPARE PLACEHOLDER FOR SLIDER	-
	******************************************/
	

	var setREVStartSize = function() {
		var	tpopt = new Object();
			tpopt.startwidth = 1200;
			tpopt.startheight = 700;
			tpopt.container = jQuery('#rev_slider_4_1');
			tpopt.fullScreen = "on";
			tpopt.forceFullWidth="off";

		tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
	};

	/* CALL PLACEHOLDER */
	setREVStartSize();


	var tpj=jQuery;
	tpj.noConflict();
	var revapi4;

	tpj(document).ready(function() {

	if(tpj('#rev_slider_4_1').revolution == undefined){
		revslider_showDoubleJqueryError('#rev_slider_4_1');
	}else{
	   revapi4 = tpj('#rev_slider_4_1').show().revolution(
		{	
									dottedOverlay:"none",
			delay:6000,
			startwidth:1200,
			startheight:700,
			hideThumbs:200,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:1,
			
									
			simplifyAll:"off",

			navigationType:"none",
			navigationArrows:"solo",
			navigationStyle:"round",

			touchenabled:"on",
			onHoverStop:"on",
			nextSlideOnWindowFocus:"off",

			swipe_threshold: 0.7,
			swipe_min_touches: 1,
			drag_block_vertical: false,
			
									
									
			keyboardNavigation:"off",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:20,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:70,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:70,
			soloArrowRightVOffset:0,

			shadow:0,
			fullWidth:"off",
			fullScreen:"on",

									spinner:"spinner0",
									
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,

			shuffle:"off",

			
			forceFullWidth:"off",
			fullScreenAlignForce:"off",
			minFullScreenHeight:"",
			hideTimerBar:"on",
			hideThumbsOnMobile:"off",
			hideNavDelayOnMobile:1500,
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,

									fullScreenOffsetContainer: ".header-bg #Top_bar",
			fullScreenOffset: "",
									hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0					});



						}
	});	/*ready*/

</script>


<script type='text/javascript' src='/public/js/jquery.form.min.js'></script>

<script type='text/javascript' src='/public/js/frontend/add-to-cart.min.js'></script>
<script type='text/javascript' src='/public/js/select2/select2.min.js'></script>
<script type='text/javascript' src='/public/js/jquery-blockui/jquery.blockUI.min.js'></script>
<script type='text/javascript' src='/public/js/frontend/woocommerce.min.js'></script>
<script type='text/javascript' src='/public/js/jquery-cookie/jquery.cookie.min.js'></script>

<script type='text/javascript' src='/public/js/frontend/cart-fragments.min.js'></script>
<script type='text/javascript' src='/public/js/jquery/ui/core.min.js'></script>
<script type='text/javascript' src='/public/js/jquery/ui/widget.min.js'></script>
<script type='text/javascript' src='/public/js/jquery/ui/mouse.min.js'></script>
<script type='text/javascript' src='/public/js/jquery/ui/sortable.min.js'></script>
<script type='text/javascript' src='/public/js/jquery/ui/tabs.min.js'></script>
<script type='text/javascript' src='/public/js/jquery/ui/accordion.min.js'></script>
<script type='text/javascript' src='/public/js/owl-carousel/owl.carousel.min.js'></script>
<script type='text/javascript' src='/public/js/jquery.jplayer.min.js'></script>
<script type='text/javascript' src='/public/js/jquery.plugins.js'></script>
<script type='text/javascript' src='/public/js/mfn.menu.js'></script>
<script type='text/javascript' src='/public/js/scripts.js'></script>




</body>
</html>
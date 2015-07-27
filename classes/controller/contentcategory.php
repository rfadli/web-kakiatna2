<?php
class contentcategory_controller extends controller
{
	public function index()
	{
		$id = $_GET['id'];
		
		$db = Db::init();
		$content = $db->content;
		$q = array(
			'category_content' => new MongoId($id),
			'contributor_id' => CLIENT_ID,
		);
		$mcontent = $content->find($q);
		
		$p = array(
			'page_header' => "Dashboard",
			'page_description' => "Dashboard",
			'mcontent' => $mcontent,
		);
		$content = $this->getView(DOCVIEW.'contentcategory/index.php', $p);
		$this->addView('content', $content);
		
		//$this->tambah();
		$this->render(array());
	}
	/*
	protected function tambah()
	{
		$phold = '<script type="text/javascript">'."\n";
		$phold .= '$(document).ready(function(){'."\n";
		$phold .= '"use strict";'."\n";
		$phold .= '$("#layerslider").layerSlider({'."\n";
		$phold .= 'skinsPath : "/public/layerslider/skins/",'."\n";
		$phold .= 'skin : "borderlessdark3d",'."\n";
		$phold .= 'thumbnailNavigation : "hover",'."\n";
		$phold .= 'showCircleTimer : true,'."\n";	
		$phold .= 'showBarTimer : true,'."\n";		
		$phold .= 'touchNav : true,'."\n";	
		$phold .= 'navStartStop : true,'."\n";		
		$phold .= 'animateFirstSlide : true,'."\n";	
    	$phold .= 'responsive : true,'."\n";	
		$phold .= '});'."\n";	
		$phold .= 'var offset = 220;'."\n";		
		$phold .= 'var duration = 500;'."\n";	
		$phold .= 'jQuery(window).scroll(function() {'."\n";		
		$phold .= 'if (jQuery(this).scrollTop() > offset) {'."\n";
		$phold .= 'jQuery(".back-to-top").fadeIn(duration);'."\n";		
		$phold .= '} else {'."\n";
		$phold .= 'jQuery(".back-to-top").fadeOut(duration);'."\n";
		$phold .= '}'."\n";
		$phold .= '});'."\n";
		$phold .= 'jQuery(".back-to-top").click(function(event) {'."\n";
		$phold .= 'event.preventDefault();'."\n";
		$phold .= 'jQuery("html, body").animate({scrollTop: 0}, duration);'."\n";
		$phold .= 'return false;'."\n";
		$phold .= '})'."\n";
		$phold .= '});'."\n";
		$phold .= '</script>'."\n";
		$this->tambahan->add($phold);
	}*/
	
	public function lteie8()
	{
		$content = $this->getView(DOCVIEW.'template/lte-ie8.php', array());
		echo $content;
	}
}
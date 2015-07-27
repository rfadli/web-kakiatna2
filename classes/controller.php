<?php

class controller
{
	public $css;
	public $js;
	public $tambahan;
	public $view;
	public $controller_name;
	
	public function __construct()
	{
		$this->view = array();
		$this->tambahan = new tambahan;
		$this->css = new css;
		
		$this->css->add("/css/cform.css");
		$this->css->add("/css/tp_twitter_plugin.css");
		$this->css->add("/rs-plugin/css/settings.css");
		$this->css->add("/css/select.css");
		$this->css->add("/css/woocommerce-layout.css");
		$this->css->add("/css/woocommerce-smallscreen.css");
		$this->css->add("/css/woocommerce.css");
		$this->css->add("/css/style.css");
		$this->css->add("/css/prettyPhoto.css");
		$this->css->add("/css/blue.monday/jplayer.blue.monday.css");
		$this->css->add("/css/ui/jquery.ui.all.css");
		$this->css->add("/css/responsive.css");
		$this->css->add("/css/style-colors.css");
		$this->css->add("/css/style-2.css");
		$this->css->add("/css/woocommerce.css");
		$this->css->add("/css/fonts/mfn-icons.css");
		$this->css->add("/css/custom.css");
		$this->css->add("/css/skins/green/images.css");
		$this->css->add("http://fonts.googleapis.com/css?family=Ubuntu%3A100%2C300%2C400%2C400italic%2C700&amp;ver=4.2");
		//$this->css->add('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Open+Sans+Condensed:300,700');

		$this->js = new js;
		$this->js->add("/js/owl-carousel/owl.carousel.css");
		$this->js->add("/js/owl-carousel/owl.theme.css");
		//-------------//
		$this->js->add("/js/jquery.form.min.js");
		$this->js->add("/js/frontend/add-to-cart.min.js");
		$this->js->add("/js/select2/select2.min.js");
		$this->js->add("/js/jquery-blockui/jquery.blockUI.min.js");
		$this->js->add("/js/frontend/woocommerce.min.js");
		$this->js->add("/js/jquery-cookie/jquery.cookie.min.js");
		$this->js->add("/js/frontend/cart-fragments.min.js");
		$this->js->add("/js/jquery/ui/core.min.js");
		$this->js->add("/js/jquery/ui/widget.min.js");
		$this->js->add("/js/jquery/ui/mouse.min.js");
		$this->js->add("/js/jquery/ui/sortable.min.js");
		$this->js->add("/js/jquery/ui/tabs.min.js");
		$this->js->add("/js/jquery/ui/accordion.min.js");
		$this->js->add("/js/owl-carousel/owl.carousel.min.js");
		$this->js->add("/js/jquery.jplayer.min.js");
		$this->js->add("/js/jquery.plugins.js");
		$this->js->add("/js/mfn.menu.js");
		$this->js->add("/js/scripts.js");
		
		$phold = '<script type="text/javascript">'."\n";
		$phold .= '$.fn.placeholder();'."\n";
		$phold .= '</script>'."\n";
		$this->tambahan->add($phold);
		
		$pphoto = '<script type="text/javascript">'."\n";
		$pphoto .= '$(function(){'."\n";
		$pphoto .= '"use strict";'."\n";
		$pphoto .= '$(".grid").mixitup();'."\n";
		$pphoto .= '});'."\n";
		$pphoto .= '</script>'."\n";
		$this->tambahan->add($pphoto);
		
		$pmix = '<script type="text/javascript">'."\n";
		$pmix .= '$(document).ready(function(){'."\n";
		$pmix .= '$("a[rel^='.'prettyPhoto'.']").prettyPhoto();});'."\n";
		$pmix .= '</script>'."\n";
		$this->tambahan->add($pmix);
		
		
		$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		if($path == "/")
		{
			$this->controller_name = 'welcome';
		}
		else {
			$pp = explode("/", $path);
			$this->controller_name = $pp[1];
		}
	
		/*if(!isset($_SESSION['userid']) && ($path != '/account/login') 
			&& ($path != '/account/register') && ($path != '/error/err404'))
		{
			$this->redirect('/account/login');
			exit;
		}	*/
	}
	
	protected function addView($name, $view)
	{
		$p = array(
			'name' => $name,
			'view' => $view
		);
		$this->view[] = $p;
	}
	
	protected function redirect($page)
	{
		header( 'Location: '.$page ) ;
	}
	
	protected function getView($filename, $variable)
	{
		extract($variable);
		ob_start();
		(include $filename);
		$content = ob_get_contents();
		ob_end_clean ();
		return $content;
	}
	
	protected function render($variable)
	{
		$p = array();
		foreach($this->view as $view)
		{
			$p[$view['name']] = $view['view'];
		}
		$p['css'] = $this->css->getCss();
		$p['js'] = $this->js->getJs();
		$p['tambahan'] = $this->tambahan->getTambahan();
		
		$arr = array(
			'controller_name' => $this->controller_name
		);
		$sidebarmenu = $this->getView(DOCVIEW.'template/sidebarmenu.php', $arr);
		$p['sidebarmenu'] = $sidebarmenu;
		
		$db = Db::init();
		$pr = $db->client;
		$pref = $pr->findone(array('_id' => new MongoId(CLIENT_ID)));
		$webtitle = 'sugar';
		if(isset($pref['_id']))
			$webtitle = $pref['company'];
		$p['webtitle'] = $webtitle;
		
		$variable = array_merge($p, $variable);
		$view = $this->getView(DOCVIEW.'template/template-kakiatna.php', $variable);
		echo $view;
	}
}

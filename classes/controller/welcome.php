<?php

class welcome_controller extends controller
{
	public function index()
	{
		$db = Db::init();
		$content = $db->content;
		$q = array(
			'category_content' => new MongoId(SLIDER_ID),
			'contributor_id' => CLIENT_ID,
		);
		$mcontent = $content->find($q);
		
		//$tw = $this->getLatestTweet();
		$p = array(
			'page_header' => "Dashboard",
			'page_description' => "Dashboard",
			'mcontent' => $mcontent,
			//'lastest_tweet' => $tw['text'],
			//'lastest_tweet_time' => $tw['time'],
		);
		$content = $this->getView(DOCVIEW.'welcome/index.php', $p);
		$this->addView('content', $content);
		
		$this->tambah();
		$this->render(array());
	}
	
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
	}
	
	private function getLatestTweet()
	{
		//include_once(DOCROOT.'public/twitter/TwitterOAuth.php');
		
		$db = Db::init();
		$preference = $db->preference;
		$array = array(
			'contributor_id' => CLIENT_ID,
		);
		$mprf = $preference->findOne($array);
		$twitter_screen_name = '';
		if(isset($mprf['twitter_screen_name']))
		{
			$twitter_screen_name = $mprf['twitter_screen_name'];
		}

		$twitter_customer_key           = '';
		$twitter_customer_secret        = '';
		$twitter_access_token           = '';
		$twitter_access_token_secret    = '';

		if(isset($mprf['appidtwitter']))
		{
			$twitter_customer_key = $mprf['appidtwitter'];
		}
		if(isset($mprf['secretkeytwitter']))
		{
			$twitter_customer_secret = $mprf['secretkeytwitter'];
		}
		if(isset($mprf['tokentwitter']))
		{
			$twitter_access_token = $mprf['tokentwitter'];
		}
		if(isset($mprf['tokensecrettwitter']))
		{
			$twitter_access_token_secret = $mprf['tokensecrettwitter'];
		}

		//$twitter_customer_key           = 'R6ucvOqX3EtQjODSDqEUg';
		//$twitter_customer_secret        = 'ZPplmZFZ6bwgJ8TVmsPqwfErLXSs5d7dYHmRJcMLmO8';
		//$twitter_access_token           = '66638553-PeyhEqA19yXQnWFXfAJLqys6MwPP0plXI8HPcns';
		//$twitter_access_token_secret    = ' 6t3rwWcBjnkFaTsAKqXrUr3BkEFhVmCTLSWFZo28';
		
		/*echo  $twitter_screen_name.'<br />';
		echo $twitter_customer_key.'<br />';
		echo $twitter_customer_secret.'<br />';
		echo $twitter_access_token.'<br />';
		echo $twitter_access_token_secret.'<br />';
		die;*/
		$connection = new TwitterOAuth($twitter_customer_key, $twitter_customer_secret, $twitter_access_token, $twitter_access_token_secret);

		$my_tweets = $connection->get('statuses/user_timeline', array('screen_name' => $twitter_screen_name, 'count' => 1));

		if(isset($my_tweets->errors))
		{
			$p = array(
				'time' => 'error',
				'text' => 'Error :'. $my_tweets->errors[0]->code. ' - '. $my_tweets->errors[0]->message
			);          
    		return $p;
		}
		
		//print_r($my_tweets);
		$timestamp = strtotime($my_tweets[0]->created_at);
		$tt = helper::time_elapsed_string($timestamp);
		$p = array(
			'time' => $tt,
			'text' => $my_tweets[0]->text
		);
		
		//echo $my_tweets[0]->created_at.'<br />';
		//echo $timestamp.'<br />';
		//echo date('d-m-Y H:i:s', $timestamp).'<br />';
		//die;
		return $p;
	}
	
	public function lteie8()
	{
		$content = $this->getView(DOCVIEW.'template/lte-ie8.php', array());
		echo $content;
	}
}

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
		
		$slider = array(
			'category_content' => new MongoId(SLIDER),
			'contributor_id' => CLIENT_ID,
		);
		$mslider = $content->find($slider);
		
		$subsidiaries = array(
			'category_content' => new MongoId(SUBSIDIARIES),
			'contributor_id' => CLIENT_ID,
		);
		$msubsidiaries = $content->find($subsidiaries);
		
		//$tw = $this->getLatestTweet();
		$p = array(
			'page_header' => "Dashboard",
			'page_description' => "Dashboard",
			'mcontent' => $mcontent,
			'mslider' => $mslider,
			'msubsidiaries' => $msubsidiaries
			//'lastest_tweet' => $tw['text'],
			//'lastest_tweet_time' => $tw['time'],
		);
		$content = $this->getView(DOCVIEW.'welcome/index.php', $p);
		$this->addView('content', $content);
		
		//$this->tambah();
		$this->render(array());
	}
	
	public function lteie8()
	{
		$content = $this->getView(DOCVIEW.'template/lte-ie8.php', array());
		echo $content;
	}
}

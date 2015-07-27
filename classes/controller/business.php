
<?php

class business_controller extends controller
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
		$content = $this->getView(DOCVIEW.'business/index.php', $p);
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

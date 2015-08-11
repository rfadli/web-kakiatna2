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
		
		$news = array(
			'category_content' => new MongoId(NEWS),
			'contributor_id' => CLIENT_ID,
		);
		$limit = 1;
		$mnews = $content->find($news)->sort(array("time_created" => -1))->limit($limit);
		
		$blog = array(
			'category_content' => new MongoId(BLOG),
			'contributor_id' => CLIENT_ID,
		);
		$limit = 1;
		$mblog = $content->find($blog)->sort(array("time_created" => -1))->limit($limit);
		
		$p = array(
			'page_header' => "Dashboard",
			'page_description' => "Dashboard",
			'mcontent' => $mcontent,
			'mslider' => $mslider,
			'msubsidiaries' => $msubsidiaries,
			'mnews' => $mnews,
			'mblog' => $mblog
		);
		$content = $this->getView(DOCVIEW.'welcome/index.php', $p);
		$this->addView('content', $content);
		
		$this->render(array());
	}
	
	public function lteie8()
	{
		$content = $this->getView(DOCVIEW.'template/lte-ie8.php', array());
		echo $content;
	}
}

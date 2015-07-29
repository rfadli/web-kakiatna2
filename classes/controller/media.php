<?php
class media_controller extends controller
{
	public function index()
	{
		$db = Db::init();
		$content = $db->content;
		$news = array(
			'category_content' => new MongoId(NEWS),
			'contributor_id' => CLIENT_ID,
		);
		$mnews = $content->findOne($news);
		
		$blog = array(
			'category_content' => new MongoIdOne(BLOG),
			'contributor_id' => CLIENT_ID,
		);
		$mblog = $content->find($blog);
		
		$p = array(
			'page_header' => "Media",
			'page_description' => "Media",
			'mnews' => $mnews,
			'mblog' => $blog
		);
		$content = $this->getView(DOCVIEW.'media/index.php', $p);
		$this->addView('content', $content);
		
		$this->render(array());
	}
	
	public function lteie8()
	{
		$content = $this->getView(DOCVIEW.'template/lte-ie8.php', array());
		echo $content;
	}
}

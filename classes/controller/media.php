<?php
class media_controller extends controller
{
	public function index()
	{
		//$id = $_GET['id'];
		
		$page = "";
		if (isset($_GET['page']))
			$page = $_GET['page'];
		
		if(strlen(trim($page)) > 0)
			$page = intval($page);
		else
			$page = 1;
		
		$docs_per_page = 3;
		$skip = (int)($docs_per_page * ($page - 1));
		
		
		$db = Db::init();
		$content = $db->content;
		$news = array(
			'category_content' => new MongoId(NEWS),
			'contributor_id' => CLIENT_ID,
		);
		$c = $content->find($news)->limit($docs_per_page)->skip($skip)->sort(array("time_created" => -1));
		$count = $content->count($news);
		//$mcontent = $content->find($q);
		
		$blog = array(
			'category_content' => new MongoId(BLOG),
			'contributor_id' => CLIENT_ID,
		);
		//$limit = 1;
		//$mblog = $content->find($blog)->sort(array("time_created" => -1))->limit($limit);
		$d = $content->find($blog)->limit($docs_per_page)->skip($skip)->sort(array("time_created" => -1));
		$count = $content->count($blog);
		
		$pg = new Pagination();
		$pg -> pag_url = "/media/index?".'&page='.'%#-5';
		$pg -> calculate_pages($count, $docs_per_page, $page);
		
		
		
		$press_kit = array(
			'category_content' => new MongoId(PRESS_KIT),
			'contributor_id' => CLIENT_ID,
		);
		$mpress_kit = $content->findOne($press_kit);
		
		$press_release = array(
			'category_content' => new MongoId(PRESS_RELEASE),
			'contributor_id' => CLIENT_ID,
		);
		$mpress_release = $content->findOne($press_release);
		
		$p = array(
			'page_header' => "Media",
			'page_description' => "Media",
			'mnews' => $c,
			'pagination' => $pg->Show(),
			'idx' => (($page-1)*$docs_per_page)+1,
			'mblog' => $d,
			'mpress_kit' => $mpress_kit,
			'mpress_release' => $mpress_release
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

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

		$this->render(array());
	}
	
	
	public function lteie8()
	{
		$content = $this->getView(DOCVIEW.'template/lte-ie8.php', array());
		echo $content;
	}
}
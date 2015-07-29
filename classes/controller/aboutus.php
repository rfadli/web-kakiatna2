<?php

class aboutus_controller extends controller
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
		
		$vision = array(
			'category_content' => new MongoId(VISION),
			'contributor_id' => CLIENT_ID,
		);
		$mvision = $content->find($vision);
		
		$mission = array(
			'category_content' => new MongoId(MISSION),
			'contributor_id' => CLIENT_ID,
		);
		$mmission = $content->find($mission);
		
		
		$p = array(
			'page_header' => "About Us",
			'page_description' => "About Us",
			'mcontent' => $mcontent,
			'mvision' => $mvision,
			'mmission' => $mmission
			
		);
		$content = $this->getView(DOCVIEW.'aboutus/index.php', $p);
		$this->addView('content', $content);
		
		//$this->tambah();
		$this->render(array());
	}
	
	
}

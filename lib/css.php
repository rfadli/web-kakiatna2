<?php

class css
{
	protected $datcss;
	
	public function __construct()
	{
		$this->datcss = array();
	}
	
	public function add($link, $rel="stylesheet", $type="text/css")
	{
		$p = array(
			'link' => $link,
			'rel' => $rel,
			'type' => $type
		);
		$this->datcss[] = $p;
	}
	
	public function getCss()
	{
		$hasil = "";
		foreach($this->datcss as $d)
		{
			$hasil .= '<link href="'.$d['link'].'" rel="'.$d['rel'].'" type="'.$d['type'].'" />'."\n";
		}
		
		return $hasil;
	}
}

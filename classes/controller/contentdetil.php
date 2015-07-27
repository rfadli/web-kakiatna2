<?php

class contentdetil_controller extends controller
{
	public function index()
	{
		$id = $_GET['id'];
		
		$db = Db::init();
		$content = $db->content;
		$q = array(
			'_id' => new MongoId($id),
			'contributor_id' => CLIENT_ID,
		);
		$data = $content->findOne($q);
		
		$b = array(
			'category_content' => new MongoId(NEWS_ID),
			'contributor_id' => CLIENT_ID,
		);
		$limit = 10;
		$recent = $content->find($b)->sort(array('time_created' => -1))->limit($limit);
		
		//comment//
		$stt = $db->comment;
		$j = array(
			"content_id" => new MongoId($id),
			"contributor_id" => CLIENT_ID
		);
		$view_comment = $stt->find($j); //view comment
		$count = $stt->count($j); //coment count
		
		$dat = $stt->find();
		$error = array();
		if(!empty($_POST))
		{
			$name = '';
			if(isset($_POST['name']));
				$name = trim($_POST['name']);
			
			$email = '';
			if(isset($_POST['email']));
				$email = trim($_POST['email']);
			
			$comment = '';
			if(isset($_POST['comment']));
				$comment = trim($_POST['comment']);
			
			
			$validator = new Validator();
			$validator->addRule('name', array('require'));
			$validator->addRule('email', array('require'));
			$validator->addRule('comment', array('require'));
			
			$validator->setData(array(
				"name" => $name,
				"email" => $email,
				"comment" => $comment,
			));
			
			if($validator->isValid())
			{
				$db = Db::init();
				$stt = $db->comment;
				$dat = array(
					'name' => $name,
					'email' => $email,
					'comment' => $comment,
					'content_id' => new MongoId($id),
					'contributor_id' => CLIENT_ID,
					'time' => time(),
				);
				
				$stt->insert($dat);
				
				header("Location: ".'/contentdetil/index?id='.$id);
				return;
			}
			else
			{
				$error = $validator->getErrors();
			}
		}
		else
		{
			$name = '';
			$email = '';
			$comment = '';
		}
		$link = "/contentdetil/index?id=".$id;
		
		$p = array(
			'page_header' => "Content",
			'page_description' => "Content",
			'name' => $name,
			'email' => $email,
			'comment' => $comment,
			'error' => $error,
			'view_comment' => $view_comment,
			'data' => $data,
			'dat' => $dat,
			'recent' => $recent,
			'count' => $count,
			'link' => $link
		);
		
		$content = $this->getView(DOCVIEW.'contentdetil/index.php', $p);
		$this->addView('content', $content);
		//$this->tambah();
		$this->render(array());
	}
	/*
	protected function tambah()
	{
		$phold = '<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>'."\n";
		$phold .= '<script>'."\n";
		$phold .= 'function initialize() {'."\n";
		$phold .= '"use strict";'."\n";

  		$phold .= 'var mapOptions = {'."\n";
   	 	$phold .= 'zoom: 15,'."\n";
    	$phold .= 'center: new google.maps.LatLng(-37.817941, 144.964977),'."\n";
    	$phold .= 'mapTypeId: google.maps.MapTypeId.ROADMAP'."\n";
  		$phold .= '};'."\n";

  		$phold .= 'var map = new google.maps.Map(document.getElementById("map-canvas"),'."\n";
      	$phold .= 'mapOptions);'."\n";

  		$phold .= 'var marker = new google.maps.Marker({'."\n";
    	$phold .= 'position: map.getCenter(),'."\n";
    	$phold .= 'map: map,'."\n";
    	$phold .= 'title: "Location Name"'."\n";
  		$phold .= '});'."\n";

  		$phold .= 'google.maps.event.addListener(marker, "click", function() {'."\n";
    	$phold .= 'map.setZoom(8);'."\n";
    	$phold .= 'map.setCenter(marker.getPosition());'."\n";
  		$phold .= '});'."\n";
		$phold .= '}'."\n";

		$phold .= 'google.maps.event.addDomListener(window, "load", initialize);'."\n";

		$phold .= '</script>';
		$this->tambahan->add($phold);
		
		$phold = '<script type="text/javascript">'."\n";
		$phold .= '$("#email_submit").click(function() {'."\n";
				
		$phold .= '"use strict";'."\n";
									
		$phold .= '$("#reply_message").removeClass();'."\n";
		$phold .= '$("#reply_message").html("")'."\n";
		$phold .= 'var regEx = "";'."\n";	 
												
		$phold .= 'var name = $("input#name").val();'."\n";
		$phold .= 'regEx=/^[A-Za-z .\'-]+$/;'."\n";
		$phold .= 'if (name == "" || name == "Name"  || !regEx.test(name)) {'."\n";
		$phold .= '$("input#name").val("");'."\n";
		$phold .= '$("input#name").focus();'."\n";
		$phold .= 'return false;'."\n";
		$phold .= '}'."\n";
									  
		$phold .= 'var email = $("input#email").val();'."\n";
		$phold .= 'regEx=/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;'."\n";										
		$phold .= 'if (email == "" || email == "Email" || !regEx.test(email)) {'."\n";
		$phold .= '$("input#email").val("");'."\n";
		$phold .= '$("input#email").focus()'."\n";  
		$phold .= 'return false;'."\n";
		$phold .= '}'."\n";
							
		$phold .= 'var mysubject = $("input#mysubject").val();'."\n";
		$phold .= 'regEx=/^[A-Za-z .\'-]+$/;'."\n";
		$phold .= 'if (mysubject == "" || mysubject == "Mysubject"  || !regEx.test(mysubject)) {'."\n";
		$phold .= '$("input#mysubject").val("");'."\n";
		$phold .= '$("input#mysubject").focus(); '."\n";
		$phold .= 'return false;'."\n"; 
		$phold .= '}'."\n";
						
		$phold .= 'var comments = $("textarea#comments").val();'."\n";
		$phold .= 'if (comments == "" || comments == "Comments..." || comments.length < 2) {'."\n";
		$phold .= '$("textarea#comments").val("");'."\n";
		$phold .= '$("textarea#comments").focus(); '."\n";
		$phold .= 'return false;'."\n";  
		$phold .= '}'."\n";
									
		$phold .= 'var dataString = "name="+ $("input#name").val() + "&email=" + $("input#email").val() + "&mysubject="+ $("input#mysubject").val() + "&comments=" + $("textarea#comments").val();'."\n";									
		$phold .= '$("#reply_message").addClass("email_loading");'."\n";
				
		// Send form data to mailer.php 
		$phold .= '$.ajax({'."\n";
		$phold .= 'type: "POST",'."\n";
		$phold .= 'url: "mailer.php",'."\n";
		$phold .= 'data: dataString,'."\n";
		$phold .= 'success: function() {'."\n";
		$phold .= '$("#reply_message").removeClass("email_loading");'."\n";
		$phold .= '$("#reply_message").addClass("list3");'."\n";
		$phold .= '$("#reply_message").html("Mail sent successfully")'."\n";
		$phold .= '.hide()'."\n";
		$phold .= '.fadeIn(1500);'."\n";
		$phold .= '$("#form_contact")[0].reset();'."\n";
		$phold .= '}'."\n";
		$phold .= '});'."\n";
		$phold .= 'return false;'."\n";
				
		$phold .= '});'."\n";
		$phold .= '</script>'."\n";
		$this->tambahan->add($phold);
	}*/
}
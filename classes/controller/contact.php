<?php

class contact_controller extends controller
{
	public function index()
	{
		$var = array();
		if(!empty($_POST))
		{
			$name = "";
			if(isset($_POST['name']))
				$name = $_POST['name'];
			$email = "";
			if(isset($_POST['email']))
				$email = $_POST['email'];
			$mysubject = "";
			if(isset($_POST['mysubject']))
				$mysubject = $_POST['mysubject'];
			$comments = "";
			if(isset($_POST['comments']))
				$comments = $_POST['comments'];
			
			$validator = new Validator();
			$validator->addRule('name', array('require', 'minlength' => 5));
			$validator->addRule('email', array('require', 'email', 'minlength' => 5));
			$validator->addRule('mysubject', array('require', 'minlength' => 5));
			$validator->addRule('comments', array('require', 'minlength' => 5));
			$validator->setData(
	                array(
						'name' => $name,
						'email' => $email,
						'mysubject' => $mysubject,
						'comments' => $comments
	            	)
			);
	                    			
	        if ($validator->isValid())
			{
				$db = Db::init();
				$contact = $db->contacts;
				
				$p = array(
					'contributor_id' => CLIENT_ID,
					'name' => $name,
					'email' => $email,
					'mysubject' => $mysubject,
					'comments' => $comments,
					'time' => time()
				);
				$contact->insert($p);
				
				$var = array(
					'page_header' => "Contact Us",
					'page_description' => "Contact Us",
					'link' => '/contact/index',
					'contact' => 'yes'
				);
			}
		}
		else
		{
			$var = array(
				'page_header' => "Contact Us",
				'page_description' => "Contact Us",
				'link' => '/contact/index'
			);	
		}
		
		$content = $this->getView(DOCVIEW.'contact/index.php', $var);
		$this->addView('content', $content);
		$this->tambah();
		$this->render(array());
	}
	
	protected function tambah()
	{
		$db = Db::init();
		$con = $db->preference;
		$ar = array(
			'contributor_id' => CLIENT_ID
		);
		$dbc = $con->findone($ar);
		$lat = 0;
		$long = 0;
		if(isset($dbc['_id']))
		{
			if(isset($dbc['lat']))
				$lat = $dbc['lat'];
			if(isset($dbc['long']))
				$long = $dbc['long'];
		}
				
		$phold = '<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>'."\n";
		$phold .= '<script>'."\n";
		$phold .= 'function initialize() {'."\n";
		$phold .= '"use strict";'."\n";

  		$phold .= 'var mapOptions = {'."\n";
   	 	$phold .= 'zoom: 15,'."\n";
    	$phold .= 'center: new google.maps.LatLng('.$lat.', '.$long.'),'."\n";
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
	}
}
<?php
session_start();
date_default_timezone_set("Asia/Jakarta");
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
session_set_cookie_params(604800, "/"); // satu minggu
define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);
define('BASEPATH', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);
define('DOCVIEW', DOCROOT."view".DIRECTORY_SEPARATOR);
define('CLIENT_ID', '555c40751295956e3d8b4568'); //contibutor_id
define('SLIDER_ID', '55b5b4a4129595f7368b45e8'); //category_content
define('SUBSIDIARIES', '55b8515c129595f7368b45e9');

define('HOTPROMO_ID', '555ef303129595f8368b4598');
define('EVENT_ID', '555c531f129595f7368b4577');
define('DIVE_ID', '555c5334129595f7368b4578');
define('NEWS_ID', '555c5366129595f7368b4579');
define('YOUTUBE_ID', '555f0a33129595f7368b4595');
define('FIND_BROCHURE_ID', '556415ff1295956e3d8b457e');
define('ARTIST_ID', '555c524d1295956e3d8b4570');
define('ABOUTUS_ID', '556596211295956e3d8b4585');
define('PROUD_ID', '556597c51295956e3d8b4587');
define('ARTCRAFT_ID', '556597f51295956e3d8b458b');
define('CONSISTENSI_ID', '55659898129595f7368b459c');
define('PASSION_ID', '556597db1295956e3d8b4589');
define('CONTACT_INFORMATION_ID', '5566c6dc129595f7368b459f');

include_once(DOCROOT."lib/chilkat/chilkat_9_5_0.php");
include_once 'WideImage/WideImage.php';

function __autoload($class_name) {
	$s = explode("_", $class_name);
	if(count($s) == 1)
	{
		if(file_exists(DOCROOT."/classes/".$class_name . '.php'))
		{
	    	include DOCROOT."/classes/".$class_name . '.php';
		}
		else if(file_exists(DOCROOT."/lib/".$class_name . '.php'))
		{
			include DOCROOT."/lib/".$class_name . '.php';
		}
		else if(file_exists(DOCROOT."lib/twitter/".$class_name . '.php'))
		{
			include DOCROOT."lib/twitter/".$class_name . '.php';
		}
		else if(file_exists(DOCROOT."lib/twitter/Util/".$class_name . '.php'))
		{
			include DOCROOT."lib/twitter/Util/".$class_name . '.php';
		}
	}
	else {
		if(file_exists(DOCROOT."/classes/".$s[1]."/".$s[0] . '.php'))
		{
			include DOCROOT."/classes/".$s[1]."/".$s[0] . '.php';
		}
	}
	
}
/*
function fatal_handler() {
  $errfile = "unknown file";
  $errstr  = "shutdown";
  $errno   = E_CORE_ERROR;
  $errline = 0;

  $error = error_get_last();

  if( $error !== NULL) {
    $errno   = $error["type"];
    $errfile = $error["file"];
    $errline = $error["line"];
    $errstr  = $error["message"];

	$error_text = $errstr."<br />";
	$error_text .= "on file : ".$errfile."<br />";
	$error_text .= "on line : ".$errline."<br />";
	
	$r = new error_controller();
	$r->err404($errno, $error_text, true);
	
  }
}

function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    if (!(error_reporting() & $errno)) {
        // This error code is not included in error_reporting
        return;
    }

	$error_text = $errstr."<br />";
	$error_text .= "on file : ".$errfile."<br />";
	$error_text .= "on line : ".$errline."<br />";
	
	$r = new error_controller();
	$r->err404($errno, $error_text, true);
    
    return true;
}*/

//$old_error_handler = set_error_handler("myErrorHandler");
//register_shutdown_function( "fatal_handler" );

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$_POST = security::xss_clean($_POST);
$_GET = security::xss_clean($_GET);
if($path == "/")
{
	$r = new welcome_controller();
	$r->index();
}
else {
	$adacontent = false;
	$pp = explode("/", $path);
	if(count($pp) > 2)
	{
		if (class_exists($pp[1].'_controller')) {
			$rr = $pp[1].'_controller';
			$r = new $rr();
			if(method_exists($r, $pp[2]))
			{
				$r->$pp[2]();
				$adacontent = true;
			}
			else {
				if($rr == 'information_controller')
				{
					if(isset($pp[2]))
					{
						if(method_exists($r, 'detail'))
						{
							if($r->detail($pp[2]))
								$adacontent = true;
						}
					}
				}
				else if($rr == 'publisher_controller')
				{
					if(isset($pp[2]))
					{
						if($r->detail($pp[2]))
							$adacontent = true;
					}
				}
				else if($rr == 'author_controller')
				{
					if(isset($pp[2]))
					{
						if($r->detail($pp[2]))
							$adacontent = true;
					}
				}
				else if($rr == 'book_controller')
				{
					if(isset($pp[2]))
					{
						if($r->detail($pp[2]))
							$adacontent = true;
					}
				}
				else if($rr == 'reader_controller')
				{
					if(isset($pp[2]))
					{
						if($r->detail($pp[2]))
							$adacontent = true;
					}
				}
				else if($rr == 'category_controller')
				{
					if(isset($pp[2]))
					{
						if($r->detail($pp[2]))
							$adacontent = true;
					}
				}
				else if($rr == 'search_controller')
				{
					if(isset($pp[2]))
					{
						if($r->detail($pp[2]))
							$adacontent = true;
					}
				}
				else if($rr == 'util_controller')
				{
					if(isset($pp[2]))
					{
						if($r->detail($pp[2]))
							$adacontent = true;
					}
				}
			}
		}
		// /api/classapi/method
		if(count($pp) > 3)
		{
			if (class_exists($pp[2].'_api')) 
			{
				$rr = $pp[2].'_api';
				$r = new $rr();
				if(method_exists($r, $pp[3]))
				{
					$r->$pp[3]();
					$adacontent = true;
				}
			}
		}
	}
	if(!$adacontent)
	{
		$r = new error_controller();
		$err = "We are sorry, the page you've requested is not available.";
		$r->err404("404", $err);
	}
}		

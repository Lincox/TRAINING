<?php
	// get protocol.
	$url = $_SERVER['HTTP_HOST'].'/';
	$protocol = empty($_SERVER["HTTPS"]) ? 'http://' : 'https://';
	
	// get host.
	$app_url = $protocol.$_SERVER['HTTP_HOST'].'/';
	define('APP_URL', $app_url);
	define('APP_PATH', dirname(__FILE__).'/');
	define("APP_URL_SHORT", "//".$url);
	define("APP_URL_HTTPS", "https://".$url);
	define('APP_ASSETS', APP_URL_SHORT.'assets/');
	define('APP_PATH_WP', dirname(__FILE__).'/wp/');
	
	define("APP_SP_URL",  APP_URL."sp/");
	define("APP_SP_PATH", APP_PATH."sp/");
	
	
	/* email list for forms */

	//contact 
	$aMailtoContact = array('vntesttongali@gmail.com');
	$aBccToContact = array('vntesttongali2@gmail.com');
	$fromContact = "vntesttongali@gmail.com"; 
	
	//event 
	$aMailtoEvent = array('vntesttongali@gmail.com');
	$aBccToEvent = array('vntesttongali2@gmail.com');
	$fromEvent = "vntesttongali@gmail.com"; 
	
	//request 
	$aMailtoRequest = array('vntesttongali@gmail.com');
	$aBccToRequest = array('vntesttongali2@gmail.com');
	$fromRequest = "vntesttongali@gmail.com";
	
	

?>
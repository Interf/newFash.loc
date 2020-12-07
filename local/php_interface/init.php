<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


function dump($data, $exit = false) {
	echo "<pre>" . print_r($data, 1) . "</pre>";
	if($exit) {
		exit();
	}
}


if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/eventAuth.php")) {
	include_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/eventAuth.php");
}
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


function dump($data, $exit = false) {
	echo "<pre>" . print_r($data) . "</pre>";
	if($exit) {
		exit();
	}
}
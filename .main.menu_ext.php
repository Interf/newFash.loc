<?
global $APPLICATION;

$homeLink = Array(
	Array(
		"Home", 
		"/", 
		Array(), 
		Array(), 
		"" 
	)
);

$aSectLink = $APPLICATION->IncludeComponent(
	"bitrix:menu.sections",
	"",
	Array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DEPTH_LEVEL" => "1",
		"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "info",
		"ID" => $_REQUEST["ID"],
		"IS_SEF" => "Y",
		"SECTION_PAGE_URL" => "#SECTION_CODE#/",
		"SECTION_URL" => "",
		"SEF_BASE_URL" => "/catalog/"
	)
);


$aMenuLinks = array_merge($homeLink, $aSectLink, $aMenuLinks);

?>
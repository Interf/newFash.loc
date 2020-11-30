<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult['DISPLAY_PROPERTIES']['CATALOG_LINKS']['LINK_ELEMENT_VALUE'] as $arItem) {
	$arSectIds[] = $arItem['IBLOCK_SECTION_ID'];
}
$arSectIds = array_unique($arSectIds);

$rsSect = CIBlockSection::GetList(
    Array("SORT"=>"ASC"),
    Array("ID" => $arSectIds),
    false,
    Array("ID", "NAME", "SECTION_PAGE_URL"),
    false
);

while($rs = $rsSect->GetNext()) {
	$arResult["SECTION_INFO"][$rs['ID']] = $rs;
}
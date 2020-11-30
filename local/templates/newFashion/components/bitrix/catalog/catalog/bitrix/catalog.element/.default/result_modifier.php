<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

// sku
if(empty($arResult['PRICES'])) {

	foreach($arResult['SKU_PROPS']['COLOR']['VALUES'] as $colorSKU) {
		if($colorSKU['ID'] != 0) {
			$arColorInfo[$colorSKU['XML_ID']] = $colorSKU['PICT']['SRC'];
		}
	}


	foreach($arResult['OFFERS'] as $arOffer) {

		$arOfferInfo['OFFER_COLOR_SRC'][] = $arColorInfo[$arOffer['PROPERTIES']['COLOR']['VALUE']];

		foreach($arOffer['PRICES'] as $arPrice) {
			$arOfferInfo['PRICE'][] = $arPrice['PRINT_DISCOUNT_VALUE'];
			$arOfferInfo['DISCOUNT'][] = $arPrice['DISCOUNT_DIFF_PERCENT'];
			$arOfferInfo['OFFER_ID'][] = $arOffer['ID'];
		}

	}
	$arResult['OFFER_INFO'] = $arOfferInfo;

	// Current sku
	$arResult['PRICES']['OFFER']['ID'] = reset($arOfferInfo['OFFER_ID']);
	$arResult['PRICES']['OFFER']['PRINT_DISCOUNT_VALUE'] = reset($arOfferInfo['PRICE']);
	$arResult['PRICES']['OFFER']['DISCOUNT_DIFF_PERCENT'] = reset($arOfferInfo['DISCOUNT']);
}

// slider
foreach($arResult['PROPERTIES']['SLIDER']['VALUE'] as $arIDs) {
	$arResult['PROPERTIES']['SLIDER']['SRC'][] = CFile::GetPath($arIDs);
}

// Cache
$component->SetResultCacheKeys(array(
  "OFFER_INFO",
  "PROPERTIES",
  "NAME",
  "PRICES",
  "DETAIL_TEXT",
));
<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL; 
use Bitrix\Main\Entity;

Loader::includeModule("highloadblock"); 

$hlbl = 2; // Указываем ID нашего highloadblock блока к которому будет делать запросы.
$hlblock = HL\HighloadBlockTable::getById($hlbl)->fetch(); 

$entity = HL\HighloadBlockTable::compileEntity($hlblock); 
$entity_data_class = $entity->getDataClass(); 

$rsData = $entity_data_class::getList(array(
	"select" => array("*"),
	"order" => array("ID" => "ASC"),
));

while($arData = $rsData->Fetch()){
	$arHighLoad[$arData['UF_XML_ID']] = CFile::GetPath($arData['UF_FILE']);
}

foreach($arResult['ITEMS'] as &$arItem) {
	if(empty($arItem['PRICES'])) {

		foreach($arItem['OFFERS'] as $arOffer) {

			$arOfferInfo['OFFER_COLOR_SRC'][] = $arHighLoad[$arOffer['PROPERTIES']['COLOR']['VALUE']];

			foreach($arOffer['PRICES'] as $arPrice) {
				$arOfferInfo['PRICE'][] = $arPrice['PRINT_DISCOUNT_VALUE'];
				$arOfferInfo['DISCOUNT'][] = $arPrice['DISCOUNT_DIFF_PERCENT'];
				$arOfferInfo['OFFER_ID'][] = $arOffer['ID'];
			}

		}
		$arItem['OFFER_INFO'] = $arOfferInfo;
		// Current sku
		$arItem['PRICES']['OFFER']['ID'] = reset($arOfferInfo['OFFER_ID']);
		$arItem['PRICES']['OFFER']['PRINT_DISCOUNT_VALUE'] = reset($arOfferInfo['PRICE']);
		$arItem['PRICES']['OFFER']['DISCOUNT_DIFF_PERCENT'] = reset($arOfferInfo['DISCOUNT']);

		unset($arOfferInfo);
	}
}

// Cache
$component->SetResultCacheKeys(array(
  "ITEMS"
));
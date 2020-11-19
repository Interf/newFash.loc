<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use Bitrix\Sale;

$basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), Bitrix\Main\Context::getCurrent()->getSite());

$arResult['QUANTITY'] = array_sum($basket->getQuantityList());

unset($_SESSION['PROD_ID_IN_CART']);
foreach ($basket as $basketItem) {
	$_SESSION['PROD_ID_IN_CART'][] = $basketItem->getProductId();
}
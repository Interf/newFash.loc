<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Sale;

if(isset($_POST['ADD_ITEM_IN_CART'])) {

	

	$prod_id = intval($_POST['idItem']);
	$quantity = intval($_POST['quantity']);

	Bitrix\Main\Loader::includeModule("catalog");

	$fields = [
		'PRODUCT_ID' => $prod_id,
		'QUANTITY' => $quantity
	];

	$res = Bitrix\Catalog\Product\Basket::addProduct($fields);

	if (!$res->isSuccess()) {
		$result['ERRORS'] = $res->getErrorMessages();
	}

	if(!isset($result)) {
		$result["SUCCESS"] = "Y";
	}

	echo json_encode($result);
} 
else if(isset($_POST['DEL_ITEM_FROM_CART'])) {
	$prod_id = intval($_POST['prodId']);

	Bitrix\Main\Loader::includeModule("sale");
	Bitrix\Main\Loader::includeModule("catalog");

	$basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), Bitrix\Main\Context::getCurrent()->getSite());

	$basket->getItemById($prod_id)->delete();
	$basket->save();

	if(!isset($result)) {
		$result["SUCCESS"] = "Y";
	}

	echo json_encode($result);
}
else if(isset($_POST['CHANGE_QUAN_IN_CART'])) {
	$prod_id = intval($_POST['prodId']);
	$quantity = intval($_POST['quantity']);

	Bitrix\Main\Loader::includeModule("sale");
	Bitrix\Main\Loader::includeModule("catalog");

	$basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), Bitrix\Main\Context::getCurrent()->getSite());

	$basketItem = $basket->getItemById($prod_id);

	$res = $basketItem->setFields(array(
		'QUANTITY' => $quantity
	));
	$basket->save();

	if (!$res->isSuccess()) {
		$result['ERRORS'] = $res->getErrorMessages();
	}
	
	if(!isset($result)) {
		$result["SUCCESS"] = "Y";
	}

	echo json_encode($result);

}
else {
	LocalRedirect("/404.php", "404 Not Found");
}











require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
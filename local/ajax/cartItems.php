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


} else {
	LocalRedirect("/404.php", "404 Not Found");
}











require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
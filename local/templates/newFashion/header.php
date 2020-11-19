<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$isHome = ($APPLICATION->GetCurPage() == SITE_DIR) ? true : false;
use Bitrix\Main\Page\Asset;
?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title><?php $APPLICATION->ShowTitle(); ?></title>

<?php $APPLICATION->ShowHead(); ?>

<?php
Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH."/css/bootstrap.css");
Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH."/css/style.css");

Asset::getInstance()->AddString("<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'>");
Asset::getInstance()->AddString("<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'>");

Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH."/css/component.css");

Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH."/js/jquery.min.js");

Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH."/js/myScripts/addItemInCart.js");
Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH."/js/myScripts/headerHideForms.js");

// <!-- start menu -->
Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH."/css/megamenu.css");
Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH."/js/megamenu.js");
?>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start menu -->

<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
<!--header-->
<div class="<?=($isHome) ? 'header' : 'header2';?>">
	<div class="container">
		<div class="main-header">
			<div class="carting">
				<ul><li><a href="#" class="header_hide_forms"> LOGIN</a></li></ul>
				<div class="hide_container_rel">
					<div class="hide_container_abs">
						<ul>
							<a href="#" class="btn_hide_auth">
								<li>Вход</li>
							</a>
							/
							<a href="#" class="btn_hide_reg">
								<li>Регистрация</li>
							</a>
						</ul>
						<div class="hide_auth_container">
							<?php if(isset($_POST['AJAX_AUTH_FORM'])) {
								$APPLICATION->RestartBuffer();
							} ?>
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.auth.form",
								"header.auth.form",
								Array(
									"AUTH_FORGOT_PASSWORD_URL" => "",
									"AUTH_REGISTER_URL" => "",
									"AUTH_SUCCESS_URL" => ""
								)
								);?>
							<?php if(isset($_POST['AJAX_AUTH_FORM'])) {
								exit();
							} ?>
						</div>
						<div class="hide_reg_container">
							
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.register",
								"header.main.register",
								Array(
									"AUTH" => "Y",
									"REQUIRED_FIELDS" => array("EMAIL"),
									"SET_TITLE" => "N",
									"SHOW_FIELDS" => array("EMAIL"),
									"SUCCESS_PAGE" => "",
									"USER_PROPERTY" => array(),
									"USER_PROPERTY_NAME" => "",
									"USE_BACKURL" => "N"
								)
								);?>

						</div>
					</div>
				</div>
			</div>
			<div class="logo">
				<h3><a href="/">NEW FASHIONS</a></h3>
			</div>

			<div class="sale_basket_line">
			<?php if(isset($_POST['AJAX_SMALL_CART'])) {
				$APPLICATION->RestartBuffer();
			}?>		  
				<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "sale.basket.line", Array(
	"HIDE_ON_BASKET_PAGES" => "N",	// Не показывать на страницах корзины и оформления заказа
		"MAX_IMAGE_SIZE" => "70",	// Максимальный размер картинки товара
		"PATH_TO_AUTHORIZE" => "",	// Страница авторизации
		"PATH_TO_BASKET" => SITE_DIR."personal/cart/",	// Страница корзины
		"PATH_TO_ORDER" => SITE_DIR."personal/order/",	// Страница оформления заказа
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",	// Страница персонального раздела
		"PATH_TO_PROFILE" => SITE_DIR."personal/",	// Страница профиля
		"PATH_TO_REGISTER" => SITE_DIR."login/",	// Страница регистрации
		"POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
		"SHOW_AUTHOR" => "N",	// Добавить возможность авторизации
		"SHOW_DELAY" => "N",
		"SHOW_EMPTY_VALUES" => "Y",	// Выводить нулевые значения в пустой корзине
		"SHOW_IMAGE" => "Y",
		"SHOW_NOTAVAIL" => "N",
		"SHOW_NUM_PRODUCTS" => "Y",	// Показывать количество товаров
		"SHOW_PERSONAL_LINK" => "N",	// Отображать персональный раздел
		"SHOW_PRICE" => "Y",
		"SHOW_PRODUCTS" => "N",	// Показывать список товаров
		"SHOW_REGISTRATION" => "N",	// Добавить возможность регистрации
		"SHOW_SUMMARY" => "Y",
		"SHOW_TOTAL_PRICE" => "Y",	// Показывать общую сумму по товарам
	),
				false
				);?>
			<?php if(isset($_POST['AJAX_SMALL_CART'])) {
				exit();
			}?>
			</div>

			<div class="clearfix"></div>
		</div>

		
		<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"main.menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(0=>"",),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "main",
		"USE_EXT" => "Y"
	)
);?>
<!-- end header menu -->
					 
		<div class="clearfix"></div>			   	
	</div>


	<?php if($isHome) : ?>
	<div class="caption">
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => "",
				"PATH" => "/include/home.logo.php"
			)
			);?>
	</div>
	<?php endif; ?>


</div>
<!--header-->

<!-- container start -->
<div class="categoires">
	<div class="container">

		<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
		"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
			"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
			"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
		),
		false
		);?>

	












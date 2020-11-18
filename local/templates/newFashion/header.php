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
				<ul><li><a href="/auth/"> LOGIN</a></li></ul>
			</div>
			<div class="logo">
				<h3><a href="/">NEW FASHIONS</a></h3>
			</div>			  
			<div class="box_1">				 
				<a href="cart.html"><h3>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)<img src="images/cart.png" alt=""/></h3></a>
				<p><a href="javascript:;" class="simpleCart_empty">empty cart</a></p>

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

	












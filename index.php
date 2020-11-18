<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("not_show_nav_chain", "Y");
$APPLICATION->SetTitle("Главная");
?> 





<div class="categoires">
	<div class="container">
		<a href="#"><div class="col-md-4 sections fashion-grid-a">
			<h4>Fashion</h4>
			<p>dignissim</p>			 					
		</div></a>
		<a href="#"><div class="col-md-4 sections fashion-grid-b">
			<h4>Beauty</h4>
			<p>fermentum</p>			 					
		</div></a>
		<a href="#"><div class="col-md-4 sections fashion-grid-c">
			<h4>Creativity</h4>
			<p>vulputate</p>				
		</div></a>
	</div>
</div>
<!---->
<div class="features" id="features">
	<div class="container">
		<div class="tabs-box">
			<ul class="tabs-menu">
				<li><a href="#tab1">Men</a></li>
				<li><a href="#tab2">Women</a></li>
				<li><a href="#tab3">Price</a></li>
			</ul>
			<div class="clearfix"> </div>
			<div class="tab-grids">
				<div id="tab1" class="tab-grid1">			   				  
					

					<?$APPLICATION->IncludeComponent(
						"bitrix:catalog.section", 
						"home.catalog.section", 
						array(
							"ACTION_VARIABLE" => "action",
							"ADD_PICT_PROP" => "-",
							"ADD_PROPERTIES_TO_BASKET" => "Y",
							"ADD_SECTIONS_CHAIN" => "N",
							"ADD_TO_BASKET_ACTION" => "ADD",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "N",
							"BACKGROUND_IMAGE" => "-",
							"BASKET_URL" => "/personal/cart/",
							"BROWSER_TITLE" => "-",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "36000000",
							"CACHE_TYPE" => "A",
							"COMPATIBLE_MODE" => "Y",
							"CONVERT_CURRENCY" => "N",
							"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
							"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#",
							"DISABLE_INIT_JS_IN_COMPONENT" => "N",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"DISPLAY_COMPARE" => "N",
							"DISPLAY_TOP_PAGER" => "N",
							"ELEMENT_SORT_FIELD" => "sort",
							"ELEMENT_SORT_FIELD2" => "id",
							"ELEMENT_SORT_ORDER" => "asc",
							"ELEMENT_SORT_ORDER2" => "desc",
							"ENLARGE_PRODUCT" => "STRICT",
							"FILE_404" => "",
							"FILTER_NAME" => "arrFilter",
							"HIDE_NOT_AVAILABLE" => "N",
							"HIDE_NOT_AVAILABLE_OFFERS" => "N",
							"IBLOCK_ID" => "1",
							"IBLOCK_TYPE" => "info",
							"INCLUDE_SUBSECTIONS" => "Y",
							"LABEL_PROP" => array(
							),
							"LAZY_LOAD" => "N",
							"LINE_ELEMENT_COUNT" => "3",
							"LOAD_ON_SCROLL" => "N",
							"MESSAGE_404" => "",
							"MESS_BTN_ADD_TO_BASKET" => "В корзину",
							"MESS_BTN_BUY" => "Купить",
							"MESS_BTN_DETAIL" => "Подробнее",
							"MESS_BTN_SUBSCRIBE" => "Подписаться",
							"MESS_NOT_AVAILABLE" => "Нет в наличии",
							"META_DESCRIPTION" => "-",
							"META_KEYWORDS" => "-",
							"OFFERS_CART_PROPERTIES" => array(
								0 => "COLOR",
							),
							"OFFERS_FIELD_CODE" => array(
								0 => "",
								1 => "",
							),
							"OFFERS_LIMIT" => "5",
							"OFFERS_PROPERTY_CODE" => array(
								0 => "COLOR",
								1 => "",
							),
							"OFFERS_SORT_FIELD" => "sort",
							"OFFERS_SORT_FIELD2" => "id",
							"OFFERS_SORT_ORDER" => "asc",
							"OFFERS_SORT_ORDER2" => "desc",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_TEMPLATE" => ".default",
							"PAGER_TITLE" => "Товары",
							"PAGE_ELEMENT_COUNT" => "3",
							"PARTIAL_PRODUCT_PROPERTIES" => "N",
							"PRICE_CODE" => array(
								0 => "retail",
							),
							"PRICE_VAT_INCLUDE" => "Y",
							"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
							"PRODUCT_DISPLAY_MODE" => "N",
							"PRODUCT_ID_VARIABLE" => "id",
							"PRODUCT_PROPERTIES" => array(
							),
							"PRODUCT_PROPS_VARIABLE" => "prop",
							"PRODUCT_QUANTITY_VARIABLE" => "quantity",
							"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false}]",
							"PRODUCT_SUBSCRIPTION" => "N",
							"PROPERTY_CODE" => array(
								0 => "",
								1 => "",
							),
							"PROPERTY_CODE_MOBILE" => array(
							),
							"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
							"RCM_TYPE" => "personal",
							"SECTION_CODE" => "men",
							"SECTION_CODE_PATH" => "",
							"SECTION_ID" => $_REQUEST["SECTION_ID"],
							"SECTION_ID_VARIABLE" => "SECTION_ID",
							"SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
							"SECTION_USER_FIELDS" => array(
								0 => "",
								1 => "",
							),
							"SEF_MODE" => "N",
							"SEF_RULE" => "",
							"SET_BROWSER_TITLE" => "N",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "N",
							"SET_META_KEYWORDS" => "N",
							"SET_STATUS_404" => "Y",
							"SET_TITLE" => "N",
							"SHOW_404" => "Y",
							"SHOW_ALL_WO_SECTION" => "N",
							"SHOW_CLOSE_POPUP" => "N",
							"SHOW_DISCOUNT_PERCENT" => "N",
							"SHOW_FROM_SECTION" => "N",
							"SHOW_MAX_QUANTITY" => "N",
							"SHOW_OLD_PRICE" => "N",
							"SHOW_PRICE_COUNT" => "1",
							"SHOW_SLIDER" => "N",
							"SLIDER_INTERVAL" => "3000",
							"SLIDER_PROGRESS" => "N",
							"TEMPLATE_THEME" => "blue",
							"USE_ENHANCED_ECOMMERCE" => "N",
							"USE_MAIN_ELEMENT_SECTION" => "N",
							"USE_PRICE_COUNT" => "N",
							"USE_PRODUCT_QUANTITY" => "N",
							"COMPONENT_TEMPLATE" => "home.catalog.section"
						),
				false
				);?>
				<div class="clearfix"></div>
				</div>				

				<div id="tab2" class="tab-grid2">

				<?$APPLICATION->IncludeComponent(
				"bitrix:catalog.section", 
				"home.catalog.section", 
				array(
				"ACTION_VARIABLE" => "action",
				"ADD_PICT_PROP" => "-",
				"ADD_PROPERTIES_TO_BASKET" => "Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"ADD_TO_BASKET_ACTION" => "ADD",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "N",
				"BACKGROUND_IMAGE" => "-",
				"BASKET_URL" => "/personal/cart/",
				"BROWSER_TITLE" => "-",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"COMPATIBLE_MODE" => "Y",
				"CONVERT_CURRENCY" => "N",
				"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
				"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#",
				"DISABLE_INIT_JS_IN_COMPONENT" => "N",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_COMPARE" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"ELEMENT_SORT_FIELD" => "sort",
				"ELEMENT_SORT_FIELD2" => "id",
				"ELEMENT_SORT_ORDER" => "asc",
				"ELEMENT_SORT_ORDER2" => "desc",
				"ENLARGE_PRODUCT" => "STRICT",
				"FILE_404" => "",
				"FILTER_NAME" => "arrFilter",
				"HIDE_NOT_AVAILABLE" => "N",
				"HIDE_NOT_AVAILABLE_OFFERS" => "N",
				"IBLOCK_ID" => "1",
				"IBLOCK_TYPE" => "info",
				"INCLUDE_SUBSECTIONS" => "Y",
				"LABEL_PROP" => array(
				),
				"LAZY_LOAD" => "N",
				"LINE_ELEMENT_COUNT" => "3",
				"LOAD_ON_SCROLL" => "N",
				"MESSAGE_404" => "",
				"MESS_BTN_ADD_TO_BASKET" => "В корзину",
				"MESS_BTN_BUY" => "Купить",
				"MESS_BTN_DETAIL" => "Подробнее",
				"MESS_BTN_SUBSCRIBE" => "Подписаться",
				"MESS_NOT_AVAILABLE" => "Нет в наличии",
				"META_DESCRIPTION" => "-",
				"META_KEYWORDS" => "-",
				"OFFERS_CART_PROPERTIES" => array(
				0 => "COLOR",
				),
				"OFFERS_FIELD_CODE" => array(
				0 => "",
				1 => "",
				),
				"OFFERS_LIMIT" => "5",
				"OFFERS_PROPERTY_CODE" => array(
				0 => "COLOR",
				1 => "",
				),
				"OFFERS_SORT_FIELD" => "sort",
				"OFFERS_SORT_FIELD2" => "id",
				"OFFERS_SORT_ORDER" => "asc",
				"OFFERS_SORT_ORDER2" => "desc",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Товары",
				"PAGE_ELEMENT_COUNT" => "3",
				"PARTIAL_PRODUCT_PROPERTIES" => "N",
				"PRICE_CODE" => array(
				0 => "retail",
				),
				"PRICE_VAT_INCLUDE" => "Y",
				"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
				"PRODUCT_DISPLAY_MODE" => "N",
				"PRODUCT_ID_VARIABLE" => "id",
				"PRODUCT_PROPERTIES" => array(
				),
				"PRODUCT_PROPS_VARIABLE" => "prop",
				"PRODUCT_QUANTITY_VARIABLE" => "quantity",
				"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false}]",
				"PRODUCT_SUBSCRIPTION" => "N",
				"PROPERTY_CODE" => array(
				0 => "",
				1 => "",
				),
				"PROPERTY_CODE_MOBILE" => array(
				),
				"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
				"RCM_TYPE" => "personal",
				"SECTION_CODE" => "women",
				"SECTION_CODE_PATH" => "",
				"SECTION_ID" => $_REQUEST["SECTION_ID"],
				"SECTION_ID_VARIABLE" => "SECTION_ID",
				"SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
				"SECTION_USER_FIELDS" => array(
				0 => "",
				1 => "",
				),
				"SEF_MODE" => "N",
				"SEF_RULE" => "",
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "Y",
				"SET_TITLE" => "N",
				"SHOW_404" => "Y",
				"SHOW_ALL_WO_SECTION" => "N",
				"SHOW_CLOSE_POPUP" => "N",
				"SHOW_DISCOUNT_PERCENT" => "N",
				"SHOW_FROM_SECTION" => "N",
				"SHOW_MAX_QUANTITY" => "N",
				"SHOW_OLD_PRICE" => "N",
				"SHOW_PRICE_COUNT" => "1",
				"SHOW_SLIDER" => "N",
				"SLIDER_INTERVAL" => "3000",
				"SLIDER_PROGRESS" => "N",
				"TEMPLATE_THEME" => "blue",
				"USE_ENHANCED_ECOMMERCE" => "N",
				"USE_MAIN_ELEMENT_SECTION" => "N",
				"USE_PRICE_COUNT" => "N",
				"USE_PRODUCT_QUANTITY" => "N",
				"COMPONENT_TEMPLATE" => "home.catalog.section"
				),
				false
				);?>
				<div class="clearfix"></div>
				</div>

				<div id="tab3" class="tab-grid3">

				<?$APPLICATION->IncludeComponent(
				"bitrix:catalog.section", 
				"home.catalog.section", 
				array(
				"ACTION_VARIABLE" => "action",
				"ADD_PICT_PROP" => "-",
				"ADD_PROPERTIES_TO_BASKET" => "Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"ADD_TO_BASKET_ACTION" => "ADD",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "N",
				"BACKGROUND_IMAGE" => "-",
				"BASKET_URL" => "/personal/cart/",
				"BROWSER_TITLE" => "-",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"COMPATIBLE_MODE" => "Y",
				"CONVERT_CURRENCY" => "N",
				"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
				"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#",
				"DISABLE_INIT_JS_IN_COMPONENT" => "N",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_COMPARE" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"ELEMENT_SORT_FIELD" => "SCALED_PRICE_1",
				"ELEMENT_SORT_FIELD2" => "id",
				"ELEMENT_SORT_ORDER" => "desc",
				"ELEMENT_SORT_ORDER2" => "desc",
				"ENLARGE_PRODUCT" => "STRICT",
				"FILE_404" => "",
				"FILTER_NAME" => "arrFilter",
				"HIDE_NOT_AVAILABLE" => "N",
				"HIDE_NOT_AVAILABLE_OFFERS" => "N",
				"IBLOCK_ID" => "1",
				"IBLOCK_TYPE" => "info",
				"INCLUDE_SUBSECTIONS" => "Y",
				"LABEL_PROP" => array(
				),
				"LAZY_LOAD" => "N",
				"LINE_ELEMENT_COUNT" => "3",
				"LOAD_ON_SCROLL" => "N",
				"MESSAGE_404" => "",
				"MESS_BTN_ADD_TO_BASKET" => "В корзину",
				"MESS_BTN_BUY" => "Купить",
				"MESS_BTN_DETAIL" => "Подробнее",
				"MESS_BTN_SUBSCRIBE" => "Подписаться",
				"MESS_NOT_AVAILABLE" => "Нет в наличии",
				"META_DESCRIPTION" => "-",
				"META_KEYWORDS" => "-",
				"OFFERS_CART_PROPERTIES" => array(
				0 => "COLOR",
				),
				"OFFERS_FIELD_CODE" => array(
				0 => "",
				1 => "",
				),
				"OFFERS_LIMIT" => "5",
				"OFFERS_PROPERTY_CODE" => array(
				0 => "COLOR",
				1 => "",
				),
				"OFFERS_SORT_FIELD" => "sort",
				"OFFERS_SORT_FIELD2" => "id",
				"OFFERS_SORT_ORDER" => "asc",
				"OFFERS_SORT_ORDER2" => "desc",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Товары",
				"PAGE_ELEMENT_COUNT" => "3",
				"PARTIAL_PRODUCT_PROPERTIES" => "N",
				"PRICE_CODE" => array(
				0 => "retail",
				),
				"PRICE_VAT_INCLUDE" => "Y",
				"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
				"PRODUCT_DISPLAY_MODE" => "N",
				"PRODUCT_ID_VARIABLE" => "id",
				"PRODUCT_PROPERTIES" => array(
				),
				"PRODUCT_PROPS_VARIABLE" => "prop",
				"PRODUCT_QUANTITY_VARIABLE" => "quantity",
				"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false}]",
				"PRODUCT_SUBSCRIPTION" => "N",
				"PROPERTY_CODE" => array(
				0 => "",
				1 => "",
				),
				"PROPERTY_CODE_MOBILE" => array(
				),
				"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
				"RCM_TYPE" => "personal",
				"SECTION_CODE" => "",
				"SECTION_CODE_PATH" => "",
				"SECTION_ID" => "",
				"SECTION_ID_VARIABLE" => "SECTION_ID",
				"SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
				"SECTION_USER_FIELDS" => array(
				0 => "",
				1 => "",
				),
				"SEF_MODE" => "N",
				"SEF_RULE" => "",
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "Y",
				"SET_TITLE" => "N",
				"SHOW_404" => "Y",
				"SHOW_ALL_WO_SECTION" => "N",
				"SHOW_CLOSE_POPUP" => "N",
				"SHOW_DISCOUNT_PERCENT" => "N",
				"SHOW_FROM_SECTION" => "N",
				"SHOW_MAX_QUANTITY" => "N",
				"SHOW_OLD_PRICE" => "N",
				"SHOW_PRICE_COUNT" => "1",
				"SHOW_SLIDER" => "N",
				"SLIDER_INTERVAL" => "3000",
				"SLIDER_PROGRESS" => "N",
				"TEMPLATE_THEME" => "blue",
				"USE_ENHANCED_ECOMMERCE" => "N",
				"USE_MAIN_ELEMENT_SECTION" => "N",
				"USE_PRICE_COUNT" => "N",
				"USE_PRODUCT_QUANTITY" => "N",
				"COMPONENT_TEMPLATE" => "home.catalog.section"
				),
				false
				);?>
				<div class="clearfix"></div>
				</div>




			</div>				
		</div>
		<!-- tabs-box -->
		<!-- Comman-js-files -->
		<script>
			$(document).ready(function() {
				$("#tab2").hide();
				$("#tab3").hide();
				$(".tabs-menu a").click(function(event){
					event.preventDefault();
					var tab=$(this).attr("href");
					$(".tab-grid1,.tab-grid2,.tab-grid3").not(tab).css("display","none");
					$(tab).fadeIn("slow");
				});
				$("ul.tabs-menu li a").click(function(){
					$(this).parent().addClass("active a");
					$(this).parent().siblings().removeClass("active a");
				});
			});
		</script>
		<!-- Comman-js-files -->
	</div>
</div>










<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
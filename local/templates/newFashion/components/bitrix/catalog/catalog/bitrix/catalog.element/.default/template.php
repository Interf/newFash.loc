<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
$this->addExternalCss(SITE_TEMPLATE_PATH."/css/etalage.css");
$this->addExternalJS(SITE_TEMPLATE_PATH."/js/jquery.etalage.min.js");
$this->addExternalJS(SITE_TEMPLATE_PATH."/js/myScripts/changeSku.js");
?>

<div class="ctnt-bar cntnt">
	<div class="content-bar">
		<div class="single-page">					 
			<script>
				jQuery(document).ready(function($){
					
					$('#etalage').etalage({
						thumb_image_width: 300,
						thumb_image_height: 400,
						source_image_width: 700,
						source_image_height: 800,
						show_hint: true,
						click_callback: function(image_anchor, instance_id){
							alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
						}
					});
								// This is for the dropdown list example:
								$('.dropdownlist').change(function(){
									etalage_show( $(this).find('option:selected').attr('class') );
								});

							});
						</script>
						<!--//details-product-slider-->
						<div class="details-left-slider">
							<ul id="etalage">
								<?php foreach($arResult['PROPERTIES']['SLIDER']['SRC'] as $k => $slider) : ?>

									<li>
										<img class="etalage_thumb_image" src="<?=$slider?>" />
										<img class="etalage_source_image" src="<?=$slider?>" />
									</li>

								<?php endforeach; ?>

								<div class="clearfix"></div>
							</ul>
						</div>
						<!--//details-product-slider end-->

							<div class="details-left-info">
								
								<h3><?=$arResult['NAME']?></h3>	

								
								<?php if(isset($arResult['OFFER_INFO'])) : ?>
									<p>Доступные цвета: </p>
									<div class="sku_link">
										<?php foreach($arResult['OFFER_INFO']['OFFER_COLOR_SRC'] as $k => $colorSRC) : ?>

											<a 
											class="<?=($k === 0) ? 'active_sku' : ''?> sku_link_a" 
											id-sku="<?=$arResult['OFFER_INFO']['OFFER_ID'][$k];?>" 
											href="<?=$arResult['DETAIL_PAGE_URL']?>?skuID=<?=$arResult['OFFER_INFO']['OFFER_ID'][$k];?>">
												<img src="<?=$colorSRC?>" alt="">
											</a>
											<?php  ?>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>




								<?php foreach($arResult['PRICES'] as $arPrice) : ?>
									<div class="price_block">
										<p class="item_price"><?=$arPrice['PRINT_DISCOUNT_VALUE'];?></p>
										<?php if($arPrice['DISCOUNT_DIFF_PERCENT'] > 0) : ?>
											<p class="item_discount">Скидка: -<?=$arPrice['DISCOUNT_DIFF_PERCENT']?>%</p>
										<?php endif; ?>
									</div>

									<div class="prod_info">

										<p class="qty">Qty ::</p><input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small item_quantity">
										<br><br>
										<input type="button" class="item_add add_item" value="ADD" id-prod="<?=$arPrice['ID'];?>">
										
									</div>
								<?php endforeach; ?>

								<div class="flower-type">
									<p>Mobel  ::<a href="#"><?=$arResult['PROPERTIES']['MODEL']['VALUE'];?></a></p>
									<p>Brand  ::<a href="#"><?=$arResult['PROPERTIES']['BRAND']['VALUE'];?></a></p>
								</div>
								<h5>Description  ::</h5>
								<p class="desc"><?=$arResult['DETAIL_TEXT'];?></p>

								
							</div>

							<div class="clearfix"></div>				 	
						</div>
					</div>
				</div>


				<div class="clearfix"></div>
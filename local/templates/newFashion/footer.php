<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

	</div>
</div>
<!-- container end -->



<!--fotter-->
<?php if($isHome) : ?>
<div class="fotter">
	 <div class="container">
	 <div class="col-md-6 contact">
	 	<?$APPLICATION->IncludeComponent(
	 		"bitrix:main.feedback",
	 		"footer.feedback",
	 		Array(
	 			"AJAX_MODE" => "Y",
	 			"EMAIL_TO" => "int@itn.int",
	 			"EVENT_MESSAGE_ID" => array(0=>"7",),
	 			"OK_TEXT" => "Спасибо, ваше сообщение принято.",
	 			"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",2=>"MESSAGE",),
	 			"USE_CAPTCHA" => "Y"
	 		)
	 		);?>

	 </div>
	 <div class="col-md-6 ftr-left">
		 <div class="ftr-list">
		 	<?$APPLICATION->IncludeComponent(
		 		"bitrix:menu",
		 		"bottom.menu",
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
		 </div>
		 <div class="clearfix"></div>
		 <h4>FOLLOW US</h4>
		 <div class="social-icons">
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => "",
				"PATH" => "/include/home.social.php"
			)
			);?>
		 </div>
	 </div>	 
	 <div class="clearfix"></div>
	 </div>
</div>
<?php endif; ?>
<!--fotter//-->
<div class="fotter-logo">
	 <div class="container">
	 <div class="ftr-logo"><h3><a href="index.html">NEW FASHIONS</a></h3></div>
	 <div class="ftr-info">
	 <p>&copy; 2015 All Rights Reseverd Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
	</div>
	 <div class="clearfix"></div>
	 </div>
</div>
<!--fotter//-->

</body>
</html>
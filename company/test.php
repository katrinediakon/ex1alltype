<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
<<<<<<< Updated upstream
	"bitrix:menu",
	"vertical_multilevel",
	Array(
=======
<<<<<<< HEAD
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
=======
	"bitrix:menu",
	"vertical_multilevel",
	Array(
>>>>>>> Stashed changes
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "vertical_multilevel",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N"
<<<<<<< Updated upstream
=======
>>>>>>> master
>>>>>>> Stashed changes
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
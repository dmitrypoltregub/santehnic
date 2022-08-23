<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arServices = Array(
	"main" => Array(
		"NAME" => GetMessage("SERVICE_MAIN_SETTINGS"),
		"STAGES" => Array(
			"files.php",
			"template.php",
			"settings.php",
                        "forms.php",
                        "components.php",
                        "events.php",
                        "urlrewrite.php"
		),
	),
        
	"iblock" => Array(
		"NAME" => GetMessage("SERVICE_IBLOCK_DEMO_DATA"),
		"STAGES" => Array(
			"types.php",
                        "content_1.php",
                        "content_2.php",
                        "content_3.php",
                        "content_4.php",
                        "content_5.php",
                        "content_6.php",
                        "content_7.php",
                        "content_8.php",
                        
		),
	),
	
	
);
?>
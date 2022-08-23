<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if (!defined("WIZARD_SITE_ID") || !defined("WIZARD_SITE_DIR"))
	return;

if(!CModule::IncludeModule("iblock"))
	return;

include_once __DIR__ . "/../classes/autoload.php";

$wizard =& $this->GetWizard();

$arUrlRewrite = array();
if (file_exists(WIZARD_SITE_ROOT_PATH . "/urlrewrite.php"))
{
    include(WIZARD_SITE_ROOT_PATH . "/urlrewrite.php");
}

$arNewUrlRewrite = array(
    
    array(
        "CONDITION" => "#^" . WIZARD_SITE_DIR . "actions/#",
        "RULE" => "",
        "ID" => "bitrix:news",
        "PATH" => WIZARD_SITE_DIR . "actions/index.php",
    ),
    
    array(
        "CONDITION" => "#^" . WIZARD_SITE_DIR . "catalog/#",
        "RULE" => "",
        "ID" => "bitrix:catalog",
        "PATH" => WIZARD_SITE_DIR . "catalog/index.php",
    ),
    
    array(
        "CONDITION" => "#^" . WIZARD_SITE_DIR . "news/#",
        "RULE" => "",
        "ID" => "bitrix:news",
        "PATH" => WIZARD_SITE_DIR . "news/index.php",
    ),
    
    array(
        "CONDITION" => "#^" . WIZARD_SITE_DIR . "projects/#",
        "RULE" => "",
        "ID" => "bitrix:news",
        "PATH" => WIZARD_SITE_DIR . "projects/index.php",
    ),
    
    array(
        "CONDITION" => "#^" . WIZARD_SITE_DIR . "services/#",
        "RULE" => "",
        "ID" => "bitrix:news",
        "PATH" => WIZARD_SITE_DIR . "services/index.php",
    ),
);

foreach ($arNewUrlRewrite as $arUrl)
{
    if (!in_array($arUrl, $arUrlRewrite))
    {
        \CUrlRewriter::Add($arUrl);
    }
}
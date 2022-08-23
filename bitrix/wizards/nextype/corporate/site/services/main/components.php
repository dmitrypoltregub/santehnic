<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if (!defined("WIZARD_SITE_ID") || !defined("WIZARD_SITE_DIR"))
	return;

if(!CModule::IncludeModule("iblock"))
	return;

include_once __DIR__ . "/../classes/autoload.php";

$wizard =& $this->GetWizard();

$arLandingBlocks = Array (

    'LANDING_BLOCK_ADVANTAGES' => Array (
        Array ('name' => GetMessage('ADVANTAGES_TITLE_1'), 'icon' => 'heart', 'description' => GetMessage('ADVANTAGES_DESCRIPTION_1')),
        Array ('name' => GetMessage('ADVANTAGES_TITLE_2'), 'icon' => 'card', 'description' => GetMessage('ADVANTAGES_DESCRIPTION_2')),
        Array ('name' => GetMessage('ADVANTAGES_TITLE_3'), 'icon' => 'gift', 'description' => GetMessage('ADVANTAGES_DESCRIPTION_3')),
        Array ('name' => GetMessage('ADVANTAGES_TITLE_4'), 'icon' => 'shield', 'description' => GetMessage('ADVANTAGES_DESCRIPTION_4')),
    ),
    
    
    
);

$arReplace = Array ();
foreach ($arLandingBlocks as $macrosKey => $arItems)
{
    $arItemsJson = base64_encode(\Bitrix\Main\Web\Json::encode($arItems));
    $arReplace[$macrosKey] = $arItemsJson;
}

\Nextype\Wizard\CFiles::ReplaceContent($arReplace);
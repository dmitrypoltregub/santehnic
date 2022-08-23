<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if (!defined("WIZARD_SITE_ID") || !defined("WIZARD_SITE_DIR"))
	return;

if(!CModule::IncludeModule("iblock"))
	return;

include_once __DIR__ . "/../classes/autoload.php";

$wizard =& $this->GetWizard();

$arTypes = Array (
    Array (
        'ID' => 'nt_corporate_content',
        'CODE_REPLACE' => 'IBLOCK_TYPE_CONTENT',
        'SECTIONS' => "Y"
    ),
    Array (
        'ID' => 'nt_corporate_catalog',
        'CODE_REPLACE' => 'IBLOCK_TYPE_CATALOG',
        'SECTIONS' => "Y"
    ),
    Array (
        'ID' => 'nt_corporate_forms',
        'CODE_REPLACE' => 'IBLOCK_TYPE_FORMS',
        'SECTIONS' => "N"
    ),
    Array (
        'ID' => 'nt_corporate_orders',
        'CODE_REPLACE' => 'IBLOCK_TYPE_ORDERS',
        'SECTIONS' => "N"
    )
);
foreach ($arTypes as $arType)
    \Nextype\Wizard\CIblock::CreateIblockType($arType);

\COption::SetOptionString('iblock','combined_list_mode','Y');


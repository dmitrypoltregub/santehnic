<?
use Bitrix\Main\Application;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (! \Bitrix\Main\Loader::includeModule('nextype.corporate') )
    die();

if (!$USER->IsAdmin() && \Bitrix\Main\Config\Option::get("nextype.corporate", "IS_DEMO", 'N', SITE_ID) != "Y")
    return;

$request = Application::getInstance()->getContext()->getRequest(); 

if ($request->isPost())
{
    $values = $request->getPostList();
    $uriString = $request->getRequestUri(); 
    
    if ($request->getPost("NT_OPTIONS_SAVE") == "Y")
    {
        \Nextype\Corporate\COptions::setOptions($values, SITE_ID);
        \Nextype\Corporate\CCorporate::clearTemplateCache(SITE_ID);
        LocalRedirect($uriString);
    }
    elseif ($request->getPost("NT_OPTIONS_RESET") == "Y")
    {
        \Nextype\Corporate\COptions::resetOptions($values, SITE_ID);
        \Nextype\Corporate\CCorporate::clearTemplateCache(SITE_ID);
        LocalRedirect($uriString);
    }
}

$arResult['OPTIONS_LIST'] = \Nextype\Corporate\COptions::getOptionsList();
$arResult['CURRENT_OPTIONS'] = \Nextype\Corporate\CCorporate::$options;


$this->IncludeComponentTemplate();

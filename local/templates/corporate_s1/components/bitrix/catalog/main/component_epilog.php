<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Application,
    Bitrix\Main\Context,
    Bitrix\Main\Request,
    Bitrix\Main\Server;

global $APPLICATION;

$request = Context::getCurrent()->getRequest();
if($request["PAGEN_1"]){
    $oldMetaTitle = $APPLICATION->GetPageProperty('title');
    $APPLICATION->SetPageProperty('title', $oldMetaTitle.' | Страница '.$request["PAGEN_1"]);
    $oldMetaDescription = $APPLICATION->GetPageProperty('description');
    $APPLICATION->SetPageProperty('description', $oldMetaDescription.' | Страница '.$request["PAGEN_1"]);
    $oldTitle = $APPLICATION->GetTitle();
    $APPLICATION->SetTitle($oldTitle.' - Страница '.$request["PAGEN_1"]);
}


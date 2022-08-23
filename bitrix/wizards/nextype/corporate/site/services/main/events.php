<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if (!defined("WIZARD_SITE_ID") || !defined("WIZARD_SITE_DIR"))
	return;

if(!CModule::IncludeModule("iblock"))
	return;

include_once __DIR__ . "/../classes/autoload.php";

$wizard =& $this->GetWizard();

$arEventTypes = Array (
    Array (
        "ID" => "NEXTYPE_CORPORATE_NEW_ORDER_ADMIN",
        "LANG" => Array (
            "ru" => GetMessage('EVENT_TYPE_NEXTYPE_CORPORATE_NEW_ORDER_ADMIN_NAME'),
            "en" => "New order notification for administrator",
        ),
        "EVENTS" => Array (
            Array (
                "EMAIL_FROM" => "#DEFAULT_EMAIL_FROM#",
                "EMAIL_TO" => "#DEFAULT_EMAIL_FROM#",
                "BCC" => "",
                "SUBJECT" => GetMessage('EVENT_NEW_ORDER_ADMIN_SUBJECT'),
                "BODY_TYPE" => "text",
                "MESSAGE" => GetMessage('EVENT_NEW_ORDER_ADMIN_MESSAGE'),
            )
        )
    ),
    Array (
        "ID" => "NEXTYPE_CORPORATE_NEW_ORDER",
        "LANG" => Array (
            "ru" => GetMessage('EVENT_TYPE_NEXTYPE_CORPORATE_NEW_ORDER_NAME'),
            "en" => "New order notification",
        ),
        "EVENTS" => Array (
            Array (
                "EMAIL_FROM" => "#DEFAULT_EMAIL_FROM#",
                "EMAIL_TO" => "#PROP_EMAIL#",
                "BCC" => "",
                "SUBJECT" => GetMessage('EVENT_NEW_ORDER_SUBJECT'),
                "BODY_TYPE" => "text",
                "MESSAGE" => GetMessage('EVENT_NEW_ORDER_MESSAGE'),
            )
        )
    )
);



foreach ($arEventTypes as $arEventType)
{
    $arType = \CEventType::GetList(Array("TYPE_ID" => $arEventType['ID']))->fetch();
    if (!$arType)
    {
        foreach ($arEventType['LANG'] as $lid => $eventName)
        {
            $obEventType = new \CEventType;
            $obEventType->Add(array(
                "LID"           => $lid,
                "EVENT_NAME"    => $arEventType['ID'],
                "NAME"          => $eventName,
            ));
        }
    }
    
    // add events
    
    if (is_array($arEventType['EVENTS']) && count($arEventType['EVENTS']) > 0)
    {
        foreach ($arEventType['EVENTS'] as $arEvent)
        {
            $arEventMessage = \CEventMessage::GetList($by="site_id", $order="desc", Array (
                "TYPE_ID" => $arEventType['ID'],
                "SITE_ID" => WIZARD_SITE_ID,
                "ACTIVE" => "Y"
            ))->fetch();
            
            if (empty($arEventMessage))
            {
                $arFields = array_merge($arEvent, Array (
                    "ACTIVE" => "Y",
                    "LID" => array(WIZARD_SITE_ID),
                    "EVENT_NAME" => $arEventType['ID']
                ));

                $obEventMessage = new \CEventMessage;
                $obEventMessage->Add($arFields);
            }
        }
    }
}

<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if (!defined("WIZARD_SITE_ID") || !defined("WIZARD_SITE_DIR"))
	return;

if(!CModule::IncludeModule("iblock"))
	return;

include_once __DIR__ . "/../classes/autoload.php";

$wizard =& $this->GetWizard();

$arForms = Array (
    
    Array (
        'FORM_NAME' => GetMessage('FORM_ASK_NAME'),
        'REPLACE_CODE' => 'FORM_AJAX_ASK',
        'IBLOCK_TYPE' => 'nt_corporate_forms',
        'IBLOCK_CODE' => 'nt_corporate_form_ask',
        'MESSAGE_SUCCESS' => GetMessage('FORM_FORM_AJAX_ASK_MESSAGE_SUCCESS'),
        'FIELDS' => Array (
            Array (
                'label' => GetMessage('FORM_FIELD_NAME'),
                'name' => 'NAME',
                'type' => 'text',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '',
                'sort' => '100'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_CONTACTS'),
                'name' => 'CONTACTS',
                'type' => 'text',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '',
                'sort' => '200'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_QUESTION'),
                'name' => 'QUESTION',
                'type' => 'textarea',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '',
                'sort' => '300'
            )
        )
    ),
    
    /* ------------------------------------ */
    
    Array (
        'REPLACE_CODE' => 'FORM_AJAX_CALLBACK',
        'IBLOCK_TYPE' => 'nt_corporate_forms',
        'IBLOCK_CODE' => 'nt_corporate_form_callback',
        'FORM_NAME' => GetMessage('FORM_CALLBACK_NAME'),
        'FIELDS' => Array (
            Array (
                'label' => GetMessage('FORM_FIELD_NAME'),
                'name' => 'NAME',
                'type' => 'text',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '',
                'sort' => '100'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_PHONE'),
                'name' => 'PHONE',
                'type' => 'text',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '+7 (###) ###-##-##',
                'sort' => '200'
            ),
            
            
        )
    ),
    
    /* ------------------------------------ */
    
    Array (
        'REPLACE_CODE' => 'FORM_AJAX_RESUME',
        'IBLOCK_TYPE' => 'nt_corporate_forms',
        'IBLOCK_CODE' => 'nt_corporate_form_resume',
        'FORM_NAME' => GetMessage('FORM_RESUME_NAME'),
        'FIELDS' => Array (
            Array (
                'label' => GetMessage('FORM_FIELD_FIO'),
                'name' => 'NAME',
                'type' => 'text',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '',
                'sort' => '100'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_PHONE'),
                'name' => 'PHONE',
                'type' => 'text',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '+7 (###) ###-##-##',
                'sort' => '200'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_EMAIL'),
                'name' => 'EMAIL',
                'type' => 'email',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '',
                'sort' => '300'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_JOB'),
                'name' => 'JOB',
                'type' => 'text',
                'required' => 'Y',
                'default' => "={\$_REQUEST['JOB']}",
                'values' => '',
                'mask' => '',
                'sort' => '400'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_EXPERIENCE'),
                'name' => 'EXPERIENCE',
                'type' => 'textarea',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '',
                'sort' => '500'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_COMMENT'),
                'name' => 'COMMENT',
                'type' => 'textarea',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '',
                'sort' => '600'
            ),
        )
    ),
    
    /* ------------------------------------ */
    
    Array (
        'REPLACE_CODE' => 'FORM_AJAX_SERVICES',
        'IBLOCK_TYPE' => 'nt_corporate_forms',
        'IBLOCK_CODE' => 'nt_corporate_form_services',
        'FORM_NAME' => GetMessage('FORM_SERVICES_NAME'),
        'FIELDS' => Array (
            Array (
                'label' => GetMessage('FORM_FIELD_NAME'),
                'name' => 'NAME',
                'type' => 'text',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '',
                'sort' => '100'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_PHONE'),
                'name' => 'PHONE',
                'type' => 'text',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '+7 (###) ###-##-##',
                'sort' => '200'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_SERVICE'),
                'name' => 'SERVICE',
                'type' => 'text',
                'required' => 'Y',
                'default' => "={\$_REQUEST['SERVICE']}",
                'values' => '',
                'mask' => '',
                'sort' => '300'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_COMMENT'),
                'name' => 'COMMENT',
                'type' => 'textarea',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '',
                'sort' => '400'
            ),
            
            
        )
    ),
    
    
    /* ------------------------------------ */
    
    Array (
        'REPLACE_CODE' => 'FORM_AJAX_ORDER',
        'IBLOCK_TYPE' => 'nt_corporate_forms',
        'IBLOCK_CODE' => 'nt_corporate_form_order',
        'FORM_NAME' => GetMessage('FORM_ORDER_NAME'),
        'FIELDS' => Array (
            Array (
                'label' => GetMessage('FORM_FIELD_NAME'),
                'name' => 'NAME',
                'type' => 'text',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '',
                'sort' => '100'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_PHONE'),
                'name' => 'PHONE',
                'type' => 'text',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '+7 (###) ###-##-##',
                'sort' => '200'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_PRODUCT'),
                'name' => 'PRODUCT',
                'type' => 'text',
                'required' => 'Y',
                'default' => "={\$_REQUEST['PRODUCT']}",
                'values' => '',
                'mask' => '',
                'sort' => '300'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_COMMENT'),
                'name' => 'COMMENT',
                'type' => 'textarea',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '',
                'sort' => '400'
            ),
            
            
        )
    ),
    
    
    /* ------------------------------------ */
    
    Array (
        'REPLACE_CODE' => 'FORM_AJAX_FEEDBACK',
        'IBLOCK_TYPE' => 'nt_corporate_forms',
        'IBLOCK_CODE' => 'nt_corporate_form_feedback',
        'FORM_NAME' => GetMessage('FORM_FEEDBACK_NAME'),
        'FIELDS' => Array (
            Array (
                'label' => GetMessage('FORM_FIELD_FIO'),
                'name' => 'NAME',
                'type' => 'text',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '',
                'sort' => '100'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_PHONE'),
                'name' => 'PHONE',
                'type' => 'text',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '+7 (###) ###-##-##',
                'sort' => '200'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_EMAIL'),
                'name' => 'EMAIL',
                'type' => 'email',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '',
                'sort' => '300'
            ),
            
            Array (
                'label' => GetMessage('FORM_FIELD_COMMENT'),
                'name' => 'MESSAGE',
                'type' => 'textarea',
                'required' => 'Y',
                'default' => '',
                'values' => '',
                'mask' => '',
                'sort' => '400'
            ),
            
            
        )
    ),

    
);

$arReplace = Array ();
foreach ($arForms as $arForm)
{
    $arIblock = \Nextype\Wizard\CIblock::CreateIblock(Array (
        'CODE' => $arForm['IBLOCK_CODE'],
        'IBLOCK_TYPE_ID' => $arForm['IBLOCK_TYPE'],
        'GROUP_ID' => Array (
            '1' => 'X',
            '2' => 'R'
        ),
        'NAME' => $arForm['FORM_NAME']
    ));
    
    if (!empty($arIblock['ID']))
        $arReplace[$arForm['REPLACE_CODE'] . "_IBLOCK_ID"] = $arIblock['ID'];
    
    $arItemsJson = base64_encode(\Bitrix\Main\Web\Json::encode($arForm['FIELDS']));
    
    $arReplace[$arForm['REPLACE_CODE'] . "_NAME"] = $arForm['FORM_NAME'];
    $arReplace[$arForm['REPLACE_CODE'] . "_MESSAGE_SUCCESS"] = $arForm['MESSAGE_SUCCESS'];
    $arReplace[$arForm['REPLACE_CODE'] . "_FIELDS"] = $arItemsJson;
    
}

\Nextype\Wizard\CFiles::ReplaceContent($arReplace);

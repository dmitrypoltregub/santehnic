<?php
use \Bitrix\Main;
use \Bitrix\Main\Loader;
use \Bitrix\Main\Error;
use \Bitrix\Main\Type\DateTime;
use \Bitrix\Main\Localization\Loc;
use \Bitrix\Iblock;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

Loc::loadMessages(__FILE__);

if (!CModule::IncludeModule("iblock"))
{
	ShowError(Loc::getMessage("IBLOCK_MODULE_NOT_INSTALL"));
	return;
}

if (!CModule::IncludeModule("nextype.corporate"))
{
    ShowError('Not install module nextype.corporate');
    return;
}

require_once __DIR__ . "/include.php";
    

class NextypeFormsProComponent extends CNextypeFormsPro
{
    var $arFields = Array ();
    var $formID = false;
    
    public function onPrepareComponentParams($arParams)
    {
        
        $this->initComponentTemplate();
        $CCorporate = \Nextype\Corporate\CCorporate::getInstance(SITE_ID);
        
        if (!$this->formID)
        {
            if (!empty($arParams['NAME']))
                $this->formID = Cutil::translit($arParams['NAME'], "ru", Array (
                    "change_case" => "U"
                ));
        }
        


        if (!empty($arParams['FIELDS']))
        {
            
            if (is_string($arParams['FIELDS']))
                $arParams['FIELDS'] = @\Bitrix\Main\Web\Json::decode(base64_decode($arParams['FIELDS']), true);
                        
            if (is_array($arParams['FIELDS']))
            {
                
                usort($arParams['FIELDS'], function ($a, $b) {
                    if ($a['sort'] == $b['sort'])
                        return 0;
                    
                    return ($a['sort'] < $b['sort']) ? -1 : 1;
                });
                
                foreach ($arParams['FIELDS'] as $arField)
                {
                    if (in_array($arField['type'], CNextypeFormsPro::$arTypes) && !empty($arField['label']))
                    {
                        $fieldName = (!empty($arField['name'])) ? $arField['name'] : $arField['label'];
                        $fieldName = trim(strtoupper(Cutil::translit($fieldName, "ru", Array (
                            "change_case" => "U"
                        ))));
                        
                        
                        if (in_array($arField['type'], Array ('select', 'multiselect')) )
                        {
                            $arField['values'] = explode("\n", $arField['values']);
                            foreach ($arField['values'] as &$val)
                                $val = trim($val);
                        }
                        
                        if ($arField['type'] == 'file' && (!isset($arField['maxSize']) || empty($arField['maxSize'])))
                            $arField['maxSize'] = self::$maxFileSize;
                        
                        if ($arField['type'] == 'file' && (!isset($arField['allowTypes']) || empty($arField['allowTypes'])))
                            $arField['allowTypes'] = self::$arDefaultExtensions;    
                        else
                        {
                            $arField['allowTypes'] = explode(";", $arField['allowTypes']);
                            foreach ($arField['allowTypes'] as &$val)
                                $val = trim($val);
                                
                        }
                        
                        $this->arFields[$fieldName] = Array (
                            'name'      => $fieldName,
                            'label'     => $arField['label'],
                            'type'      => $arField['type'],
                            'mask'      => $arField['mask'],
                            'required'  => ($arField['required'] == "Y") ? true : false,
                            'default'   => $arField['default'],
                            'placeholder'   => $arField['placeholder'],
                            'values'    => $arField['values'],
                            'sort' => intval($arField['sort']),
                        );

                        if ($arField['type'] == 'file')
                        {
                            $this->arFields[$fieldName]['allowTypes'] = $arField['allowTypes'];
                            $this->arFields[$fieldName]['maxSize'] = intval($arField['maxSize']);
                        }
                    }
                }
                
                

                if ($arParams['PERSONAL_PROCESSING'] == "Y")
                {
                    $arParams['PERSONAL_PROCESSING_PAGE'] = str_replace("#SITE_DIR#", SITE_DIR, $arParams['PERSONAL_PROCESSING_PAGE']);
                    $this->arFields['SYSTEM_PERSONAL_PROCESSING'] = Array (
                            'name'      => 'SYSTEM_PERSONAL_PROCESSING',
                            'label'     => GetMessage('NT_PERSONAL_PROCESSING_TEXT', Array ('#PAGE_URL#' => $arParams['PERSONAL_PROCESSING_PAGE'])),
                            'type'      => 'checkbox',
                            'mask'      => '',
                            'required'  => true,
                            'default'   => '',
                            'values'    => ''
                    );
                }

                if ($CCorporate::$options['GOOGLE_RECAPTCHA'] == 'Y')
                {
                    $arParams['CAPTCHA'] = 'RECAPTCHA';
                    $arParams['RECAPTCHA_SECRET_CODE'] = \Nextype\Corporate\CCorporate::$options['GOOGLE_RECAPTCHA_SECRET'];
                    $arParams['RECAPTCHA_CODE'] = \Nextype\Corporate\CCorporate::$options['GOOGLE_RECAPTCHA_CODE'];
                    
                    
                }
            }
        }
        
        return $arParams;
    }
    
    public static function getSettingsScript($componentPath, $settingsName)
    {
        $path = $componentPath.'/settings/'.$settingsName.'/script.js';
        return $path.'?'.time();
    }
    
   
    
    public function executeComponent()
    {
        
        global $APPLICATION;
        $this->setFrameMode(false);
        try
        {
            
            if (isset($_REQUEST[$this->formID]) && check_bitrix_sessid())
            {
                $this->Send($_REQUEST[$this->formID]);
            }
            

            foreach ($this->arFields as $key => $arField)
                $this->arFields[$key] = $this->GetHtml($arField);

            
        }
        catch (Exception $e)
        {
            ShowError($e->getMessage());
        }
        
        if ($this->arParams['CAPTCHA'] == "DEFAULT")
        {
            $this->arResult['CAPTCHA_CODE'] = $APPLICATION->CaptchaGetCode();
        }
        $this->arResult['FORM_ID'] = $this->formID;
        $this->arResult['FIELDS'] = $this->arFields;
        $this->arResult['AJAX_FIELD'] = $this->GetAjaxField();

        $this->includeComponentTemplate();

    }
}
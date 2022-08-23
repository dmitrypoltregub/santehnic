<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

class CNextypeFormsPro extends \CBitrixComponent
{
    
    static $arTypes = Array (
        'text',
        'textarea',
        'checkbox',
        'multiselect',
        'hidden',
        'select',
        'email',
        'file'
    );
    
    static $maxFileSize = 5242880;
    static $arDefaultExtensions = Array ('doc', 'docx', 'jpg', 'jpeg', 'png', 'pdf', 'tiff', 'xls', 'xlsx');
    
    static function ValidateEmail($value)
    {
        if (filter_var($value, FILTER_VALIDATE_EMAIL))
            return true;
        
        return false;
    }
    
    static function ValidateMask($mask, $value)
    {
        if (strlen($value) <= 0) return false;
        
        if (strlen($value) <> strlen($mask))
            return false;
                
        $maskSplit = str_split($mask);
        $valueSplit = str_split($value);
        
        foreach ($maskSplit as $key => $letter)
        {
            if ($letter == "#" && !is_numeric($valueSplit[$key]))
            {
                return false;
            }
            elseif ($letter != "#" && $valueSplit[$key] != $letter)
            {
                return false;
            }
        }
        
        return true;
    }
    
    public function GetAjaxField()
    {
        return '<input type="hidden" name="'.$this->formID.'[is_ajax]" value="Y" />';
    }


    public function GetHtml($arField)
    {
        $fieldName = $this->GetFieldName($arField['name']);
        $fieldValue = $this->GetFieldValue($arField['name']);
        
        $arField['field_name'] = $fieldName;
        $arField['field_id'] = $this->formID . "_" . $arField['name'];
        
        if ($arField['required'])
            $requiredHtml = 'required="required"';
        
        if (is_array($arField['error']))
            $errorHtml = 'data-error="'.$arField['error']['TEXT'].'" class="error"';
        
        if (!empty($arField['mask']))
            $maskHtml = 'data-mask="'.$arField['mask'].'"';
        
        if (!empty($arField['placeholder']))
            $placeholder = ' placeholder="'.strip_tags($arField['placeholder']).'"';
            
        switch ($arField['type'])
        {
            case 'text':
                $arField['html'] = '<input '.$maskHtml.$placeholder.' '.$errorHtml.' type="text" ' . $requiredHtml . ' value="'.$fieldValue.'" id="'.$arField['field_id'].'" name="'.$fieldName.'" />';
                break;
            
            case 'email':
                $arField['html'] = '<input data-type="email" '.$maskHtml.$placeholder.' '.$errorHtml.' type="text" ' . $requiredHtml . ' value="'.$fieldValue.'" id="'.$arField['field_id'].'" name="'.$fieldName.'" />';
                break;
            
            case 'textarea':
                $arField['html'] = '<textarea '.$maskHtml.$placeholder.' '.$errorHtml.' ' . $requiredHtml . ' id="'.$arField['field_id'].'" name="'.$fieldName.'">'.$fieldValue.'</textarea>';
                break;
            
            case 'checkbox':
                $checked = (!empty($fieldValue)) ? ' checked="checked"' : '';
                $arField['html'] = '<input '.$errorHtml.' type="checkbox" ' . $requiredHtml . $checked . ' value="Y" id="'.$arField['field_id'].'" name="'.$fieldName.'" />';
                break;
            
            case 'select':
            case 'multiselect':
                $multiselect = ($arField['type'] == 'multiselect') ? ' multiple="multiple"' : '';
                $fieldName = ($arField['type'] == 'multiselect') ? $fieldName . '[]' : $fieldName;
                
                $arField['html'] = '<select '.$errorHtml.' ' . $requiredHtml . $multiselect . ' id="'.$arField['field_id'].'" name="'.$fieldName.'">';
                
                if (!empty($arField['placeholder']) && $arField['type'] != 'multiselect')
                    $arField['html'] .= '<option value="">'.strip_tags($arField['placeholder']).'</option>';
                
                foreach ($arField['values'] as $value)
                {
                    $selected = ($fieldValue == $value) ? 'selected="selected"' : '';
                    $arField['html'] .= '<option '.$selected.' value="'.$value.'">'.$value.'</option>';
                }
                $arField['html'] .= '</select>';
                break;
            
            case 'file':
                $arField['html'] = '<input '.$errorHtml.' type="file" ' . $requiredHtml . ' id="'.$arField['field_id'].'" name="'.$fieldName.'" />';
                break;
            
            case 'hidden':
                $arField['html'] = '<input '.$maskHtml.' '.$errorHtml.' type="hidden" ' . $requiredHtml . ' value="'.$fieldValue.'" id="'.$arField['field_id'].'" name="'.$fieldName.'" />';
                break;
        }
        
        return $arField;
    }
    
    
    public function GetFieldName($name, $withFormID = true)
    {
        if ($this->arParams['DECODE_FIELDNAME'] == "Y")
            $name = md5($name);

        if ($withFormID)
            $name = $this->formID . "[" . $name . "]";
        
        return $name;
        
    }
    
    public function GetFieldValue($name)
    {
        if (!empty($this->arFields[$name]['default']))
        {
            if (preg_match("/^={(.*?)}/", $this->arFields[$name]['default'], $matches))
            {
                $evalCode = $matches[1];
                if (!empty($evalCode))
                {
                    if (substr($evalCode, strlen($evalCode) - 1) != ";")
                            $evalCode = "return " .$evalCode. ";";
                    $value = eval ($evalCode);
                }
            }
            else
                $value = $this->arFields[$name]['default'];
        }
        
        $requestValue = $_REQUEST[$this->formID][$this->GetFieldName($name, false)];
        
        if (defined('SITE_CHARSET') && SITE_CHARSET == "windows-1251")
            $requestValue = iconv ("utf-8", "windows-1251", $requestValue);
        
        if ($requestValue && !empty($requestValue))
            $value = $requestValue;
        
        return $value; 
    }
    
    public function RecaptchaCheck($secret, $code)
    {
        if (!empty($code))
        {
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $code . "&remoteip=" . $_SERVER['REMOTE_ADDR'];

            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_TIMEOUT, 10);
            curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");

            $curlData = curl_exec($curl);

            curl_close($curl);
            $curlData = json_decode($curlData, true);

            if ($curlData['success'])
                return true;
        }
        
        return false;
    }

    public function Send($data = null)
    {
        global $DB, $APPLICATION;
        
        $this->arResult = Array ();
        
        if (!$data)
            $data = $_POST;
        
        foreach ($data as $key => $val)
        {
            if (is_array($val))
                $data[$key] = $DB->ForSql(implode (", ", $val));
            else
                $data[$key] = $DB->ForSql($val);
            
            if (defined('SITE_CHARSET') && SITE_CHARSET == "windows-1251")
                $data[$key] = iconv ("utf-8", "windows-1251", $data[$key]);
        }
        
        if ($this->arParams['CAPTCHA'] == "DEFAULT")
        {            
            if (empty($data['captcha_sid']) || empty($data['captcha_word']))
            {
                $this->arResult['ERROR']['CAPTCHA'] = Array (
                    'FIELD_ID' => 'CAPTCHA',
                    'TEXT' => GetMessage('NT_FORMS_PRO_EMPTY_CAPTCHA')
                );
            }
            elseif (!$APPLICATION->CaptchaCheckCode($data['captcha_word'], $data['captcha_sid']))
            {
                $this->arResult['ERROR']['CAPTCHA'] = Array (
                    'FIELD_ID' => 'CAPTCHA',
                    'TEXT' => GetMessage('NT_FORMS_PRO_WRONG_CAPTCHA')
                );
            }
        }
        
        if ($this->arParams['CAPTCHA'] == "RECAPTCHA")
        {
            
            if (!$this->RecaptchaCheck($this->arParams['RECAPTCHA_SECRET_CODE'], $_POST["g-recaptcha-response"]))
            {
                $this->arResult['ERROR']['CAPTCHA'] = Array (
                    'FIELD_ID' => 'CAPTCHA',
                    'TEXT' => GetMessage('NT_FORMS_PRO_WRONG_RECAPTCHA')
                );
            }
        }
        
        
        foreach ($this->arFields as $key => $field)
        {
            $val = $data[$this->GetFieldName($field['name'], false)];
            $this->arFields[$field['name']]['value'] = $val;

            if ($field['required'] == true && in_array($field['type'], Array("text", "hidden", "select", "email")) && empty($val))
            {
                $arError = Array (
                    'FIELD_ID'  => $this->GetFieldName($field['name']),
                    'TEXT'      => GetMessage('NT_FORMS_PRO_EMPTY_FIELD', Array ('#FIELD#' => strip_tags($field['label'])))
                );
                
                $this->arResult['ERROR'][] = $arError;
                $this->arFields[$key]['error'] = $arError;
                continue;
            }
            
            if ($field['type'] == "email")
            {
                if ($field['required'] == true && empty($val))
                {
                    $arError = Array (
                        'FIELD_ID'  => $this->GetFieldName($field['name']),
                        'TEXT'      => GetMessage('NT_FORMS_PRO_EMPTY_FIELD', Array ('#FIELD#' => strip_tags($field['label'])))
                    );

                    $this->arResult['ERROR'][] = $arError;
                    $this->arFields[$key]['error'] = $arError;
                    continue;
                }
                
                if (!self::ValidateEmail($val) && !empty($val))
                {
                    $arError = Array (
                        'FIELD_ID'  => $this->GetFieldName($field['name']),
                        'TEXT'      => GetMessage('NT_FORMS_PRO_ERROR_EMAIL', Array ('#FIELD#' => strip_tags($field['label'])))
                    );

                    $this->arResult['ERROR'][] = $arError;
                    $this->arFields[$key]['error'] = $arError;
                    continue;
                }
            }
            
            if ($field['type'] == "checkbox")
            {
                $this->arFields[$field['name']]['value'] = ($val == "Y") ? GetMessage('NT_FORMS_PRO_YES') :  GetMessage('NT_FORMS_PRO_NO');
                
                if ($field['required'] == true && empty($val))
                {
                    $arError = Array (
                        'FIELD_ID'  => $this->GetFieldName($field['name']),
                        'TEXT'      => GetMessage('NT_FORMS_PRO_EMPTY_FIELD_CHECKBOX', Array ('#FIELD#' => strip_tags($field['label'])))
                    );

                    $this->arResult['ERROR'][] = $arError;
                    $this->arFields[$key]['error'] = $arError;
                    continue;
                }
            }
            
            
            if ($field['mask'] && strlen($field['mask']) > 0 && ! self::ValidateMask($field['mask'], $val) )
            {
                $arError = Array (
                    'FIELD_ID'  => $this->GetFieldName($field['name']),
                    'TEXT'      => GetMessage('NT_FORMS_PRO_ERROR_MASK_FIELD', Array ('#FIELD#' => strip_tags($field['label']), '#MASK#' => $field['mask']))
                );
                $this->arResult['ERROR'][] = $arError;
                $this->arFields[$key]['error'] = $arError;
                continue;
            }
            
            if ($field['type'] == 'file')
            {
                
                if (isset($_FILES[$this->formID]['name'][$this->GetFieldName($field['name'], false)]) && !empty($_FILES[$this->formID]['name'][$this->GetFieldName($field['name'], false)]))
                {
                    $arFile = Array (
                        'name'      => $_FILES[$this->formID]['name'][$this->GetFieldName($field['name'], false)],
                        'type'      => $_FILES[$this->formID]['type'][$this->GetFieldName($field['name'], false)],
                        'tmp_name'  => $_FILES[$this->formID]['tmp_name'][$this->GetFieldName($field['name'], false)],
                        'error'     => $_FILES[$this->formID]['error'][$this->GetFieldName($field['name'], false)],
                        'size'      => $_FILES[$this->formID]['size'][$this->GetFieldName($field['name'], false)]
                    );
                }
                
                if ($field['required'] == true && !isset($arFile))
                {
                    $arError = Array (
                        'FIELD_ID'  => $this->GetFieldName($field['name']),
                        'TEXT'      => GetMessage('NT_FORMS_PRO_EMPTY_FIELD', Array ('#FIELD#' => strip_tags($field['label'])))
                    );
                    $this->arResult['ERROR'][] = $arError;
                    $this->arFields[$key]['error'] = $arError;
                    
                    continue;
                }
                
                if (isset($arFile))
                {
                    $fileExt = end(explode(".", $arFile['name']));
                    if ($field['maxSize'] && $field['maxSize'] < $arFile['size'])
                    {
                        
                        $arError = Array (
                            'FIELD_ID'  => $this->GetFieldName($field['name']),
                            'TEXT'      => GetMessage('NT_FORMS_PRO_ERROR_MAXSIZE')
                        );
                        $this->arResult['ERROR'][] = $arError;
                        $this->arFields[$key]['error'] = $arError;
                        
                        
                        continue;
                    }
                    
                    if ($field['allowTypes'] && !in_array($fileExt, $field['allowTypes']))
                    {
                        
                        $arError = Array (
                            'FIELD_ID'  => $this->GetFieldName($field['name']),
                            'TEXT'      => GetMessage('NT_FORMS_PRO_ERROR_FILETYPE')
                        );
                        $this->arResult['ERROR'][] = $arError;
                        $this->arFields[$key]['error'] = $arError;
                        
                        continue;
                    }
                    
                    $fileId = CFile::SaveFile(Array (
                        'name' => $arFile['name'],
                        'size' => $arFile['size'],
                        'tmp_name' => $arFile['tmp_name'],
                        'type' => $arFile['type'],
                    ), 'form_files');
                    
                    if (!$fileId)
                    {
                        $arError = Array (
                            'FIELD_ID'  => $this->GetFieldName($field['name']),
                            'TEXT'      => GetMessage('NT_FORMS_PRO_ERROR_UPLOAD_FILE')
                        );
                        $this->arResult['ERROR'][] = $arError;
                        $this->arFields[$key]['error'] = $arError;
                        continue;
                    }
                    
                    $this->arFields[$field['name']]['value'] = "http://" . $_SERVER['HTTP_HOST'] . CFile::GetPath($fileId);
                    //$this->arFields[$field['name'] . "_path"]['value'] = "<a href='". $this->arFields[$field['name']]['value']."'>".$arFile['name']."</a>";
                    
                }
                
                unset($arFile);
            }
        }

        if (!$this->arResult['ERROR'])
        {
            
            if ($this->arParams['SEND_EMAIL_ENABLED'] == "Y")
            {
                $this->SendEmail();
            }
            
            if ($this->arParams['SEND_IBLOCK_ENABLED'] == "Y")
            {
                $this->Save2IBlock();
            }
            
            //$this->SendEmail();
            //$this->arResult['fields'] = Array ();
            
            unset($_REQUEST[$this->formID]);
            
            $this->arResult['SUCCESS'] = $this->arParams['MESSAGE_SUCCESS'];
            
            
        }
        
    }
    
    private function SendEmail()
    {
        $arData = Array ();
        
        foreach ($this->arFields as $fieldName => $arField)
        {
            if (!empty($arField['value']) && $fieldName != "SYSTEM_PERSONAL_PROCESSING")
            {
                $arData[$fieldName] = $arField['value'];
                $arData['HTML_FIELDS'] .= $arField['label'] . ": " . $arField['value'] . "<br/>";
            }
        }
        
        $arData['EMAIL_TO'] = (!empty($this->arParams['SEND_EMAIL_ADDRESS'])) ? $this->arParams['SEND_EMAIL_ADDRESS'] : COption::GetOptionString("main", "email_from", "");
        $arData['FORM_NAME'] = $this->arParams['NAME'];
        
        if (!empty($this->arParams['SEND_EMAIL_EVENT_NAME']))
        {
            $event = new CEvent;
            $event->SendImmediate($this->arParams['SEND_EMAIL_EVENT_NAME'], SITE_ID, $arData);
        }
        else
        {
            $defaultEvent = "NEXTYPE_FORM_" . $this->formID;
            $rsEventType = CEventType::GetList(Array ('TYPE_ID' => $defaultEvent));
            if (!$arEventType = $rsEventType->Fetch())
            {
                $obEventType = new CEventType;
                $eventTypeID = $obEventType->Add(Array(
                    "EVENT_NAME"    => $defaultEvent,
                    "NAME"          => $defaultEvent,
                    "LID"           => array ("ru", "en"),
                ));
                
                if ($eventTypeID)
                {
                    $eventMessage = new CEventMessage;
                    $eventID = $eventMessage->Add(Array (
                        "ACTIVE" => "Y",
                        "LID" => SITE_ID,
                        "EVENT_NAME" => $defaultEvent,
                        "EMAIL_FROM" => "#DEFAULT_EMAIL_FROM#",
                        "EMAIL_TO" => "#EMAIL_TO#",
                        "BCC" => "#BCC#",
                        "SUBJECT" => GetMessage('NT_FORMS_PRO_DEFAULT_SUBJECT'),
                        "BODY_TYPE" => "html",
                        "MESSAGE" => GetMessage('NT_FORMS_PRO_DEFAULT_MESSAGE')
                    ));
                    
                    
                }
                
            }
            
            $event = new CEvent;
            $result = $event->SendImmediate($defaultEvent, SITE_ID, $arData);
        }
    }
    
    function Save2IBlock()
    {
        global $APPLICATION, $USER;
        if ($this->arParams['SEND_IBLOCK_ENABLED'] == "Y" && !empty($this->arParams['SEND_IBLOCK_TYPE']) && !empty($this->arParams['SEND_IBLOCK_ID']))
        {
            $rsIblockProps = CIBlock::GetProperties($this->arParams['SEND_IBLOCK_ID']);
            $arIblockProps = Array ();
            while ($arIblockProp = $rsIblockProps->Fetch())
            {
                $arIblockProps[$arIblockProp['CODE']] = Array (
                    'ID'    => $arIblockProp['ID'],
                    'NAME'  => $arIblockProp['NAME'],
                    'CODE' => $arIblockProp['CODE'],
                );
            }
            
            
            
            $propSortCounter = 1;
            foreach ($this->arFields as $fieldName => $arField)
            {
                if (!isset($arIblockProps[$fieldName]) && $fieldName != "SYSTEM_PERSONAL_PROCESSING")
                {
                    $arPropData = Array (
                        "NAME" => $arField['label'],
                        "ACTIVE" => "Y",
                        "SORT" => $propSortCounter,
                        "CODE" => $fieldName,
                        "PROPERTY_TYPE" => "S",
                        "IBLOCK_ID" => intval($this->arParams['SEND_IBLOCK_ID'])
                    );
                    $ibProperty = new CIBlockProperty;
                    $ibPropertyID = $ibProperty->Add($arPropData);
                    $propSortCounter++;
                    
                    if ($ibPropertyID)
                    {
                        $arIblockProps[$fieldName] = Array (
                            'ID' => $ibPropertyID,
                            'NAME' => $arPropData['NAME'],
                            'CODE' => $arPropData['CODE'],
                        );
                    }

                }
                
                
            }
            
            
            
            $propertyValues = Array ();
            foreach ($this->arFields as $fieldName => $arField)
            {
                $propertyValues[$arIblockProps[$fieldName]['ID']] = $arField['value'];
            }

            
            $arFields = Array (
                    'NAME'              => GetMessage('NT_FORMS_PRO_DEFAULT_ELEMENT_NAME', Array (
                                           '#FORM_NAME#' => $this->arParams['NAME'],
                                           '#DATE_TIME#' => date("d.m.Y H:i"),
                    )),
                    "MODIFIED_BY"       => $USER->GetID(),
                    "IBLOCK_SECTION_ID" => false,
                    "IBLOCK_ID"         => intval($this->arParams['SEND_IBLOCK_ID']),
                    "PROPERTY_VALUES"   => $propertyValues,
                    "ACTIVE"            => "Y"
            );
                
            $ibElement = new CIBlockElement;
            $ibElement->Add($arFields);
            
            
        }
    }
}

?>
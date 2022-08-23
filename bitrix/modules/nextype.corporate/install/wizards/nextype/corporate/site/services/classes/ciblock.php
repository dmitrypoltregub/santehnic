<?php

namespace Nextype\Wizard;

class CIblock
{
    public static function GetLanguages()
    {
        $arLanguages = Array();
        $rsLanguage = \CLanguage::GetList($by, $order, array());
        while($arLanguage = $rsLanguage->Fetch())
            $arLanguages[] = $arLanguage["LID"];
        
        return $arLanguages;
    }
    
    public static function SetRelatedElements($iblockID, $settings)
    {
        if (is_array($settings['RELATED_ELEMENTS']))
        {
            $arElementProps = Array ();
            
            foreach ($settings['RELATED_ELEMENTS'] as $propCode => $arParams)
            {
                foreach ($arParams['ITEMS'] as $elementCode)
                {
                    $arFilter = Array (
                        "IBLOCK_CODE" => $arParams['IBLOCK_CODE'] . "_" . WIZARD_SITE_ID,
                        'XML_ID' => $elementCode
                    );
                    
                    
                    $arItem = \CIBlockElement::GetList(Array(), $arFilter, false, false, Array("ID"))->fetch();
                    if (!empty($arItem['ID']))
                    {
                        $arElementProps[$propCode][] = $arItem['ID'];
                    }
                }

            }
            
            if (count($arElementProps) > 0)
            {
                $rsItems = \CIBlockElement::GetList(Array(), Array("IBLOCK_ID" => $iblockID), false, false, Array("ID"));
                while ($arItem = $rsItems->fetch())
                {
                    \CIBlockElement::SetPropertyValuesEx($arItem['ID'], $iblockID, $arElementProps);
                }
            }
        }
    }


    public static function CreateIblockType($arFields)
    {
        if (System::CheckWizardInstalled())
        {
            $rsType = \CIBlockType::GetList(Array(),Array("=ID" => $arFields["ID"]));
            if($rsType->Fetch())
                return true;
            
            $arLanguages = self::GetLanguages();
            
            $arType = Array (
                "ID" => $arFields['ID'],
                "SECTIONS" => $arFields['SECTIONS']
            );
            
            foreach($arLanguages as $languageID)
            {
                    \WizardServices::IncludeServiceLang("types.php", $languageID);
                    $arType["LANG"][$languageID]["NAME"] = GetMessage($arFields["ID"]."_TYPE_NAME");
                    $arType["LANG"][$languageID]["ELEMENT_NAME"] = GetMessage($arFields["ID"]."_ELEMENT_NAME");

                    if ($arFields["SECTIONS"] == "Y")
                        $arType["LANG"][$languageID]["SECTION_NAME"] = GetMessage($arFields["ID"]."_SECTION_NAME");
            }
            $iblockType = new \CIBlockType;
            if ($iblockType->Add($arType))
            {
                CFiles::ReplaceContent(Array (
                    $arFields['CODE_REPLACE'] => $arFields["ID"]
                ));
            }
        }
    }
    
    public static function CreateIblock($arFields, $langFile = "content.php")
    {
        if (System::CheckWizardInstalled())
        {
            $rawCode = $arFields['CODE'];
            $arFields['CODE'] = $arFields['CODE'] . "_" . WIZARD_SITE_ID;
            $rsIblock = \CIBlock::GetList(Array(), Array ('TYPE' => $arFields['IBLOCK_TYPE_ID'], 'CODE' => $arFields['CODE'], 'SITE_ID' => WIZARD_SITE_ID), true);
            if ($arIblock = $rsIblock->fetch())
                return $arIblock;

            \WizardServices::IncludeServiceLang($langFile, LANGUAGE_ID);
            
            $obIblock = new \CIBlock;
            $arFields['SITE_ID'] = Array (WIZARD_SITE_ID);
            //$arFields['NAME'] = GetMessage($rawCode."_NAME");
            
            if ($id = $obIblock->Add($arFields))
            {
                $arFields['ID'] = $id;
                return $arFields;
            }
            
            
        }
        
        return false;
    }
    
    public static function ImportIblockFromXml($arParams, $xmlFile)
    {
        if (System::CheckWizardInstalled())
        {
            $iblockCode = $arParams['CODE'] . "_" . WIZARD_SITE_ID;

            $rsIBlock = \CIBlock::GetList(array(), array("CODE" => $iblockCode, "TYPE" => $arParams['IBLOCK_TYPE_ID']));
            if ($arIBlock = $rsIBlock->Fetch())
            {
                $iblockID = $arIBlock['ID'];
            }
            
            if (WIZARD_INSTALL_DEMO_DATA)
            {
                
                \CIBlock::Delete($iblockID);
		$iblockID = false;
                
                if(file_exists($xmlFile.".back"))
                    @copy($xmlFile.".back", $xmlFile);

                @copy($xmlFile, $xmlFile.".back");


                \CWizardUtil::ReplaceMacros($xmlFile, Array(
                    "XML_IBLOCK_CODE" => $iblockCode,
                    "XML_SITE_ID" => WIZARD_SITE_ID,
                    "XML_SITE_DIR" => WIZARD_SITE_DIR
                ));

                $xmlFilePath = str_replace($_SERVER['DOCUMENT_ROOT'], "", $xmlFile);

                $iblockID = \WizardServices::ImportIBlockFromXML(
                        $xmlFilePath,
                        $iblockCode,
                        $arParams['IBLOCK_TYPE_ID'],
                        WIZARD_SITE_ID,
                        $arParams['GROUP_ID']
                );


                if ($iblockID < 1) return false;

                
                $arFields = Array (
                    "CODE" => $iblockCode,
                    "XML_ID" => $iblockCode
                );

                $arFields = array_merge($arParams, $arFields);
                
                $obIblock = new \CIBlock;
                $obIblock->Update($iblockID, $arFields);

            }
            
            if (!empty($arParams['USER_FORM_ELEMENT']))
                self::SetUserElementForm($iblockID, $arParams['USER_FORM_ELEMENT']);
            
            if (!empty($arParams['USER_LIST_COLUMNS']))
                self::SetUserListColumns($iblockID, $arParams['IBLOCK_TYPE_ID'], $arParams['USER_LIST_COLUMNS']);
            
            \Nextype\Wizard\CFiles::ReplaceContent(Array (
                $arParams['CODE_REPLACE'] => $iblockID
            ));
            
            return $iblockID;
        }
    }
    
    public static function SetUserElementForm($iblockID, $arOptions)
    {
        $optionString = "";

        foreach ($arOptions as $key => $tab)
        {
            $tab['TITLE'] = ($GLOBALS['IS_UTF8'] ? iconv('CP1251', 'UTF-8', $tab['TITLE']) : $tab['TITLE']);
            $tab['NAME'] = ($GLOBALS['IS_UTF8'] ? iconv('CP1251', 'UTF-8', $tab['NAME']) : $tab['NAME']);
                
            $optionString .= "cedit" . ($key + 1) . "--#--".$tab['TITLE']."--,";
            foreach ($tab['ITEMS'] as $itemKey => $arItem)
            {
                $required = ($arItem['REQUIRED'] == "Y") ? "*" : "";
                $optionString .= "--".$arItem['CODE']."--#--".$required.$arItem['NAME']."--";
                if ($itemKey+1 < count($tab['ITEMS']))
                    $optionString .= ",";
            }

            $optionString .= ";--";
        }

        \CUserOptions::SetOption("form", "form_element_" . $iblockID, array("tabs" =>$optionString) );
    }
    
    public static function SetUserListColumns($iblockID, $iblockType, $arColumns)
    {
        $dbProperty = \CIBlockProperty::GetList(array(), array("IBLOCK_ID" => $iblockID));
	while($arProp = $dbProperty->Fetch())
            $arProperty[$arProp["CODE"]] = $arProp["ID"];
        
        foreach ($arColumns as $key => $prop)
        {
            if (strpos($prop, "PROPERTY_") !== false)
            {
                $prop = str_replace("PROPERTY_", "", $prop);
                $arColumns[$key] = "PROPERTY_" . $arProperty[$prop];
            }
        }
        
        \CUserOptions::SetOption("list", "tbl_iblock_list_".md5($iblockType.".".$iblockID), array(
		'columns' => implode(",", $arColumns), 'by' => 'sort', 'order' => 'asc', 'page_size' => '20',
	));
    }
}
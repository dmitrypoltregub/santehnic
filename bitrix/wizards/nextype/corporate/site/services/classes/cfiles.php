<?php

namespace Nextype\Wizard;

class CFiles
{
    public static function CopySiteFiles()
    {
        if(System::CheckWizardInstalled())
        {
                if(file_exists(WIZARD_ABSOLUTE_PATH."/site/public/".LANGUAGE_ID."/"))
                {
                        CopyDirFiles(
                                WIZARD_ABSOLUTE_PATH."/site/public/".LANGUAGE_ID."/",
                                WIZARD_SITE_PATH,
                                $rewrite = true,
                                $recursive = true,
                                $delete_after_copy = false
                        );
                        
                        \WizardServices::PatchHtaccess(WIZARD_SITE_PATH);
                }
        }
    }
    
    public static function InstallTemplate()
    {
        if(System::CheckWizardInstalled())
        {
            $templateName = WIZARD_TEMPLATE_ID . "_" . WIZARD_SITE_ID;
            $bitrixTemplateDir = $_SERVER["DOCUMENT_ROOT"].BX_PERSONAL_ROOT."/templates/".$templateName;
            $templateWizardPath = $_SERVER["DOCUMENT_ROOT"] . \WizardServices::GetTemplatesPath(WIZARD_RELATIVE_PATH."/site") . "/" . WIZARD_TEMPLATE_ID;
            $result = CopyDirFiles(
                    $templateWizardPath,
                    $bitrixTemplateDir,
                    $rewrite = true,
                    $recursive = true, 
                    $delete_after_copy = false
                    //$exclude = "themes"
            );
            
            if (!$result)
                die('Error copy template');
            
            $rsSite = \CSite::GetList($by = "def", $order = "desc", Array("LID" => WIZARD_SITE_ID));
            if ($arSite = $rsSite->Fetch())
            {
                    $arTemplates = Array();
                    $found = false;
                    $foundEmpty = false;
                    $obTemplate = \CSite::GetTemplateList($arSite["LID"]);
                    while($arTemplate = $obTemplate->Fetch())
                    {
                            if(!$found && strlen(trim($arTemplate["CONDITION"]))<=0)
                            {
                                    $arTemplate["TEMPLATE"] = $templateName;
                                    $found = true;
                            }
                            if($arTemplate["TEMPLATE"] == "empty")
                            {
                                    $foundEmpty = true;
                                    continue;
                            }
                            $arTemplates[]= $arTemplate;
                    }

                    if (!$found)
                            $arTemplates[]= Array("CONDITION" => "", "SORT" => 150, "TEMPLATE" => $templateName);

                    $arFields = Array(
                            "TEMPLATE" => $arTemplates,
                            "NAME" => $arSite["NAME"],
                    );

                    $obSite = new \CSite();
                    if (!$obSite->Update($arSite["LID"], $arFields))
                        die('Error update site template');
            }
            
        }
        
        return true;
    }
    
    public static function ReplaceContent($arData, $path = "")
    {
        if(System::CheckWizardInstalled())
        {
            \WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH . $path, $arData);
        }
    }
    
    public static function WriteContentToFile($path, $text)
    {
        $fd = @fopen($path, "wb");
	if(!$fd)
		return false;

	if(false === fwrite($fd, $text))
	{
		fclose($fd);
		return false;
	}

	fclose($fd);

	if(defined("BX_FILE_PERMISSIONS"))
		@chmod($path, BX_FILE_PERMISSIONS);
    }
}
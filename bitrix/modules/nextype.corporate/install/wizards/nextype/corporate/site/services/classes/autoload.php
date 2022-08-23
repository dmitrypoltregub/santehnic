<?php

namespace Nextype\Wizard;

class System
{
    const moduleId = "nextype.corporate";
    
    public static function CheckWizardInstalled()
    {
        if (\COption::GetOptionString(self::moduleId, "wizard_installed", "N", WIZARD_SITE_ID) == "N" || WIZARD_INSTALL_DEMO_DATA)
            return true;
        
        return false;
    }
    
    public static function IsUtf8()
    {
        $sql='SHOW VARIABLES LIKE "character_set_database";';
        
        if(method_exists('\Bitrix\Main\Application', 'getConnection'))
        {
                $db=\Bitrix\Main\Application::getConnection();
                $arResult = $db->query($sql)->fetch();
                $isUTF8 = $arResult['Value'] == 'utf8';
        }
        elseif(defined("BX_USE_MYSQLI") && BX_USE_MYSQLI === true)
        {
                if($result = @mysqli_query($sql)){
                        $arResult = mysql_fetch_row($result);
                        $isUTF8 = $arResult[1] == 'utf8';
                }
        }
        elseif($result = @mysql_query($sql))
        {
                $arResult = mysql_fetch_row($result);
                $isUTF8 = $arResult[1] == 'utf8';
        }
        
        return $isUTF8;
    }
}

$GLOBALS['IS_UTF8'] = System::IsUtf8();

foreach (Array ('cfiles.php', 'ciblock.php', 'csettings.php') as $file)
    include_once __DIR__ . "/" . $file;
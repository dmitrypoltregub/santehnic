<?php

use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

function OnBuildGlobalMenuHandler(&$aGlobalMenu, &$aModuleMenu)
{
    global $USER, $APPLICATION;

    if (!$USER->IsAdmin())
        return false;

    $moduleId = "nextype.corporate";
    $moduleMenuId = "nextype_corporate";
    if (!CModule::IncludeModule($moduleId))
        return false;

    if ($APPLICATION->GetGroupRight($moduleId) < "R")
        return false;

    $strStyles = file_get_contents(__DIR__ . "/../css/menu.css");
    $APPLICATION->AddHeadString('<style>'.$strStyles.'</style>');

    return Array(
        "global_menu_nextype" => Array(
            "menu_id" => "nextype",
            "text" => Loc::getMessage("NT_GLOBAL_MENU_TITLE"),
            "title" => Loc::getMessage("NT_GLOBAL_MENU_TITLE"),
            "sort" => 2000,
            "items_id" => "global_menu_nextype",
            "help_section" => "nextype",
            "items" => Array(
                Array (
                    'text' => GetMessage('NT_CORPORATE_MENU_TITLE'),
                    'url' => '/bitrix/admin/' . $moduleId . '_cp.php',
                    "section" => "nextype",
                    "sort" => 100,
                    'icon' => 'cp_corporate_icon',
                    "page_icon" => $moduleMenuId . "_page_cp_icon",
                    "parent_menu" => "global_menu_nextype",
                    "items_id" => "menu_corporate",
                    "items" => Array (
                        Array(
                            'text' => GetMessage('NT_CORPORATE_MENU_OPTIONS_TITLE'),
                            'url' => '/bitrix/admin/' . $moduleId . '_options.php',
                            "more_url" => array(
                                '/bitrix/admin/' . $moduleId . '_options.php',
                            ),
                        ),
                    )
                ),

            )
        )
    );
}

AddEventHandler('main', 'OnBuildGlobalMenu', 'OnBuildGlobalMenuHandler');
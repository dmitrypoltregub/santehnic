<?
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;
use Bitrix\Main\Web\Json;


CBitrixComponent::includeComponentClass($componentName);

$arComponentParameters = Array(
    "GROUPS" => Array(
        "GROUP_BASE"    => Array (
            "NAME"      => GetMessage("NT_LP_BLOCK_GROUP_BASE"),
            "SORT"      => 0
        ),
    ),
    "PARAMETERS" => Array (

        "ITEMS" => array(
            "PARENT" => "GROUP_BASE",
            "REFRESH" => "N",
            "NAME" => GetMessage("NT_LP_BLOCK_FIELDS"),
            "TYPE" => "CUSTOM",
            "JS_FILE" => NextypeLandingBlocksComponent::getSettingsScript($componentPath, 'items'),
            "JS_EVENT" => "initItemsControl",
            "JS_DATA" => Json::encode(Array()),
            'JS_MESSAGES' => Json::encode(array(
		'name' => GetMessage('NT_LP_BLOCK_NAME'),
		'description' => GetMessage('NT_LP_BLOCK_DESCRIPTION'),
                'icon' => GetMessage('NT_LP_BLOCK_ICON'),
                'add_field' => GetMessage('NT_LP_BLOCK_ADD_ITEM'),
            )),
            "JS_ICONS" => Json::encode(NextypeLandingBlocksComponent::getIconsList($componentPath)),
           
            "DEFAULT" => "",
        ),

    )
);
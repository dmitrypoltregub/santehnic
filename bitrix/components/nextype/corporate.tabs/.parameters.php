<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var string $componentPath
 * @var string $componentName
 * @var array $arCurrentValues
 * @global CUserTypeManager $USER_FIELD_MANAGER
 */

use Bitrix\Main\Loader;
use Bitrix\Main\Web\Json;
use Bitrix\Iblock;
use Bitrix\Currency;

global $USER_FIELD_MANAGER;

if (!Loader::includeModule('iblock'))
	return;

$catalogIncluded = Loader::includeModule('catalog');
CBitrixComponent::includeComponentClass($componentName);
$iblockExists = (!empty($arCurrentValues['IBLOCK_ID']) && (int)$arCurrentValues['IBLOCK_ID'] > 0);

$arIBlockType = CIBlockParameters::GetIBlockTypes();

$arIBlock = array();
$iblockFilter = !empty($arCurrentValues['IBLOCK_TYPE'])
	? array('TYPE' => $arCurrentValues['IBLOCK_TYPE'], 'ACTIVE' => 'Y')
	: array('ACTIVE' => 'Y');

$rsIBlock = CIBlock::GetList(array('SORT' => 'ASC'), $iblockFilter);
while ($arr = $rsIBlock->Fetch())
{
	$arIBlock[$arr['ID']] = '['.$arr['ID'].'] '.$arr['NAME'];
}
unset($arr, $rsIBlock, $iblockFilter);

$defaultValue = array('-' => GetMessage('CP_BCS_EMPTY'));

$arProperty = array();
$arProperty_N = array();
$arProperty_X = array();
$listProperties = array();

if ($iblockExists)
{
	$propertyIterator = Iblock\PropertyTable::getList(array(
		'select' => array('ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PROPERTY_TYPE', 'MULTIPLE', 'LINK_IBLOCK_ID', 'USER_TYPE', 'SORT'),
		'filter' => array('=IBLOCK_ID' => $arCurrentValues['IBLOCK_ID'], '=ACTIVE' => 'Y'),
		'order' => array('SORT' => 'ASC', 'NAME' => 'ASC')
	));
	while ($property = $propertyIterator->fetch())
	{
		$propertyCode = (string)$property['CODE'];

		if ($propertyCode === '')
		{
			$propertyCode = $property['ID'];
		}

		$propertyName = '['.$propertyCode.'] '.$property['NAME'];

		if ($property['PROPERTY_TYPE'] != Iblock\PropertyTable::TYPE_FILE)
		{
			$arProperty[$propertyCode] = $propertyName;

			if ($property['MULTIPLE'] === 'Y')
			{
				$arProperty_X[$propertyCode] = $propertyName;
			}
			elseif ($property['PROPERTY_TYPE'] == Iblock\PropertyTable::TYPE_LIST)
			{
				$arProperty_X[$propertyCode] = $propertyName;
			}
			elseif ($property['PROPERTY_TYPE'] == Iblock\PropertyTable::TYPE_ELEMENT && (int)$property['LINK_IBLOCK_ID'] > 0)
			{
				$arProperty_X[$propertyCode] = $propertyName;
			}
		}

		if ($property['PROPERTY_TYPE'] == Iblock\PropertyTable::TYPE_NUMBER)
		{
			$arProperty_N[$propertyCode] = $propertyName;
		}
	}
	unset($propertyCode, $propertyName, $property, $propertyIterator);
}

$arProperty_UF = array();
$arSProperty_LNS = array();
$arSProperty_F = array();
if ($iblockExists)
{
	$arUserFields = $USER_FIELD_MANAGER->GetUserFields('IBLOCK_'.$arCurrentValues['IBLOCK_ID'].'_SECTION', 0, LANGUAGE_ID);

	foreach( $arUserFields as $FIELD_NAME => $arUserField)
	{
		$arUserField['LIST_COLUMN_LABEL'] = (string)$arUserField['LIST_COLUMN_LABEL'];
		$arProperty_UF[$FIELD_NAME] = $arUserField['LIST_COLUMN_LABEL'] ? '['.$FIELD_NAME.']'.$arUserField['LIST_COLUMN_LABEL'] : $FIELD_NAME;

		if ($arUserField['USER_TYPE']['BASE_TYPE'] === 'string')
		{
			$arSProperty_LNS[$FIELD_NAME] = $arProperty_UF[$FIELD_NAME];
		}

		if ($arUserField['USER_TYPE']['BASE_TYPE'] === 'file' && $arUserField['MULTIPLE'] === 'N')
		{
			$arSProperty_F[$FIELD_NAME] = $arProperty_UF[$FIELD_NAME];
		}
	}
	unset($arUserFields);
}

$offers = false;
$filterDataValues = array();
$arProperty_Offers = array();
$arProperty_OffersWithoutFile = array();

if ($catalogIncluded && $iblockExists)
{
	$filterDataValues['iblockId'] = (int)$arCurrentValues['IBLOCK_ID'];
	$offers = CCatalogSku::GetInfoByProductIBlock($arCurrentValues['IBLOCK_ID']);
	if (!empty($offers))
	{
		$filterDataValues['offersIblockId'] = $offers['IBLOCK_ID'];
		$propertyIterator = Iblock\PropertyTable::getList(array(
			'select' => array('ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PROPERTY_TYPE', 'MULTIPLE', 'LINK_IBLOCK_ID', 'USER_TYPE', 'SORT'),
			'filter' => array('=IBLOCK_ID' => $offers['IBLOCK_ID'], '=ACTIVE' => 'Y', '!=ID' => $offers['SKU_PROPERTY_ID']),
			'order' => array('SORT' => 'ASC', 'NAME' => 'ASC')
		));
		while ($property = $propertyIterator->fetch())
		{
			$propertyCode = (string)$property['CODE'];

			if ($propertyCode === '')
			{
				$propertyCode = $property['ID'];
			}

			$propertyName = '['.$propertyCode.'] '.$property['NAME'];
			$arProperty_Offers[$propertyCode] = $propertyName;

			if ($property['PROPERTY_TYPE'] != Iblock\PropertyTable::TYPE_FILE)
			{
				$arProperty_OffersWithoutFile[$propertyCode] = $propertyName;
			}
		}
		unset($propertyCode, $propertyName, $property, $propertyIterator);
	}
}

$arSort = CIBlockParameters::GetElementSortFields(
	array('SHOWS', 'SORT', 'TIMESTAMP_X', 'NAME', 'ID', 'ACTIVE_FROM', 'ACTIVE_TO'),
	array('KEY_LOWERCASE' => 'Y')
);

$arPrice = array();
if ($catalogIncluded)
{
	$arOfferSort = array_merge($arSort, CCatalogIBlockParameters::GetCatalogSortFields());
	if (isset($arSort['CATALOG_AVAILABLE']))
		unset($arSort['CATALOG_AVAILABLE']);
	$arPrice = CCatalogIBlockParameters::getPriceTypesList();
}
else
{
	$arOfferSort = $arSort;
	$arPrice = $arProperty_N;
}

/*$arPropertyTagsValues = Array ();
if (!empty($arCurrentValues['IBLOCK_PROPERTY_TAGS']))
{
    $rsPropsEnums = CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>$arCurrentValues['IBLOCK_ID'], "CODE" => $arCurrentValues['IBLOCK_PROPERTY_TAGS']));
    while ($arPropEnums = $rsPropsEnums->fetch())
    {
        $arPropertyTagsValues[$arPropEnums['ID']] = "[" . $arPropEnums['ID'] . "] " . $arPropEnums['VALUE'];
    }
}*/

$arAscDesc = array(
	'asc' => GetMessage('IBLOCK_SORT_ASC'),
	'desc' => GetMessage('IBLOCK_SORT_DESC'),
);

$arComponentParameters = array(
	'GROUPS' => array(
		'SORT_SETTINGS' => array(
			'NAME' => GetMessage('SORT_SETTINGS'),
			'SORT' => 210
		),
		'BIG_DATA_SETTINGS' => array(
			'NAME' => GetMessage('BIG_DATA_SETTINGS'),
			'SORT' => 310
		),
		'ACTION_SETTINGS' => array(
			'NAME' => GetMessage('IBLOCK_ACTIONS')
		),
		'PRICES' => array(
			'NAME' => GetMessage('IBLOCK_PRICES'),
		),
		'BASKET' => array(
			'NAME' => GetMessage('IBLOCK_BASKET'),
		),
		'COMPARE' => array(
			'NAME' => GetMessage('IBLOCK_COMPARE')
		),
		'EXTENDED_SETTINGS' => array(
			'NAME' => GetMessage('IBLOCK_EXTENDED_SETTINGS'),
			'SORT' => 10000
		),
		'ANALYTICS_SETTINGS' => array(
			'NAME' => GetMessage('ANALYTICS_SETTINGS'),
			'SORT' => 11000
		)
	),
	'PARAMETERS' => array(
		'SEF_MODE' => array(),
		'SEF_RULE' => array(
			'VALUES' => array(
				'SECTION_ID' => array(
					'TEXT' => GetMessage('IBLOCK_SECTION_ID'),
					'TEMPLATE' => '#SECTION_ID#',
					'PARAMETER_LINK' => 'SECTION_ID',
					'PARAMETER_VALUE' => '={$_REQUEST["SECTION_ID"]}',
				),
				'SECTION_CODE' => array(
					'TEXT' => GetMessage('IBLOCK_SECTION_CODE'),
					'TEMPLATE' => '#SECTION_CODE#',
					'PARAMETER_LINK' => 'SECTION_CODE',
					'PARAMETER_VALUE' => '={$_REQUEST["SECTION_CODE"]}',
				),
				'SECTION_CODE_PATH' => array(
					'TEXT' => GetMessage('CP_BCS_SECTION_CODE_PATH'),
					'TEMPLATE' => '#SECTION_CODE_PATH#',
					'PARAMETER_LINK' => 'SECTION_CODE_PATH',
					'PARAMETER_VALUE' => '={$_REQUEST["SECTION_CODE_PATH"]}',
				),
			),
		),
            'PROPERTY_TAGS' => array(
			'PARENT' => 'BASE',
			'NAME' => GetMessage('CP_BC_PROPERTY_TAGS'),
			'TYPE' => 'LIST',
			'MULTIPLE' => 'Y',
			'REFRESH' => 'N',
			'VALUES' => $arProperty_X,
			'ADDITIONAL_VALUES' => 'Y',
            ),
    
                'PROPERTY_PRICE' => array(
                                    'PARENT' => 'BASE',
                                    'NAME' => GetMessage('CP_BC_PROPERTY_PRICE'),
                                    'TYPE' => 'LIST',
                                    'MULTIPLE' => 'N',
                                    'REFRESH' => 'N',
                                    'VALUES' => $arProperty_X,
                                    'ADDITIONAL_VALUES' => 'Y',
                        ),

                'PROPERTY_OLD_PRICE' => array(
                                    'PARENT' => 'BASE',
                                    'NAME' => GetMessage('CP_BC_PROPERTY_OLD_PRICE'),
                                    'TYPE' => 'LIST',
                                    'MULTIPLE' => 'N',
                                    'REFRESH' => 'N',
                                    'VALUES' => $arProperty_X,
                                    'ADDITIONAL_VALUES' => 'Y',
                        ),
		'AJAX_MODE' => array(),
		'IBLOCK_TYPE' => array(
			'PARENT' => 'BASE',
			'NAME' => GetMessage('IBLOCK_TYPE'),
			'TYPE' => 'LIST',
			'VALUES' => $arIBlockType,
			'REFRESH' => 'Y',
		),
		'IBLOCK_ID' => array(
			'PARENT' => 'BASE',
			'NAME' => GetMessage('IBLOCK_IBLOCK'),
			'TYPE' => 'LIST',
			'ADDITIONAL_VALUES' => 'Y',
			'VALUES' => $arIBlock,
			'REFRESH' => 'Y',
		),
		
		
		'ELEMENT_SORT_FIELD' => array(
			'PARENT' => 'SORT_SETTINGS',
			'NAME' => GetMessage('IBLOCK_ELEMENT_SORT_FIELD'),
			'TYPE' => 'LIST',
			'VALUES' => $arSort,
			'ADDITIONAL_VALUES' => 'Y',
			'DEFAULT' => 'sort',
		),
		'ELEMENT_SORT_ORDER' => array(
			'PARENT' => 'SORT_SETTINGS',
			'NAME' => GetMessage('IBLOCK_ELEMENT_SORT_ORDER'),
			'TYPE' => 'LIST',
			'VALUES' => $arAscDesc,
			'DEFAULT' => 'asc',
			'ADDITIONAL_VALUES' => 'Y',
		),
		'ELEMENT_SORT_FIELD2' => array(
			'PARENT' => 'SORT_SETTINGS',
			'NAME' => GetMessage('IBLOCK_ELEMENT_SORT_FIELD2'),
			'TYPE' => 'LIST',
			'VALUES' => $arSort,
			'ADDITIONAL_VALUES' => 'Y',
			'DEFAULT' => 'id',
		),
		'ELEMENT_SORT_ORDER2' => array(
			'PARENT' => 'SORT_SETTINGS',
			'NAME' => GetMessage('IBLOCK_ELEMENT_SORT_ORDER2'),
			'TYPE' => 'LIST',
			'VALUES' => $arAscDesc,
			'DEFAULT' => 'desc',
			'ADDITIONAL_VALUES' => 'Y',
		),
		
		'INCLUDE_SUBSECTIONS' => array(
			'PARENT' => 'DATA_SOURCE',
			'NAME' => GetMessage('CP_BCS_INCLUDE_SUBSECTIONS'),
			'TYPE' => 'LIST',
			'VALUES' => array(
				'Y' => GetMessage('CP_BCS_INCLUDE_SUBSECTIONS_ALL'),
				'A' => GetMessage('CP_BCS_INCLUDE_SUBSECTIONS_ACTIVE'),
				'N' => GetMessage('CP_BCS_INCLUDE_SUBSECTIONS_NO'),
			),
			'DEFAULT' => 'Y',
		),
		'SHOW_ALL_WO_SECTION' => array(
			'PARENT' => 'DATA_SOURCE',
			'NAME' => GetMessage('CP_BCS_SHOW_ALL_WO_SECTION'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'N',
		),
                'FILTER_NAME' => array(
			'PARENT' => 'DATA_SOURCE',
			'NAME' => GetMessage('IBLOCK_FILTER_NAME_IN'),
			'TYPE' => 'STRING',
			'DEFAULT' => 'arrFilter',
		),
		'SECTION_URL' => CIBlockParameters::GetPathTemplateParam(
			'SECTION',
			'SECTION_URL',
			GetMessage('IBLOCK_SECTION_URL'),
			'',
			'URL_TEMPLATES'
		),
		'DETAIL_URL' => CIBlockParameters::GetPathTemplateParam(
			'DETAIL',
			'DETAIL_URL',
			GetMessage('IBLOCK_DETAIL_URL'),
			'',
			'URL_TEMPLATES'
		),
		'SECTION_ID_VARIABLE' => array(
			'PARENT' => 'URL_TEMPLATES',
			'NAME' => GetMessage('IBLOCK_SECTION_ID_VARIABLE'),
			'TYPE' => 'STRING',
			'DEFAULT' => 'SECTION_ID',
		),
                "IBLOCK_PROPERTY_TAGS" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_PROPERTY_TAGS"),
			"TYPE" => "LIST",
			"MULTIPLE" => "Y",
                        'REFRESH' => "N",
			'VALUES' => $arProperty,
			'ADDITIONAL_VALUES' => 'Y',
		),
                /*"IBLOCK_PROPERTY_TAGS_VALUES" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_PROPERTY_TAGS_VALUES"),
			"TYPE" => "LIST",
			"MULTIPLE" => "Y",
			"VALUES" => $arPropertyTagsValues,
		),*/
		
		'ELEMENT_COUNT' => array(
			'PARENT' => 'VISUAL',
			'NAME' => GetMessage('IBLOCK_ELEMENT_COUNT'),
			'TYPE' => 'STRING',
			'DEFAULT' => '8'
		),
		'PROPERTY_CODE' => array(
			'PARENT' => 'VISUAL',
			'NAME' => GetMessage('IBLOCK_PROPERTY'),
			'TYPE' => 'LIST',
			'MULTIPLE' => 'Y',
			'REFRESH' => isset($templateProperties['PROPERTY_CODE_MOBILE']) ? 'Y' : 'N',
			'VALUES' => $arProperty,
			'ADDITIONAL_VALUES' => 'Y',
		),
                'LABEL_PROP' => array(
			'PARENT' => 'VISUAL',
			'NAME' => GetMessage('CP_BC_TPL_LABEL_PROP'),
			'TYPE' => 'LIST',
			'MULTIPLE' => 'Y',
			'VALUES' => $arProperty,
			'ADDITIONAL_VALUES' => 'Y',
		),
		'PROPERTY_CODE_MOBILE' => array(),
		'OFFERS_FIELD_CODE' => CIBlockParameters::GetFieldCode(GetMessage('CP_BCS_OFFERS_FIELD_CODE'), 'VISUAL'),
		'OFFERS_PROPERTY_CODE' => array(
			'PARENT' => 'VISUAL',
			'NAME' => GetMessage('CP_BCS_OFFERS_PROPERTY_CODE'),
			'TYPE' => 'LIST',
			'MULTIPLE' => 'Y',
			'VALUES' => $arProperty_Offers,
			'ADDITIONAL_VALUES' => 'Y',
		),
		'DISPLAY_IN_STOCK' => array(
			'PARENT' => 'VISUAL',
			'NAME' => GetMessage('CP_DISPLAY_IN_STOCK'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'Y'
		),
		'OFFERS_SORT_FIELD' => array(
			'PARENT' => 'SORT_SETTINGS',
			'NAME' => GetMessage('CP_BCS_OFFERS_SORT_FIELD'),
			'TYPE' => 'LIST',
			'VALUES' => $arOfferSort,
			'ADDITIONAL_VALUES' => 'Y',
			'DEFAULT' => 'sort',
		),
		'OFFERS_SORT_ORDER' => array(
			'PARENT' => 'SORT_SETTINGS',
			'NAME' => GetMessage('CP_BCS_OFFERS_SORT_ORDER'),
			'TYPE' => 'LIST',
			'VALUES' => $arAscDesc,
			'DEFAULT' => 'asc',
			'ADDITIONAL_VALUES' => 'Y',
		),
		'OFFERS_SORT_FIELD2' => array(
			'PARENT' => 'SORT_SETTINGS',
			'NAME' => GetMessage('CP_BCS_OFFERS_SORT_FIELD2'),
			'TYPE' => 'LIST',
			'VALUES' => $arOfferSort,
			'ADDITIONAL_VALUES' => 'Y',
			'DEFAULT' => 'id',
		),
		'OFFERS_SORT_ORDER2' => array(
			'PARENT' => 'SORT_SETTINGS',
			'NAME' => GetMessage('CP_BCS_OFFERS_SORT_ORDER2'),
			'TYPE' => 'LIST',
			'VALUES' => $arAscDesc,
			'DEFAULT' => 'desc',
			'ADDITIONAL_VALUES' => 'Y',
		),
		'OFFERS_LIMIT' => array(
			'PARENT' => 'VISUAL',
			'NAME' => GetMessage('CP_BCS_OFFERS_LIMIT'),
			'TYPE' => 'STRING',
			'DEFAULT' => 5
		),
		
		'BASKET_URL' => array(
			'PARENT' => 'BASKET',
			'NAME' => GetMessage('IBLOCK_BASKET_URL'),
			'TYPE' => 'STRING',
			'DEFAULT' => '/personal/basket.php',
		),
		'ACTION_VARIABLE' => array(
			'PARENT' => 'ACTION_SETTINGS',
			'NAME' => GetMessage('IBLOCK_ACTION_VARIABLE'),
			'TYPE' => 'STRING',
			'DEFAULT' => 'action',
		),
		'PRODUCT_ID_VARIABLE' => array(
			'PARENT' => 'ACTION_SETTINGS',
			'NAME' => GetMessage('IBLOCK_PRODUCT_ID_VARIABLE'),
			'TYPE' => 'STRING',
			'DEFAULT' => 'id',
		),
		'USE_PRODUCT_QUANTITY' => array(
			'PARENT' => 'BASKET',
			'NAME' => GetMessage('CP_BCS_USE_PRODUCT_QUANTITY'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'N',
			'REFRESH' => 'Y',
		),
		'PRODUCT_QUANTITY_VARIABLE' => array(
			'PARENT' => 'BASKET',
			'NAME' => GetMessage('CP_BCS_PRODUCT_QUANTITY_VARIABLE'),
			'TYPE' => 'STRING',
			'DEFAULT' => 'quantity',
			'HIDDEN' => (isset($arCurrentValues['USE_PRODUCT_QUANTITY']) && $arCurrentValues['USE_PRODUCT_QUANTITY'] === 'Y' ? 'N' : 'Y')
		),
		'ADD_PROPERTIES_TO_BASKET' => array(
			'PARENT' => 'BASKET',
			'NAME' => GetMessage('CP_BCS_ADD_PROPERTIES_TO_BASKET'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'Y',
			'REFRESH' => 'Y'
		),
		'PRODUCT_PROPS_VARIABLE' => array(
			'PARENT' => 'BASKET',
			'NAME' => GetMessage('CP_BCS_PRODUCT_PROPS_VARIABLE'),
			'TYPE' => 'STRING',
			'DEFAULT' => 'prop',
			'HIDDEN' => (isset($arCurrentValues['ADD_PROPERTIES_TO_BASKET']) && $arCurrentValues['ADD_PROPERTIES_TO_BASKET'] === 'N' ? 'Y' : 'N')
		),
		'PARTIAL_PRODUCT_PROPERTIES' => array(
			'PARENT' => 'BASKET',
			'NAME' => GetMessage('CP_BCS_PARTIAL_PRODUCT_PROPERTIES'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'N',
			'HIDDEN' => (isset($arCurrentValues['ADD_PROPERTIES_TO_BASKET']) && $arCurrentValues['ADD_PROPERTIES_TO_BASKET'] === 'N' ? 'Y' : 'N')
		),
		'PRODUCT_PROPERTIES' => array(
			'PARENT' => 'BASKET',
			'NAME' => GetMessage('CP_BCS_PRODUCT_PROPERTIES'),
			'TYPE' => 'LIST',
			'MULTIPLE' => 'Y',
			'VALUES' => $arProperty_X,
			'HIDDEN' => (isset($arCurrentValues['ADD_PROPERTIES_TO_BASKET']) && $arCurrentValues['ADD_PROPERTIES_TO_BASKET'] === 'N' ? 'Y' : 'N')
		),
		

		'CACHE_TIME' => array('DEFAULT' => 36000000),
		'CACHE_FILTER' => array(
			'PARENT' => 'ADDITIONAL_SETTINGS',
			'NAME' => GetMessage('IBLOCK_CACHE_FILTER'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'N',
		),
		'CACHE_GROUPS' => array(
			'PARENT' => 'CACHE_SETTINGS',
			'NAME' => GetMessage('CP_BCS_CACHE_GROUPS'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'Y',
		),
		'COMPATIBLE_MODE' => array(
			'PARENT' => 'EXTENDED_SETTINGS',
			'NAME' => GetMessage('CP_BCS_COMPATIBLE_MODE'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'Y',
			'REFRESH' => 'Y'
		),
		
	),
);

if (isset($arCurrentValues['COMPATIBLE_MODE']) && $arCurrentValues['COMPATIBLE_MODE'] === 'N')
{
	unset($arComponentParameters['PARAMETERS']['OFFERS_LIMIT']);
}

// hack for correct sort
if (isset($templateProperties['PROPERTY_CODE_MOBILE']))
{
	$arComponentParameters['PARAMETERS']['PROPERTY_CODE_MOBILE'] = $templateProperties['PROPERTY_CODE_MOBILE'];
	unset($templateProperties['PROPERTY_CODE_MOBILE']);
}
else
{
	unset($arComponentParameters['PARAMETERS']['PROPERTY_CODE_MOBILE']);
}


if ($arCurrentValues['SEF_MODE'] === 'Y')
{
	$arComponentParameters['PARAMETERS']['SECTION_CODE_PATH'] = array(
		'NAME' => GetMessage('CP_BCS_SECTION_CODE_PATH'),
		'TYPE' => 'STRING',
		'DEFAULT' => '',
	);
}

if ($catalogIncluded)
{
	
	$arComponentParameters['PARAMETERS']['HIDE_NOT_AVAILABLE'] = array(
		'PARENT' => 'DATA_SOURCE',
		'NAME' => GetMessage('CP_BCS_HIDE_NOT_AVAILABLE'),
		'TYPE' => 'LIST',
		'DEFAULT' => 'N',
		'VALUES' => array(
			'Y' => GetMessage('CP_BCS_HIDE_NOT_AVAILABLE_HIDE'),
			'L' => GetMessage('CP_BCS_HIDE_NOT_AVAILABLE_LAST'),
			'N' => GetMessage('CP_BCS_HIDE_NOT_AVAILABLE_SHOW')
		),
		'ADDITIONAL_VALUES' => 'N'
	);
	$arComponentParameters['PARAMETERS']['HIDE_NOT_AVAILABLE_OFFERS'] = array(
		'PARENT' => 'DATA_SOURCE',
		'NAME' => GetMessage('CP_BCS_HIDE_NOT_AVAILABLE_OFFERS'),
		'TYPE' => 'LIST',
		'DEFAULT' => 'N',
		'VALUES' => array(
			'Y' => GetMessage('CP_BCS_HIDE_NOT_AVAILABLE_OFFERS_HIDE'),
			'L' => GetMessage('CP_BCS_HIDE_NOT_AVAILABLE_OFFERS_SUBSCRIBE'),
			'N' => GetMessage('CP_BCS_HIDE_NOT_AVAILABLE_OFFERS_SHOW')
		)
	);
	$arComponentParameters['PARAMETERS']['CONVERT_CURRENCY'] = array(
		'PARENT' => 'PRICES',
		'NAME' => GetMessage('CP_BCS_CONVERT_CURRENCY'),
		'TYPE' => 'CHECKBOX',
		'DEFAULT' => 'N',
		'REFRESH' => 'Y',
	);

	if (isset($arCurrentValues['CONVERT_CURRENCY']) && $arCurrentValues['CONVERT_CURRENCY'] === 'Y')
	{
		$arComponentParameters['PARAMETERS']['CURRENCY_ID'] = array(
			'PARENT' => 'PRICES',
			'NAME' => GetMessage('CP_BCS_CURRENCY_ID'),
			'TYPE' => 'LIST',
			'VALUES' => Currency\CurrencyManager::getCurrencyList(),
			'DEFAULT' => Currency\CurrencyManager::getBaseCurrency(),
			'ADDITIONAL_VALUES' => 'Y',
		);
	}
}

if (empty($offers))
{
	unset($arComponentParameters['PARAMETERS']['OFFERS_FIELD_CODE']);
	unset($arComponentParameters['PARAMETERS']['OFFERS_PROPERTY_CODE']);
	unset($arComponentParameters['PARAMETERS']['OFFERS_SORT_FIELD']);
	unset($arComponentParameters['PARAMETERS']['OFFERS_SORT_ORDER']);
	unset($arComponentParameters['PARAMETERS']['OFFERS_SORT_FIELD2']);
	unset($arComponentParameters['PARAMETERS']['OFFERS_SORT_ORDER2']);
}
else
{
	$arComponentParameters['PARAMETERS']['OFFERS_CART_PROPERTIES'] = array(
		'PARENT' => 'BASKET',
		'NAME' => GetMessage('CP_BCS_OFFERS_CART_PROPERTIES'),
		'TYPE' => 'LIST',
		'MULTIPLE' => 'Y',
		'VALUES' => $arProperty_OffersWithoutFile,
		'HIDDEN' => (isset($arCurrentValues['ADD_PROPERTIES_TO_BASKET']) && $arCurrentValues['ADD_PROPERTIES_TO_BASKET'] === 'N' ? 'Y' : 'N')
	);
}

if (isset($arCurrentValues['DISPLAY_COMPARE']) && $arCurrentValues['DISPLAY_COMPARE'] === 'Y')
{
	$arComponentParameters['PARAMETERS']['COMPARE_PATH'] = array(
		'PARENT' => 'COMPARE',
		'NAME' => GetMessage('CP_BCS_COMPARE_PATH'),
		'TYPE' => 'STRING',
		'DEFAULT' => ''
	);
}
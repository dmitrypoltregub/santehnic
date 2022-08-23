<?php

return Array (
    'CODE_REPLACE' => 'IBLOCK_CATALOG',
    'CODE' => 'nt_corporate_catalog',
    'SETTINGS_CODE' => 'catalog',
    'IBLOCK_TYPE_ID' => 'nt_corporate_catalog',
    'ACTIVE' => 'Y',
    'LIST_PAGE_URL' => '#SITE_DIR#/catalog/',
    'DETAIL_PAGE_URL' => '#SITE_DIR#/catalog/#SECTION_CODE_PATH#/#ELEMENT_ID#/',
    'SECTION_PAGE_URL' => '#SITE_DIR#/catalog/#SECTION_CODE_PATH#/',
    'DESCRIPTION_TYPE' => 'text',
    'INDEX_ELEMENT' => 'N',
    'INDEX_SECTION' => 'N',
    'WORKFLOW' => 'N',
    'BIZPROC' => 'N',
    'GROUP_ID' => Array (
        '1' => 'X',
        '2' => 'R'
    ),
    "FIELDS" => array(
        "CODE" => array(
            "IS_REQUIRED" => "Y",
            "DEFAULT_VALUE" => array(
                "UNIQUE" => "Y", 
                "TRANSLITERATION" => "Y",
                "TRANS_LEN" => "30",
                "TRANS_CASE" => "L",
                "TRANS_SPACE" => "-",
                "TRANS_OTHER" => "-",
                "TRANS_EAT" => "Y",
                "USE_GOOGLE" => "N",
            ),
        ),

        "SECTION_CODE" => array(
            "IS_REQUIRED" => "Y",
            "DEFAULT_VALUE" => array(
                "UNIQUE" => "Y",
                "TRANSLITERATION" => "Y",
                "TRANS_LEN" => "30",
                "TRANS_CASE" => "L",
                "TRANS_SPACE" => "-",
                "TRANS_OTHER" => "-",
                "TRANS_EAT" => "Y",
                "USE_GOOGLE" => "N",
            ),
        ),
    ),
    "USER_LIST_COLUMNS" => Array (
        'NAME', 'ACTIVE', 'PREVIEW_PICTURE', 'PROPERTY_PRICE', 'PROPERTY_OLD_PRICE', 'PROPERTY_STOCK', 'SORT'
    )
);
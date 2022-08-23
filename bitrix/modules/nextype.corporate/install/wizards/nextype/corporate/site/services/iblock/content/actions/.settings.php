<?php

return Array (
    'CODE_REPLACE' => 'IBLOCK_ACTIONS',
    'CODE' => 'nt_corporate_actions',
    'SETTINGS_CODE' => 'actions',
    'IBLOCK_TYPE_ID' => 'nt_corporate_content',
    'ACTIVE' => 'Y',
    'LIST_PAGE_URL' => '#SITE_DIR#/actions/',
    'SECTION_PAGE_URL' => '',
    'DETAIL_PAGE_URL' => '#SITE_DIR#/actions/#ELEMENT_ID#/',
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
    "RELATED_ELEMENTS" => Array (
        "PRODUCTS" => Array (
            "IBLOCK_CODE" => 'nt_corporate_catalog',
            "ITEMS" => Array (
                "31",
                "30",
                "29",
                "35",
                "49",
                "38",
                "52",
                "62",
                "66"
            )
        ),
        "SERVICES" => Array (
            "IBLOCK_CODE" => 'nt_corporate_services',
            "ITEMS" => Array (
                "93",
                "118",
                "119"
            )
        ),
    ),
    
    "USER_LIST_COLUMNS" => Array (
        'NAME', 'ACTIVE', 'PREVIEW_PICTURE', 'SORT'
    )
);
<?php

return Array (
    'CODE_REPLACE' => 'IBLOCK_NEWS',
    'CODE' => 'nt_corporate_news',
    'SETTINGS_CODE' => 'news',
    'IBLOCK_TYPE_ID' => 'nt_corporate_content',
    'ACTIVE' => 'Y',
    'LIST_PAGE_URL' => '#SITE_DIR#/news/',
    'SECTION_PAGE_URL' => '',
    'DETAIL_PAGE_URL' => '#SITE_DIR#/news/#ELEMENT_CODE#/',
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
        'NAME', 'ACTIVE', 'PREVIEW_PICTURE', 'SORT'
    )
);
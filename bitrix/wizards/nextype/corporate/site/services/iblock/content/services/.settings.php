<?php

return Array (
    'CODE_REPLACE' => 'IBLOCK_SERVICES',
    'SETTINGS_CODE' => 'services',
    'CODE' => 'nt_corporate_services',
    'IBLOCK_TYPE_ID' => 'nt_corporate_content',
    'ACTIVE' => 'Y',
    'LIST_PAGE_URL' => '#SITE_DIR#/services/',
    'SECTION_PAGE_URL' => '#SITE_DIR#/services/#SECTION_CODE#/',
    'DETAIL_PAGE_URL' => '#SITE_DIR#/services/#SECTION_CODE#/#ELEMENT_CODE#/',
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
        'NAME', 'ACTIVE', 'SORT'
    ),
    
    "RELATED_ELEMENTS" => Array (
        "REVIEWS" => Array (
            "IBLOCK_CODE" => 'nt_corporate_reviews',
            "ITEMS" => Array (
                "85",
                "86"
            )
        ),
        "PROJECTS" => Array (
            "IBLOCK_CODE" => 'nt_corporate_projects',
            "ITEMS" => Array (
                "94",
                "95"
            )
        ),
    )
);
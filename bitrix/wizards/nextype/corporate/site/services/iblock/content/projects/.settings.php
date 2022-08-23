<?php

return Array (
    'CODE_REPLACE' => 'IBLOCK_PROJECTS',
    'CODE' => 'nt_corporate_projects',
    'SETTINGS_CODE' => 'projects',
    'IBLOCK_TYPE_ID' => 'nt_corporate_content',
    'ACTIVE' => 'Y',
    'LIST_PAGE_URL' => '#SITE_DIR#/projects/',
    'SECTION_PAGE_URL' => '#SITE_DIR#/projects/#SECTION_CODE#/',
    'DETAIL_PAGE_URL' => '#SITE_DIR#/projects/#SECTION_CODE#/#ELEMENT_ID#/',
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
        "OTHER_PROJECTS" => Array (
            "IBLOCK_CODE" => 'nt_corporate_projects',
            "ITEMS" => Array (
                "94",
                "95"
            )
        ),
        "REVIEWS" => Array (
            "IBLOCK_CODE" => 'nt_corporate_reviews',
            "ITEMS" => Array (
                "85",
                "86"
            )
        )
    ),
    "USER_LIST_COLUMNS" => Array (
        'NAME', 'ACTIVE', 'PREVIEW_PICTURE', 'SORT'
    )
);
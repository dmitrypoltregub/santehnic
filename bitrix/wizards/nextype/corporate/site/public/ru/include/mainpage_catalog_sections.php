<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"mainpage",
	Array(
		"ADD_SECTIONS_CHAIN" => "N",
		"BLOCK_DESCRIPTION" => "В профессиональной сфере часто случается так, что личные или корпоративные клиенты заказывают, чтобы публикация была сделана и представлена еще тогда, когда фактическое содержание все еще не готово. Вспомните новостные блоги, где информация публикуется каждый час в живом порядке. Тем не менее, читатели склонны к тому, чтобы быть отвлеченными доступным контентом.",
		"BLOCK_MORE_LINK" => "#SITE_DIR#catalog/",
		"BLOCK_MORE_TITLE" => "Весь каталог",
		"BLOCK_TITLE" => "Каталог",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => \Nextype\Corporate\COptions::getIblockID('catalog'),
		"IBLOCK_TYPE" => "nt_corporate_catalog",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array("DESCRIPTION","PICTURE",""),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array("",""),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE"
	)
);?>
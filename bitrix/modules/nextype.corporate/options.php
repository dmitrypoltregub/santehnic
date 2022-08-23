<?php
if (is_dir($_SERVER["DOCUMENT_ROOT"] . "/local/modules/nextype.corporate/"))
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/modules/nextype.corporate/admin/options.php");
elseif (is_dir($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/nextype.corporate/"))
    require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/nextype.corporate/admin/options.php");

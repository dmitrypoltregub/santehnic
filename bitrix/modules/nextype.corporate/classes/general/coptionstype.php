<?php
namespace Nextype\Corporate;

IncludeModuleLangFile(__FILE__);

class COptionsType
{
    static function Hidden($arOption, $siteId)
    {
        ?>
            <input type="hidden" value="<?=$arOption['VALUE']?>" name="<?=$siteId?>[<?=$arOption['CODE']?>]" />
        <?
    }
    
    static function Text($arOption, $siteId)
    {
        ?>
            <input type="text" maxlength="255" value="<?=$arOption['VALUE']?>" name="<?=$siteId?>[<?=$arOption['CODE']?>]" />
        <?
    }
    
    static function Colorpicker($arOption, $siteId)
    {
        $elementId = $arOption['CODE'] . "_" . $siteId;
        ?>
        <div class="nt__colorpicker">
            <input type="text" maxlength="7" id="<?=$elementId?>" value="<?=$arOption['VALUE']?>" name="<?=$siteId?>[<?=$arOption['CODE']?>]" />
            <div class="nt__palette" id="<?=$elementId?>_palette" style="background-color: <?=$arOption['VALUE']?>"></div>
        </div>
        <script>$("#<?=$elementId?>_palette").spectrum({
                color: "<?=$arOption['VALUE']?>",
                preferredFormat: "hex",
                showInput: true,
                chooseText: "<?=GetMessage('NT_OPTIONS_CHOOSE')?>",
                cancelText: "<?=GetMessage('NT_OPTIONS_CANCEL')?>",
                change: function(color) {
                    $(this).css('backgroundColor', color.toHexString());
                    $("#<?=$elementId?>").val(color.toHexString());
                }
            });</script>
        <?
    }
    
    static function Textarea($arOption, $siteId)
    {
        ?>
        <textarea cols="50" rows="10" name="<?=$siteId?>[<?=$arOption['CODE']?>]"><?=$arOption['VALUE']?></textarea>
        <?
    }
    
    static function Checkbox($arOption, $siteId)
    {
        ?>
        <input type="hidden" name="<?=$siteId?>[<?=$arOption['CODE']?>]" value="N" />
        <input type="checkbox" <?=$arOption['VALUE'] == "Y" ? 'checked="checked"' : ''?> value="Y" name="<?=$siteId?>[<?=$arOption['CODE']?>]" />
        <?
    }
    
    static function Select($arOption, $siteId)
    {
        ?>
        <select name="<?=$siteId?>[<?=$arOption['CODE']?>]">
        <? foreach ($arOption['VALUES'] as $key => $value): ?>
            <option <?=($arOption['VALUE'] == $key) ? 'selected="selected"': ''?> value="<?=$key?>"><?=$value?></option>
        <? endforeach; ?>
        </select>
        <?
    }
    
    static function SelectIblock($arOption, $siteId)
    {
        if (!isset($GLOBALS[$arOption['IBLOCK_TYPE']][$siteId]))
        {
            $arIblocks = Array ();
            $rsIblocks = \CIBlock::GetList(Array(), Array('TYPE' => $arOption['IBLOCK_TYPE'], 'SITE_ID' => $siteId, 'ACTIVE' => 'Y', "CHECK_PERMISSIONS" => "N") );
            while ($arIblock = $rsIblocks->fetch())
               $arIblocks[$arIblock['ID']] = $arIblock['NAME'];
            
            $GLOBALS[$arOption['IBLOCK_TYPE']][$siteId] = $arIblocks;
            $arOption['VALUES'] = $arIblocks;
        }
        else
            $arOption['VALUES'] = $GLOBALS[$arOption['IBLOCK_TYPE']][$siteId];
        ?>
        <select name="<?=$siteId?>[<?=$arOption['CODE']?>]">
        <? foreach ($arOption['VALUES'] as $key => $value): ?>
            <option <?=($arOption['VALUE'] == $key) ? 'selected="selected"': ''?> value="<?=$key?>"><?=$value?></option>
        <? endforeach; ?>
        </select>
        <?
    }
    
    static function UploadImage($arOption, $siteId)
    {
        global $bCopy, $historyId;

        
        $values = Array (
            0 => $arOption['VALUE']
        );
        
        if($bCopy || empty($values))
            $values = array('n0' => 0);
	
        $strInputName = $siteId . "[" . $arOption['CODE'] . "]";
        $optionWidth = $arOption['PARAMS']['WIDTH'] ? $arOption['PARAMS']['WIDTH'] : 200;
	$optionHeight = $arOption['PARAMS']['HEIGHT'] ? $arOption['PARAMS']['HEIGHT'] : 100;
        
        foreach($values as $key => $val)
        {
            $file_id = $val;
            
            if ($historyId > 0)
                {
                    echo \CFileInput::Show($strInputName, $file_id, array(
                        'IMAGE' => $arOption['IMAGE'],
                        'PATH' => 'Y',
                        'FILE_SIZE' => 'Y',
                        'DIMENSIONS' => 'Y',
                        'IMAGE_POPUP' => 'Y',
                        'MAX_SIZE' => array(
                            'W' => $optionWidth,
                            'H' => $optionHeight,
                        ),
                            )
                    );
                }
                else
                {
                    echo \CFileInput::Show($strInputName, $file_id, array(
                        'IMAGE' => $arOption['IMAGE'],
                        'PATH' => 'Y',
                        'FILE_SIZE' => 'Y',
                        'DIMENSIONS' => 'Y',
                        'IMAGE_POPUP' => 'Y',
                        'MAX_SIZE' => array(
                            'W' => $optionWidth,
                            'H' => $optionHeight,
                        ),
                            ), array(
                        'upload' => true,
                        'medialib' => true,
                        'file_dialog' => true,
                        'cloud' => true,
                        'del' => true,
                        'description' => $arOption['WITH_DESCRIPTION'] == 'Y',
                            )
                    );
                }
        }
               
    }
    
    static function UploadFile($arOption, $siteId)
    {
        
    }
    
    static function Blocks($arOption, $siteId)
    {
        ?>
        <table class="internal" width="90%" style="margin: 0 auto; max-width: 500px;">
                <thead>
                    <tr class="heading">
                        <td><?=GetMessage('NT_OPTIONS_ACTIVITY')?></td>
                        <td><?=GetMessage('NT_OPTIONS_BLOCK')?></td>
                        <td><?=GetMessage('NT_OPTIONS_POSITION')?></td>
                    </tr>
                </thead>
                <tbody>
                    <? foreach ($arOption['VALUES'] as $arValue): ?>
                    <?
                    $active = \Nextype\Corporate\COptions::getOption($arValue['CODE'], $arValue['DEFAULT_VALUE'], $siteId);
                    $position = \Nextype\Corporate\COptions::getOption($arValue['CODE_POSITION'], $arValue['DEFAULT_POSITION'], $siteId);
                    ?>
                    <tr>
                        <td>
                            <input type="hidden" name="<?=$siteId?>[<?=$arValue['CODE']?>]" value="N" />
                            <input type="checkbox" <?=$active == "Y" ? 'checked="checked"' : ''?> value="Y" name="<?=$siteId?>[<?=$arValue['CODE']?>]" />
                        </td>
                        <td>
                            <?=$arValue['LABEL']?>
                        </td>
                        <td>
                            <input style="width: 40px" type="text" maxlength="3" value="<?=$position?>" name="<?=$siteId?>[<?=$arValue['CODE_POSITION']?>]" />
                        </td>
                    </tr>
                    <? endforeach; ?>
                </tbody>
        </table>
        <?
    }
    
    static function SortableBlocks($arOption, $siteId)
    {
        $containerID = md5($siteId . "_" . $arOption['CODE']);
        $arOptionValues = $arValues = Array ();
        
        if (!empty($arOption['VALUE']) && CheckSerializedData($arOption['VALUE']))
        {
            $arValues = unserialize($arOption['VALUE']);
        }
        ?>
        <ul id="<?=$containerID?>" class="nt__sortable-blocks">
        <? foreach ($arValues as $key => $value): ?>
            <li>
                <input type="hidden" name="<?=$siteId?>[<?=$arOption['CODE']?>][<?=$key?>][ACTIVE]" 
                       value="<?=(isset($arValues[$key]['ACTIVE']) && $arValues[$key]['ACTIVE'] == 'Y') ? 'Y' : 'N'?>" />
                <label>
                    <input type="checkbox" <?=(isset($arValues[$key]['ACTIVE']) && $arValues[$key]['ACTIVE'] == 'Y') ? 'checked="checked"' : ''?> />
                    <?=$arOption["VALUES"][$key]?>
                </label>
            </li>
        <? endforeach; ?>
        </ul>
        <script>
        $( function() {
          $("#<?=$containerID?>").sortable();
          $("#<?=$containerID?> label [type='checkbox']").on('change', function () {
              var checked = $(this).is(":checked") ? true : false;
              if (checked)
                  $(this).parents('li').find('input[type="hidden"]').val('Y');
              else
                  $(this).parents('li').find('input[type="hidden"]').val('N');
          });
        } );
        </script>
        <?
    }    
}
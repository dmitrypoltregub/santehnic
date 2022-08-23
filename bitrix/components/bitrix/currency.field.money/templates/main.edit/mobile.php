<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var MoneyUfComponent $component
 * @var array $arResult
 */

$isFirst = true;
$nodes = [];

foreach($arResult['value'] as $item)
{
	if(!$isFirst)
	{
		print $component->getHtmlBuilder()->getMultipleValuesSeparator();
	}
	$isFirst = false;
	$nodes[] = $item['attrList']['id'];
	$id = $item['attrList']['id'];
	?>
	<span
		class="mobile-grid-data-span
		<?= ($arResult['userField']['MULTIPLE'] === 'Y' ? ' multiple' : '') ?>"
		data-media-type="mobile"
	>
		<div name="<?= $item['attrList']['name'] ?>">
			<input <?= $component->getHtmlBuilder()->buildTagAttributes($item['attrList']) ?>>
			<input type="hidden" id="<?= $id ?>_input_currency" value="<?= $item['currentValue'] ?>">

			<label
				id="<?= $id ?>_value"
				class="text"
			>
				<?= (
				$item['currentValue'] !== '' ?
					$item['currentValue'] : $component->getEmptyValueCaption()
				)
				?>
			</label>

			<select
				id="<?= $id ?>_select_currency"
				hidden
			>
				<?php
				foreach($arResult['currencies'] as $currency)
				{
					?>
					<option
						value="<?= $currency ?>"
						<?= ($currency === $item['currentCurrency'] ? 'selected ' : '') ?>
					><?= $currency ?></option>
					<?php
				}
				?>
			</select>

			<label
				id="<?= $id ?>_currency"
				class="text"
			>
				<?= (
				$item['currentCurrency'] !== '' ?
					$item['currentCurrency'] : $component->getEmptyCurrencyCaption())
				?>
			</label>
		</div>
	</span>
	<?php
}

if(
	$arResult['userField']['MULTIPLE'] === 'Y'
	&&
	$arResult['additionalParameters']['SHOW_BUTTON'] !== 'N'
)
{
	print $component->getHtmlBuilder()->getMobileCloneButton($arResult['fieldName']);
}
?>

<script>
	BX.ready(function ()
	{
		new BX.Mobile.Field.Money(
			<?=CUtil::PhpToJSObject([
				'name' => 'BX.Mobile.Field.Money',
				'nodes' => $nodes,
				'restrictedMode' => true,
				'formId' => $arParams['additionalParameters']['formId'],
				'gridId' => $arParams['additionalParameters']['gridId']
			])?>
		);
	});
</script>
<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';




$strReturn .= '<div class="links" itemscope="" itemtype="http://schema.org/BreadcrumbList">';

$itemSize = count($arResult);

if ($itemSize > 0)
    $strReturn .= '<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="nav-item"><a class="link" href="'.SITE_DIR.'" itemprop="item"><span itemprop="name">'.GetMessage('HOMEPAGE_LINK').'</span></a><meta itemprop="position" content="1"></li>';

for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);



	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="nav-item"><a class="link" href="'.$arResult[$index]["LINK"].'" itemprop="item"><span itemprop="name">'.$title.'</span></a><meta itemprop="position" content="'.($index+2).'"></li>';
	}
	else
	{
		$strReturn .= '
			<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="nav-item"><a class="link active" itemprop="item"><span class="span-active" itemprop="name">'.$title.'</span></a><meta itemprop="position" content="'.($index+2).'"></li>';
	}
}

$strReturn .= '</div>';

return $strReturn;

<?php
namespace Nextype\Corporate;
\Bitrix\Main\Localization\Loc::loadMessages(__FILE__);

class CInstagram
{

    static $cachePrefix = "nt_instagram_";
    static $cacheTTL = 7200;
    static $cacheDir = "/nextype_instagram/";
   
    public function getResponse($url)
    {
        $response = false;
        if (extension_loaded('curl'))
        {

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_HEADER => false,
                CURLOPT_POST => false,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_URL => $url
            ));
            $response = curl_exec($curl);
            curl_close($curl);

        }
        elseif (ini_get('allow_url_fopen') and extension_loaded('openssl'))
        {
            $response = @file_get_contents($url);
        }
        
        if (!empty($response))
            $response = json_decode($response, true);
        
        return $response;
    }
    
    
    public static function getImages($arConfig)
    {
        
        if (empty($arConfig['key']) || empty($arConfig['count']))
            return [];
        
        $items = Array ();
        $cacheId = self::$cachePrefix . sha1(serialize($arConfig));
        $cacheDir = "/" . SITE_ID . self::$cacheDir . "/";
        
        $obCache = new \CPHPCache();
        
        if ($_REQUEST['clear_cache'] != "Y" && $obCache->InitCache(self::$cacheTTL, $cacheId, $cacheDir))
        {
            $vars = $obCache->GetVars();
            $items = $vars['items'];
        }
        else
        {
        
            $result = self::getResponse('https://graph.instagram.com/me/media?fields=caption,id,media_type,permalink,media_url,thumbnail_url,timestamp&access_token=' . $arConfig['key']);

            if (isset($result['data']) && !empty($result['data']))
            {
                foreach ($result['data'] as $key => $item)
                {
                    if ($key + 1 == $arConfig['count'])
                        break;

                    $text = (LANG_CHARSET != 'utf-8') ? mb_convert_encoding($item['caption'], LANG_CHARSET, 'utf-8') : $item['caption'];

                    $items[] = Array (
                        'TEXT' => $text,
                        'TYPE' => $item['media_type'],
                        'DETAIL_URL' => $item['permalink'],
                        'PREVIEW_PICTURE' => $item['thumbnail_url'] ? $item['thumbnail_url'] : $item['media_url'],
                        'DETAIL_PICTURE' => $item['media_url']
                    );
                }
            }
            
            $obCache->StartDataCache(self::$cacheTTL, $cacheId, $cacheDir);
            $obCache->EndDataCache(array("items" => $items));
            
        }

        return $items;
    }
}
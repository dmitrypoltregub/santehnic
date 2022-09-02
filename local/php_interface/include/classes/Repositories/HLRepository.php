<?php
namespace Repositories;

use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

class HLRepository
{
    public $entity_data_class;

    public function __construct(int $hlbl)
    {
        Loader::includeModule("highloadblock");
        $hlblock = HL\HighloadBlockTable::getById($hlbl)->fetch();
        if(!empty($hlblock)) {
            $entity = HL\HighloadBlockTable::compileEntity($hlblock);
            $this->entity_data_class = $entity->getDataClass();
        }
    }

    public function getArray(array $select=['*'], array $order=["ID" => "ASC"], array $filter=[])
    {
        if (!empty($this->entity_data_class)) {
            $rsData = $this->entity_data_class::getList(array(
                "select" => $select,
                "order" => $order,
                "filter" => $filter  // Задаем параметры фильтра выборки
            ));
            $result = [];
            while ($arData = $rsData->Fetch()) {
                foreach ($arData as $key => $value) {
                    //var_dump($value);
                    if ($result[$key])
                        $result[$key] = array_merge_recursive([$result[$key], $value]);
                    else
                        $result[$key] = $value;
                }

            }
            return $result;
        }else{
            return null;
        }
    }
}
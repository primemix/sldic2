<?php

namespace common\service;

/**
 * Class JsonSerializer
 * @package common\service
 */
class JsonSerializer implements \frontend\modules\serializer\models\interfaces\InterfaceSerializer
{
    /**
     * @param $array
     * @return string
     */
    public function encode($array)
    {
        return $encoded = json_encode($array);
    }
}

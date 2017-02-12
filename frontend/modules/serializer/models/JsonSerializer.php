<?php

namespace frontend\modules\serializer\models;

use frontend\modules\serializer\models\interfaces\InterfaceSerializer;

/**
 * Class Json
 * @package frontend\modules\crawler\models
 */
class JsonSerializer implements InterfaceSerializer
{
    /**
     * @param $array
     * @return mixed
     */
    public function encode($array)
    {
        return json_encode($array);
    }
}
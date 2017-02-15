<?php

namespace frontend\modules\serializer\models\interfaces;

/**
 * Interface InterfaceSerializer
 * @package frontend\modules\serializer\models\interfaces
 */
interface InterfaceSerializer
{
    /**
     * @param $array
     * @return mixed
     */
    public function encode($array);
}
<?php

namespace common\service;

use SimpleXMLElement;

/**
 * Class XmlSerializer
 * @package common\service
 */
class XmlSerializer implements \frontend\modules\serializer\models\interfaces\InterfaceSerializer
{
    /**
     * @param $array
     * @return mixed
     */
    public function encode($array)
    {
        $xml = new SimpleXMLElement('<root/>');
        array_walk_recursive($array, array ($xml, 'addChild'));
        $encoded = $xml->asXML();
        return $encoded;
    }
}
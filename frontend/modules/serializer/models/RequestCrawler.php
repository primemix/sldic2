<?php

namespace frontend\modules\serializer\models;

use frontend\modules\serializer\models\interfaces\InterfaceSerializer;

class RequestCrawler
{
    /** @var  InterfaceSerializer */
    private $serializerProvider;
    
    /**
     * RequestCrawler constructor.
     * @param InterfaceSerializer $serializerProvider
     * @param $typeEncoder
     * @param $pathToSave
     */
    public function __construct(InterfaceSerializer $serializerProvider)
    {
        $this->serializerProvider = $serializerProvider;
    }

    /**
     * @param array $array
     * @return mixed
     */
    public function getSerializer(array $array)
    {
        return$this->serializerProvider->encode($array);
    }

}
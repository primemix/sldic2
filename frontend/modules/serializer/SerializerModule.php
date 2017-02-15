<?php

namespace frontend\modules\serializer;

use yii\base\Module;

/**
 * Class SerializerModule
 * @package frontend\modules\serializer
 */
class SerializerModule extends Module
{
    /**
     * @var string
     */
    public $controllerNamespace = 'frontend\modules\serializer\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init(); 
    }
}
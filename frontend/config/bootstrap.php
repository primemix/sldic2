<?php

Yii::$container->set('Json', function() {
    $foo = new \frontend\modules\serializer\models\RequestCrawler(new \frontend\modules\serializer\models\JsonSerializer);
    return $foo;
});
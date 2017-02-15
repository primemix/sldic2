<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

use common\components;
use yii\base\Event;

Event::on(\common\components\Test::className(),
    \common\components\Test::MY_EVENT, function($event) {
        Yii::trace(get_class($event->sender). 'is inserted.');
    });
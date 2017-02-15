<?php

namespace common\components;

use yii\base\Component;
use yii\base\Event;

/**
 * Class LogeerEvent
 * @package common\components
 */
class LoggerEvent extends Event
{
    /** @var  $loggerEvent */
    public $loggerEvent;
}

/**
 * Class Foo
 * @package common\components
 */
class Test extends Component
{
    const MY_EVENT = 'My event';

    /**
     * @param $loggerEvent
     */
    public function bar($loggerEvent)
    {
        // TO DO logic log
        echo "Yay!";
        $event = new LoggerEvent;
        $event->loggerEvent = $loggerEvent;
        $this->trigger(Test::MY_EVENT, $event);
    }
}
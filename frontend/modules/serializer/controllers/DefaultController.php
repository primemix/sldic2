<?php

namespace frontend\modules\serializer\controllers;

use Yii;
use common\components\Test;
use yii\web\Controller;
use frontend\modules\serializer\models;

/**
 * Class DefaultController
 * @package frontend\modules\serializer\controllers
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $array = [
            'foo' => 'bar',
            'a' => 'b',
            'param' => [
                'param2' => ['a' => 'b'],
                'foo' => 'bar'
            ],
        ];
        
        /** @var  $requestCrawler - Service Locator */
        $requestCrawler = Yii::$app->requestCrawler->encode($array, '/files');
        
        return $this->render('index', [
            'encode' => $requestCrawler
        ]);
    }


    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionDic()
    {
        $array = [
            'foo' => 'bar',
            'a' => 'b',
            'param' => [
                'param2' => ['a' => 'b'],
                'foo' => 'bar'
            ],
        ];

        /** @var  $requestCrawler  - Dependency injection container*/
        $requestCrawler = Yii::$container->get('Json')->getSerializer($array);

        $foo = new Test();
        $foo->on(Test::MY_EVENT, function ($event) {
            echo 'yes!';
            die;
        });
//        $a = Test::bar($requestCrawler);
//        var_dump($requestCrawler);die;
        
        return $this->render('dic', [
            'encode' => $requestCrawler
        ]);
    }
}
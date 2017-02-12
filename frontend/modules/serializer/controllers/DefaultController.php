<?php

namespace frontend\modules\serializer\controllers;

use Yii;
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

        return $this->render('dic', [
            'encode' => $requestCrawler
        ]);
    }
}
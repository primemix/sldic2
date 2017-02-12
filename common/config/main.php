<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'requestCrawler' => common\service\RequestCrawlerServiceBuilder::build(
            [
                'class' => 'common\service\JsonSerializer',
            ],
            dirname(__DIR__) . '/file'
        ),
    ],
];

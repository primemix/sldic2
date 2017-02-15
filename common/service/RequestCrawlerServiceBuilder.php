<?php

namespace common\service;

class RequestCrawlerServiceBuilder
{
    /**
     * @param object $serializer
     * @param string $pathToSave
     * @return \Closure
     */
    public static function build( $serializer, $pathToSave)
    {
        return function () use ($serializer, $pathToSave) {
            return new JsonSerializer($serializer, ['pathToSave' => $pathToSave]);
        };
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: nomem
 * Date: 14/04/2018
 * Time: 19:22
 */

class TemplatesCollection {

    const INDEX = 'index.twig';
    const GALERY = 'galery.twig';
    const NOT_FOUND = 'not_found.twig';


    public static function getValidTemplate($template){
        return in_array($template, [self::INDEX, self::NOT_FOUND, self::GALERY]);
    }


}
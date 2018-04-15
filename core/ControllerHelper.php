<?php
/**
 * Created by PhpStorm.
 * User: nomem
 * Date: 14/04/2018
 * Time: 22:56
 */
require_once 'core/Collections/ControllersCollection.php';
class ControllerHelper{

    public static function getController($controller){
        $listControllers = array(
            'index' => ControllersCollection::HOME_PAGE_CONTROLLER,
            'galery' => ControllersCollection::GALERY_PAGE_CONTROLLER,
            'not_found' => ControllersCollection::NOT_FOUND_CONTROLLER
        );
        return array_key_exists($controller, $listControllers) ? $listControllers[$controller] : ControllersCollection::NOT_FOUND_CONTROLLER;
    }

}
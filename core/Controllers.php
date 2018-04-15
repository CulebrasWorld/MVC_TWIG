<?php
/**
 * Created by PhpStorm.
 * User: nomem
 * Date: 14/04/2018
 * Time: 22:38
 */
require_once 'core/ControllerHelper.php';

class Controllers {

    private $controller;

    public function __construct($controller){
        $this->controller = ControllerHelper::getController($controller);
    }

    public function loadController() {
        $pathController = 'controllers/' . $this->controller;
        require_once "" . $pathController . "";
    }
}
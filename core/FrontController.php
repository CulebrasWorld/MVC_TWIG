<?php
/**
 * Created by PhpStorm.
 * User: nomem
 * Date: 14/04/2018
 * Time: 20:02
 */
require_once 'core/Controllers.php';

    $controller = new Controllers($_GET['controller']);
    $controller->loadController();







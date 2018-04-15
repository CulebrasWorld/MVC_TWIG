<?php
/**
 * Created by PhpStorm.
 * User: nomem
 * Date: 14/04/2018
 * Time: 19:22
 */

class ControllersCollection {

    const HOME_PAGE_CONTROLLER = 'HomePageController.php';
    const GALERY_PAGE_CONTROLLER = 'GaleryPageController.php';
    const NOT_FOUND_CONTROLLER = 'NotFoundController.php';


    public static function getValidTemplate($template){
        return in_array($template, [self::HOME_PAGE_CONTROLLER,
                                    self::NOT_FOUND_CONTROLLER,
                                    self::GALERY_PAGE_CONTROLLER]
                        );
    }


}
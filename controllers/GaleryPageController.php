<?php
/**
 * Created by PhpStorm.
 * User: nomem
 * Date: 14/04/2018
 * Time: 20:02
 */
require_once 'core\Collections\TemplatesCollection.php';
require_once 'core\twig\Twig.php';

$template = new Twig();
$data = array('name' => 'Pichita', 'age' => 37);
$template->loadTemplate(TemplatesCollection::GALERY, $data);
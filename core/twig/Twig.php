<?php
/**
 * Created by PhpStorm.
 * User: nomem
 * Date: 14/04/2018
 * Time: 19:33
 */
require_once 'core\Collections\TemplatesCollection.php';

class Twig{

    private $template = '';
    private $data = null;

    public function __construct()
    {
        require_once 'vendor/autoload.php';
    }

    public function loadTemplate($template, $data = []){
        $this->template = $template;
        $this->data = $data;
        $this->getTemplate();
    }

    private function getTemplate($template = ''){

        !empty($template) ? $this->template = $template : false;

        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader, array(
            'cache' => 'cache',
            'debug' => true
        ));
        try{
            $template = $twig->load($this->template);
            echo $template->render($this->data);
        }catch (Twig_Error_Loader $e){
            $this->getTemplate('not_found.twig');
        }

    }

}
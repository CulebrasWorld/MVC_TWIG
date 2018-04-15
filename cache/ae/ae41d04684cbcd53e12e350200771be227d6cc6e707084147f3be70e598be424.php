<?php

/* galery.twig */
class __TwigTemplate_d90a0e59ab0c9b3d48fe734539014f26e76667f27745de2eb12ce03eaf52ecd1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Galría de fotos</title>
</head>
<body>
<h3>Galría de fotos</h3>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "galery.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Galría de fotos</title>
</head>
<body>
<h3>Galría de fotos</h3>
</body>
</html>", "galery.twig", "C:\\xampp\\htdocs\\twig\\templates\\galery.twig");
    }
}

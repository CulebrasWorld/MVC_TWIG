<?php

/* not_found.twig */
class __TwigTemplate_169c8a5afcd6b876186f8c2c9606577633d3969025e37183f05a44a9c8006a87 extends Twig_Template
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
    <title>Pagina no encontrada</title>
</head>
<body>
    <h3>Página no encontrada</h3>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "not_found.twig";
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
    <title>Pagina no encontrada</title>
</head>
<body>
    <h3>Página no encontrada</h3>
</body>
</html>", "not_found.twig", "C:\\xampp\\htdocs\\twig\\templates\\not_found.twig");
    }
}

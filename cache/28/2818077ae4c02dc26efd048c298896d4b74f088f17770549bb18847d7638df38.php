<?php

/* index.twig */
class __TwigTemplate_9b315dbb1860b40c786028e0696bb918ea48233a657a9017b15124d63fafe7c1 extends Twig_Template
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
    <title>twig</title>
</head>
<body>
<h1>Hola ";
        // line 8
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "!</h1>
<h2>Tienes ";
        // line 9
        echo twig_escape_filter($this->env, ($context["age"] ?? null), "html", null, true);
        echo " años</h2>



</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>twig</title>
</head>
<body>
<h1>Hola {{ name }}!</h1>
<h2>Tienes {{ age }} años</h2>



</body>
</html>", "index.twig", "C:\\xampp\\htdocs\\twig\\templates\\index.twig");
    }
}

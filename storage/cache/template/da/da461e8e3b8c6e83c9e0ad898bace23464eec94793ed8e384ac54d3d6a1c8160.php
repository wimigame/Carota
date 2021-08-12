<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* app/abc/view/template/account/a1.twig */
class __TwigTemplate_09ef1c51efc2fb53f1b4c9104b8023207ff18b095221c99eb96c275e9f1a81fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["name"] ?? null);
        echo "
<p>jfldjslfjdlksjl</p>
";
        // line 3
        echo ($context["result"] ?? null);
    }

    public function getTemplateName()
    {
        return "app/abc/view/template/account/a1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "app/abc/view/template/account/a1.twig", "/Users/chenshipeng/Documents/project/php/carota/app/abc/view/template/account/a1.twig");
    }
}

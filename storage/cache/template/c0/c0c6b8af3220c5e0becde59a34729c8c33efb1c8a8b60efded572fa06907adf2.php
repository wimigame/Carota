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

/* app/view/default/account/bbb3.twig */
class __TwigTemplate_2f0b3c10dd1a126db2d9fb6d4daa58a13cf1090cfb41e55f30b4fc1a94017d43 extends Template
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
        echo "bbbbb333333";
    }

    public function getTemplateName()
    {
        return "app/view/default/account/bbb3.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "app/view/default/account/bbb3.twig", "/Users/chenshipeng/Documents/project/php/carota/app/view/default/account/bbb3.twig");
    }
}

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

/* __string_template__3e8aca6cac8c371825c19445dd71d2680d680764b90ee095bfb22566c07589c2 */
class __TwigTemplate_29afac8cee477a603cdbe0956724541de0ddb84fa66dc4d89d4dbd0a6e9d27fb extends Template
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
        echo "é";
        echo ($context["Hello"] ?? null);
        echo "'";
    }

    public function getTemplateName()
    {
        return "__string_template__3e8aca6cac8c371825c19445dd71d2680d680764b90ee095bfb22566c07589c2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3e8aca6cac8c371825c19445dd71d2680d680764b90ee095bfb22566c07589c2", "");
    }
}

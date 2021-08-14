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

/* __string_template__5acd7b8699911d2c1fa691bd358854f5f48e8475daaf71273ea5fede9e061038 */
class __TwigTemplate_0cd2ef3b3fd99577546845a6644496273432f77894beb993d50f48569a769704 extends Template
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
        echo "Hello ";
        echo ($context["mubanvalue"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__5acd7b8699911d2c1fa691bd358854f5f48e8475daaf71273ea5fede9e061038";
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
        return new Source("", "__string_template__5acd7b8699911d2c1fa691bd358854f5f48e8475daaf71273ea5fede9e061038", "");
    }
}

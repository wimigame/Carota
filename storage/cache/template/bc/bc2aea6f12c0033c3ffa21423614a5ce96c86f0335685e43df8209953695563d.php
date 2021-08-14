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

/* __string_template__980419dede707f1da4b0dce937bc5c8b4b1386dd8b3c67a2977be6b7257bfc45 */
class __TwigTemplate_7df12b76868ece0a67d679f9d487a5cad2ebd2b7db25894ca132976116b658d3 extends Template
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
        echo "é{ Hello }}";
    }

    public function getTemplateName()
    {
        return "__string_template__980419dede707f1da4b0dce937bc5c8b4b1386dd8b3c67a2977be6b7257bfc45";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__980419dede707f1da4b0dce937bc5c8b4b1386dd8b3c67a2977be6b7257bfc45", "");
    }
}

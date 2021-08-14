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

/* __string_template__61a70d3169b926ed2853b0a01ab0c5d99aa085d2b06ba2ae279f2890e8a37c6c */
class __TwigTemplate_1810c90f8e029973f3b117b97967d6b5cbe8ec84da6d3af9ff839062984e1e82 extends Template
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
        echo "ä{ Hello muban.value}}";
    }

    public function getTemplateName()
    {
        return "__string_template__61a70d3169b926ed2853b0a01ab0c5d99aa085d2b06ba2ae279f2890e8a37c6c";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__61a70d3169b926ed2853b0a01ab0c5d99aa085d2b06ba2ae279f2890e8a37c6c", "");
    }
}

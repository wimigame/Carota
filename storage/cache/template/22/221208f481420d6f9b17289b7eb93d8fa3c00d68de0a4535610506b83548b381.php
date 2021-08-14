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

/* __string_template__185f8db32271fe25f561a6fc938b2e264306ec304eda518007d1764826381969 */
class __TwigTemplate_4196b8af657a0bf5305966fb8ca56361549f73dad67636da0be4037f1d4e2adc extends Template
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
        echo "Hello";
    }

    public function getTemplateName()
    {
        return "__string_template__185f8db32271fe25f561a6fc938b2e264306ec304eda518007d1764826381969";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__185f8db32271fe25f561a6fc938b2e264306ec304eda518007d1764826381969", "");
    }
}

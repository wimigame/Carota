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

/* __string_template__16b912776cef3444fde79a868dc1825f8dfd98ed9e97cac31373153503f82791 */
class __TwigTemplate_3139da7fcf12f1805d5aa1ad5768c4dd6c0dfad087166c2ddf65974d94066970 extends Template
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
        echo "ä{ Hello }}";
    }

    public function getTemplateName()
    {
        return "__string_template__16b912776cef3444fde79a868dc1825f8dfd98ed9e97cac31373153503f82791";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__16b912776cef3444fde79a868dc1825f8dfd98ed9e97cac31373153503f82791", "");
    }
}

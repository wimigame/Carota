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

/* app/view/default/account/a1.twig */
class __TwigTemplate_5284c95061b96856d1d21552afd4bb79ac72f043f114cbd0bdd8bd22eec88fee extends Template
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
        echo "

</br>
</br>

";
        // line 8
        echo twig_random($this->env, "ABC");
        echo "

";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "1", 1 => "2", 2 => "3"]);
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["aaa"]) {
            // line 11
            echo "    ";
            $this->loadTemplate((("app/view/default/account/bbb" . $context["aaa"]) . ".twig"), "app/view/default/account/a1.twig", 11)->display($context);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aaa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "app/view/default/account/a1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  55 => 10,  50 => 8,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "app/view/default/account/a1.twig", "/Users/chenshipeng/Documents/project/php/carota/app/view/default/account/a1.twig");
    }
}

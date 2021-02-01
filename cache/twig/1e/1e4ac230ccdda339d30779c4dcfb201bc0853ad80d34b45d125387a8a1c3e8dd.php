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

/* interfaces.twig */
class __TwigTemplate_b6e8de33f1deff5b2f514a0d1aa245ac793c81593c8ebedc8ce3b6afd9806171 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body_class' => [$this, 'block_body_class'],
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["__internal_abfc7f769c40c3141ac0fa73985d9e2160f1d43fffa8323e40847ddcba205079"] = $this->macros["__internal_abfc7f769c40c3141ac0fa73985d9e2160f1d43fffa8323e40847ddcba205079"] = $this->loadTemplate("macros.twig", "interfaces.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("layout/layout.twig", "interfaces.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo \Wdes\phpI18nL10n\Launcher::getPlugin()->gettext("Interfaces");
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "interfaces";
    }

    // line 6
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <div class=\"page-header\">
        <h1>";
        // line 8
        echo \Wdes\phpI18nL10n\Launcher::getPlugin()->gettext("Interfaces");
        echo "</h1>
    </div>

    ";
        // line 11
        echo twig_call_macro($macros["__internal_abfc7f769c40c3141ac0fa73985d9e2160f1d43fffa8323e40847ddcba205079"], "macro_render_classes", [(isset($context["interfaces"]) || array_key_exists("interfaces", $context) ? $context["interfaces"] : (function () { throw new RuntimeError('Variable "interfaces" does not exist.', 11, $this->source); })())], 11, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "interfaces.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  74 => 8,  71 => 7,  67 => 6,  60 => 4,  51 => 3,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout/layout.twig\" %}
{% from \"macros.twig\" import render_classes %}
{% block title %}{% trans 'Interfaces' %} | {{ parent() }}{% endblock %}
{% block body_class 'interfaces' %}

{% block page_content %}
    <div class=\"page-header\">
        <h1>{% trans 'Interfaces' %}</h1>
    </div>

    {{ render_classes(interfaces) }}
{% endblock %}
", "interfaces.twig", "/home/runner/work/laravel-artisan-gui/laravel-artisan-gui/vendor/code-lts/doctum/src/Resources/themes/default/interfaces.twig");
    }
}